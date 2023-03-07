@extends('user.layouts.app_user')
@section('styles')
<style>
    .page-bg{
        background-color: #EEF1F7 !important;
    }
    .pageText{
        font-size: 18px;
        font: inherit;
        line-height: 2;
    }
</style>
@endsection
@section('content')
<div class="page-bg">
    <div class="header margin-bottom35">
        <div class="container-fluid bg-white p-4" style="box-shadow: 0.026667rem 0.026667rem 0.106667rem rgb(51 51 51 / 30%);">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('user.index') }}" class="text-dark" style="position: absolute; left: 15px;">
                        <i class="fa fa-angle-left fs-5 fw-light"></i>
                    </a>
                    <p class="fw-bold m-0 fs-5">Promotion Reward</p>
                </div>
            </div>
        </div>
    </div>

    <section id="options_bar" class="margin-bottom35">
        <div class="container-fluid">
            <div class="px-3">
                <h2 class="fw-bold">English:</h2>
                <p class="fw-bold">1. <u>Level Commission Scheme </u></p>
                <iframe src="https://www.youtube.com/embed/gZhDqYtgYMw?rel=0" style="width:100%; height:495px" title=""></iframe>

                <img src="img/liveCommonication.jpg" alt="" class="my-2">

                <div class="border-bottom">
                    <p class="my-2 pageText">This platform is applying a three-level commission model. Every member can be leader and has their own downlines by sharing their own exclusive link. For example, if you are member X, you will have your own invitation link. You can have your own downline in this platform by sharing your invitation link to others.</p>
                    <p class="my-2 pageText">In this case, member A’s will register as member X’s first level downline using member X invitation link. After member A’s performing the purchasing task, X will get each 16% of A’s commission.</p>
                    <p class="my-2 pageText">At the same time, the system will automatically form A's membership and its exclusive invitation link. Member B’s registered as a member A’s first level downline (X’s second level downline) by using member A’s invitation link, and after them performed the purchasing task, X will receive 16% of A’s commission. X will also get 8% of B's commission ; and so on, if member B’s has downline which is member C’s, then member X will still get 4% of member C’s commission.</p>
                    <ul class="my-2 list-unstyled">
                        <li class="pageText">Remarks:</li>
                        <li class="pageText">①Please go to the 'Grab' page and refer to the 'Yesterday's Team Commission’ to check with your total team commission on yesterday.</li>
                        <li class="pageText">②Please go to the 'Order' page and check with your accumulated order and team commission.</li>
                    </ul>
                    <p class="my-2 pageText">Reminder: The commission rewards for all the members/downlines are issues directly from this platform and will not be deducted from the commissions made by the member/upline/downline itself. The team commission payouts time is 1:00am-8:00am EST everyday.</p>
                </div>

                <p class="fw-bold my-1">1. <u>Invitation Rewards </u></p>

                <table class="table table-bordered mt-3">
                    <tbody>
                        <tr>
                            <td style="text-align:center">Total Number of Direct<br>
                            Downline</td>
                            <td style="text-align:center">Total Deposit of<br>
                            Every Direct Downline</td>
                            <td style="text-align:center">Rewards<br>
                            ($)</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">3</td>
                            <td style="text-align:center">100</td>
                            <td style="text-align:center">9.9</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">10</td>
                            <td style="text-align:center">100</td>
                            <td style="text-align:center">59</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">20</td>
                            <td style="text-align:center">100</td>
                            <td style="text-align:center">149</td>
                        </tr>
                        <tr>
                            <td style="text-align:center">30</td>
                            <td style="text-align:center">100</td>
                            <td style="text-align:center">299</td>
                        </tr>
                    </tbody>
                </table>

                <div class="border-bottom">
                    <p class="my-2 pageText">For example : If Eric invites 3 direct downlines, he will get the reward of $9.9. Moreover, he still can get the reward of $59 when he has  total of 10 direct downlines in an account. (The total number of direct downline in an account can be accumulated subject to the condition that every downline has the total deposit of $100 and belongs to the direct (first-level) downline of yours). </p>
                    <p class="my-2 pageText">Remarks : The Direct Downline rewards is not automatically issued by the system. Every member needs to contact our live agent to apply for the Direct Downline rewards.
                    </p>
                    <p class="my-2 pageText">Valid Direct Downline viewing guide
                    </p>
                    <p class="my-2 pageText">1. Click on ‘My’</p>
                    <p class="my-2 pageText">2. Click ‘Team Reports’</p>
                    <p class="my-2 pageText">The number of first-level members is the number of your direct downline. To determine if this is your valid first-level member, please scroll down and refer to Downline Lvl 1 to see if all your first-level members have deposited 100USDT and completed 50 orders. (Please apply for the corresponding reward according to your valid direct first level downline).

                    </p>
                    <p class="my-2 pageText"></p>
                </div>
            </div>
        </div>
    </section>




</div>
@endsection
