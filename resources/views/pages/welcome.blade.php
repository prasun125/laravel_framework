@extends('layouts.master')
@section('title')
    Welcome to
@endsection
@section('head-link')
    <!--Vendors-->
    <link href="{{ asset('assets/vendor/owlcarousel/css/owl.carousel.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendor/owlcarousel/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendor/owlcarousel/css/owl.theme.default.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendor/owlcarousel/css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendor/owlcarousel/css/owl.theme.green.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendor/owlcarousel/css/owl.theme.green.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('internal-css')
    <style>
        section.banner-container > div:nth-child(2) {
            min-height: calc(100vh - 80%);
            z-index: 1;
        }

        .review {
            font-size: 32px;
        }

        form {
            min-height: 52px;
        }

        .min-height-52 {
            min-height: 52px;
        }

        .height-52 {
            height: 52px;
        }

        .max-height-52 {
            max-height: 52px;
        }

        .location-container, .event-container {
            min-width: 250px;
            width: 250px;
        }

        .location-container > input, .location-container > i:nth-child(3) {
            margin-left: 8px;
        }

        .location-container > input[type=text] {
            border: none;
            padding: 0;
            font-size: inherit;
            width: 100%;
        }

        .location-container > i.search, .event-container > #check_in, .event-container > #check_in > i, .event-container > #check_in > label, .event-container > #check_out, .event-container > #check_out > i, .event-container > #check_out > label, .room-guest-container > i, .room-guest-container > label, button {
            cursor: pointer;
        }

        .event-container label.checkin, .event-container label.checkout, .room-guest-container label.room-guest {
            margin-bottom: 0;
        }

        .checkin:hover, .checkout:hover, .room-guest:hover {
            text-decoration: underline;
            background-color: rgba(0, 0, 0, 0.1);
            text-decoration-color: rgba(0, 105, 178, 1);
        }

        .vertical-bar {
            height: 32px;
            width: 1px;
            background-color: rgba(0, 0, 0, 0.1);
        }

        /* Animated Mouse Scroll Icon */
        .scroll-down {
            position: absolute;
            right: 0;
            bottom: 4%;
            left: 0;
            margin: auto;
            width :34px;
            height: 55px;
            z-index: 1;
        }

        .mouse {
            width: 3px;
            padding: 8px 14px;
            height: 32px;
            border: 2px solid #fff;
            border-radius: 25px;
            opacity: 0.75;
            box-sizing: content-box;
        }

        .scroller {
            width: 3px;
            height: 10px;
            border-radius: 25%;
            background-color: #fff;
            animation-name: scroll;
            animation-duration: 2.2s;
            animation-timing-function: cubic-bezier(.15,.41,.69,.94);
            animation-iteration-count: infinite;
        }

        @keyframes scroll {
            0% { opacity: 0; }
            10% { transform: translateY(0); opacity: 1; }
            100% { transform: translateY(15px); opacity: 0;}
        }

        .scroll-down > .scroll-text {
            font-size: 14px;
        }

        @media only screen and (max-width: 1024px) {
            section.banner-container > div:nth-child(2) {
                min-height: calc(100vh - 90%);
            }
        }

        @media only screen and (max-width: 768px) {
            section.banner-container > div:nth-child(2) {
                min-height: calc(100vh - 70%);
            }

            .review {
                font-size: 26px;
            }

            .location-container, .event-container, .room-guest-container, .find-hotels {
                flex-basis: 100%;
                max-width: 100%;
            }

            .find-hotels {
                margin: 0 8px 8px;
            }

            .vertical-bar {
                display: none;
            }
        }

        @media only screen and (max-width: 375px) and (max-height: 812px) {
            section.banner-container > div:nth-child(2) {
                min-height: calc(100vh - 60%);
            }
        }

        @media only screen and (max-width: 320px) {
            section.banner-container > div:nth-child(2) {
                min-height: calc(100vh - 40%);
            }

            .review {
                font-size: 20px;
            }
        }
    </style>
