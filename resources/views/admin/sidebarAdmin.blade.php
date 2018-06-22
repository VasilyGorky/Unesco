<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none; margin-top: 30px; width: 250px; " id="mySidebar">
    <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>

    <a href="{{ url('/') }}" class="w3-bar-item w3-button">Главная</a>

    <a href="{{ url('admin/page/1') }}" class="w3-bar-item w3-button">Кафедра</a>

    <a href="{{ url('admin/page/2') }}" class="w3-bar-item w3-button">Положение</a>

    <button class="w3-button w3-block w3-left-align" onclick="education()">
        Учебная деятельность <i class="fa fa-caret-down"></i>
    </button>
    <div id="education" class="w3-hide w3-white w3-card">
        <a href="{{ url('admin/page/3') }}" class="w3-bar-item w3-button">Специализации</a>
        <a href="{{ url('admin/page/4') }}" class="w3-bar-item w3-button">Программы курсов</a>
        <a href="{{ url('admin/page/5') }}" class="w3-bar-item w3-button">Рассписание занятий</a>
        <a href="{{ url('admin/page/6') }}" class="w3-bar-item w3-button">Методические материалы</a>
    </div>

    <button class="w3-button w3-block w3-left-align" onclick="science()">
        Научная деятельность <i class="fa fa-caret-down"></i>
    </button>
    <div id="science" class="w3-hide w3-white w3-card">
        <a href="{{ url('admin/page/7') }}" class="w3-bar-item w3-button">Направления</a>
        <a href="{{ url('admin/page/8') }}" class="w3-bar-item w3-button">Публикации</a>
        <a href="{{ url('admin/page/9') }}" class="w3-bar-item w3-button">Проекты</a>
        <a href="{{ url('admin/page/10') }}" class="w3-bar-item w3-button">Научные работы</a>
        <a href="{{ url('admin/page/11') }}" class="w3-bar-item w3-button">Отчеты</a>
    </div>

    <a href="{{ url('admin/page/12') }}" class="w3-bar-item w3-button">Студенту</a>

    <a href="{{ url('admin/page/13') }}" class="w3-bar-item w3-button">Абитуриенту</a>

    <a href="{{ url('admin/page/14') }}" class="w3-bar-item w3-button">Магистранту</a>


</div>




<div class="w3-container">
    @yield('content')
</div>

<script>

    function education() {
        var x = document.getElementById("education");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-green";
        } else {
            x.className = x.className.replace(" w3-show", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace(" w3-green", "");
        }
    }

    function science() {
        var x = document.getElementById("science");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-green";
        } else {
            x.className = x.className.replace(" w3-show", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace(" w3-green", "");
        }
    }

    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>

</body>
</html>
