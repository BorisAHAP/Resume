@extends('layouts.app')
@section('content')
    <section id="content">
        <div class="wrapper">
            <h2>Send me</h2>
            <form id="ContactForm">
                <div>
                    <div class="wrapper">
                        <span>Your Name:</span><input type="text" class="input" >
                    </div>
                    <div class="wrapper">
                        <span>Your E-mail:</span><input type="text" class="input" >
                    </div>
                    <div class="textarea_box">
                        <span>Your Message:</span><textarea name="textarea" cols="1" rows="1"></textarea>
                    </div>
                    <span>&nbsp;</span>
                    <a href="#" class="button" onClick="document.getElementById('ContactForm').reset()">Очистить</a>
                    <a href="#" class="button" onClick="document.getElementById('ContactForm').submit()">Отправить</a>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('content2')
    <div class="line2 wrapper">
        <div class="wrapper">
            <article class="col1">
                <h2>Miscellaneous</h2>
                <div class="pad">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.
                </div>
            </article>
            <article class="col2 pad_left1">
                <h2>My Contacts</h2>
                <div class="pad">
							<span class="col3">
								<strong>
									Страна: Беларусь<br>
									Город: Минск<br>
									Телефон: +375447107787<br>
									Email: <a href="mailto:">achapkin2009@mail.ru</a>
								</strong>
							</span>
                </div>
            </article>
        </div>
    </div>
@endsection