@endsection
@section('content')
    <section class="banner-container min-width-100 width-100 max-width-100 d-flex j-c-center a-i-center pos-relative">
        @include('partials.slider')
        <div class="max-width-100 d-flex flex-dir-column flex-wrap j-c-space-between a-i-center p-0-8">
            <div class="font-white review">
                Latest reviews. Lowest prices
            </div>
            <form class="d-flex flex-dir-row flex-wrap a-i-center background-white">
                <div class="height-52 max-height-52 d-flex a-i-center p-0-8 location-container">
                    <i class="material-icons icon-primary-color">
                        location_on
                    </i>
                    <input type="text" placeholder="City or hotel name"/>
                    <i class="material-icons icon-primary-color search">
                        search
                    </i>
                </div>
                <div class="vertical-bar m-0-8">
                </div>
                <div class="height-52 max-height-52 d-flex a-i-center p-0-8 event-container">
					<span class="d-flex flex-dir-row a-i-center" id="check_in">
						<i class="material-icons icon-primary-color">
							event
						</i>
						<label class="capitalize checkin m-l-8">
							check in
						</label>
					</span>
                    <i class="material-icons">
                        remove
                    </i>
                    <span class="d-flex flex-dir-row a-i-center" id="check_out">
						<i class="material-icons icon-primary-color">
							event
						</i>
						<label class="capitalize checkout m-l-8">
							check out
						</label>
					</span>
                </div>
                <div class="vertical-bar m-0-8">
                </div>
                <div class="height-52 max-height-52 d-flex flex-dir-row a-i-center p-0-8 p-r-16 room-guest-container">
                    <i class="material-icons icon-primary-color">
                        group
                    </i>
                    <label class="room-guest m-l-8">
                        1 room, 2 guests
                    </label>
                </div>
                <button class="min-height-52 height-52 max-height-52 capitalize background-primary-color font-white p-0-16 find-hotels">
                    find hotels
                </button>
            </form>
        </div>
        {{--<a href="#about" class="down-arrow cur-point">
            --}}{{--<i class="material-icons">
                keyboard_arrow_down
            </i>--}}{{--
            <div class="scroll-downs">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
            </div>
        </a>--}}
        <div class="scroll-down cur-point">
            <div class="mouse">
                <div class="scroller"></div>
            </div>
            <div class="scroll-text font-white">Scroll</div>
        </div>
    </section>
    <div id="about" style="height: 800px; width: 100%; background-color: #2a88bd;">
        about
    </div>
@endsection
@section('internal-js')
    {{--<script src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}" type="text/javascript"></script>--}}
    {{--<script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>--}}
    <script src="{{ asset('assets/vendor/owlcarousel/js/owl.carousel.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/owlcarousel/js/owl.carousel.min.js') }}" defer type="text/javascript"></script>
    <script type="text/javascript">
        $(window, document).ready(function () {
            if (window.location.pathname === '/') {
                $('header').addClass('home');
                $('header.home > nav.menu-link-container > a.menu-link').removeClass('font-black').addClass('font-white');
                $('header.home > nav.menu-link-container > i.more_vert').removeClass('font-black').addClass('font-white');
            }
            $(document).scroll(function () {
                if ($(document).scrollTop() > 64) {
                    $('header').removeClass('home');
                    $('header> nav.menu-link-container > a.menu-link').addClass('scrolled');
                    $('header > nav.menu-link-container > i.more_vert').css('color', 'rgba(0, 0, 0, 1)');
                } else {
                    $('header').addClass('home');
                    $('header > nav.menu-link-container > a.menu-link').removeClass('scrolled');
                    $('header > nav.menu-link-container > i.more_vert').css('color', 'rgba(255, 255, 255, 1)');
                }
            });
            $('.slider-active').owlCarousel({
                loop: true,
                navText: ['<i class="material-icons">chevron_left</i>', '<i class="material-icons">chevron_right</i>'],
                // animateOut: slideInLeft,
                // animateIn: slideInRight,
                nav: true,
                autoplay: true,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    }
                },
                slideSpeed : 5000,
                autoplaySpeed:2000,
            });
            /*
			|--------------------------------------------------------------------------
			| Smooth scrolling
			|--------------------------------------------------------------------------
			*/
            $('a.down-arrow').click(function (e) {
                e.preventDefault();
                $('body, html').animate({
                    scrollTop: $(this.hash).offset().top - 64
                }, 1000);
            });
        });
    </script>
    {{--<script>
        $(function () {
            $('#check_in').daterangepicker({
                opens: 'center',
                //startDate: moment().startOf('hour'),
                //endDate: moment().startOf('hour').add(32, 'hour'),
                autoApply: true,
            }, function (start, end) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            });
        })
    </script>--}}
@endsection
