@extends('user.layouts.app_user')
@section('content')
<section class="headerTop2">
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center py-3">
                <a href="{{ route('user.profile.personalInfo') }}" class="text-dark" style="position: absolute; left: 15px;">
                    <i class="fa fa-angle-left fs-5 fw-light"></i>
                </a>
                <p class="fw-bold m-0 fs-5">Announcement</p>
            </div>
        </div>
    </div>
</section>



<section class="page-content-2 " style="height: 100vh;">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12" style="margin-top: 100px;">
                <div class="bg-white info-area p-2 p-md-3 bankForm mb-3">
                    <a class="text-dark" data-bs-toggle="collapse" href="#depositRewordsNotification" role="button" aria-expanded="false" aria-controls="depositRewordsNotification">
                        <div class="AnnouncementTitle">
                            <span class="scratch1"></span>
                            <span class="scratch2"></span>
                            <span class="scratch3"></span>
                            <h3 class="fw-bold mb-0 mx-4"> Deposit Rewards Notification </h3>
                        </div>
                        <div class="clearfix"></div>
                        <h5 class="fw-bold mt-1 mt-md-2">English:</h5>
                        <p class="py-2 py-md-3">To celebrate the birthday of Japan's Emperor, DOKODEMO members able to earn extra 2.9% for making deposit 100 USDT or above. (February 23 - February 26)</p>
                    </a>

                    <div class="collapse" id="depositRewordsNotification">
                        <p class="py-2 py-md-3">【Upcoming Rewards】</p>
                        <p class="py-2 py-md-3">①To celebrate Japan's Vernal Equinox day, DOKODEMO members able to earn extra 3.18% for making deposit 100 USDT or above.  (March 18 - March 21)</p>
                        <p class="py-2 py-md-3">②To celebrate May 1 Labor Day (Japan Golden Week), DOKODEMO members able to earn extra 5.1% for making deposit 100 USDT or above.  (May 1 - May 7).</p>
                    </div>
                </div>

                <div class="bg-white info-area p-2 p-md-3 bankForm mb-3">
                    <div class="AnnouncementTitle">
                        <span class="scratch1"></span>
                        <span class="scratch2"></span>
                        <span class="scratch3"></span>
                        <h3 class="fw-bold mb-0 mx-4"> DOKODEMO Official Telegram Channel </h3>
                    </div>
                    <div class="clearfix"></div>
                    <h5 class="fw-bold mt-1 mt-md-2">Dear members, DOKODEMO have created an official telegram channel. Please subscribe to get the latest DOKODEMO updates. Follow the link: <a href="https://t.me/DOKODEMO_Asia">https://t.me/DOKODEMO_Asia</a></h5>
                    <p class="py-2 py-md-3">✅✅✅✅✅✅✅✅✅✅✅</p>
                </div>

                <!-- <div class="bg-white info-area p-2 p-md-3 bankForm mb-3">
                    <a class="text-dark" data-bs-toggle="collapse" href="#depositRewordsNotification" role="button" aria-expanded="false" aria-controls="depositRewordsNotification">
                        <div class="AnnouncementTitle">
                            <span class="scratch1"></span>
                            <span class="scratch2"></span>
                            <span class="scratch3"></span>
                            <h3 class="fw-bold mb-0 mx-4"> Deposit Rewards Notification </h3>
                        </div>
                        <div class="clearfix"></div>
                        <h5 class="fw-bold mt-1 mt-md-2">English:</h5>
                        <p class="py-2 py-md-3">To celebrate the birthday of Japan's Emperor, DOKODEMO members able to earn extra 2.9% for making deposit 100 USDT or above. (February 23 - February 26)</p>
                    </a>

                    <div class="collapse" id="depositRewordsNotification">
                        <p class="py-2 py-md-3">【Upcoming Rewards】</p>
                        <p class="py-2 py-md-3">①To celebrate Japan's Vernal Equinox day, DOKODEMO members able to earn extra 3.18% for making deposit 100 USDT or above.  (March 18 - March 21)</p>
                        <p class="py-2 py-md-3">②To celebrate May 1 Labor Day (Japan Golden Week), DOKODEMO members able to earn extra 5.1% for making deposit 100 USDT or above.  (May 1 - May 7).</p>
                    </div>
                </div> -->
            </div>

        </div>
    </div>
    <br><br><br><br><br><br><br>
</section>
@endsection
