<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    private $report;
    private $request;

    /**
     * ItemsController constructor.
     * @param Report $report
     * @param Request $request
     */
    public function __construct(Report $report, Request $request)
    {
        $this->report = $report;
        $this->request = $request;
    }

    /**
     * @return mixed
     */
    private function validateFieldsArticle()
    {
        $input = $this->request->all();
        $massages =
            [
                'required' => 'Поле :attribute обязательно',
                'max' => 'Превышен порог символов'
            ];

        return Validator::make($input,
            [
                'year' => 'required|numeric',
                'file' => 'required|mimes:zip|max:4000',
            ], $massages);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (view()->exists('site.reports')) {
            $report = $this->report->orderByRaw('year desc')->paginate(10);
            return view('site.reports', ['reports' => $report]);
        }
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.addReport');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        if (view()->exists('site.addReport')) {
            if ($this->request->isMethod('post')) {
                $validator = $this->validateFieldsArticle();

                if ($validator->fails()) {
                    return redirect()->route('report.create')->withErrors($validator)->withInput();
                }

                if ($this->request->file) {
                    $fileName = time() . '.' . $this->request->file->getClientOriginalExtension();
                    $this->request->file->move(public_path('archive'), $fileName);
                } else {
                    $fileName = '';
                }

                $this->report->create
                ([
                    'year' => $this->request->input('year'),
                    'file'=> $fileName ?:'0',
                ]);
                return redirect()->route('report.index');
            }
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $old = $this->report->find($id)->toArray();
        $data = [
            'id' => $old['id'],
            'year' => $old['year'],
            'file'=> $old['file'],
        ];
        return view('site.editReport', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        if (view()->exists('site.editReport')) {
            if ($this->request->isMethod('put')) {
                $input = $this->request->all();
                $validator = $this->validateFieldsArticle();

                if ($validator->fails()) {
                    return redirect()->route('report.edit', $id)->withErrors($validator)->withInput();
                }

                $this->report->fill($input);

                if ($this->request->file) {
                    $fileName = time() . '.' . $this->request->file->getClientOriginalExtension();
                    $this->request->file->move(public_path('archive'), $fileName);
                } else {
                    $fileName = $this->report->file;
                }


                $this->report->where('id', $id)->update
                ([
                    'year' => $input['year'],
                    'file'=> $fileName?:'0',
                ]);
                return redirect()->route('report.index');
            }
        }
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = $this->report->find($id);
        $file_path = public_path('archive/' . $this->report->file);
        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        $report->delete();
        return redirect()->route('report.index');
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function getDownload($id)
    {
        $report = $this->report->find($id);
        $file= public_path()."/archive/".$report->file;

        $headers = array(
            'Content-Type' => 'application/zip',
        );
        return response()->download($file, "UNESCO-Report-".$report->year.".zip",$headers);
    }
}
