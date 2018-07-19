<?php $pjGroup = "1";
 include '/home/muzeradio/muze-radio.com/login/app/views/pjLayouts/pjActionProtect.php'; ?>

 <?php

    include 'head.php';
    include 'nav.php';
    include 'dbConnect.php';

?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



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


<section class='priorLivestreamTitle'>
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <h1>Previous Livestreams</h1>
                <br/><br/>

            </div>

        </div>
    </div>
</section>

<section class='priorLivestreamVids'>
    <div class="container">

<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM livestream WHERE livestreamPublish='yes' ORDER BY livestreamDate DESC";
    $statement = $db->prepare($query);
    $statement->execute();
    $prior = $statement->fetchAll(PDO::FETCH_OBJ);

$countStream = 0;
$total = 1;


    foreach($prior as $g)
    {


    if($countStream==0)
    {
    echo "<div class='row'>";



            echo "<div class='col-md-6'>";

                echo "<div class='priorLSVid' style='width:100%;'>";
                    echo "<p>" . $g->livestreamTitle . "</p>";
                echo $g->livestreamLink;
                echo "<p>" . $g->livestreamCaption . "</p>";
                //echo "<iframe src='https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F100007787657732%2Fvideos%2F2038238713112364%2F&show_text=0&width=560' width='560' height='315' style='border:none;overflow:hidden' scrolling='no' frameborder='0' allowTransparency='true' allowFullScreen='true'></iframe>";
                echo "</div>";
                echo "</div>";


            $countStream++;
            $total++;

        }
        else if($countStream==1)
        {


                echo "<div class='col-md-6'>";
                echo "<div class='priorLSVid' style='width:100%;'>";
                echo "<p>" . $g->livestreamTitle . "</p>";
                echo $g->livestreamLink;
                echo "<p>" . $g->livestreamCaption . "</p>";
                //echo "<iframe src='https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F100007787657732%2Fvideos%2F2038238713112364%2F&show_text=0&width=560' width='560' height='315' style='border:none;overflow:hidden' scrolling='no' frameborder='0' allowTransparency='true' allowFullScreen='true'></iframe>";
                echo "</div>";
                echo "</div>";

            echo "</div>";
            $countStream--;
            $total++;


        }

}

?>


