@extends('front.layouts.layout')

@section('title', 'Wordsmith:: Contact')

@section('content')
    <section class="s-content s-content--top-padding s-content--narrow">

        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep">Contact Us.</h1>
                <p class="lead">
                    Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor
                    sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim
                    mollit amet anim veniam dolor dolor irure velit commodo.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-full s-content__main">
                <p>
                    <img src="{{ asset('assets/front/images/thumbs/contact/contact-1000.jpg') }}"
                         srcset="{{ asset('assets/front/images/thumbs/contact/contact-2000.jpg') }} 2000w,
                             {{ asset('assets/front/images/thumbs/contact/contact-1000.jpg') }} 1000w,
                             {{ asset('assets/front/images/thumbs/contact/contact-500.jpg') }} 500w"
                         sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </p>

                <h2>Say Hello</h2>

                <p>
                    Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                    dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
                    sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis

                <p>
                    Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor
                    sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim
                    mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco. Lorem
                    ipsum Nisi amet fugiat eiusmod et aliqua ad qui ut nisi Ut aute anim mollit fugiat aute.
                </p>

                <div id="map-wrap">
                    <div id="map-container">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2bdc5d80fccd1d9ff2c507da85723bafa0f3d4c4c95c21f47c914bbea7d5dd09&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                    <div id="map-zoom-in"></div>
                    <div id="map-zoom-out"></div>
                </div>

                <div class="row">
                    <div class="col-six tab-full">
                        <h4>Where to Find Us</h4>

                        <p>
                            1600 Amphitheatre Parkway<br>
                            Mountain View, Nigniy Novgorod<br>
                            603158 Russia
                        </p>

                    </div>

                    <div class="col-six tab-full">
                        <h4>Contact Info</h4>

                        <p>sayhello@wordsmith.com<br>
                            info@wordsmith.com <br>
                            Phone: (+1) 123 456
                        </p>

                    </div>
                </div>

                <h4>Get In Touch</h4>

                @if(auth()->user())
                    <form name="cForm" id="cForm" class="contact-form" method="post" action="{{ route('contact.form') }}">
                        @csrf

                        <fieldset>

                            <div>
                                <input name="name" id="cName" class="full-width" placeholder="Your Name*" value="" type="text">
                            </div>

                            <div class="form-field">
                                <input name="email" id="cEmail" class="full-width" placeholder="Your Email*" value="" type="text">
                            </div>

                            <div class="form-field">
                                <input name="website" id="cWebsite" class="full-width" placeholder="Website" value="" type="text">
                            </div>

                            <div class="message form-field">
                                <textarea name="message" id="cMessage" class="full-width" placeholder="Your Message*"></textarea>
                            </div>

                            <button type="submit" class="submit btn btn--primary btn--large full-width">Send Message</button>
                        </fieldset>
                    </form>
                @else
                    <div class="container text-center">
                        <h2>Авторизируйтесь что бы отправить</h2>
                    </div>
                @endif
            </div>
        </div>

    </section>
@endsection
