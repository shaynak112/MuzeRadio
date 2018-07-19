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


<section class='upcomingTitle'>
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <h1>Upcoming Events</h1>


            </div>

        </div>
    </div>
</section>

<section class='upcomingEvents'>
    <div class="container">
        <div class="row">

            <div class="col-md-1">
            </div>

            <div class="col-md-10">

                <div class='upcomingEventsDiv'>

                    <?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM upcoming WHERE upcomingPublished='yes' ORDER BY upcomingDate ASC";
    $statement = $db->prepare($query);
    $statement->execute();
    $upcoming = $statement->fetchAll(PDO::FETCH_OBJ);

                    echo "<table>";

                    foreach($upcoming as $g)
    {
                        echo "<tr style='padding:2px;'>";
                        echo "<td style='padding:2px;'>" . $g->upcomingDate . "</td>";
                        echo "<td style='padding:2px;'>" . $g->upcomingDJs . "</td>";
                        echo "<td style='padding:2px;'><a href='" . $g->upcomingVenueLink . "'TARGET=__BLANK'>" . $g->upcomingVenue . "</a></td>";
                        echo "</tr>";



    }

    ?>

                    </table>
                    
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