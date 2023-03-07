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
<div class="page-bg ">
        <div class="header margin-bottom35 sticky-top">
            <div class="container-fluid bg-white p-4" style="box-shadow: 0.026667rem 0.026667rem 0.106667rem rgb(51 51 51 / 30%);">
                <div class="row">
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="{{ route('user.index') }}" class="text-dark" style="position: absolute; left: 15px;">
                            <i class="fa fa-angle-left fs-5 fw-light"></i>
                        </a>
                        <p class="fw-bold m-0 fs-5">Beginner Tutorial</p>
                    </div>
                </div>
            </div>
        </div>
        <section id="options_bar" class="margin-bottom35">
            <div class="container-fluid">
                <div class="px-3">
                    <h2 class="fw-bold">English:</h2>
                    <p class="fw-bold" style="font-size: 18px;">1. <u>.What is DOKODEMO affiliate system？ </u></p>
                    <iframe src="https://www.youtube.com/embed/gZhDqYtgYMw?rel=0" style="width:100%; height:495px" title=""></iframe>

                    <p class="fw-bold " style="font-size: 18px;" >2. <u>DOKODEMO International User Sharing</u></p>

                    <iframe width="100%" height="495px" src="https://www.youtube.com/embed/DNhGDIFxeTo" title="DOKODEMO International User Sharing，Uso compartido internacional de DOKODEMO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <!-- <iframe src="https://youtu.be/DNhGDIFxeTo" style="width:100%; height:495px" title=""></iframe> -->
                    <hr>
                    <p class="fw-bold" style="font-size: 18px;">3. <u>Room Category</u></p>

                    <table class="table-bordered w-100">
                        <tbody>
                            <tr>
                                <td style="text-align:center"><span style="font-size:20px"><strong>Room Category</strong></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="table-responsive">

                        <table class="table-bordered w-100">
                            <tbody>
                                <tr>
                                    <td style="text-align:center">Room</td>
                                    <td style="text-align:center">Lvl</td>
                                    <td style="text-align:center">Valid direct<br>
                                    downline</td>
                                    <td style="text-align:center">Account<br>
                                    balance&nbsp;<br>
                                    ($)</td>
                                    <td style="text-align:center">Assignable<br>
                                    daily order</td>
                                    <td style="text-align:center">Commission<br>
                                    rate<br>
                                    (%)</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">OZON</td>
                                    <td style="text-align:center">LV1</td>
                                    <td style="text-align:center">0</td>
                                    <td style="text-align:center">1</td>
                                    <td style="text-align:center">50</td>
                                    <td style="text-align:center">0.26%</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">Newegg</td>
                                    <td style="text-align:center">LV2</td>
                                    <td style="text-align:center">5</td>
                                    <td style="text-align:center">499</td>
                                    <td style="text-align:center">55</td>
                                    <td style="text-align:center">0.28%</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">Amazon</td>
                                    <td style="text-align:center">LV3</td>
                                    <td style="text-align:center">12</td>
                                    <td style="text-align:center">1,999</td>
                                    <td style="text-align:center">60</td>
                                    <td style="text-align:center">0.30%</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">DOKODEMO</td>
                                    <td style="text-align:center">LV4</td>
                                    <td style="text-align:center">20</td>
                                    <td style="text-align:center">4,999</td>
                                    <td style="text-align:center">70</td>
                                    <td style="text-align:center">0.32%</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">Presidential<br>
                                    Ⅰ</td>
                                    <td style="text-align:center">LV5</td>
                                    <td style="text-align:center">50</td>
                                    <td style="text-align:center">29,999</td>
                                    <td style="text-align:center">75</td>
                                    <td style="text-align:center">0.35%</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">Presidential<br>
                                    Ⅱ</td>
                                    <td style="text-align:center">LV6</td>
                                    <td style="text-align:center">80</td>
                                    <td style="text-align:center">79,999</td>
                                    <td style="text-align:center">80</td>
                                    <td style="text-align:center">0.38%</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">******</td>
                                    <td style="text-align:center">LV7</td>
                                    <td style="text-align:center">***</td>
                                    <td style="text-align:center">***</td>
                                    <td style="text-align:center">***</td>
                                    <td style="text-align:center">***</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">******</td>
                                    <td style="text-align:center">LV8</td>
                                    <td style="text-align:center">***</td>
                                    <td style="text-align:center">***</td>
                                    <td style="text-align:center">***</td>
                                    <td style="text-align:center">***</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">******</td>
                                    <td style="text-align:center">LV9</td>
                                    <td style="text-align:center">***</td>
                                    <td style="text-align:center">***</td>
                                    <td style="text-align:center">***</td>
                                    <td style="text-align:center">***</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">******</td>
                                    <td style="text-align:center">LV10</td>
                                    <td style="text-align:center">***</td>
                                    <td style="text-align:center">***</td>
                                    <td style="text-align:center">***</td>
                                    <td style="text-align:center">***</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center">******</td>
                                    <td style="text-align:center">LV11</td>
                                    <td style="text-align:center">***</td>
                                    <td style="text-align:center">***</td>
                                    <td style="text-align:center">***</td>
                                    <td style="text-align:center">***</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="my-2 pageText">Our Affiliate System has 11 rooms which can also be known as 9 levels. After successful registration, the member default level is level 1 (OZON). When your account is deposited, you can start earning commissions by grabbing orders. In order to unlock to level 2 (Newegg), you need to have at least 5 valid direct downlines and min of 499 USD account balance in your own account. In order to unlock to level 3 (Amazon), you need to have at least 12 valid direct downlines and min of 1,999 USD account balance in your own account. In order to unlock to level 4 (DOKODEMO), you need to have at least 20 valid direct downlines and min of 4,999 USD account balance in your own account. In order to unlock to level 5 (PresidentialⅠ), you need to have at least 50 valid direct downlines and min of 29,999 USD account balance in your own account. In order to unlock to level 6 (Presidential Ⅱ), you need to have at least 80 valid direct downlines and min of 79,999 USD account balance in your own account.
                    </p>

                    <p class="my-2 pageText">Note: Valid Direct Downline refer to your first-level downline who has the total deposit of 100 USD and completed 50 orders in any day.(Self registration or fake account is not counted)
                    </p>

                    <p class="my-2 pageText">Pay Attention: The deposit address of the platform will be updated from time to time. Please go to the deposit USDT page to obtain the latest receiver’s address whenever you make deposit. If you have any questions, please feel free to contact our online customer service.
                    </p>



                    <p class="my-2 pageText">Each and every dispatched order amount is between 10% to 50% of the user account balance. Every member able to do 50-80 orders per day, depends on their current level/room. For example: if the member current status is level 4 (DOKODEMO), which means he/she has at least 20 direct downlines and min of 5000 USD account balance. He /she will be able to do 70 daily order per day and single dispatched order amount would be around 500 USD to 2500 USD, and the commission for this single order would be 1.6 USD to 8 USD (0.32% rate each order).

                    </p>
                    <p class="my-2 pageText">(Note: The amount of each product order is not the same, randomly dispatch according your level requirements)
                    </p>


                    <div class="my-2 pageText">
                        Meanwhile, every member will be able to receive a percentage of each commission of their downlines earn, directly from the system. So therefore，the more downlines a member has , the more money he/she will be making from rewards and commissions. (Please refer to the ‘Promotion Reward’ page for more details).Friendly reminder: The system is an automatic dispatch mode. In order to avoid network delays and other communication errors, please remember to complete the payment before leaving the order page. If the order is not confirmed and submitted by the member after the product successfully dispatch, he/she might not be able to continue to grab the orders. The member need to process with the previous order to continue with the task.
                    </div>
                    <div class="my-2 pageText"></div>
                    <hr>

                    <p class="fw-bold " style="font-size: 18px;" >4. <u>Contract Signing </u></p>


                    <p class="my-2 pageText"> <span class="fw-bold">1.Agent Contract -</span>  When your team have reached total of 20 Valid First-Level Direct users or more, please contact our customer service for Agent contract signing to become our Official Agent to apply for corresponding team size rewards.
                    </p>


                    <p class="my-2 pageText">Note:Each invited downline needs to deposit 100USDT and completed 50 orders to be counted as a valid member  </p>

                    <hr>
                    <p class="fw-bold " style="font-size: 18px;" >5. <u>Introduction of Financial Wallet  </u></p>
                    <p class="my-2 pageText">Our Financial Wallet also known as term deposit. You can deposit a sizeable amount of money at a predetermined rate of interest for a fixed period. At the end of the tenure, you receive the lump sum, along with an interest, which is a good money-saving plan.
                    </p>
                    <p class="my-2 pageText">For example, if you choose 1 day financial wallet, your deposit amount will be temporarily lock for 1 day (24 hours). After 24 hours, you can get back your principal together with the interest ( principal + 0.30%) and so on. </p>

                    <hr>
                    <p class="fw-bold " style="font-size: 18px;" >6. <u>Reminder</u></p>
                    <p class="my-2 pageText">***Reminder: Every account must complete a minimum of 50 daily orders in order to make any withdrawal. If a member did not complete the corresponding daily order, he/she cannot make a withdrawal. The member can only make a withdrawal if his/her account has completed a minimum of 50 daily orders or more. The payment will release within 24-168 hours after your withdrawal request have reviewed and successfully approved. Allowing only one user account per IP address. Every receiving address can only bind with one member account. It is forbidden to login multiple accounts with the same IP to complete task and collect commissions.
                    </p>
                    <p class="my-2 pageText">DOKODEMO reserves the right to warn or freeze your account if we suspect you are engaged in fraud, dishonesty or wrongful acts such as multiple account registration with same identity, multiple logins from the same IP address and login multiple accounts using VPN.DOKODEMO does not provide any services to residents of certain jurisdictions including the United States, North Korea.
                    </p><hr>

                    <p class="fw-bold " style="font-size: 18px;" >7. <u>Beginner Guide Video Tutorials</u></p>
                    <p class="my-2 pageText">Beginner Guide 0 :How To Create Binance Account and Verify with Your Phone</p>
                    <p class="my-2 pageText">Binance Web:www.binance.com  </p>

                    <iframe width="100%" height="495" src="https://www.youtube.com/embed/lHxJgqb8jUM" title="How To Create Binance Account and Verify with Your Phone [Step-by-Step Binance Tutorial]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <hr>
                    <p class="my-2 pageText">Beginner Guide 1:Buy USDT on Binance</p>
                    <p class="my-2 pageText">Binance Web:www.binance.com  </p>

                    <iframe width="100%" height="495" src="https://www.youtube.com/embed/pCfalVw8g3E" title="Beginner Guide 1:Buy USDT on Binance" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <hr>
                    <p class="my-2 pageText">Beginner Guide 2:Deposit USDT to DOKODEMO via Binance  </p>

                    <iframe width="100%" height="495" src="https://www.youtube.com/embed/mnGntZO2AOQ" title="Beginner Guide 2:Deposit USDT to DOKODEMO via Binance" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> <hr>


                    <p class="my-2 pageText">Beginner Guide 3:Complete Task & Earn Money on DOKODEMO</p>

                    <iframe width="100%" height="495" src="https://www.youtube.com/embed/kNRat8POqa8" title="Beginner Guide 3:Complete Task &amp; Earn Money on DOKODEMO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> <hr>
                    <p class="my-2 pageText">Beginner Guide 4 Add Binance Wallet Address at DOKODEMO for Withdrawal (this is just a one-time process)</p>


                    <iframe width="100%" height="495" src="https://www.youtube.com/embed/X9_88WDmXAQ" title="Beginner Guide 4: Add Binance Wallet Address at DOKODEMO for Withdrawal" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> <hr>

                    <p class="my-2 pageText">Beginner Guide 5:Withdraw USDT from DOKODEMO to Binance</p>

                    <iframe width="100%" height="495" src="https://www.youtube.com/embed/cDXtrfvoJNM" title="Beginner Guide 5:Withdraw USDT from DOKODEMO to Binance" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> <hr>
                    <p class="my-2 pageText">Beginner Guide 6:Cash out USDT from Binance to Your Bank Account</p>

                    <iframe width="100%" height="495" src="https://www.youtube.com/embed/r_NTUENq1SE" title="Beginner Guide 6:Cash out USDT from Binance to Your Bank Account" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> <hr>
                    <p class="my-2  h3"> Español:</p>

                    <p class="fw-bold " style="font-size: 18px;" >1. <u>¿Qué es el sistema de afiliados DOKODEMO?</u></p>

                    <iframe width="100%" height="495" src="https://www.youtube.com/embed/Bqk6m5L4eMQ" title="¿Qué es el sistema de afiliados DOKODEMO?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> <hr>

                    <p class="fw-bold " style="font-size: 18px;" >2. <u>Uso compartido internacional de DOKODEMO</u></p>
                    <p class="my-2 pageText"></p>














                    <img src="img/liveCommonication.jpg" alt="" class="my-2 img-fluid">

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

@endsection
