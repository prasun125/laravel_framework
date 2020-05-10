@extends('layouts.master')
@section('title')
    Welcome to
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

        .event-container > #check_in, .event-container > #check_in > i, .event-container > #check_in > label, .event-container > #check_out, .event-container > #check_out > i, .event-container > #check_out > label, .room-guest-container > i, .room-guest-container > label, button {
            cursor: pointer;
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

        .down-arrow {
            position: absolute;
            bottom: 8px;
            z-index: 1;
        }

        .down-arrow i {
            font-size: 48px;
            color: rgba(0, 0, 0, 1);
        }

        @media only screen and (max-width: 768px) {
            section.banner-container > div:nth-child(2) {
                min-height: calc(100vh - 70%);
            }

            .review {
                font-size: 28px;
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
            <div class="font-primary-color review">
                Latest reviews. Lowest prices
            </div>
            <form class="d-flex flex-dir-row flex-wrap a-i-center background-white">
                <div class="height-52 max-height-52 d-flex a-i-center p-0-8 location-container">
                    <i class="material-icons icon-primary-color">
                        location_on
                    </i>
                    <input type="text" placeholder="City or hotel name"/>
                    <i class="material-icons icon-primary-color">
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
                <button
                    class="min-height-52 height-52 max-height-52 capitalize background-primary-color font-primary-color p-0-16 find-hotels">
                    find hotels
                </button>
            </form>
        </div>
        <a href="#about" class="down-arrow cur-point">
            <i class="material-icons">
                keyboard_arrow_down
            </i>
        </a>
    </section>
    <div id="about" style="height: 800px; width: 100%; background-color: #2a88bd;">
        about
    </div>
@endsection
@section('internal-js')
    {{--<script src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}" type="text/javascript"></script>--}}
    {{--<script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>--}}
    <script type="text/javascript">
        $(document).ready(function () {
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
