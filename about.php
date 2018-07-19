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


<section class='aboutTitle'>
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <h1>About MUZE Radio</h1>
                <h2>Feel free to get in contact with us!</h2>


            </div>

        </div>
    </div>
</section>

<section class='aboutInfo'>
    <div class="container">
        <div class="row">

            <div class="col-md-6">

                <div class='aboutAbout'>
                    <h2>About</h2>
                    <p>MUZE Radio at the ctrlroom. Showcasing Toronto's DJ's, local talents, and deep wicked hard core techno house beats via livestream at the <a href='http://www.ctrlroom.ca' TAREGET='_BLANK'>www.ctrlroom.ca</a>.</p>
                    <p>We talent search and we request for DJs to guest appearance on our programs monthly, but if you would like to make an appearance on MUZE Radio, just email or send us a message and let your talent be seen and your sound be heard worldwide!</p>
                    <p>MUZE Radio Productions launches events around Ontario from time to time at specified venues showcasing Toronto's hottest DJs. </p>
                    <p>Like and subscribe to stay informed and see all our events.</p>
                </div>

            </div>

            <div class="col-md-6">

                <div class='aboutContact'>
                    <h2>Contact Us!</h2>
                    <div>

                        <div>

                        <p>Email: <a href='mailto:muzeradio@muze-radio.com'>muzeradio@muze-radio.com</a></p>
                        <p>Phone: 416-400-4218</p>
                        </div>
                        
                        <br/>
                        <br/>

                        <div class="form">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                   <label>Your Name </label> 
                                   <input type="text" required>
                                </div>
                                <br/><br/>
                                 <div class="col-md-6">
                                    <label>Your Email Address</label> 
                                   <input type="text" required>
                                </div>
                                <br/><br/>
                                 <div class="col-md-12">
                                    <label>Your Message</label> 
                                  <textarea ></textarea>
                                    <br/><br/>
                                  <button class="btn">Submit</button>
                                </div>
                            </div>
                        </form>
                        </div>

                        <br/>
                        <br/>





                    </div>
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