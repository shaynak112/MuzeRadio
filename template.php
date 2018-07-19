<?php $pjGroup = "1";
 include '/home/muzeradio/muze-radio.com/login/app/views/pjLayouts/pjActionProtect.php'; ?>

 <?php

    include 'head.php';
    include 'nav.php';
    include 'dbConnect.php';

?>

<br/>
<br/>

<section class='banner'>
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <img src='home/banner.png' id='bannerImg'>

            </div>

        </div>
    </div>
</section>


<section class='countdown'>
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div id='countdownDiv'>
                    Countdown To Next Livestream
                    <br/>
                    Easy JavaScript countdown
                </div>


            </div>

        </div>
    </div>
</section>

<section class='nextLivestreamsHome'>
    <div class="container">
        <div class="row">

            <div class="col-md-6">

                <div class='homeBox'>
                    <h2>Upcoming Lineups</h2>
                    <p>July 7, 2018: Kevin Cartwell & Carter Martin (Studio L14) - Jo3y</p>
                    <p>July 14, 2018: Oneida Sessions' 2Shay, Tri-Ohm, Brendan Williams, Missanova</p>
                    <p>July 28, 2018: Alexandria Luciana, Sheebz, Hunnter</p>
                </div>

            </div>
        </div>
    </div>
</section>

<section class='nextEventsHome'>
    <div class="container">
        <div class="row">

            <div class="col-md-6">
            </div>

            <div class="col-md-6">

                <div class='homeBox'>
                    <h2>Upcoming Events</h2>
                    <h3>Saturday, June 30, 10 PM</h3>
                    <p>Ctrlroom, Toronto ON</p>
                    <h3>Saturday, June 23, 10 PM</h3>
                    <p>Ctrlroom, Toronto ON</p>
                    <h3>Thursday, June 14, 10 PM</h3>
                    <p>One Loft, Toronto ON</p>
                </div>

            </div>
        </div>
    </div>
</section>

<section class='DJsHome'>
    <div class="container">
        <div class="row">

            <div class="col-md-6">

                <div class='homeBox'>
                    <h2>DJs</h2>
                    <img src='djs/img014.jpg' class='djImgHome'>
                    <p class='djCaptionHome'>Ryan Wiley</p>
                    <p class='djAboutHome'>venues he plays at</p>
                    <p class='djLinkHome'><a href='#'>Soundcloud or Mixcloud link</a></p>
                </div>

            </div>
        </div>
    </div>
</section>









</div>
<!--end container-->




<?php

include 'footer.php';

?>