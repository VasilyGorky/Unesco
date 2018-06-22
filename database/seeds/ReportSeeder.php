<?php

use App\Report;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Report::create(
            [
                'year' => '2001',
                'file' => 'otch2001.zip',
            ]);
        Report::create(
            [
                'year' => '2002',
                'file' => 'otch2002.zip',
            ]);
        Report::create(
            [
                'year' => '2003',
                'file' => 'otch2003.zip',
            ]);
        Report::create(
            [
                'year' => '2004',
                'file' => 'otch2004.zip',
            ]);
        Report::create(
            [
                'year' => '2005',
                'file' => 'otch2005.zip',
            ]);
        Report::create(
            [
                'year' => '2006',
                'file' => 'otch2006.zip',
            ]);
        Report::create(
            [
                'year' => '2007',
                'file' => 'otch2007.zip',
            ]);
        Report::create(
            [
                'year' => '2008',
                'file' => 'otch2008.zip',
            ]);
        Report::create(
            [
                'year' => '2009',
                'file' => 'otch2009.zip',
            ]);
        Report::create(
            [
                'year' => '2010',
                'file' => 'otch2010.zip',
            ]);
    }
}