</div>
<!--end container-->
</section>

   <!-- 
    <section class="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="about-block">
                        <h2>Hello and welcome to my website
                            web design and development...</h2>
                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting    industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                        </h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="skill-block">
                        <div class="indvidual-skill">
                            <div class="skill_title">
                                <span>Adobe Photoshop</span>
                            </div>
                            <div class="barfiller adobe">
                                <span class="fill" style="width:90%"></span>
                                <span class="tip" style="left:90%"></span>
                            </div>
                        </div>
                        <div class="indvidual-skill">
                            <div class="skill_title">
                                <span>Wordpress</span>
                            </div>
                            <div class="barfiller wordpress">
                                <span class="fill" style="width:80%"></span>
                                <span class="tip" style="left:80%"></span>
                            </div>
                        </div>
                        <div class="indvidual-skill">
                            <div class="skill_title">
                                <span>Adobe Photoshop</span>
                            </div>
                            <div class="barfiller html">
                                <span class="fill" style="width:95%"></span>
                                <span class="tip" style="left:95%"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recent-works">
        <div class="container">
            <h2>Recent works.</h2>
            <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h6>
        </div>
        <div class="portfolio-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="product">
                            <a href="images/port1.jpg" class="lightninBox" data-lb-group="1">
                                <img src="images/port1.jpg" alt="" />

                                <div class="portfolio-details">
                                    <div class="details">
                                        <span class="full-icon"><i class="fa fa-arrows-alt" aria-hidden="true"></i></span>
                                        <h3>Corporate Branding</h3>
                                    <span class="portfolio-category">branding, design</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product">
                            <a href="images/port2.jpg" class="lightninBox" data-lb-group="1">
                                <img src="images/port2.jpg" alt="" />

                                <div class="portfolio-details">
                                    <div class="details">
                                        <span class="full-icon"><i class="fa fa-arrows-alt" aria-hidden="true"></i></span>
                                        <h3>Corporate Branding</h3>
                                    <span class="portfolio-category">branding, design</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product">
                            <a href="images/port3.jpg" class="lightninBox" data-lb-group="1">
                                <img src="images/port3.jpg" alt="" />

                                <div class="portfolio-details">
                                    <div class="details">
                                        <span class="full-icon"><i class="fa fa-arrows-alt" aria-hidden="true"></i></span>
                                        <h3>Corporate Branding</h3>
                                    <span class="portfolio-category">branding, design</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product">
                                    <a href="images/port4.jpg" class="lightninBox" data-lb-group="1">
                                <img src="images/port4.jpg" alt="" />

                                <div class="portfolio-details">
                                    <div class="details">
                                        <span class="full-icon"><i class="fa fa-arrows-alt" aria-hidden="true"></i></span>
                                        <h3>Corporate Branding</h3>
                                    <span class="portfolio-category">branding, design</span>
                                    </div>
                                </div>
                            </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product">
                                    <a href="images/port5.jpg" class="lightninBox" data-lb-group="1">
                                <img src="images/port5.jpg" alt="" />

                                <div class="portfolio-details">
                                    <div class="details">
                                        <span class="full-icon"><i class="fa fa-arrows-alt" aria-hidden="true"></i></span>
                                        <h3>Corporate Branding</h3>
                                    <span class="portfolio-category">branding, design</span>
                                    </div>
                                </div>
                            </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product">
                                    <a href="images/port6.jpg" class="lightninBox" data-lb-group="1">
                                <img src="images/port6.jpg" alt="" />

                                <div class="portfolio-details">
                                    <div class="details">
                                        <span class="full-icon"><i class="fa fa-arrows-alt" aria-hidden="true"></i></span>
                                        <h3>Corporate Branding</h3>
                                    <span class="portfolio-category">branding, design</span>
                                    </div>
                                </div>
                            </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product">
                            <a href="images/port7.jpg" class="lightninBox" data-lb-group="1">
                                <img src="images/port7.jpg" alt="" />

                                <div class="portfolio-details">
                                    <div class="details">
                                        <span class="full-icon"><i class="fa fa-arrows-alt" aria-hidden="true"></i></span>
                                        <h3>Corporate Branding</h3>
                                    <span class="portfolio-category">branding, design</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="btn-sec">
                    <button class="btn gray-btn">Get Started</button>
                </div>
            </div>
        </div>
    </section>
    <section class="project-sart">
        <div class="container">
            <h2>got a project in mind?</h2>
            <h4>Lets create awesome now!</h4>
            <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five</h6>
            <a href="#" class="btn red">Get Started</a>
        </div>
    </section>
    <section class="services-sec">
        <div class="container">
            <h4>What I Do? & How I Do?</h4>
            <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five</h6>
            <div class="row services">
                <div class="col-md-4">
                    <div class="service">
                        <span class="icon screen"><i class="fa fa-television" aria-hidden="true"></i></span>
                        <h3>web design</h3>
                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service">
                        <span class="icon tech"><i class="fa fa-wordpress" aria-hidden="true"></i></span>
                        <h3>wordpress</h3>
                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service">
                        <span class="icon code"><i class="fa fa-file-code-o" aria-hidden="true"></i></span>
                        <h3>html / css</h3>
                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-sec">
        <div class="container">
                <h2>Yea! I Too Write Blog</h2>
                <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five</h6>

                <div class="row blog-list">
                    <div class="col-md-6">
                        <div class="item">
                            <span class="icon"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                            <h3><a href="#">What are the most important 
                            things to be considered in design</a></h3>  
                            <h6>Lorem Ipsum is simply dummy text of the printing and typetook a galley of type and scrambled it to make a type specimen book. It has survived not only five</h6>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="item">
                            <span class="icon"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                            <h3><a href="#">Seo marketing for graphic design
                                and more things.</a></h3>  
                            <h6>Lorem Ipsum is simply dummy text of the printing and typetook a galley of type and scrambled it to make a type specimen book. It has survived not only five</h6>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="item">
                            <span class="icon"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                          <h3><a href="#">What are the most important 
                            things to be considered in design</a></h3> 
                            <h6>Lorem Ipsum is simply dummy text of the printing and typetook a galley of type and scrambled it to make a type specimen book. It has survived not only five</h6>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="item">
                            <span class="icon"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                            <h3><a href="#">Seo marketing for graphic design
                                and more things.</a></h3>   
                            <h6>Lorem Ipsum is simply dummy text of the printing and typetook a galley of type and scrambled it to make a type specimen book. It has survived not only five</h6>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section class="contact-sec" id="contact-sec">
        <div class="container">
            <div class="cover"></div>

            <div class="row content">
                <div class="col-md-8">
                    <h3>Have a Project?</h3>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem type specimen book. It has survived not only five</h6>

                    <div class="form">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                   <label>Your Name </label> 
                                   <input type="text" required>
                                </div>
                                 <div class="col-md-6">
                                    <label>Your Email Address</label> 
                                   <input type="text" required>
                                </div>
                                 <div class="col-md-12">
                                    <label>Your Email Address</label> 
                                  <textarea ></textarea>

                                  <button class="btn red">Get Started</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 contact-details">
                        <address>
                            Modern, 3rd Floor, <br/>
                            Beside that building, USA
                        </address>

                         <address class="hours">
                           Opening Hours : <br/>
                            <span>Mo-Fr 11:00-00:00, Sa-Su 15:00-00:00</span>
                        </address>
                         <address>
                            <strong>
                               Call for Bookings <br/>
                                800 1234 56789
                            </strong>
                        </address>

                         <address class="hours">
                            Support Email:<br/>
                            <a href="mailto:info@mysite.com">info@mysite.com</a>
                        </address>

                        <div class="share align-middle">
                            <span class="fb"><i class="fa fa-facebook-official"></i></span>
                            <span class="instagram"><i class="fa fa-instagram"></i></span>
                            <span class="twitter"><i class="fa fa-twitter"></i></span>
                            <span class="pinterest"><i class="fa fa-pinterest"></i></span>
                            <span class="google"><i class="fa fa-google-plus"></i></span>
                        </div>

                </div>
            </div>
        </div>
    </section>-->

<?php

include 'footer.php';

?>