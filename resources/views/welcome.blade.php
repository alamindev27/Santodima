@extends('user.layouts.app_user')

@section('content')
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-2">
                    <div class="left">
                        <i class="fa-regular fa-bell"></i>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="logo">
                        <img src="{{ asset('frontend') }}/img/logo.png" class="" alt="">
                    </div>
                </div>
                <div class="col-4 col-md-4">
                    <div class="right">
                        <i class="fa-solid fa-earth-americas"></i>
                        <span>
                            UTC-5
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--  -->

    <!--  -->
    <div class="header_under"></div>
    <!--  -->

    <!--  -->
    <section id="banner_section" class="margin-bottom35">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="single_banner_img">
                        <img src="{{ asset('frontend') }}/img/banner-1.jpg" alt="Banner" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->

    <!--  -->
    <section id="news" class="margin-bottom35">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1">
                    <i class="fa-solid fa-volume-high"></i>
                </div>

                <div class="col-11">

                    <marquee behavior="" direction="">
                        1、Dear members, to celebrate the birthday of Emperor's Japan (てんのうたんじょうび), register now and get
                        $2.99 bonus.
                    </marquee>

                </div>
            </div>
        </div>
    </section>
    <!--  -->

    <section id="buttons" class="margin-bottom35">
        <div class="container-fluid">
            <div class="row">
                <div class="button_group">
                    <a href="{{ route('user.deposit.index') }}" class="" style="background-image: url({{ asset('frontend') }}/img/deposit.a7823eb9.png);">Deposit</a>
                    <a href="{{ route('user.withdraw.index') }}" class="" style="background-image: url({{ asset('frontend') }}/img/deposit.a7823eb9.png);">Withdraw</a>
                </div>
            </div>
        </div>
    </section>
    <!--  -->

    <!--  -->
    <section id="options_bar" class="margin-bottom35">
        <div class="container-fluid">
            <div class="option_warper" style="margin: 0px 10px;background: #fff;border-radius: 15px;padding: 15px 0;">
                <div class="option_box text-center" onclick="window.location.href='{{ route('user.yuEBao') }}' ">
                    <div class="option">
                        <img src="{{ asset('frontend') }}/img/option (1).png" alt="option">
                        <span>Financial Wallet</span>
                    </div>
                </div>
                <div class="option_box text-center" onclick="window.location.href='{{ route('user.promotionReward') }}'">
                    <div class="option">
                        <img src="{{ asset('frontend') }}/img/option (6).png" alt="option">
                        <span>Promotion Reward</span>
                    </div>
                </div>
                <div class="option_box text-center" onclick="window.location.href='{{ route('user.companyProfile') }}'">
                    <div class="option">
                        <img src="{{ asset('frontend') }}/img/option (7).png" alt="option">
                        <span>Company Profile</span>
                    </div>
                </div>
                <div class="option_box text-center" onclick="window.location.href='{{ route('user.vipEvents') }}'">
                    <div class="option">
                        <img src="{{ asset('frontend') }}/img/option (8).png" alt="option">
                        <span>Vip Events</span>
                    </div>
                </div>
                <div class="option_box text-center" onclick="window.location.href='{{ route('user.tutorial') }}'">
                    <div class="option">
                        <img src="{{ asset('frontend') }}/img/option (9).png" alt="option">
                        <span>Beginner Tutorial</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->

    <!--  -->
    <section id="invitation" class="margin-bottom35">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="invitation_box" style="background-image: url({{ asset('frontend') }}/img/invitation.png);">
                        <a href="" class="">Invitation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->

    <section id="Businesshall" class="margin-bottom35">
        <div class="container-fluid">
            <div class="row">

                    <!-- Single Package -->
                    <div class="col-md-6" style="margin-bottom: 10px;">
                        <a href="{{ auth()->user()->level != 'Lvl 1' ? 'javascript:viod(0)' : 'f' }}" class="text-dark">
                            <div class="lavel_box" >
                                <div class="lavel_baes">
                                    <img src="{{ asset('frontend') }}/img/lavel-number-img.png" alt="">
                                </div>

                                <div class="lavel_lock_unlock">
                                    @if (auth()->user()->level == 'Lvl 1')
                                        <i class="fa-solid fa-lock-open"></i>
                                    @else
                                        <i class="fa-solid fa-lock"></i>
                                    @endif
                                </div>

                                <div class="lavel_detials">
                                    <h5>OZON</h5>
                                    <ul>
                                        <li>
                                            Entry limit: <span>1.00</span>
                                        </li>
                                        <li>
                                            Level limit: <span>Lvl 1</span>
                                        </li>
                                        <li>
                                            Daily order: <span>50</span>
                                        </li>
                                        <li>
                                            Commission rate: : <span>0.26%</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lavel_image">
                                    <img src="{{ asset('frontend') }}/img/lavel-name-img.png" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Single Package -->

                <!-- Single Package -->
                <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="{{ auth()->user()->level != 'Lvl 2' ? 'javascript:viod(0)' : 'f' }}" class="text-dark">
                        <div class="lavel_box">
                            <div class="lavel_baes">
                                <img src="{{ asset('frontend') }}/img/lavel-number-img.png" alt="">
                            </div>

                            <div class="lavel_lock_unlock">
                                @if (auth()->user()->level == 'Lvl 2')
                                    <i class="fa-solid fa-lock-open"></i>
                                @else
                                    <i class="fa-solid fa-lock"></i>
                                @endif
                            </div>

                            <div class="lavel_detials">
                                <h5>OZON</h5>
                                <ul>
                                    <li>
                                        Entry limit: <span>499.00</span>
                                    </li>
                                    <li>
                                        Level limit: <span>Lvl 2</span>
                                    </li>
                                    <li>
                                        Daily order: <span>55</span>
                                    </li>
                                    <li>
                                        Commission rate: : <span>.028%</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="lavel_image">
                                <img src="{{ asset('frontend') }}/img/lavel-name-img.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Single Package -->


                <!-- Single Package -->
                <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="{{ auth()->user()->level != 'Lvl 3' ? 'javascript:viod(0)' : 'f' }}" class="text-dark">
                        <div class="lavel_box">
                            <div class="lavel_baes">
                                <img src="{{ asset('frontend') }}/img/lavel-number-img.png" alt="">
                            </div>

                            <div class="lavel_lock_unlock">
                                @if (auth()->user()->level == 'Lvl 3')
                                    <i class="fa-solid fa-lock-open"></i>
                                @else
                                    <i class="fa-solid fa-lock"></i>
                                @endif
                            </div>

                            <div class="lavel_detials">
                                <h5>OZON</h5>
                                <ul>
                                    <li>
                                        Entry limit: <span>1999.00</span>
                                    </li>
                                    <li>
                                        Level limit: <span>Lvl 3</span>
                                    </li>
                                    <li>
                                        Daily order: <span>60</span>
                                    </li>
                                    <li>
                                        Commission rate: : <span>0.3%</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="lavel_image">
                                <img src="{{ asset('frontend') }}/img/lavel-name-img.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Single Package -->

                <!-- Single Package -->
                <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="{{ auth()->user()->level != 'Lvl 4' ? 'javascript:viod(0)' : 'f' }}" class="text-dark">
                        <div class="lavel_box">
                            <div class="lavel_baes">
                                <img src="{{ asset('frontend') }}/img/lavel-number-img.png" alt="">
                            </div>

                            <div class="lavel_lock_unlock">
                                @if (auth()->user()->level == 'Lvl 4')
                                    <i class="fa-solid fa-lock-open"></i>
                                @else
                                    <i class="fa-solid fa-lock"></i>
                                @endif
                            </div>

                            <div class="lavel_detials">
                                <h5>OZON</h5>
                                <ul>
                                    <li>
                                        Entry limit: <span>4999</span>
                                    </li>
                                    <li>
                                        Level limit: <span>Lvl 4</span>
                                    </li>
                                    <li>
                                        Daily order: <span>70</span>
                                    </li>
                                    <li>
                                        Commission rate: : <span>0.32%</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="lavel_image">
                                <img src="{{ asset('frontend') }}/img/lavel-name-img.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Single Package -->


                <!-- Single Package -->
                <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="{{ auth()->user()->level != 'Lvl 5' ? 'javascript:viod(0)' : 'f' }}" class="text-dark">
                        <div class="lavel_box">
                            <div class="lavel_baes">
                                <img src="{{ asset('frontend') }}/img/lavel-number-img.png" alt="">
                            </div>

                            <div class="lavel_lock_unlock">
                                @if (auth()->user()->level == 'Lvl 5')
                                    <i class="fa-solid fa-lock-open"></i>
                                @else
                                    <i class="fa-solid fa-lock"></i>
                                @endif
                            </div>

                            <div class="lavel_detials">
                                <h5>OZON</h5>
                                <ul>
                                    <li>
                                        Entry limit: <span>29999.00</span>
                                    </li>
                                    <li>
                                        Level limit: <span>Lvl 5</span>
                                    </li>
                                    <li>
                                        Daily order: <span>75</span>
                                    </li>
                                    <li>
                                        Commission rate: : <span>0.35%</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="lavel_image">
                                <img src="{{ asset('frontend') }}/img/lavel-name-img.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Single Package -->

                <!-- Single Package -->
                <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="{{ auth()->user()->level != 'Lvl 6' ? 'javascript:viod(0)' : 'f' }}" class="text-dark">
                        <div class="lavel_box">
                            <div class="lavel_baes">
                                <img src="{{ asset('frontend') }}/img/lavel-number-img.png" alt="">
                            </div>

                            <div class="lavel_lock_unlock">
                                @if (auth()->user()->level == 'Lvl 6')
                                    <i class="fa-solid fa-lock-open"></i>
                                @else
                                    <i class="fa-solid fa-lock"></i>
                                @endif
                            </div>

                            <div class="lavel_detials">
                                <h5>OZON</h5>
                                <ul>
                                    <li>
                                        Entry limit: <span>89999.00</span>
                                    </li>
                                    <li>
                                        Level limit: <span>Lvl 6</span>
                                    </li>
                                    <li>
                                        Daily order: <span>80</span>
                                    </li>
                                    <li>
                                        Commission rate: : <span>0.38%</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="lavel_image">
                                <img src="{{ asset('frontend') }}/img/lavel-name-img.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Single Package -->

            </div>
        </div>
    </section>
    <!--  -->

    <!--  -->
    <section id="UserCommisionNotification" class="margin-bottom35">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12"
                    style="margin: 0;text-align: left;margin-bottom: 50px; border-radius: 0.266667rem;box-shadow: 0.026667rem 0.026667rem 0.106667rem rgb(51 51 51 / 30%);padding: 0.533333rem 0.266667rem 0.266667rem;box-sizing: border-box;background: #fff;list-style: none;">
                    <h5 class="text-center">User Commission Notifications</h5>
                    <ul class="notification_box">
                        <li class="notification_list">
                            <img src="{{ asset('frontend') }}/img/user.png" alt="User">
                            <span class="text">Congratulations</span>
                            <span class="userName">****7Ham</span>
                            <span class="text">earn</span>
                            <span class="amount">6.69!</span>
                        </li>

                        <li class="notification_list">
                            <img src="{{ asset('frontend') }}/img/user.png" alt="User">
                            <span class="text">Congratulations</span>
                            <span class="userName">****7Ham</span>
                            <span class="text">earn</span>
                            <span class="amount">6.69!</span>
                        </li>


                        <li class="notification_list">
                            <img src="{{ asset('frontend') }}/img/user.png" alt="User">
                            <span class="text">Congratulations</span>
                            <span class="userName">****7Ham</span>
                            <span class="text">earn</span>
                            <span class="amount">6.69!</span>
                        </li>

                        <li class="notification_list">
                            <img src="{{ asset('frontend') }}/img/user.png" alt="User">
                            <span class="text">Congratulations</span>
                            <span class="userName">****7Ham</span>
                            <span class="text">earn</span>
                            <span class="amount">6.69!</span>
                        </li>

                        <li class="notification_list">
                            <img src="{{ asset('frontend') }}/img/user.png" alt="User">
                            <span class="text">Congratulations</span>
                            <span class="userName">****7Ham</span>
                            <span class="text">earn</span>
                            <span class="amount">6.69!</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

