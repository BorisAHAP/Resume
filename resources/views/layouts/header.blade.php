<header>
    <div class="wrapper">
        <h1><a href="{{route('home')}}" id="logo"></a></h1>
        <br><br><br>
        <nav>
            <ul id="menu">
                <li id="active"><a href="index.html">Главная</a></li>
                <li><a href="About.html">Обо мне</a></li>
                <li class="end"><a href="Contact.html">Контакты</a></li>
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