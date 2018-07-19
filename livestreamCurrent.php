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

                <div id='currentLivestreamTitle'>
                    <h1>Today's Livestream</h1>
                </div>


            </div>

        </div>
    </div>
</section>

<section class='currentLivestreamGo'>
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                
                <p>Current livestream here</p>

               <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Faudreypurr%2Fvideos%2F709341532730922%2F&width=0" width="0" height="0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>

                
            </div>
        </div>
    </div>
</section>







</div>
<!--end container-->




<?php

include 'footer.php';

?>