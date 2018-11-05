<header>
    <div class="wrapper">


        <h1><a href="{{route('home')}}">  <img src="http://x-lines.ru/letters/i/cyrillicscript/0288/ffffff/32/0/4ne7bxstodemtwcbrdejbwcf4napbx6ozmemtwf7ryoy.png"><br>
                <img src="http://x-lines.ru/letters/i/cyrillicscript/0288/ffffff/20/0/kbrfyenrci5gk5dxqb1zr.png"></a></h1>

        <ul style="float: right">
            <li><a href="https://github.com/BorisAHAP/Resume" target="_blank">Посмотреть код</a></li>
        </ul>
        <br><br><br>
        <nav>
            <ul id="menu">
                <li id="{{Request::is('/') ? 'active' : ''}}"><a href="{{route('home')}}">Главная</a></li>
                <li id="{{Request::is('obo-mne') ? 'active' : ''}}"><a href="{{route('about')}}">Обо мне</a></li>
                <li id="{{Request::is('kontakty') ? 'active' : ''}}"><a href="{{route('contact')}}">Контакты</a></li>
            </ul>
        </nav>
    </div>
    <div class="relative">
        <div id="gallery">
            <ul id="myRoundabout">
                <li><img src="{{asset('images/img1.png')}}" alt=""></li>
                <li><img src="{{asset('images/img2.png')}}" alt=""></li>
                <li><img src="{{asset('images/img3.png')}}" alt=""></li>
            </ul>
        </div>
    </div>
</header>