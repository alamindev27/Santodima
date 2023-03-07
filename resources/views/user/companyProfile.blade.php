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
                        <p class="fw-bold m-0 fs-5">Company Profile</p>
                    </div>
                </div>
            </div>
        </div>



        <section id="options_bar" class="margin-bottom35">
            <div class="container-fluid">
                <div class="px-3">
                    <h2 class="fw-bold">English:</h2>

                    <p class="fw-bold" style="font-size: 18px;">1. <u>.What is DOKODEMO affiliate system？ </u></p>
                    <iframe width="100%" height="495" src="https://www.youtube.com/embed/jwyL9fEVC7g" title="Introduction of DOKODEMO affiliate system" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


                    <p class="fw-bold " style="font-size: 18px;" >2. <u>DOKODEMO International User Sharing</u></p>

                    <iframe width="100%" height="495px" src="https://www.youtube.com/embed/DNhGDIFxeTo" title="DOKODEMO International User Sharing，Uso compartido internacional de DOKODEMO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <!-- <iframe src="https://youtu.be/DNhGDIFxeTo" style="width:100%; height:495px" title=""></iframe> -->
                    <hr>
                    <p class="fw-bold" style="font-size: 18px;">3. <u>Room Category</u></p>
                    <img src="img/img.png" alt="" class="img-fluid">

                    <p class="fw-bold my-2" style="font-size: 18px;">U.S Articles of Organization official enquiry website:https://bizfileonline.sos.ca.gov/            </u></p>
                    <p class="fw-bold" style="font-size: 18px;">4. <u>U.S Fincen Msb</u></p>

                    <img src="img/img2.png" alt="" class="img-fluid">

                    <p class="fw-bold my-2" style="font-size: 18px;">*** U.S FINCEN MSB official enquiry website: https://www.fincen.gov  </u></p>


                    <p class="my-2 pageText">DOKODEMO platform is an ECommerce website company. We helped shape the way people shop online, offering Cash Back, deals and incentive rewards on the world selection of products and services. Consumers can also find items that are rare and valuable such as collectibles, appliances and other miscellaneous products from the website, while many others are products that would have been discarded if not for the thousands of eager bidders, proving that if one has a big enough market, one will find someone willing to buy anything.</p>
                    <p class="my-2 pageText">We also generate revenue from merchants or sellers, who pay a fee and commission based on the selling price of each item, and from the traffic of marketing and advertising. DOKODEMO software developers has created an application that integrated the global marketplace through our Affiliate System. As of today, there are around ten thousands of members in our Affiliate System to support our sellers and merchants. ECommerce merchants or businesses always need a simple way to recruit marketers to boost their product sales and our Affiliate System did it very well. We have helped a lot of ECommerce Merchants that cooperate with us to expand their online store by boosting their product's sales and exposure.</p>
                    <p class="my-2 pageText">By develop more new members to join our Affiliate System, we can actually have more manpower to do more order tasks. This will increase more sales volume shown on the merchant side and eventually help the merchants products to have higher exposure and revenue. That's because usually everyone will choose and go for the products that have higher sales volume when they shop online. We will continue to recruit web surfers from all around the world with cashback incentives to promote product sales for many different merchants. We can see it as a win-win situation. By doing so, we are able to provide more product experiences and reach of internationalization and borderless market.</p>
                    <hr>
                    <p class="fw-bold" style="font-size: 25px;">Español :</p>
                    <p class="my-2 pageText"> </p>
                    <p class="my-2 pageText"> </p>

                    <p class="fw-bold my-2" style="font-size: 18px;">1. <u> ¿Qué es el sistema de afiliados de DOKODEMO?</u></p>
                </div>
            </div>

        </section>
        <section id="options_bar" class="margin-bottom35">
            <div class="container-fluid">
                <div class="px-3">
                    <iframe src="https://www.youtube.com/embed/gZhDqYtgYMw?rel=0" style="width:100%; height:495px" title=""></iframe>

                    <p class="fw-bold " style="font-size: 18px;" >2. <u>DOKODEMO International User Sharing</u></p>

                    <iframe width="100%" height="495px" src="https://www.youtube.com/embed/DNhGDIFxeTo" title="DOKODEMO International User Sharing，Uso compartido internacional de DOKODEMO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <!-- <iframe src="https://youtu.be/DNhGDIFxeTo" style="width:100%; height:495px" title=""></iframe> -->
                    <hr>
                    <p class="fw-bold" style="font-size: 18px;">3. <u>Room Category</u></p>
                    <img src="img/img.png" alt="" class="img-fluid">

                    <p class="fw-bold my-2" style="font-size: 18px;">U.S Articles of Organization official enquiry website:https://bizfileonline.sos.ca.gov/            </u></p>
                    <p class="fw-bold" style="font-size: 18px;">4. <u>U.S Fincen Msb</u></p>

                    <img src="img/img2.png" alt="" class="img-fluid">

                    <p class="fw-bold my-2" style="font-size: 18px;">*** U.S FINCEN MSB official enquiry website: https://www.fincen.gov  </u></p>


                    <p class="my-2 pageText">DOKODEMO platform is an ECommerce website company. We helped shape the way people shop online, offering Cash Back, deals and incentive rewards on the world selection of products and services. Consumers can also find items that are rare and valuable such as collectibles, appliances and other miscellaneous products from the website, while many others are products that would have been discarded if not for the thousands of eager bidders, proving that if one has a big enough market, one will find someone willing to buy anything.</p>
                    <p class="my-2 pageText">We also generate revenue from merchants or sellers, who pay a fee and commission based on the selling price of each item, and from the traffic of marketing and advertising. DOKODEMO software developers has created an application that integrated the global marketplace through our Affiliate System. As of today, there are around ten thousands of members in our Affiliate System to support our sellers and merchants. ECommerce merchants or businesses always need a simple way to recruit marketers to boost their product sales and our Affiliate System did it very well. We have helped a lot of ECommerce Merchants that cooperate with us to expand their online store by boosting their product's sales and exposure.</p>
                    <p class="my-2 pageText">By develop more new members to join our Affiliate System, we can actually have more manpower to do more order tasks. This will increase more sales volume shown on the merchant side and eventually help the merchants products to have higher exposure and revenue. That's because usually everyone will choose and go for the products that have higher sales volume when they shop online. We will continue to recruit web surfers from all around the world with cashback incentives to promote product sales for many different merchants. We can see it as a win-win situation. By doing so, we are able to provide more product experiences and reach of internationalization and borderless market.</p>
                    <hr>
                    <p class="fw-bold" style="font-size: 25px;">Español :</p>
                    <p class="my-2 pageText"> </p>
                    <p class="my-2 pageText"> </p>

                    <p class="fw-bold my-2" style="font-size: 18px;">1. <u> ¿Qué es el sistema de afiliados de DOKODEMO?</u></p>
                </div>
            </div>

        </section>

        <section id="options_bar" class="margin-bottom35">
            <div class="container-fluid">
                <div class="px-3">
                    <iframe src="https://www.youtube.com/embed/gZhDqYtgYMw?rel=0" style="width:100%; height:495px" title=""></iframe>

                    <p class="fw-bold " style="font-size: 18px;" >2. <u>DOKODEMO International User Sharing</u></p>

                    <iframe width="100%" height="495px" src="https://www.youtube.com/embed/DNhGDIFxeTo" title="DOKODEMO International User Sharing，Uso compartido internacional de DOKODEMO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <!-- <iframe src="https://youtu.be/DNhGDIFxeTo" style="width:100%; height:495px" title=""></iframe> -->
                    <hr>
                    <p class="fw-bold" style="font-size: 18px;">3. <u>Room Category</u></p>
                    <img src="img/img.png" alt="" class="img-fluid">

                    <p class="fw-bold my-2" style="font-size: 18px;">U.S Articles of Organization official enquiry website:https://bizfileonline.sos.ca.gov/            </u></p>
                    <p class="fw-bold" style="font-size: 18px;">4. <u>U.S Fincen Msb</u></p>

                    <img src="img/img2.png" alt="" class="img-fluid">

                    <p class="fw-bold my-2" style="font-size: 18px;">*** U.S FINCEN MSB official enquiry website: https://www.fincen.gov  </u></p>


                    <p class="my-2 pageText">DOKODEMO platform is an ECommerce website company. We helped shape the way people shop online, offering Cash Back, deals and incentive rewards on the world selection of products and services. Consumers can also find items that are rare and valuable such as collectibles, appliances and other miscellaneous products from the website, while many others are products that would have been discarded if not for the thousands of eager bidders, proving that if one has a big enough market, one will find someone willing to buy anything.</p>
                    <p class="my-2 pageText">We also generate revenue from merchants or sellers, who pay a fee and commission based on the selling price of each item, and from the traffic of marketing and advertising. DOKODEMO software developers has created an application that integrated the global marketplace through our Affiliate System. As of today, there are around ten thousands of members in our Affiliate System to support our sellers and merchants. ECommerce merchants or businesses always need a simple way to recruit marketers to boost their product sales and our Affiliate System did it very well. We have helped a lot of ECommerce Merchants that cooperate with us to expand their online store by boosting their product's sales and exposure.</p>
                    <p class="my-2 pageText">By develop more new members to join our Affiliate System, we can actually have more manpower to do more order tasks. This will increase more sales volume shown on the merchant side and eventually help the merchants products to have higher exposure and revenue. That's because usually everyone will choose and go for the products that have higher sales volume when they shop online. We will continue to recruit web surfers from all around the world with cashback incentives to promote product sales for many different merchants. We can see it as a win-win situation. By doing so, we are able to provide more product experiences and reach of internationalization and borderless market.</p>
                    <p class="fw-bold my-2" style="font-size: 18px;">E-mail : support@dokodemo.company </p>
                    <hr>

                </div>
            </div>

        </section>


        </div>
@endsection
