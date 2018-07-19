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


<section class='galleryTitle'>
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <h1>Gallery</h1>

            </div>

        </div>
    </div>
</section>

<section class='galleryImages'>
    <div class="container">


<?php


    $threeCount=0;


    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM photoGallery";
    $statement = $db->prepare($query);
    $statement->execute();
    $galleryPhotos = $statement->fetchAll(PDO::FETCH_OBJ);



foreach($galleryPhotos as $g)
{

    if($threeCount==0)
    {
        echo "<div class='row'>";

            echo "<div class='col-md-4'>";

                echo "<div class='galImgDiv'>";
                    echo "<img src='" . $g->galleryLink . "' class='galImg'>";
                    echo "<p>" . $g->galleryCaption . "</p>";
                echo "</div>";

            echo "</div>";
            $threeCount++;

    }
    else if($threeCount==1)
    {
        echo "<div class='col-md-4'>";

                echo "<div class='galImgDiv'>";
                   echo "<img src='" . $g->galleryLink . "' class='galImg'>";
                   echo "<p>" . $g->galleryCaption . "</p>";
                echo "</div>";

            echo "</div>";
            $threeCount++;

    }
    else if($threeCount==2)
    {
        echo "<div class='col-md-4'>";

                echo "<div class='galImgDiv'>";
                    echo "<img src='" . $g->galleryLink . "' class='galImg'>";
                   echo "<p>" . $g->galleryCaption . "</p>";
                echo "</div>";

            echo "</div>";
        echo "</div>";
            $threeCount=0;

    }
}



?>
        <!--<div class="row">

            <div class="col-md-4">

                <div class='galImgDiv'>
                    <img src='gallery/img011.jpg' class='galImg'>
                    <p>Caption or link if wanted</p>
                </div>

            </div>

            <div class="col-md-4">

                <div class='galImgDiv'>
                    <h2>Upcoming Lineups</h2>
                    <p>July 7, 2018: Kevin Cartwell & Carter Martin (Studio L14) - Jo3y</p>
                    <p>July 14, 2018: Oneida Sessions' 2Shay, Tri-Ohm, Brendan Williams, Missanova</p>
                    <p>July 28, 2018: Alexandria Luciana, Sheebz, Hunnter</p>
                </div>

            </div>

            <div class="col-md-4">

                <div class='galImgDiv'>
                    <h2>Upcoming Lineups</h2>
                    <p>July 7, 2018: Kevin Cartwell & Carter Martin (Studio L14) - Jo3y</p>
                    <p>July 14, 2018: Oneida Sessions' 2Shay, Tri-Ohm, Brendan Williams, Missanova</p>
                    <p>July 28, 2018: Alexandria Luciana, Sheebz, Hunnter</p>
                </div>

            </div>
        </div>
    </div>-->
</section>







</div>
<!--end container-->



<?php

include 'footer.php';

?>