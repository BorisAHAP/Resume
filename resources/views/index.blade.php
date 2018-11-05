@extends('layouts.app')
@section('content')
    <section id="content">
        <div class="line1">
            <div class="line2 wrapper">
                <div class="wrapper">
                    <article class="col1">
                        <h2>Shortly About Me</h2>
                        <figure><img src="{{asset('images/page1_img1.jpg')}}" alt="" class="pad_bot1"></figure>
                        <div class="pad">
                            <p>
                                This Photographer’s Portfolio is one of <a href="http://blog.templatemonster.com/free-website-templates/ " target="_blank">free website templates</a> created by TemplateMonster.com team
                            </p>
                        </div>
                    </article>
                    <article class="col2 pad_left1">
                        <h2>Experiences</h2>
                        <div class="pad">
                            <ul class="list1">
                                <li><a href="#">Fashion Show</a>Maecenas ut ipsum id nibh cursus sagittis sit...</li>
                                <li><a href="#">Animals Photo Session</a>Mauris iaculis semper magna in eleifend. Phasellus a...</li>
                                <li><a href="#">Sport Shots</a>Quisque ipsum ipsum, tincidunt eu euismod non, blandit...</li>
                            </ul>
                        </div>
                    </article>
                    <article class="col3 pad_left1">
                        <h2>Task List</h2>
                        <div class="pad">
                            <div class="wrapper">
                                <span class="date"><span>22</span>may</span>
                                <p>
                                    <a href="#" class="link1">Sed ut perspiciatis</a><br>
                                    This <a href="http://blog.templatemonster.com/2011/05/16/free-website-template-photographers-portfolio/ " target="_blank" rel="nofollow">Free Website Template</a> goes with two packages. With PSD source files and without.
                                </p>
                            </div>
                            <div class="wrapper">
                                <span class="date"><span>28</span>may</span>
                                <p>
                                    <a href="#" class="link1">Doperiam eaque ipsa </a><br>
                                    Quae ab illo inventore veritatis et quasi archiecto beatae vitaedic explicaob emo enim ipsam.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="wrapper buttons">
                    <article class="col1">
                        <a href="#" class="button">Read More</a>
                    </article>
                    <article class="col2 pad_left1">
                        <a href="#" class="button">Read More</a>
                    </article>
                    <article class="col3 pad_left1">
                        <a href="#" class="button">News Archive</a>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content2')
    <div class="line2 wrapper">
        <div class="wrapper">
            <article class="col1">
                <h2>My Philosophy</h2>
                <div class="wrapper">
                    <figure class="left marg_right1"><img src="{{asset('images/page1_img2.jpg')}}" alt="">
                    </figure>
                    <p>
                        <strong>At vero eos et accusamus iusto</strong>
                        odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque <a
                                href="#">corrupti quos dolores</a> et quas moles- tias excepturi sint
                        occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt.
                    </p>
                </div>
                <div class="pad">
                    <p>
                        Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                        soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                    </p>
                </div>
            </article>
            <article class="col3 pad_left1">
                <h2>Coming Soon</h2>
                <div class="pad">
                    <div class="wrapper">
                        <span class="date"><span>12</span>jun</span>
                        <p>
                            <a href="#" class="link1">Sed ut perspiciatis</a><br>
                            Unde omnis iste natuerror tium doloremque laudany tium totamrem.
                        </p>
                    </div>
                    <div class="wrapper">
                        <span class="date"><span>23</span>jun</span>
                        <p>
                            <a href="#" class="link1">Doperiam eaque ipsa </a><br>
                            Quae ab illo inventore veritatis et quasi archiecto emo enim ipsam.
                        </p>
                    </div>
                </div>
            </article>
        </div>
        <div class="wrapper buttons">
            <article class="col1">
                <a href="#" class="button">Read More</a>
            </article>
            <article class="col3 pad_left1">
                <a href="#" class="button">Read More</a>
            </article>
        </div>
    </div>
@endsection