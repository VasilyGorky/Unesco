<?php

use App\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create(
            [
                'name' => 'Кафедра',
                'title' => 'КАФЕДРА ЮНЕСКО ПО ИНФОРМАЦИОННЫМ ВЫЧИСЛИТЕЛЬНЫМ ТЕХНОЛОГИЯМ',
                'text' => '<h5 style="box-sizing: border-box; margin: 15px 0px 10px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: 1.1em; font-family: Raleway, HelveticaNeue, \'Helvetica Neue\', Helvetica, Arial, sans-serif; vertical-align: baseline;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px #296293; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">ЗАВЕДУЮЩИЙ КАФЕДРОЙ</strong></h5>
<p style="box-sizing: border-box; margin: 0px 0px 5px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 22px; font-family: Verdana, sans-serif; vertical-align: baseline;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px #296293; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Захаров Юрий Николаевич</strong>,<br style="box-sizing: border-box;" />Доктор физико-математических наук, профессор</p>
<p style="box-sizing: border-box; margin: 0px 0px 5px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 22px; font-family: Verdana, sans-serif; vertical-align: baseline;">e-mail: zyn@kemsu.ru</p>
<p style="box-sizing: border-box; margin: 0px 0px 5px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 22px; font-family: Verdana, sans-serif; vertical-align: baseline;"><img style="display: block; margin-left: auto; margin-right: auto;" src="http://ifn.kemsu.ru/wp-content/uploads/2017/07/DSC5981-1-e1499344324957.jpg" alt="" /></p>
<hr />
<h4 style="box-sizing: border-box; margin: 15px 0px 10px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: 1.1em; font-family: Raleway, HelveticaNeue, \'Helvetica Neue\', Helvetica, Arial, sans-serif; vertical-align: baseline;">КРАТКАЯ (ОБЩАЯ) ИНФОРМАЦИЯ О КАФЕДРЕ</h4>
<p style="box-sizing: border-box; margin: 0px 0px 5px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 22px; font-family: Verdana, sans-serif; vertical-align: baseline;">Кафедра основана слиянием кафедр вычислительной математики и кафедры ЮНЕСКО по НИТ приказом №245/10 от 18.05.2015.<br style="box-sizing: border-box;" />Сегодня кафедра готовит и выпускает студентов по остро необходимым в Кузбассе специальностям: &laquo;Прикладная математика и информатика&raquo;, &laquo;Математическое обеспечение и администрирование информационных систем&raquo;, &laquo;Фундаментальная информатика и информационные технологии&raquo;. Кафедра имеет аспирантуру по специальностям &laquo;Механика, жидкости, газа и плазмы&raquo; и &laquo;Математическое моделирование, численные методы и комплексы программ&raquo;.</p>
<p style="box-sizing: border-box; margin: 0px 0px 5px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 22px; font-family: Verdana, sans-serif; vertical-align: baseline;">&nbsp;</p>
<h4 style="box-sizing: border-box; margin: 15px 0px 10px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: 1.1em; font-family: Raleway, HelveticaNeue, \'Helvetica Neue\', Helvetica, Arial, sans-serif; vertical-align: baseline;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px #296293; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">ИСТОРИЧЕСКАЯ СПРАВКА</strong></h4>
<p style="box-sizing: border-box; margin: 0px 0px 5px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 22px; font-family: Verdana, sans-serif; vertical-align: baseline;">Кафедра вычислительной математики была образована в 1975 г. под руководством к.ф.-м.н., доцента Лоскутова Г. С. В 1986 г. зав. кафедрой был избран к.ф.-м.н., доцент Трушников В. Н. В 1988 году на математическом факультете была открыта вторая специальность 01.02.00 &ndash; &laquo;Прикладная математика&raquo;, в рамках которой кафедра проводила подготовку студентов по специализации 01.02.04 &ndash; &laquo;Численные методы&raquo;. С 1982 года кафедра подготовила для организаций, предприятий и фирм Кузбасса свыше 200-ти специалистов по прикладной математике. Кафедра проводит обучение студентов по специальностям 010101 &laquo;Математика&raquo;, 010501 &laquo;Прикладная математика и информатика&raquo; и 010503 &laquo;Математическое обеспечение и администрирование информационных систем&raquo; и по направлениям 010100 &laquo;Математика&raquo;, 010500 &laquo;Прикладная математика и информатика&raquo;.<br style="box-sizing: border-box;" />В 1998 году в КемГУ была создана 17-ая в России кафедра ЮНЕСКО по Новым Информационным Технологиям в образовании и науке. Соглашение об открытии было подписано 22.03.98 г. генеральным секретарем ЮНЕСКО Федерико Майором и ректором КемГУ Ю.А. Захаровым. Кафедра была создана как центр академической мобильности в области разработки и сопровождения информационных технологий, а также обучения и переподготовки специалистов по различным направлениям, используя информационные технологии в научной, образовательной и производственной деятельности. В 2000 году статус кафедра была преобразована в структурное подразделение математического факультета КемГУ.</p>
<p style="box-sizing: border-box; margin: 0px 0px 5px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 22px; font-family: Verdana, sans-serif; vertical-align: baseline;">&nbsp;</p>
<h4 style="box-sizing: border-box; margin: 15px 0px 10px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: 1.1em; font-family: Raleway, HelveticaNeue, \'Helvetica Neue\', Helvetica, Arial, sans-serif; vertical-align: baseline;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px #296293; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">ОСНОВНЫЕ ДИСЦИПЛИНЫ, ПРЕПОДАВАЕМЫЕ НА КАФЕДРЕ</strong></h4>
<p style="box-sizing: border-box; margin: 0px 0px 5px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 22px; font-family: Verdana, sans-serif; vertical-align: baseline;">Администрирование информационных систем, Архитектура вычислительных систем, Архитектура вычислительных систем и компьютерных сетей, Базы данных, Введение в специальность, Высокопроизводительные вычисления и суперкомпьютинг, Вычислительная математика, Вычислительные методы, Вычислительные методы-2, Геоинформационные системы, Интеллектуальные системы, Информатика, Информационная безопасность, Информационные технологии в образовании, Информационный бизнес, История и методология информатики, Компьютерная графика, Компьютерные науки-2, Компьютерные сети, Математические пакеты прикладных программ, Математическое моделирование, Методика обучения информатике, Методика преподавания информатики, Методы вычислений, Методы вычислений-2, Методы граничных элементов, Методы решения задач гидродинамики, Метрология и качество ПО, Многопроцессорные вычислительные системы и параллельное программирование, Научно-исследовательская практика, Непрерывные математические модели, Операционные системы, Операционные системы и оболочки, Оптимизация запросов к БД, Основы математической обработки информации, Основы планирования профессиональной деятельности, Особенности применения разностных методов решения уравнений математической физики, Параллельные алгоритмы, Практикум на ЭВМ, Практикум на ЭВМ по программированию, Практикум на ЭВМ по численным методам, Практикум на ЭВМ по языкам программирования, Преддипломная практика, Программирование, Программная инженерия, Производственная практика, Сетевые протоколы и управление сетями, Структуры и алгоритмы компьютерной обработки данных, Теоретическая механика, Теория языков и трансляций, Технологии параллельного программирования, Управление проектами по созданию ПО, Учебная практика, Численные методы, Экономико-правовые основы рынка ПО, Языки и методы программирования, Языки программирования &ndash; 2, Языки программирования и методы трансляции.</p>
<h4 style="box-sizing: border-box; margin: 15px 0px 10px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: 1.1em; font-family: Raleway, HelveticaNeue, \'Helvetica Neue\', Helvetica, Arial, sans-serif; vertical-align: baseline;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px #296293; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">СПЕЦИАЛИЗАЦИЯ</strong></h4>
<p style="box-sizing: border-box; margin: 0px 0px 5px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 22px; font-family: Verdana, sans-serif; vertical-align: baseline;">Кафедра является выпускающей по направлениям:<br style="box-sizing: border-box;" />02.03.03 &ldquo;Математическое обеспечение и администрирование информационных систем&rdquo;<br style="box-sizing: border-box;" />02.03.02 &ldquo;Фундаментальная информатика и информационные технологии&rdquo;<br style="box-sizing: border-box;" />02.04.03 &ldquo;Математическое обеспечение и администрирование информационных систем&rdquo;</p>
<h4 style="box-sizing: border-box; margin: 15px 0px 10px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: 1.1em; font-family: Raleway, HelveticaNeue, \'Helvetica Neue\', Helvetica, Arial, sans-serif; vertical-align: baseline;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px #296293; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">СПЕЦИАЛЬНЫЕ КУРСЫ, ПРЕПОДАВАЕМЫЕ НА КАФЕДРЕ</strong></h4>
<p style="box-sizing: border-box; margin: 0px 0px 5px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 22px; font-family: Verdana, sans-serif; vertical-align: baseline;">COM-технологии, OLAP-технологии, WEB-программирование, Архитектура компьютера, Введение в ГИС-технологии, Введение в математические методы МСС, Введение в механику сплошных сред, Введение в технологию JAVA, Вычислительная гидродинамика, Декларативные языки, Инструментальные средства визуального программирования, Инструментальные средства процесса разработки программного обеспечения, Интеллектуальные системы, Информационная безопасность, Информационные технологии изучения природных объектов, История и методология информатики, Итерационные методы решения систем линейных алгебраических уравнений, Компьютерная графика, Компьютерное моделирование, Компьютерное моделирование экологических систем, Математические основы компьютерной графики, Математические пакеты, Метод дробных шагов, Методика преподавания информатики, Методы решения задач гидродинамики, Методы решения сеточных уравнений, Механика жидкости и газа, Научные основы школьного курса информатики, Обработка данных дистанционного зондирования, Общие принципы математического моделирования, Онтологии в информационных системах, Операционная система UNIX, Организация научно-исследовательской работы по информатике, Основы COM-технологий, Основы математического моделирования, Основы планирования профессиональной деятельности, Пакеты визуализации гидродинамических расчетов, Пакеты прикладных программ, Пакеты прикладных программ графической информации, Параллельные алгоритмы, Практикум по решению задач информатики, Программирование на C#, Программирование на JAVA, Пропедевтика курса информатики, Профильное обучение информатике, Разработка мобильных приложений, Решение многомерных задач математической физики, Сайтостроение, Системы управления базами данных MS Access, Современные методы решения прикладных задач, Современные методы решения сеточных уравнений, Тестирование программ, Тестирование программного обеспечения, Технологии параллельного программирования, Численные методы, Языки программирования интеллектуальных систем.</p>
<h4 style="box-sizing: border-box; margin: 15px 0px 10px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: 1.1em; font-family: Raleway, HelveticaNeue, \'Helvetica Neue\', Helvetica, Arial, sans-serif; vertical-align: baseline;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px #296293; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">ОСНОВНЫЕ НАПРАВЛЕНИЯ НАУЧНОЙ ДЕЯТЕЛЬНОСТИ КАФЕДРЫ</strong></h4>
<ul style="box-sizing: border-box; margin: 0px 0px 20px 7px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Verdana, sans-serif; vertical-align: baseline; list-style-position: outside; list-style-image: initial;" type="disc">
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: circle;">Гидродинамика, течение вязкой несжимаемой жидкости.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: circle;">Размыв грунта около подводных сооружений.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: circle;">Концентрирование молока.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: circle;">Моделирование работы искусственных клапанов, течения крови в сосудах.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: circle;">Подземная газификация угля.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: circle;">Очистка промышленных стоков с помощью затопленных угольных шахт.</li>
</ul>
<h4 style="box-sizing: border-box; margin: 15px 0px 10px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: 1.1em; font-family: Raleway, HelveticaNeue, \'Helvetica Neue\', Helvetica, Arial, sans-serif; vertical-align: baseline;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px #296293; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">АСПИРАНТУРА</strong></h4>
<p style="box-sizing: border-box; margin: 0px 0px 5px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 22px; font-family: Verdana, sans-serif; vertical-align: baseline;">На кафедре действует аспирантура по направлению 05.13.18 &laquo;Математические модели, численные методы и комплексы программ&raquo; под руководством Ю. Н. Захарова.<br style="box-sizing: border-box;" />В настоящее время в аспирантуре по дневной форме обучения обучаются 10 аспирантов.</p>
<p style="box-sizing: border-box; margin: 0px 0px 5px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 22px; font-family: Verdana, sans-serif; vertical-align: baseline;">&nbsp;</p>
<h4 style="box-sizing: border-box; margin: 15px 0px 10px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: 1.1em; font-family: Raleway, HelveticaNeue, \'Helvetica Neue\', Helvetica, Arial, sans-serif; vertical-align: baseline;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px #296293; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">УЧАСТИЕ КАФЕДРЫ В ГРАНТАХ И ПРОЕКТАХ, КОНТРАКТАХ:</strong></h4>
<p style="box-sizing: border-box; margin: 0px 0px 5px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 22px; font-family: Verdana, sans-serif; vertical-align: baseline;">Моделирование течений с переменными плотностью и вязкостью при решении прикладных задач, конкурсный отбор научных проектов в рамках реализации проектной части государственного задания в сфере научной деятельности, МОН РФ. 2014 г. Проектная часть государственного задания в сфере научной деятельности (Задание № 1.630.2014/К<br style="box-sizing: border-box;" />Моделирование течений с переменными плотностью и вязкостью при решении прикладных задач (29.07.2014)<br style="box-sizing: border-box;" />&ldquo;Наукоемкий программный WEB-инструментарий для решения задач экологии угольного региона&rdquo;, задание № 2014/64 на выполнение государственных работ в сфере научной деятельности в рамках базовой части государственного задания, МОН РФ<br style="box-sizing: border-box;" />￼</p>
<h4 style="box-sizing: border-box; margin: 15px 0px 10px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: 1.1em; font-family: Raleway, HelveticaNeue, \'Helvetica Neue\', Helvetica, Arial, sans-serif; vertical-align: baseline;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px #296293; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">УЧАСТИЕ КАФЕДРЫ В КОНФЕРЕНЦИЯХ И СЕМИНАРАХ</strong></h4>
<p style="box-sizing: border-box; margin: 0px 0px 5px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 22px; font-family: Verdana, sans-serif; vertical-align: baseline;">Гавришина О.Н. Участие в I-м Международном симпозиуме &laquo;Инновационные технологии в горном деле и образовании&raquo; с докладом &laquo;Cross-cultural analysis of the verbal conflic behavior of the graduage mining engineers&raquo; 24-27 апреля 2017</p>
<h4 style="box-sizing: border-box; margin: 15px 0px 10px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: 1.1em; font-family: Raleway, HelveticaNeue, \'Helvetica Neue\', Helvetica, Arial, sans-serif; vertical-align: baseline;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px #296293; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">ЗНАЧИМЫЕ ПУБЛИКАЦИИ КАФЕДРЫ (ЗА ПОСЛЕДНИЕ ГОДЫ):</strong></h4>
<ol style="box-sizing: border-box; margin: 0px 0px 20px 15px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Verdana, sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial;">
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Gudov, A.M., Zavozkin, S.Y., Sotnikov, I.Y. Engineering and Computing Portal to Solve Environmental Problems / IOP Conference Series: Earth and Environmental Science, Volume 115, conference 1, 2018. doi:10.1088/1755-1315/115/1/012020</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Bondareva, L., Zakharov, Y., Goudov, A. Simulation of Industrial Wastewater Treatment from the Suspended Impurities into the Flooded Waste Mining Workings (2017) IOP Conference Series: Materials Science and Engineering, 189 (1), статья № 012011, .</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Perminov, V., Goudov, A. Mathematical modeling of forest fires initiation, spread and impact on environment (2017) International Journal of GEOMATE, 13 (35), pp. 93-99.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Goudov, A., Perminov, V., Filatov, Y., Un, L.H., Zavozkin, S., Grigorieva, I., Sotnikov, I. High technology software web-Tools to solve environmental problems of coal region (2017) CEUR Workshop Proceedings, 1839, pp. 61-73.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Agranat, V.M., Goudov, A.M., Perminov, V.A. Mathematical simulation of contaminant flow in closed reservoir (2016) Journal of Physics: Conference Series, 671 (1), статья № 012045, .</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Perminov, V., Goudov, A.M. Mathematical simulation of contaminant flow in the square closed reservoir (2016) International Journal of GEOMATE, 11 (4), pp. 2558-2562</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Bondareva, L., Zakharov, Y., Goudov, A. Simulation of Industrial Wastewater Treatment from the Suspended Impurities into the Flooded Waste Mining Workings (2017) IOP Conference Series: Materials Science and Engineering, 189 (1), статья № 012011,</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Zakharov, Y., Zimin, A. Numerical simulation of surface waves arising from underwater landslide movement (2017) CEUR Workshop Proceedings, 1839, pp. 535-546.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Miloshevich, H., Zakharov, Y., Shokin, Y., Dolgov, D., Grigorieva, I. Mathematical modeling of artificial mitral heart valve (2017) CEUR Workshop Proceedings, 1839, pp. 380-392.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Yushkov, A., Nudner, I., Semenov, K., Ivanov, K., Geidarov, N., Stukolov, S., Zakharov, Y. Computational investigation of turbulent flow impact on non-cohesive soil erosion near foundations of gravity type oil platforms (2017) CEUR Workshop Proceedings, 1839, pp. 524-534.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Zakharov, Y.N., Dolgov, D.A., Shokin, Y.I. Numerical simulation of the performance of an artificial heart valve (2016) Russian Journal of Numerical Analysis and Mathematical Modelling, 31 (4), pp. 229-238.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Захаров Ю.Н., Зимин А.И. Модель двухкомпонентной вязкой несжимаемой жидкости в задаче набегания волны на препятствие // Труды ХIII Всероссийской конференции &laquo;Прикладные технологии гидроакустики и гидрофизики&raquo; (ГА -2016). С.-Петербург: Наука, -2016. &ndash; С.146-149.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Захаров Ю.Н., Нуднер И.С., Лебедев В.В., Иванов К.С., Гейдаров Н.А., СемёновК.К., Мишина А.В. Влияние волнения на процесс размыва грунта у основания платформы гравитационного типа // Труды ХIII Всероссийской конференции &laquo;Прикладные технологии гидроакустики и гидрофизики&raquo; (ГА -2016). С.-Петербург: Наука, -2016. &ndash; С.149-151.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Захаров Ю.Н., Стуколов С.В. Численное моделирование размыва донного грунта около трубопроводов // Труды ХIII Всероссийской конференции &laquo;Прикладные технологии гидроакустики и гидрофизики&raquo; (ГА -2016). С.-Петербург: Наука, -2016. &ndash; С.487-489.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Zakharov Y. Mathematical modeling of artificial aortic heart valve// Conference information Mathematical and informational Technologies, ВрнячкаБаня, Сербия, Будва, Черногория, 28.08.2016 &ndash; 5.09.2016, Pp.55.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Zakharov Y. N., Zimin A. I. Numerical simulation of surface waves arising from underwater landslide movement // Conference information Mathematical and informational Technologies, ВрнячкаБаня, Сербия, Будва, Черногория, 28.08.2016 &ndash; 5.09.2016, Pp.59 &mdash; 60.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Grigorieva I. V., Zakharov Y.N., Dolgov D. A. Mathematical modeling of large blood vessel aneurysm development and growth// Conference information Mathematical and informational Technologies, ВрнячкаБаня, Сербия, Будва, Черногория, 28.08.2016 &ndash; 5.09.2016, Pp.62 &mdash; 63.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Zakharov Y. N., Botvenko D. V., Filatov Y. M., Lee Hee Un, Perminov V. A. Mathematical model of ignition gaz-air mixture and fine coal dust laminar flow // Conference information Mathematical and informational Technologies, ВрнячкаБаня, Сербия, Будва, Черногория, 28.08.2016 &ndash; 5.09.2016, Pp.68 &mdash; 69.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Zakharov Y. N., Nudner I. S., Gaydarov N. A., Ivanov K. S., Semenov K. K., Stukolov S. V., Yushkov A. S. Computational investigation of turbulent flow impact on noncohesive soul erosion near foundations gravity type oil platforms // Conference information Mathematical and informational Technologies, ВрнячкаБаня, Сербия, Будва, Черногория, 28.08.2016 &ndash; 5.09.2016, Pp.69 &mdash; 70.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Yurii N. Zakharov, Dmitry A. Dolgov, Yurii I. Shokin Numerical simulation of the performance of an artificial heart valve // Russian Journal of Numerical Analysis and Mathematical Modelling. Volume 31, Issue 4, Pages 229&ndash;238, ISSN (Online) 1569-3988, ISSN (Print) 0927-6467, DOI: 10.1515/rnam-2016-0023, July 2016</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Власенко А. Ю., Гудов А. М., Захаров Ю. Н.Программный комплекс автоматизированной отладки MPI-программ на основе шаблонов ошибочного поведения. Свидетельство о государственной регистрации программы для ЭВМ № 2016615728. Зарегистрировано в Реестре программ для ЭВМ, г. Москва, 28февраля 2016 г.Dolgov D.A., Zakharov Y. N., Mathematical modeling of artificial heart valve performance // Mathematical modeling and high performance computing in bioinformatics, Biomedicine and biotechnology (MM-HPC-BBB-2016), Novosibirsk, Russai, 29 August &ndash; 2 September, 2016, pp.39.</li>
</ol>
<h4 style="box-sizing: border-box; margin: 15px 0px 10px 10px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: 1.1em; font-family: Raleway, HelveticaNeue, \'Helvetica Neue\', Helvetica, Arial, sans-serif; vertical-align: baseline;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px #296293; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">РЕЗУЛЬТАТЫ ИНТЕЛЛЕКТУАЛЬНОЙ ДЕЯТЕЛЬНОСТИ (ПАТЕНТ, СВИДЕТЕЛЬСТВО)</strong></h4>
<ol style="box-sizing: border-box; margin: 0px 0px 20px 15px; padding: 0px; border: 0px #296293; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Verdana, sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial;">
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Гудов А.М., Ростовцев Е.А., Завозкин С.Ю., Рейн Т.С. &laquo;Информационная автоматизированная система &ldquo;Деканат&rdquo;&raquo;. Свидетельство об официальной регистрации программы для ЭВМ №2006613140, от 06.09.2006 г.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Гудов А.М., Завозкин С.Ю., Попов А.Ю., Шевнин В.А. &laquo;Рейтинг обучающихся&raquo;. Свидетельство о государственной регистрации программы для ЭВМ №2016616325, от 09.06.2016 г.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Фокин Д.С., Карабцев С.Н.(н.р.) Свидетельство о государственной регистрации программы для ЭВМ №2017613075 от 09.03.2017 Программный комплекс &laquo;Доступный информационный обозреватель данных (ДИОД)&raquo;</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Захаров Ю.Н., Зимин А.И. Программный комплекс для численного расчёта динамики размыва связного грунта на дне водоема под действием внутреннего течения и диффузии &laquo;Cohesive Soil Erosion on the Bottom of Reservoirs&raquo;. Свидетельство о государственной регистрации программы для ЭВМ № 2017610030. Зарегистрировано в Реестре программ для ЭВМ, г. Москва, 09 января 2017 г.</li>
<li style="box-sizing: border-box; margin: 0px 0px 10px 50px; padding: 3px 0px 3px 5px; border: 0px #296293; font: inherit; vertical-align: baseline; list-style: decimal;">Лобасенко Б.А., Рассказова Е.К., Котляров Р.В., Захаров Ю.Н. Патент на изобретение № 2607664 Аппарат для мембранного концентрирования</li>
</ol>',
                ]);

        Page::create(
            [
                'name' => 'Положение',
                'title' => 'ПОЛОЖЕНИЕ о кафедре ЮНЕСКО по новым информационным технологиям в образовании и науке',
                'text' => '<center style="font-family: Arial; font-size: 13.3333px;">(UNESCO Chair of new information technologies in education and science)<br /><br /><br /><br />Кемерово 1999 г.</center>
<p>&nbsp;</p>
<center style="font-family: Arial; font-size: 13.3333px;">
<h5>1. Общие положения</h5>
</center>
<p style="font-family: Arial; font-size: 13.3333px;">1.1. Международная кафедра ЮНЕСКО по новым информационным технологиям в образовании и науке (UNESCO Chair of new information technologies in education and science) в дальнейшем по тексту "КАФЕДРА", организуется и осуществляет свою деятельность на основе Соглашения между Организацией объединенных наций по образованию, науке и культуре (ЮНЕСКО), с одной стороны и Кемеровским государственным университетом, с другой стороны.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">1.2. В своей работе кафедра руководствуется Российским законодательством, основополагающими постановлениями и другими документами Министерства образования Российской Федерации, Соглашением с ЮНЕСКО, уставом и правилами внутреннего распорядка КемГУ.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">1.3. Кафедра работает под общим руководством ректора КемГУ. Она согласовывает свою работу с Комиссией РФ по делаем ЮНЕСКО и один раз в год представляет отчеты на английском в отдел высшего образования Секретариата ЮНЕСКО, в Комиссию РФ по делам ЮНЕСКО, докладывает о своей работе Министерству образования РФ.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">1.4. Кафедра создается в Центре Новых Информационных Технологий.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">1.5. Кафедра может образовывать временные региональные отделения, способствующие выполнению поставленных целей и задач, в России, в СНГ в развивающихся странах Азии, Африки и Латинской Америки, в других странах.</p>
<center style="font-family: Arial; font-size: 13.3333px;">
<h5>2. Цели и задачи Кафедры</h5>
</center>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">2.1. Кафедра будет способствовать желанию университетов и научноисследовательских организаций из любых регионов мира принять участие в выполнении проектов Кафедры в области информационных и коммуникационных технологий. Она должна служить инструментом содействия сотрудничеству между национальными и международными центрами в указанных областях.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">2.2. Кафедра ставит перед собой следующие цели:</p>
<ul style="font-family: Arial; font-size: 13.3333px;">
<li>подготовка и переподготовка российских и иностранных специалистов по информатике на уровне мировых стандартов с привлечением ведущих специалистов из-за рубежа по согласованию с ЮНЕСКО, широко используя при этом современную российскую и зарубежную литературу, в том числе научные разработки ЮНЕСКО;</li>
<li>проведение научно-исследовательской работы по проблематике, входящей в сферу компетенции Кафедры, в том числе, на основе договоров и соглашений с Секретариатом ЮНЕСКО, его региональными подразделениями, с заинтересованными международными кафедрами ЮНЕСКО в других странах;</li>
<li>создание и налаживание под эгидой ЮНЕСКО межуниверситетской (межвузовской) сети сотрудничества в областях своей компетенции; обучение и научно-исследовательская работа студентов высшей школы и переподготовка выпускников вузов в области информационных и коммуникационных технологий;</li>
<li>подготовка и переподготовка преподавательских кадров в области информационных технологий;</li>
<li>создание специальной учебной программы стационарной подготовки кадров в цепочке: школа-вуз-поствузовское усовершенствование для малых городов России и стран СНГ;</li>
<li>разработка стратегии развития дистанционного образования, формирование фонда учебно-методических материалов для дистанционного образования;</li>
<li>развитие технологий дистанционного образования на основе передачи цифровых и аналоговых данных в Кемеровской области и Западной Сибири;</li>
<li>разработка и совершенствование методики дистанционного обучения и профессиональная подготовка кадров для регионов в этом направлении;</li>
<li>создание и использование средств мультимедиа для очного дистанционного обучения;</li>
<li>разработка системы стандартов по дистанционному обучению и проведение сертификации учебно-методических материалов в соответствии с ними;</li>
<li>издание учебных пособий и монографий по различным аспектам информационных технологий;</li>
<li>создание электронных (гипертекстовых) учебников по различным естественнонаучным и гуманитарным дисциплинам;</li>
<li>сбор информации и формирования банка данных по методам и путям прогресса информационных технологий в России, странах СНГ и др. Странах. Обмен информацией и учебными курсами с университетами и научно-исследовательскими организациями стран СНГ; освоение системы дистанционного обучения для работы в тюрьмах; развитие и укрепление сотрудничества с университетами в рамках сет и УНИТВИН в области информационных технологий в образовании и науке;</li>
<li>обмен студентами, стажерами и сотрудниками Кафедры с другими университетами и научно-исследовательскими учреждениями;</li>
<li>анализ новых тенденций в области информационных и коммуникационных технологий. Становление и развитие новых специализаций, таких как "интернет-журналистика", "интернет-маркетинг" и др.</li>
<li>проведение международных конференций, симпозиумов, встреч и т.д., проводимых под эгидой ЮНЕСКО.</li>
</ul>
<p style="font-family: Arial; font-size: 13.3333px;">&nbsp;</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">2.3. Названные цели осуществляются по планам, проектам и программам, разрабатываемым под конкретные образовательные и научно-технические проблемы и. В случае необходимости, согласованными с Секретариатом ЮНЕСКО.</p>
<center style="font-family: Arial; font-size: 13.3333px;">
<h5>3. Структура Кафедры</h5>
</center>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">3.1. Кафедра имеет гибкую структуру, позволяющую быстро адаптироваться к меняющимся потребностям практики, в соответствии с возникающими перед сообществом проблемами образовательного, научнотехнического и производственного уровня.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">3.2. Кафедру возглавляет заведующий кафедрой, кандидатуру которого назначает университет, в консультации с ЮНЕСКО.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">3.3. Структура кафедры и должностные оклады сотрудников кафедры устанавливаются ректором КемГУ в рамках правил, установленных в КемГУ.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">3.4. Кафедра может иметь отделения, включать в себя секторы научных исследований и разработок, методической работы и координации внешних связей, организации учебного процесса и другие, обусловленные постановкой проблемы, проектом или программой ее реализации.</p>
<center style="font-family: Arial; font-size: 13.3333px;">
<h5>4. Деятельность Кафедры</h5>
</center>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">4.1. Кафедра работает на правах структурного подразделения КемГУ и содержится, за счет средств выделяемых Министерством образования,КемГУ и ЮНЕСКО целевым назначением для обеспечения ее работы. Источником средств Кафедры являются также поступления от оказанных услуг, публикаций, издательской деятельности, рекламной, выставочной деятельности и прочих поступлений.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">4.2. Основой взаимоотношений Кафедры и ее контрагентов, включая государственные органы и поставщиков материально-технических средств, являются договоры на выполнение работ и оказание услуг.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">4.3. Работа Кафедры осуществляется по планам, проектам и программам, разрабатываемым под конкретные образовательные и научно-технические проблемы.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">4.4. Кафедра для достижения поставленных целей своей деятельности имеет право использовать средства, получаемые от ЮНЕСКО, спонсоров и другие внебюджетные средства от российских и зарубежных научнообразовательных организаций, заключать договоры с заинтересованными организациями на проведение работ в рамках своей деятельности с зарубежными фирмами и организациями.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">4.5. Кафедра работает в служебных и учебных помещениях Кем ГУ, определенных приказами ректора.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">4.6. Кафедра оказывает помощь своим отделениям в представлении их программ, проектов и результатов деятельности в различные национальные, зарубежные и международные организации.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">4.7. Кафедра может оказывать отделению необходимую помощь, в юм числе и финансовую, за счет централизованных средств (в форме кредитов) при организации новых целевых программ, проведении семинаров, конференций, симпозиумов.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">4.8. Кафедра способствует росту квалификационного уровня сотрудников путем привлечения их к участию в работе семинаров, конференций, симпозиумов, организации стажировок в различных фирмах (в том числе за рубежных), выдвижения на работу в международные комиссии и органы.</p>
<center style="font-family: Arial; font-size: 13.3333px;">
<h5>5. Совет Кафедры</h5>
</center>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">5.1. Совет Кафедры включает руководителей кафедры и отделений, а также Секретаря Совета Кафедры.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">5.2. Совет Кафедры сам определяет свою структуру и порядок работы.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">5.3. Совет Кафедры созывается на заседание по мере необходимости, но не реже двух раз в год.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">5.4. Обязанности председателя заседания Совета Кафедры исполняет заведующий кафедрой.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">5.5. Право выносить вопросы на заседание Совета Кафедры принадлежит членам Совета.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">5.6. Заседание Совета Кафедры проводятся, как правило, по месту нахождения Кафедры или в его отделении, деятельность которого рассматривается на заседании Совета Кафедры.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">5.7. В компетенцию Совета Кафедры входит решение следующих во просов:</p>
<ul style="font-family: Arial; font-size: 13.3333px;">
<li>выработка предложений о внесении изменений в положение о Кафедре UNESCО, а также любые изменения, касающиеся деятельности Кафедры;</li>
<li>утверждение планов деятельности Кафедры;</li>
<li>рассмотрение отчетов о результатах проделанной работы - по программам и проектам;</li>
<li>согласование решений заведующего Кафедрой о прекращении деятельности отделений Кафедры или о создании новых отделений Кафедры.</li>
</ul>
<p style="font-family: Arial; font-size: 13.3333px;">&nbsp;</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">5.8. Решения Совета Кафедры принимаются простым большинством голосов присутствующих или представленных другими лицами членов, за исключением вопросов, по которым требуется единогласие. При равенстве голосов решающим считается голос заведующего Кафедрой.</p>
<center style="font-family: Arial; font-size: 13.3333px;">
<h5>6. Заведующий Кафедрой</h5>
</center>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">6.1. Ректор КемГУ заключает контракт с заведующим Кафедрой паустановленный срок, в соответствии с которым, заведующий кафедрой получает ч-е же права и обязанности, как и у других профессоров той же категории в университете. В контракте оговаривается заработная плата, командировочные расходы, подъемное пособие и медицинское страхование.</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">6.2. Заведующий Кафедрой в пределах своей компетенции в соответствии с Соглашением:</p>
<ul style="font-family: Arial; font-size: 13.3333px;">
<li>осуществляет оперативное руководство деятельностью Кафедры в соответствии с планами, программами, проектами;</li>
<li>представляет на утверждение Совету Кафедры проекты планов, программ и рабочих проектов, а также отчеты по их выполнению;</li>
<li>без доверенности действует от имени Кафедры, представляет ее вовсех учреждениях, предприятиях и организациях, как в России, так и за границей;</li>
<li>несет полную ответственность за результаты работы кафедры и отвечает за работу кафедры перед органами ЮНЕСКО и Ученым Советом КемГУ;</li>
<li>осуществляет контроль за сохранностью и эффективностью использования закрепленной за кафедрой собственности;</li>
<li>принимает решения, издает приказы и распоряжения по оперативным вопросам деятельности Кафедры.</li>
</ul>',
            ]);

        Page::create(
            [
                'name' => 'Специализации',
                'title' => 'Специализации',
                'text' => '<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;"><strong>На математическом факультете преподавателями кафедры преподаются дисциплины:</strong></p>
<ul style="font-family: Arial; font-size: 13.3333px;">
<li>Компьютерные науки (специальность 010101);</li>
<li>Новые информационные технологии (специальности 010101, 010501);</li>
<li>Информатика (специальности 010501, 010503);</li>
<li>Базы данных и экспертные системы (специальность 010501);</li>
<li>Базы данных и СУБД (специальность 010503);</li>
<li>Пакеты прикладных программ (специальность 010503);</li>
<li>Системное и прикладное программное обеспечение (специальность 010501);</li>
<li>Программирование (специальность 010503);</li>
<li>Функциональное программирование (специальность 010503);</li>
<li>Рекурсивно-логическое программирование (специальность 010503);</li>
<li>Параллельное программирование (специальность 010503);</li>
<li>Системы искуственного интеллекта (специальность 010503);</li>
<li>Технологии разработки ПО (специальность 010503);</li>
<li>Администрирование информационных систем (специальность 010503);</li>
<li>Архитектуры вычислительных систем и компьютерных сетей (специальность 010503);</li>
<li>Метрология и качество программного обеспечения (специальность 010503);</li>
<li>Операционные системы и оболочки (специальность 010503);</li>
<li>Структуры и алгоритмы компьютерной обработки данных (специальность 010503).</li>
</ul>
<p style="font-family: Arial; font-size: 13.3333px;">&nbsp;</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;"><strong>Кроме того, на филологическом факультете преподавателями кафедры преподаются дисциплины:</strong></p>
<ul style="font-family: Arial; font-size: 13.3333px;">
<li>Математика и информатика;</li>
<li>Интернет-технологии;</li>
<li>Компьютерный практикум.</li>
</ul>
<p style="font-family: Arial; font-size: 13.3333px;">&nbsp;</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;"><br /><strong>Спецкурсы специализации &laquo;математическая физика&raquo;:</strong></p>
<ul style="font-family: Arial; font-size: 13.3333px;">
<li>ТРПО</li>
<li>Программирование на языке PL/SQL</li>
<li>Программирование на языке Fortran</li>
<li>Механика жидкости и газа</li>
<li>Рекурсивно-логическое программирование</li>
<li>Теоретическая гидродинамика</li>
<li>Современные численные методы</li>
<li>Параллельные вычисления</li>
<li>Математические модели физических явлений</li>
<li>Введение в администрирование информационных систем</li>
<li>Сетевые протоколы</li>
<li>Алгоритмы машинной графики</li>
<li>Математические пакеты</li>
<li>Метрология и качество программного обеспечения</li>
<li>Функциональное программирование</li>
<li>OLAP - технологии обработки данных</li>
<li>Текстовый редактор Latex</li>
</ul>
<p style="font-family: Arial; font-size: 13.3333px;">&nbsp;</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;"><strong>Спецкурсы специализации &laquo;информационные системы&raquo;:</strong></p>
<ul style="font-family: Arial; font-size: 13.3333px;">
<li>Программирование на Java</li>
<li>Системы передачи данных и сети ЭВМ</li>
<li>Основы Интернет-технологий</li>
<li>Операционная система Unix</li>
<li>Сетевые протоколы и управление сетями</li>
<li>OLAP-технологии обработки данных</li>
</ul>',
            ]);
        Page::create(
            [
                'name' => 'Программы курсов',
                'title' => 'Программы курсов',
                'text' => '<center style="font-family: Arial; font-size: 13.3333px;"><strong>Математический факультет</strong></center>
<p style="font-family: Arial; font-size: 13.3333px;">&nbsp;</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">&nbsp;</p>
<center style="font-family: Arial; font-size: 13.3333px;"><strong>Математика 010101</strong></center>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/plan_2003_2.html" target="_blank" rel="noopener"><strong>"Системы передачи данных и сети ЭВМ."</strong></a><br />специальность 010101 - "Математика "<br />специальность 010501 - "Прикладная математика и информатика" (ДО)<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>зав. Кафедры НИТ, профессор Афанасьев К.Е., 2003г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/nit.html" target="_blank" rel="noopener"><strong>"Новые информационные технологии"</strong></a><br />специальность 010101 - "Математика" (ДО)<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент, к.ф.-м.н. Стуколов С.В., 2008г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/comp_nauki_4/programm.pdf" target="_blank" rel="noopener"><strong>"Компьютерные науки</strong></a><br />специальность 010101 - "Математика", семестр 4<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент, к.п.н. Шмакова Л.Е., 2009г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/plan_2003_9.html" target="_blank" rel="noopener"><strong>"Специализированные математические пакеты прикладных программ"</strong></a><br />специальность 010101 - "Математика "<br />специальность 010501 - "Прикладная математика и информатика" (ДО)&nbsp;<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент, к.ф.-м.н. Стуколов С.В., 2003г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/plan_2004_4.html" target="_blank" rel="noopener"><strong>"Система обработки текстов LaTex"</strong></a><br />специальность 010101 - "Математика "<br />специальность 010501 - "Прикладная математика и информатика" (ДО)&nbsp;<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент, к.ф.-м.н. Стуколов С.В., 2004г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/comp_nauki.html" target="_blank" rel="noopener"><strong>"Компьютерные науки."</strong></a><br />специальность 010101 - "Математика "<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент, к.ф.-м.н. Стуколов С.В., 2008г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;">&nbsp;</p>
<p>&nbsp;</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">&nbsp;</p>
<center style="font-family: Arial; font-size: 13.3333px;"><strong>Прикладная математика и информатика 010501</strong></center>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/plan_2003_2.html" target="_blank" rel="noopener"><strong>"Системы передачи данных и сети ЭВМ."</strong></a><br />специальность 010101 - "Математика "<br />специальность 010501 - "Прикладная математика и информатика" (ДО)<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>зав. Кафедры НИТ, профессор Афанасьев К.Е., 2003г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/NIT_prog_2007.pdf" target="_blank" rel="noopener"><strong>"Новые информационные технологии"</strong></a>(основной курс)<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент Гудов А.М.,<strong>2007г.</strong></em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/plan_2003_7.html" target="_blank" rel="noopener"><strong>"Компьютерные науки"</strong></a><br />специальность 010501 - "Прикладная математика и информатика"&nbsp;<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент, к.ф.-м.н. Стуколов С.В., 2003г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/plan_2003_9.html" target="_blank" rel="noopener"><strong>"Специализированные математические пакеты прикладных программ"</strong></a><br />специальность 010101 - "математика"<br />специальность 010501 - "Прикладная математика и информатика" (ДО)&nbsp;<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент, к.ф.-м.н. Стуколов С.В., 2003г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/plan_2003_10.html" target="_blank" rel="noopener"><strong>"Высокопроизводительные параллельные вычисления"</strong></a><br />специальность 010501 - "Прикладная математика и информатика" (ДО)&nbsp;<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент, к.ф.-м.н. Стуколов С.В., 2003г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/programm_informatics_010501.doc" target="_blank" rel="noopener"><strong>"Информатика"</strong></a><br />специальность 010501 - "Прикладная математика и информатика"&nbsp;<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>к.т.н., Завозкин С.Ю., 2009г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/plan_2004_4.html" target="_blank" rel="noopener"><strong>"Система обработки текстов LaTex"</strong></a><br />специальность 010101 - "математика"<br />специальность 010501 - "Прикладная математика и информатика" (ДО)&nbsp;<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент, к.ф.-м.н. Стуколов С.В., 2004г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/plan_2004_5.html" target="_blank" rel="noopener"><strong>"Распараллеливание алгоритмов"</strong></a><br />специальность 010501 - "Прикладная математика и информатика" (ДО)&nbsp;<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент, к.ф.-м.н. Стуколов С.В., 2004г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/plan_2004_8.html" target="_blank" rel="noopener"><strong>"История и методология информатики."</strong></a><br />специальность 010501 - "Прикладная математика и информатика"&nbsp;<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент Русакова Н.А., 2004г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;">&nbsp;</p>
<p>&nbsp;</p>
<p style="font-family: Arial; font-size: 13.3333px; text-align: justify;">&nbsp;</p>
<center style="font-family: Arial; font-size: 13.3333px;"><strong>Математическое обеспечение и администрирование информационных систем 010503</strong></center>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/inform_010503/programm.pdf" target="_blank" rel="noopener"><strong>"Информатика"</strong></a><br />специальность 010503 - "Математическое обеспечение и администрирование информационных систем"<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент, к.п.н. Шмакова Л.Е., 2009г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/plan_2005_13.html" target="_blank" rel="noopener"><strong>"Базы данных и СУБД. Часть II"</strong></a>&nbsp;(основной курс)&nbsp;<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент Гудов А.М.,<strong>2005г.</strong></em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/plan_2005_14.mht" target="_blank" rel="noopener"><strong>"Технологии разработки программного обеспечения"</strong></a>&nbsp;(основной курс)&nbsp;<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент Гудов А.М.,<strong>2005г.</strong></em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/plan_2006_ql.pdf" target="_blank" rel="noopener"><strong>"Метрология и качество программного обеспечения"</strong>&nbsp;(основной курс)</a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент Гудов А.М.,<strong>2006г.</strong></em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/plan_2003_6.html" target="_blank" rel="noopener"><strong>"Пакеты прикладных программ "</strong></a><br />специальность 010503 - "Математическое обеспечение и администрирование информационных систем"<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>к.ф.-м.н., доцент Овчинников А.В., 2003г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/plan_2004_2.html" target="_blank" rel="noopener"><strong>"Архитектуры вычислительных систем"</strong></a><br />специальность 010503 - "Математическое обеспечение и администрирование информационных систем"<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент, к.ф.-м.н. Стуколов С.В., 2004г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/plan_2004_3.html" target="_blank" rel="noopener"><strong>"Объектно-ориентированное программирование для С++"</strong></a>&nbsp;специальность 010503 - "Математическое обеспечение и администрирование информационных систем"<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>к.ф.-м.н., доцент Овчинников А.В., 2004г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/programm_AIS.pdf" target="_blank" rel="noopener"><strong>"Администрирование информационных систем"</strong></a>&nbsp;(основной курс)&nbsp;<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент Гудов А.М., 2006г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/programm_OS.pdf" target="_blank" rel="noopener"><strong>"Операционные системы"</strong></a>&nbsp;(основной курс)&nbsp;<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>к.ф.-м.н., доцент Гудов А.М., 2006г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/PLAN/paral_progr.html" target="_blank" rel="noopener"><strong>"Параллельное программирование"</strong></a>&nbsp;(основной курс)&nbsp;<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>к.ф.-м.н., доцент Стуколов С.В., 2008г.</em></p>
<p style="font-family: Arial; font-size: 13.3333px;">&nbsp;</p>
<p>&nbsp;</p>
<p style="font-family: Arial; font-size: 13.3333px;">&nbsp;</p>
<center style="font-family: Arial; font-size: 13.3333px;"><strong>Факультет филологии и журналистики</strong></center>
<p>&nbsp;</p>
<p style="font-family: Arial; font-size: 13.3333px;">&nbsp;</p>
<p style="font-family: Arial; font-size: 13.3333px;"><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/math_inf_ffj/programm.pdf" target="_blank" rel="noopener"><strong>"Математика и информатика."</strong></a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель:&nbsp;</em><em>доцент, к.п.н. Шмакова Л.Е., 2009г.</em></p>',
            ]);
        Page::create(
            [
                'name' => 'Программы курсов',
                'title' => 'Программы курсов',
                'text' => '<iframe src="kemsu.ru/education/schedule/" width="468" height="60" align="left">
    Ваш браузер не поддерживает плавающие фреймы!
 </iframe>',
            ]);
        Page::create(
            [
                'name' => 'Методические материалы',
                'title' => 'Методические материалы',
                'text' => '<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; padding: 0px; margin: 0px; font-family: Arial; font-size: 10pt;" border="0" width="95%" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;">
<p><a style="color: #0017a2; text-decoration-line: none;" href="http://umk.portal.kemsu.ru/NIT1/index.htm" target="_blank" rel="noopener"><strong>МАТЕМАТИКА И ИНФОРМАТИКА Часть1</strong></a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://umk.portal.kemsu.ru/NIT2/index.htm" target="_blank" rel="noopener"><strong>МАТЕМАТИКА И ИНФОРМАТИКА Часть2. Информатика.</strong></a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://umk.portal.kemsu.ru/uch-mathematics/index.htm" target="_blank" rel="noopener"><strong>МАТЕМАТИКА И ИНФОРМАТИКА Часть2. Математика.</strong></a><br />Электронное учебно-методическое пособие.<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составители: д.ф.-м.н., профессор Афанасьев К.Е., к.п.н., доцент Шмакова Л.Е., инженер-программист Моисеев А.А., Кемерово, 2009г.</em></p>
<p><a style="color: #0017a2; text-decoration-line: none;" href="http://umk.portal.kemsu.ru/mps/index.htm" target="_blank" rel="noopener"><strong>МНОГОПРОЦЕССОРНЫЕ ВЫЧИСЛИТЕЛЬНЫЕ СИСТЕМЫ И ПАРАЛЛЕЛЬНОЕ ПРОГРАММИРОВАНИЕ</strong></a><br />Электронный учебно-методический комплекс.<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составители: д.ф.-м.н., профессор К.Е. Афанасьев, к.ф.-м. н., доцент С.В. Стуколов, А.В. Демидов, В.В. Малышенко, Кемерово, 2002г.</em></p>
<p><a style="color: #0017a2; text-decoration-line: none;" href="http://umk.portal.kemsu.ru/sql/index.html" target="_blank" rel="noopener"><strong>ВВЕДЕНИЕ В ЯЗЫК СТРУКТУРИРОВАННЫХ ЗАПРОСОВ SQL</strong></a><br />Электронное учебное-методическое пособие.<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель: доцент, к.ф.-м.н. А.М. Гудов Кемерово, 2001г.</em></p>
<p><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/DB/index1.html" target="_blank" rel="noopener"><strong>БАЗЫ ДАННЫХ&nbsp;</strong></a><br />Мультимедийный электронный учебно-методический комплекс.<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составители: д.т.н, доцент Гудов А.М.; к.т.н.,доцент Завозкин С.Ю.; Пфайф Е.Д., Кемерово, 2013г.</em></p>
<p><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/bd/umk/book/index.html" target="_blank" rel="noopener"><strong>БАЗЫ ДАННЫХ И СУБД. ПРОГРАММИРОВАНИЕ НА PL/SQL</strong></a><br />Электронное учебное-методическое пособие.<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составители: доцент, к.ф.-м.н. А.М. Гудов, к.т.н. С.Ю. Завозкин, к.ф.-м.н. Т.С. Рейн Кемерово, 2009г.</em></p>
<p><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/po/UMK/index.html" target="_blank" rel="noopener"><strong>ТЕХНОЛОГИИ РАЗРАБОТКИ ПРОГРАММНОГО ОБЕСПЕЧЕНИЯ</strong></a><br />Электронный учебное-методический комплекс.<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составители: к.ф.-м.н., доцент А.М. Гудов, к.т.н. С.Ю. Завозкин, С.Н. Трофимов Кемерово, 2009г.</em></p>
<p><a style="color: #0017a2; text-decoration-line: none;" href="http://umk.portal.kemsu.ru/admin/index1.html" target="_blank" rel="noopener"><strong>АДМИНИСТРИРОВАНИЕ ИНФОРМАЦИОННЫХ СИСТЕМ</strong></a><br />Электронный учебно-методический комплекс.<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составители: к.ф.-м.н., доцент Гудов А.М.; к.т.н., доцент Завозкин С.Ю., Кемерово, 2011г.</em></p>
<p><a style="color: #0017a2; text-decoration-line: none;" href="http://umk.portal.kemsu.ru/java/index.html" target="_blank" rel="noopener"><strong>ПРОГРАММИРОВАНИЕ НА JAVA</strong></a><br />Мультимедийный электронный учебно-методический комплекс.<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составители: к.ф-м.н., доцент Карабцев С.Н., Кемерово, 2012г.</em></p>
<p><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/informatics/index1.html" target="_blank" rel="noopener"><strong>ИНФОРМАТИКА</strong></a><br />Мультимедийный электронный учебно-методический комплекс.<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель: к.т.н., доцент Завозкин С.Ю., Кемерово, 2011г.</em></p>
<p><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/ACSCN/main.html" target="_blank" rel="noopener"><strong>АРХИТЕКТУРА ВЫЧИСЛИТЕЛЬНЫХ СИСТЕМ И КОМПЬЮТЕРНЫХ СЕТЕЙ</strong></a><br />Мультимедийный электронный учебно-методический комплекс..<br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составители: к.т.н. Завозкин С.Ю., к.ф.-м.н. Трофимов С.Н., Кемерово, 2011г.</em></p>
</td>
</tr>
</tbody>
</table>
<p><br style="font-family: Arial; font-size: 13.3333px;" /><br style="font-family: Arial; font-size: 13.3333px;" /><br style="font-family: Arial; font-size: 13.3333px;" /><br style="font-family: Arial; font-size: 13.3333px;" /><br style="font-family: Arial; font-size: 13.3333px;" /></p>
<h3 style="font-family: Arial;" align="center">Учебно-методические материалы</h3>
<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; padding: 0px; margin: 0px; font-family: Arial; font-size: 10pt; height: 2902px; width: 95%;" border="0" width="95%" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; height: 2902px;">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; height: 2902px;">
<p><strong>СИСТЕМЫ ИСКУССТВЕННОГО ИНТЕЛЛЕКТА</strong><br /><em>Cпециальность 010503 "Математическое обеспечение и администрирование информационных систем"</em><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/AIS/program_AIS.doc">Программа курса</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/AIS/Lect_AIS.zip">Лекции курса</a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составители: к.ф.-м.н., доцент Григорьева И.В., 2009 г.</em></p>
<p><strong>ФУНКЦИОНАЛЬНОЕ ПРОГРАММИРОВАНИЕ</strong><br /><em>Cпециальность 010503 "Математическое обеспечение и администрирование информационных систем"</em><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/FP/program_FP.doc">Программа курса</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/FP/method_FP.doc">Методические рекомендации</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/FP/Lect_FP.zip">Лекции курса</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/FP/Lab_FP.zip">Лабораторные работы</a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составители: к.ф.-м.н., доцент Григорьева И.В., 2009 г.</em></p>
<p><strong>РЕКУРСИВНО-ЛОГИЧЕСКОЕ ПРОГРАММИРОВАНИЕ</strong><br /><em>Cпециальность 010503 "Математическое обеспечение и администрирование информационных систем"</em><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/RLP/program_RLP.doc">Программа курса</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/RLP/method_RLP.doc">Методические рекомендации</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/RLP/Lect_RLP.zip">Лекции курса</a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составители: к.ф.-м.н., доцент Григорьева И.В., 2009 г.</em></p>
<p><strong>ИНФОРМАТИКА</strong><br /><em>Cпециальность 010503 "Математическое обеспечение и администрирование информационных систем"</em><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/inform_010503/programm.pdf" target="_blank" rel="noopener">Программа курса</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/inform_010503/lecs.pdf" target="_blank" rel="noopener">Лекции курса</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/inform_010503/metods.pdf" target="_blank" rel="noopener">Методические рекомендации по изучению дисциплины</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/inform_010503/test_2009.pdf" target="_blank" rel="noopener">Примерный тестовые задания</a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составители: к.п.н., доцент Шмакова Л.Е., 2009 г.</em></p>
<p><strong>ОПЕРАЦИОННЫЕ СИСТЕМЫ (ДО)</strong><br /><em>Cпециальность 010503 "Математическое обеспечение и администрирование информационных систем"</em><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_DO/lect_1.pdf" target="_blank" rel="noopener">Лекция 1</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_DO/lect_2.pdf" target="_blank" rel="noopener">Лекция 2</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_DO/lect_3.pdf" target="_blank" rel="noopener">Лекция 3</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_DO/lect_4.pdf" target="_blank" rel="noopener">Лекция 4</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_DO/lect_5.pdf" target="_blank" rel="noopener">Лекция 5</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_DO/lect_6.pdf" target="_blank" rel="noopener">Лекция 6</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_DO/lect_7.pdf" target="_blank" rel="noopener">Лекция 7</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_DO/lect_8.pdf" target="_blank" rel="noopener">Лекция 8</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_DO/lect_9.pdf" target="_blank" rel="noopener">Лекция 9</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_DO/lect_10.pdf" target="_blank" rel="noopener">Лекция 10</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_DO/lect_11.pdf" target="_blank" rel="noopener">Лекция 11</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_DO/lect_12.pdf" target="_blank" rel="noopener">Лекция 12</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_DO/questions.doc" target="_blank" rel="noopener">Вопросы на экзамен</a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составители: Рейн Т.С., Трофимов С.Н.</em></p>
<p><strong>ОПЕРАЦИОННЫЕ СИСТЕМЫ (ОЗО)</strong><br /><em>Cпециальность 010503 "Математическое обеспечение и администрирование информационных систем"</em><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_ozo/Lect1.zip" target="_blank" rel="noopener">Лекция 1</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_ozo/Lect2.zip" target="_blank" rel="noopener">Лекция 2</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_ozo/Lect3.zip" target="_blank" rel="noopener">Лекция 3</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_ozo/Lect4.zip" target="_blank" rel="noopener">Лекция 4</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_ozo/Lect5.zip" target="_blank" rel="noopener">Лекция 5</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_ozo/Lect6.zip" target="_blank" rel="noopener">Лекция 6</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_ozo/Lect7.zip" target="_blank" rel="noopener">Лекция 7</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_ozo/Pract1.zip" target="_blank" rel="noopener">Практическая работа 1</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_ozo/Pract2.zip" target="_blank" rel="noopener">Практическая работа 2</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_ozo/Pract3.zip" target="_blank" rel="noopener">Практическая работа 3</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_ozo/Pract4.zip" target="_blank" rel="noopener">Практическая работа 4</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/OS_ozo/Pract5.zip" target="_blank" rel="noopener">Практическая работа 5</a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составители: Демидов А.В., Малышенко В.В.</em></p>
<p><strong>ТЕХНОЛОГИИ РАЗРАБОТКИ ПРОГРАММНОГО ОБЕСПЕЧЕНИЯ</strong><br /><em>Cпециальность 010503 "Математическое обеспечение и администрирование информационных систем"</em><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/po/programm_se.pdf" target="_blank" rel="noopener">Программа курса</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/po/lections_se.pdf" target="_blank" rel="noopener">Конспект лекций</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/po/lab1.pdf" target="_blank" rel="noopener">Лабораторная работа №1</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/po/lab2.pdf" target="_blank" rel="noopener">Лабораторная работа №2</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/po/lab3.pdf" target="_blank" rel="noopener">Лабораторная работа №3</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/po/lab4.pdf" target="_blank" rel="noopener">Лабораторная работа №4</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/po/lab5.pdf" target="_blank" rel="noopener">Лабораторная работа №5</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/po/metod_se.pdf" target="_blank" rel="noopener">Методические рекомендации по выполнению лабораторных работ</a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель: к.ф.-м.н., доцент Гудов А.М. 2008 г.</em></p>
<p><strong>БАЗЫ ДАННЫХ Часть I (учебно-методический комплекс)</strong><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/bd%20I/Programm.pdf" target="_blank" rel="noopener">Рабочая программа</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/bd%20I/Lections.pdf" target="_blank" rel="noopener">Конспект лекций</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/bd%20I/Semestr.pdf" target="_blank" rel="noopener">Семестровые задания</a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель: к.ф.-м.н., доцент Стуколов С.В. 2008г.</em></p>
<p><strong>БАЗЫ ДАННЫХ Часть II&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/bd/umk/index.html" target="_blank" rel="noopener">(учебно-методический комплекс)</a></strong><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/bd/titul.pdf" target="_blank" rel="noopener">Титульный лист</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/bd/program_db.pdf" target="_blank" rel="noopener">Рабочая программа</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/bd/lections_db.pdf" target="_blank" rel="noopener">Конспект лекций</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/bd/labs_db.pdf" target="_blank" rel="noopener">Задания на лабораторный практикум</a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель: к.ф.-м.н., доцент Гудов А.М. 2008г.</em></p>
<p><strong>НОВЫЕ ИНФОРМАЦИОННЫЕ ТЕХНОЛОГИИ</strong>&nbsp;(учебно-методический комплекс)&nbsp;<br /><em>Cпециальность 010501 "Прикладная математика и информатика"</em><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/nit/NIT_prog_2008.pdf" target="_blank" rel="noopener">Рабочая программа курса</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/nit/NIT.pdf" target="_blank" rel="noopener">Конспект лекций</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/nit/NIT_56.pdf" target="_blank" rel="noopener">Конспект лекций (дополнительный материал)</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/nit/Lab_1.pdf" target="_blank" rel="noopener">Лабораторная работа № 1</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/nit/Lab_2.pdf" target="_blank" rel="noopener">Лабораторная работа № 2</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/nit/Lab_3.pdf" target="_blank" rel="noopener">Лабораторная работа № 3</a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составители: доцент Гудов А.М., 2008г.</em><br /><br /></p>
<p><strong>МЕТРОЛОГИЯ И КАЧЕСТВО ПРОГРАММНОГО ОБЕСПЕЧЕНИЯ</strong><br /><em>Cпециальность 010503 "Математическое обеспечение и администрирование информационных систем"</em><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/ql/ql_programma.pdf" target="_blank" rel="noopener">Рабочая программа курса</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/ql/ql_lec.pdf" target="_blank" rel="noopener">Конспект лекций</a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель: к.ф.-м.н., доцент Гудов А.М. 2009г.</em></p>
<p><strong>КОМПЬЮТЕРНЫЕ СЕТИ</strong><br /><em>Cпециальность 010503 "Математическое обеспечение и администрирование информационных систем"</em><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/networks/lect_1.pdf" target="_blank" rel="noopener">Лекция 1</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/networks/lect_2.pdf" target="_blank" rel="noopener">Лекция 2</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/networks/lect_3.pdf" target="_blank" rel="noopener">Лекция 3</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/networks/lect_4.pdf" target="_blank" rel="noopener">Лекция 4</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/networks/lect_5.pdf" target="_blank" rel="noopener">Лекция 5</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/networks/lect_6.pdf" target="_blank" rel="noopener">Лекция 6</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/networks/lect_7.pdf" target="_blank" rel="noopener">Лекция 7</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/networks/lect_8.pdf" target="_blank" rel="noopener">Лекция 8</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/networks/lect_9.pdf" target="_blank" rel="noopener">Лекция 9</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/networks/lect_10.pdf" target="_blank" rel="noopener">Лекция 10</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/networks/lect_11.pdf" target="_blank" rel="noopener">Лекция 11</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/networks/lect_12.pdf" target="_blank" rel="noopener">Лекция 12</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/networks/lect_13.pdf" target="_blank" rel="noopener">Лекция 13</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/networks/questions.doc" target="_blank" rel="noopener">Вопросы к экзамену</a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составители: Малышенко В.В., Трофимов С.Н. 2011 г.</em></p>
<p><strong>КОМПЬЮТЕРНЫЕ СЕТИ (СПО)</strong><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/komp_seti_spo/LESSON/lect_1.ppt" target="_blank" rel="noopener">Лекция 1</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/komp_seti_spo/LAB/lab1.zip" target="_blank" rel="noopener">Лабораторная 1</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/networks/questions.doc" target="_blank" rel="noopener">Вопросы к экзамену</a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель: Трофимов С.Н. 2013 г.</em></p>
<p><br /><strong>СЕТЕВЫЕ ПРОТОКОЛЫ И УПРАВЛЕНИЕ СЕТЯМИ</strong><br /><em>Cпециальность 010503 "Математическое обеспечение и администрирование информационных систем"</em><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/network_protocols/lect1.zip" target="_blank" rel="noopener">Лекция 1</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/network_protocols/lect2.zip" target="_blank" rel="noopener">Лекция 2</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/network_protocols/lect3.zip" target="_blank" rel="noopener">Лекция 3</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/network_protocols/lect4.zip" target="_blank" rel="noopener">Лекция 4</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/network_protocols/lect5.zip" target="_blank" rel="noopener">Лекция 5</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/network_protocols/lect6.zip" target="_blank" rel="noopener">Лекция 6</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/network_protocols/lect7.zip" target="_blank" rel="noopener">Лекция 7</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/network_protocols/lect8.zip" target="_blank" rel="noopener">Лекция 8</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/network_protocols/lect9.zip" target="_blank" rel="noopener">Лекция 9</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/network_protocols/lect10.zip" target="_blank" rel="noopener">Лекция 10</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/network_protocols/lect11.zip" target="_blank" rel="noopener">Лекция 11</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/network_protocols/questions.zip" target="_blank" rel="noopener">Вопросы к экзамену</a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель: Трофимов С.Н. 2009г.</em></p>
<p><strong>МАТЕМАТИКА И ИНФОРМАТИКА</strong><br /><em>Факультет филологии и журналистики</em><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/math_inf_ffj/programm.pdf" target="_blank" rel="noopener">Программа курса</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/math_inf_ffj/lab_1.pdf" target="_blank" rel="noopener">Лабораторная работа 1</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/math_inf_ffj/lab_2.pdf" target="_blank" rel="noopener">Лабораторная работа 2</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/math_inf_ffj/lab_3.pdf" target="_blank" rel="noopener">Лабораторная работа 3</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/math_inf_ffj/lab_4.pdf" target="_blank" rel="noopener">Лабораторная работа 4</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/math_inf_ffj/lab_5.pdf" target="_blank" rel="noopener">Лабораторная работа 5</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/math_inf_ffj/lab_6.pdf" target="_blank" rel="noopener">Лабораторная работа 6</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/math_inf_ffj/problems.pdf" target="_blank" rel="noopener">Примерные тестовые задания</a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель: к.п.н., доцент Шмакова Л.Е., 2009г.</em></p>
<p><strong>КОМПЬЮТЕРНЫЕ НАУКИ</strong><br /><em>Cпециальность 010101 "Математика", семестр 4</em><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/comp_nauki_4/programm.pdf" target="_blank" rel="noopener">Программа курса</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/comp_nauki_4/lecs.pdf" target="_blank" rel="noopener">Лекции</a><br /><a style="color: #0017a2; text-decoration-line: none;" href="http://unesco.kemsu.ru/study_work/method/comp_nauki_4/tests.pdf" target="_blank" rel="noopener">Примерные тестовые задания</a><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Составитель: к.п.н., доцент Шмакова Л.Е., 2009г.</em></p>
</td>
</tr>
</tbody>
</table>',
            ]);
        Page::create(
            [
                'name' => 'Направления',
                'title' => 'Направление научных исследований:',
                'text' => '<div id="description">
<ul>
<li><strong>Разработка перспективных численных методов;</strong></li>
<li><a href="../../../page/15">Обобщенный метод естественных соседей (Natural Element Method - NEM)</a></li>
<li><a href="../../../page/16">Метод сглаженных частиц (Smoothed Particle Hydrodynamics - SPH)</a></li>
<li><strong style="font-family: Arial; font-size: 13.3333px;">Развитие новых технологий в численных расчетах: использование многопроцессорных вычислительных ресурсов, создание сервисов для удобства использования специфического ресурса;</strong></li>
</ul>
</div>
<ul style="font-family: Arial; font-size: 13.3333px;">
<li><strong>Численное исследование задач гидродинамики со свободными границами;</strong></li>
<li><strong>Исследование информационных процессов при решении прикладных задач;</strong></li>
<li><strong>Построение сложных информационных систем и сервисов;</strong></li>
</ul>',
            ]);
        Page::create(
            [
                'name' => 'Программы курсов',
                'title' => 'Программы курсов',
                'text' => '',
            ]);
        Page::create(
            [
                'name' => 'Программы курсов',
                'title' => 'Программы курсов',
                'text' => '',
            ]);
        Page::create(
            [
                'name' => 'Программы курсов',
                'title' => 'Программы курсов',
                'text' => '',
            ]);
        Page::create(
            [
                'name' => 'Программы курсов',
                'title' => 'Программы курсов',
                'text' => '',
            ]);
        Page::create(
            [
                'name' => 'Программы курсов',
                'title' => 'Программы курсов',
                'text' => '',
            ]);
        Page::create(
            [
                'name' => 'Программы курсов',
                'title' => 'Программы курсов',
                'text' => '',
            ]);
        Page::create(
            [
                'name' => 'Программы курсов',
                'title' => 'Программы курсов',
                'text' => '',
            ]);
        Page::create(
            [
                'name' => 'Направления',
                'title' => 'Обобщенный метод естественных соседей',
                'text' => '<p><span style="font-family: Arial; font-size: 13.3333px; text-align: -webkit-center;">К общим недостаткам бессеточных методов можно отнести сравнительно невысокую точность и трудность введения граничных условий. В стандартных бессеточных методах для построения интерполяционных функций дополнительно требуется обеспечить узловую связность. В связи с этим стали разрабатываться методы, сочетающие в себе сеточный и бессеточный подходы и использующие преимущества каждой из методологий. Характерными представителями этой группы методов являются бессеточный метод конечных элементов (Meshless Finite Element Method) и метод естественных соседей (Natural Element Method). Методы MFEM и NEM сохраняют преимущества классического метода конечных элементов, такие как простота функции формы в области определения, непрерывность между элементами, простота введения граничных условий. При этом эти методы имеют все преимущества бессеточных методов в силу того, что функции формы MFEM и NEM зависят только от положения узловых точек. В основе метода естественных соседей и бессеточного метода конечных элементов лежит метод Галеркина в слабой форме. Для интерполяции неизвестных функций используются соответственно функции формы Сибсона и Лапласа, базирующиеся на понятии естественных соседей.</span></p>
<p>&nbsp;</p>
<center style="font-family: Arial; font-size: 13.3333px;">
<h3>Задача Л.В. Овсянникова о деформации жидкого эллипса</h3>
</center><center style="font-family: Arial; font-size: 13.3333px;">
<div id="player01" style="width: 320px; height: 240px;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</center><hr style="font-family: Arial; font-size: 13.3333px;" align="center" size="3" width="700" /><center style="font-family: Arial; font-size: 13.3333px;">
<h3>Движение вязкой жидкости в квадратной каверне с движущейся крышкой</h3>
</center><center style="font-family: Arial; font-size: 13.3333px;">
<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; padding: 0px; margin: 0px; font-size: 10pt;" border="0" cellspacing="0" cellpadding="4">
<tbody>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 5px; margin: 0px;">
<div id="player02" style="width: 320px; height: 240px;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 5px; margin: 0px;">
<div id="player03" style="width: 320px; height: 240px;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</td>
</tr>
</tbody>
</table>
</center><hr style="font-family: Arial; font-size: 13.3333px;" align="center" size="3" width="700" /><center style="font-family: Arial; font-size: 13.3333px;">
<h3>Колебания жидкости в прямоугольном бассейне</h3>
</center><center style="font-family: Arial; font-size: 13.3333px;">
<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; padding: 0px; margin: 0px; font-size: 10pt;" border="0" cellspacing="0" cellpadding="4">
<tbody>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 5px; margin: 0px;">
<div id="player05" style="width: 320px; height: 240px;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 5px; margin: 0px;">
<div id="player06" style="width: 320px; height: 240px;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 5px; margin: 0px;">
<div id="player07" style="width: 320px; height: 240px;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</td>
</tr>
</tbody>
</table>
</center><hr style="font-family: Arial; font-size: 13.3333px;" align="center" size="3" width="700" /><center style="font-family: Arial; font-size: 13.3333px;">
<h3>Задача об обрушении столба жидкости</h3>
</center><center style="font-family: Arial; font-size: 13.3333px;">
<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; padding: 0px; margin: 0px; font-size: 10pt;" border="0" cellspacing="0" cellpadding="4">
<tbody>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 5px; margin: 0px;">
<div id="player08" style="width: 320px; height: 240px;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 5px; margin: 0px;">
<div id="player09" style="width: 320px; height: 240px;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</td>
</tr>
</tbody>
</table>
</center><hr style="font-family: Arial; font-size: 13.3333px;" align="center" size="3" width="700" /><center style="font-family: Arial; font-size: 13.3333px;">
<h3>Задача об обрушении плотины при наличии слоя жидкости на основании</h3>
</center><center style="font-family: Arial; font-size: 13.3333px;">
<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; padding: 0px; margin: 0px; font-size: 10pt;" border="0" cellspacing="0" cellpadding="4">
<tbody>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 5px; margin: 0px;">
<div id="player10" style="width: 320px; height: 240px;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 5px; margin: 0px;">
<div id="player11" style="width: 320px; height: 240px;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</td>
</tr>
</tbody>
</table>
</center><hr style="font-family: Arial; font-size: 13.3333px;" align="center" size="3" width="700" /><center style="font-family: Arial; font-size: 13.3333px;">
<h3>Задача о взаимодействии жидкости с горизонтальной поверхностью</h3>
</center><center style="font-family: Arial; font-size: 13.3333px;">
<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; padding: 0px; margin: 0px; font-size: 10pt;" border="0" cellspacing="0" cellpadding="4">
<tbody>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 5px; margin: 0px;">
<div id="player12" style="width: 320px; height: 240px;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 5px; margin: 0px;">
<div id="player13" style="width: 320px; height: 240px;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 5px; margin: 0px;">
<div id="player14" style="width: 320px; height: 240px;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 5px; margin: 0px;">
<div id="player15" style="width: 320px; height: 240px;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 5px; margin: 0px;">
<div id="player16" style="width: 320px; height: 240px;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</td>
</tr>
</tbody>
</table>
</center>',
            ]);
        Page::create(
            [
                'name' => 'Направления',
                'title' => 'Метод сглаженных частиц',
                'text' => '<p style="font-family: Arial; font-size: 13.3333px;" align="center">Специфика бессеточных методов заключается в том, что для построения функций формы на разных временных шагах используются различные наборы расчетных узлов, которые могут свободно перемещаться, ввиду отсутствия между ними жестких связей. Вследствие этого, наиболее целесообразно использовать эти методы для решения тех задач, где область расчета подвергается значительными деформациям.<br />Одним из наиболее распространенных методов, относящихся к классу бессеточных, является метод сглаженных частиц &ndash; SPH (Smoothed Particle Hydrodynamics). В методе частиц знание связей между узлами не требуется ни на одном этапе численного решения задач, что обусловливает ряд его преимуществ перед другими методами, классифицируемыми как бессеточные, а именно:</p>
<ul>
<li style="font-family: Arial; font-size: 13.3333px;">относительная простота программной реализации, ввиду отсутствия потребности в использовании сложных алгоритмов численного интегрирования, построения или адаптации сетки;</li>
<li style="font-family: Arial; font-size: 13.3333px;">использование простых в реализации алгоритмов определения свободных границ и границ раздела;</li>
<li style="font-family: Arial; font-size: 13.3333px;">непосредственный переход к решению трехмерных задач без привлечения дополнительных, не характерных для двумерных случаев, алгоритмов.</li>
</ul>
<p><span style="font-family: Arial; font-size: 13.3333px;">В основе метода сглаженных частиц лежит формула усреднения функции по Стеклову.</span></p>
<p>Основные публикации по данному методу:</p>
<ol style="font-family: Arial; font-size: 13.3333px;">
<li>Афанасьев К. Е., Ильясов А. Е., Макарчук Р. С., Попов А. Ю. Численное моделирование течений жидкости со свободными границами методами SPH и MPS // Вычислительные технологии. 2006. Т.11. Спецвыпуск №9. С. 26&ndash;44.</li>
<li>Afanasiev K. E., Makarchuk R. S., Popov A. Yu. Hydrodynamic Loads Computation Using the Smoothed Particle Methods // Hydrodynamics - Optimizing Methods and Tools / editors: H. E. Schulz, A. L. A. Simoes, R. J. Lobosco. InTech, 2011. P. 51-68.</li>
<li>Afanas\'ev K. E., Makarchuk R. S. Calculation of hydrodynamic loads at solid boundaries of the computation domain by the ISPH method in problems with free boundaries // Russian Journal of Numerical Analysis and Mathematical Modelling. 2011. Vol. 26. № 5. P. 447&ndash;464.</li>
<li>Макарчук Р. С. Численное исследование процессов входа и погружения плоского цилиндра в несжимаемую жидкость методом сглаженных частиц // Вестник КемГУ. 2012. Т.1. №4(52). С. 110-115.</li>
</ol>
<p>&nbsp;</p>
<center style="font-family: Arial; font-size: 13.3333px;"><hr />
<h3>Задача Л.В. Овсянникова о деформации жидкого эллипса</h3>
</center>
<p style="font-family: Arial; font-size: 13.3333px;">В начальный момент времени свободная граница области расчета представляет собой окружность, внутри которой заключена несжимаемая жидкость. Последующая деформация свободной границы в эллипс происходит в отсутствие внешних сил под воздействием заданного поля скоростей.</p>
<div style="font-family: Arial; font-size: 13.3333px;">
<div style="float: left; margin-left: 15px; margin-top: 40px; margin-right: 20px;">
<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; padding: 0px; margin: 0px; font-size: 10pt;" border="2">
<tbody>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center" bgcolor="yellow">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Параметр</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Значение</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Плотность жидкости</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">1 кг/м^3</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Ускорение силы тяжести</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">0 м/с^2</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Коэффициент кинематической вязкости жидкости</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">0 м^2/с</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Начальный радиус расчетной области</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">1 м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Начальное поле скоростей (u,v)</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">(x, -y)</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center" bgcolor="red">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Количество частиц</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">1317</td>
</tr>
</tbody>
</table>
</div>
<div id="player01" style="width: 320px; height: 240px; float: left;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</div>
<center style="font-family: Arial; font-size: 13.3333px;">
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<hr />
<h3>Задача о падении капли в жидкость</h3>
</center>
<p style="font-family: Arial; font-size: 13.3333px;">В бассейн, заполненный несжимаемой жидкостью, падает капля жидкости той же плотности в поле силы тяжести.</p>
<div style="font-family: Arial; font-size: 13.3333px;">
<div style="float: left; margin-left: 15px; margin-top: 40px; margin-right: 20px;">
<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; padding: 0px; margin: 0px; font-size: 10pt;" border="2">
<tbody>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center" bgcolor="yellow">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Параметр</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Значение</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Плотность жидкости</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">1000 кг/м^3</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Ускорение силы тяжести</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">9.81 м/с^2</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Коэффициент кинематической вязкости жидкости</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">5*10^-4 м^2/с</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Длина бассейна</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">0.12 м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Глубина бассейна</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">0.02 м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Радиус капли</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">0.005 м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Скорость капли</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">(0,-2) м/с</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center" bgcolor="red">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Количество частиц</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">7119</td>
</tr>
</tbody>
</table>
</div>
<div id="player02" style="width: 320px; height: 240px; float: left;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</div>
<center style="font-family: Arial; font-size: 13.3333px;">
<h3>&nbsp;</h3>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<hr />
<h3>Задача о разрушении плотины</h3>
</center>
<p style="font-family: Arial; font-size: 13.3333px;">Столб несжимаемой жидкости, заключенной между вертикальной стенкой бассейна и перегородкой, находится в состоянии покоя. В начальный момент времени перегородка мгновенно удаляется, вследствие чего возникает движение жидкости по сухому дну бассейна к противоположной его стенке в поле силы тяжести.</p>
<div style="font-family: Arial; font-size: 13.3333px;">
<div style="float: left; margin-left: 15px; margin-top: 40px; margin-right: 20px;">
<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; padding: 0px; margin: 0px; font-size: 10pt;" border="2">
<tbody>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center" bgcolor="yellow">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Параметр</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Значение</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Плотность жидкости</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">1000 кг/м^3</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Ускорение силы тяжести</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">9.81 м/с^2</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Коэффициент кинематической вязкости жидкости</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">10^-6 м^2/с</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Уровень жидкости в верхнем бьефе</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">2.92 м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Ширина столба жидкости</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">1.46 м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center" bgcolor="red">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Количество частиц</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">5635</td>
</tr>
</tbody>
</table>
</div>
<div id="player03" style="width: 320px; height: 240px; float: left;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</div>
<center style="font-family: Arial; font-size: 13.3333px;">
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<hr />
<h3>Задача о всплытии бесконечного цилиндра с круглой формой основания в жидкости</h3>
</center>
<p style="font-family: Arial; font-size: 13.3333px;">В бассейн, заполненный несжимаемой жидкостью, погружен твердый цилиндр с круглой формой основания. Всплытие цилиндра происходит в поле силы тяжести под действием выталкивающей силы Архимеда.</p>
<div style="font-family: Arial; font-size: 13.3333px;">
<div style="float: left; margin-left: 15px; margin-top: 10px; margin-right: 20px;">
<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; padding: 0px; margin: 0px; font-size: 10pt;" border="2">
<tbody>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center" bgcolor="yellow">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Параметр</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Значение</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Плотность жидкости</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">1000 кг/м^3</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Плотность цилиндра</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">500 кг/м^3</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Ускорение силы тяжести</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">9.81 м/с^2</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Коэффициент кинематической вязкости жидкости</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">10^-6 м^2/с</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Длина бассейна</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">0.12 м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Глубина бассейна</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">0.02 м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Радиус основания цилиндра</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">0.005 м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Начальное положение центра масс цилиндра</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">(0.06, 0.01) м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center" bgcolor="red">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Количество частиц</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">11574</td>
</tr>
</tbody>
</table>
</div>
<div id="player04" style="width: 320px; height: 240px; float: left;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</div>
<center style="font-family: Arial; font-size: 13.3333px;">
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<hr />
<h3>Задача о входе и погружении бесконечного цилиндра с круглой формой основания в жидкость.</h3>
</center>
<p style="font-family: Arial; font-size: 13.3333px;">В бассей, заполненный несжимаемой жидкостью, падает твердый цилиндр с круглой формой основания в поле силы тяжести.</p>
<div style="font-family: Arial; font-size: 13.3333px;">
<div style="float: left; margin-left: 15px; margin-top: 10px; margin-right: 20px;">
<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; padding: 0px; margin: 0px; font-size: 10pt;" border="2">
<tbody>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center" bgcolor="yellow">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Параметр</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Значение</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Плотность жидкости</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">1000 кг/м^3</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Плотность цилиндра</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">500 кг/м^3</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Ускорение силы тяжести</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">9.81 м/с^2</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Коэффициент кинематической вязкости жидкости</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">10^-6 м^2/с</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Длина бассейна</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">0.12 м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Глубина бассейна</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">0.02 м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Радиус основания цилиндра</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">0.005 м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Начальное положение центра масс цилиндра</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">(0.06, 0.03) м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center" bgcolor="red">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Количество частиц</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">11915</td>
</tr>
</tbody>
</table>
</div>
<div id="player05" style="width: 320px; height: 240px; float: left;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
</div>
</div>
<center style="font-family: Arial; font-size: 13.3333px;">
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<hr />
<h3>Задача о входе и погружении бесконечного цилиндра с квадратной формой основания в жидкость.</h3>
</center>
<p style="font-family: Arial; font-size: 13.3333px;">В бассей, заполненный несжимаемой жидкостью, падает твердый цилиндр с квадратной формой основания в поле силы тяжести. Диагональ основания цилиндра параллельна вектору ускорения силы тяжести.</p>
<div style="font-family: Arial; font-size: 13.3333px;">
<div style="float: left; margin-left: 15px; margin-top: 10px; margin-right: 20px;">
<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; padding: 0px; margin: 0px; font-size: 10pt;" border="2">
<tbody>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center" bgcolor="yellow">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Параметр</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Значение</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Плотность жидкости</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">1000 кг/м^3</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Плотность цилиндра</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">500 кг/м^3</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Ускорение силы тяжести</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">9.81 м/с^2</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Коэффициент кинематической вязкости жидкости</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">10^-6 м^2/с</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Длина бассейна</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">0.12 м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Глубина бассейна</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">0.02 м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Дляна стороны цилиндра</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">0.01 м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Начальное положение центра масс цилиндра</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">(0.06, 0.03) м</td>
</tr>
<tr style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px;" align="center" bgcolor="red">
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">Количество частиц</td>
<td style="border-spacing: 0px; border-collapse: collapse; padding: 0px; margin: 0px; font-size: 17.3333px; font-family: sans-serif;" colspan="3">11915</td>
</tr>
</tbody>
</table>
</div>
<div id="player06" style="width: 320px; height: 240px; float: left;">
<h2>Flash version 9,0 or greater is required</h2>
<h3>You have no flash plugin installed</h3>
<p>Download latest version from&nbsp;<a style="color: #0017a2; text-decoration-line: none;" href="http://www.adobe.com/go/getflashplayer">here</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</div>',
            ]);
        Page::create(
            [
                'name' => 'Программы курсов',
                'title' => 'Программы курсов',
                'text' => '',
            ]);
    }
}
