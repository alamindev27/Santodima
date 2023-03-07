<section id="fotter_nav">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 text-center">
                <a class="content" href="{{ route('user.index') }}">
                    <i style="font-size: 25px;" class="fa-solid fa-house"></i>
                    <span>Home</span>
                </a>
            </div>
            <div class="col-2 text-center">
                <a class="content" href="{{ route('user.order.index') }}">
                    <i style="font-size: 25px;" class="fa-solid fa-clipboard"></i>
                    <span>Order</span>
                </a>
            </div>
            <div class="col-4 text-center" style="position: relative;">
                <a class="content">
                    <img src="{{ asset('frontend') }}/img/menu-center.png" alt="">
                </a>
            </div>
            <div class="col-2 text-center" >
                <a class="content" href="{{ route('user.online.index') }}">
                    <i style="font-size: 25px;" class="fa-brands fa-keycdn"></i>
                    <span>Online</span>
                </a>
            </div>
            <div class="col-2 text-center">
                <a class="content" href="{{ route('user.profile.index') }}">
                    <i style="font-size: 25px;" class="fa-solid fa-user"></i>
                    <span>Profile</span>
                </a>
            </div>
        </div>
    </div>
</section>
