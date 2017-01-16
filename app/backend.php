<?php

$getumfrage_data_sql = "SELECT * FROM umfrage";
$result = mysqli_query($dblink, $getumfrage_data_sql);
$row = mysqli_fetch_assoc($result);

print_r($row);
$clicks1 = (int)$row['clicks1'];
$clicks2 = (int)$row['clicks2'];

$summeClicks = $clicks1 + $clicks2;
$prozent1 = ($clicks1/$summeClicks) * 100;
$prozent2 = ($clicks2/$summeClicks) * 100;

?>





<section class="backend">
    <div class="wrapper">
        <div class="flexbox-box">
            <h1>Administration</h1>


            <h2>Aktuelle Umfrage:<br> <?php echo $row['frage']; ?></h2>






            
            HIER KOMMT DAS FORMULAR ZUR ÄNDERUNG DER AKTUELLEN UMFRAGE
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


            <input id="umfrageBeenden" type="button" class="btn" value="Umfrage beenden und speichern">

            <div class="hinweis exists">
                <img class="icon icons8-Attention" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAADQUlEQVRoQ+2ZjZFNQRCFz0aACBABIkAEiAARIAJEgAgQASJABIgAESAC6qu686pf377z/2o9dqq2trb23p5zuk/3TPc90ZGvkyPHrzMCpx3BmRG4Kum6pBuSLknib7s+S/om6YOkj5L4e3iNEgDoXUn3FtAtgCDzStLrhVjLu7tnewmcl/RY0sOuXdcvPZf0VNLPVns9BG5LeikJEjMX4O9LettitJXAs4LX3y0AkAeAks7JBwjzmxy5lQFJNB7VkqglwOaAR+t+/VpI4blaCWCPSAL2XGCT3CAaxVVLAMlE4NEtIGqBe0AQIY/IJ7+qSNQQAOADZx2vI4UppXCRFuXVR+NFqVCUCBDmNw78lyX86HzmoiQjwyvO6J1cYucIEN6vrtrgeRJxNviEGRJE1UYCeV7ekmmOQCSdaw2y+e08WYp2ehwHfXLvbkppyyiewPt2kbBPGjTTS4At2McnNlFYRX6LgDeAdCDVUm1GCCBfwFophQ7cIoD3AZwWNZmy1rJGCLAP5ZWzJy0IEYW9FRGINHih0ftsMkqAKPxweFc5GBHwzLkeUE5b1ygB9qOs2msHVwyKy25FBPxLPfKZEYFIRitnRgQoYbYZubk0IacRAU7792ZjzghklI2AD31L7be2Z0goysc9p0cRmLHxLAkV7fwXBI5OQiSKvRH2JnFr0kfP+yTmJrw37agpo6vaOwNZpY3imXTIg6wSY/axroNs1lVilED3VYKNuThdNAh6TuPRcuzl8z0antVep7Nd0YarRwhE3WDTdfpvbGjCG/E/21KiiqgrQkocbIds6rlM2rFlthssNdrRWIWDjlHHbBLIlhGOH8t3j1VSbkbTCSLBCT1zsMW12Q+MhwdbiQT9MN8B/KL5Z5OWZt/aADBTv2jawXeDaJy5h6EkofQwGxGJiATgqdl0S7VEsIctgEdj+irwgKslkJOT9QhHPzNOpEXy2fE6I5I0Xs/12EXZlDqy0hWAzZFUNBYvvZv7P4SRzEE/cFhJEX4/te4lgNexVyvB3T6tEvIAKX14jR97d6ohwt2GSPLTXZJHCVigSd/pM6sfk9OMpM+sKU9qiGafmUlgGEyPgTMCPV6b+c7RR+APKEO+MQWY04MAAAAASUVORK5CYII=" width="48" height="48">
                <h3>Diese Umfrage ist bereits gespeichert</h3>
                <a class="btn">Okay</a>
            </div>

            <div class="hinweis saved">
                <img class="icon icons8-Attention" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAADQUlEQVRoQ+2ZjZFNQRCFz0aACBABIkAEiAARIAJEgAgQASJABIgAESAC6qu686pf377z/2o9dqq2trb23p5zuk/3TPc90ZGvkyPHrzMCpx3BmRG4Kum6pBuSLknib7s+S/om6YOkj5L4e3iNEgDoXUn3FtAtgCDzStLrhVjLu7tnewmcl/RY0sOuXdcvPZf0VNLPVns9BG5LeikJEjMX4O9LettitJXAs4LX3y0AkAeAks7JBwjzmxy5lQFJNB7VkqglwOaAR+t+/VpI4blaCWCPSAL2XGCT3CAaxVVLAMlE4NEtIGqBe0AQIY/IJ7+qSNQQAOADZx2vI4UppXCRFuXVR+NFqVCUCBDmNw78lyX86HzmoiQjwyvO6J1cYucIEN6vrtrgeRJxNviEGRJE1UYCeV7ekmmOQCSdaw2y+e08WYp2ehwHfXLvbkppyyiewPt2kbBPGjTTS4At2McnNlFYRX6LgDeAdCDVUm1GCCBfwFophQ7cIoD3AZwWNZmy1rJGCLAP5ZWzJy0IEYW9FRGINHih0ftsMkqAKPxweFc5GBHwzLkeUE5b1ygB9qOs2msHVwyKy25FBPxLPfKZEYFIRitnRgQoYbYZubk0IacRAU7792ZjzghklI2AD31L7be2Z0goysc9p0cRmLHxLAkV7fwXBI5OQiSKvRH2JnFr0kfP+yTmJrw37agpo6vaOwNZpY3imXTIg6wSY/axroNs1lVilED3VYKNuThdNAh6TuPRcuzl8z0antVep7Nd0YarRwhE3WDTdfpvbGjCG/E/21KiiqgrQkocbIds6rlM2rFlthssNdrRWIWDjlHHbBLIlhGOH8t3j1VSbkbTCSLBCT1zsMW12Q+MhwdbiQT9MN8B/KL5Z5OWZt/aADBTv2jawXeDaJy5h6EkofQwGxGJiATgqdl0S7VEsIctgEdj+irwgKslkJOT9QhHPzNOpEXy2fE6I5I0Xs/12EXZlDqy0hWAzZFUNBYvvZv7P4SRzEE/cFhJEX4/te4lgNexVyvB3T6tEvIAKX14jR97d6ohwt2GSPLTXZJHCVigSd/pM6sfk9OMpM+sKU9qiGafmUlgGEyPgTMCPV6b+c7RR+APKEO+MQWY04MAAAAASUVORK5CYII=" width="48" height="48">
                <h3>Die Umfrage wurde gespeichert</h3>
                <a class="btn">Okay</a>
            </div>
            

            <!--
            <div>
                <div class="ergebnisLine flexbox-box">
                    <img src="http://placehold.it/150x110">
                    
                    <div class="bar flexbox-box">
                        <h3>Antwort 1</h3>
                        <div class="meter meter1">
                            <span data-width="<?php echo $prozent1; ?>"></span>
                        </div>
                        <div class="percentage"><span class="percentage1"><?php echo $prozent1; ?> %</span> <p><span id="stimmen1"></span> Stimmen</p></div>
                    </div>
                </div>

                <div class="ergebnisLine flexbox-box">
                    <img src="http://placehold.it/150x110">
                    
                    <div class="bar flexbox-box">
                        <h3>Antwort 2</h3>
                        <div class="meter meter2">
                            <span data-width="<?php echo $prozent2; ?>"></span>
                        </div>
                        <div class="percentage"><span class="percentage2"><?php echo $prozent1; ?> %</span> <p><span id="stimmen2"></span> Stimmen</p></div>
                    </div>
                </div>
            </div>

            -->

        </div>
    </div>
</section>


<section class="backend alte_umfragen" id="bisherigeUmfragen">
    <div class="wrapper">
        <div class="flexbox-box">
            <h1>Bisherige Umfragen</h1>
            
            <?php
                $getumfrage_sql = "SELECT frage, antwort1, img1, clicks1, antwort2, img2, clicks2, id FROM alte_umfragen ORDER BY id ASC";
                $result = mysqli_query($dblink, $getumfrage_sql);

                if(mysqli_num_rows($result) == 0) { 
                    echo '<h2>Bis jetzt gab es noch keine Umfragen</h2>';
                }
           

                while ($row = $result->fetch_assoc()) {

                    $summeClicks = $row['clicks1'] + $row['clicks2'];
                    $prozent1 = ($row['clicks1']/$summeClicks) * 100;
                    $prozent2 = ($row['clicks2']/$summeClicks) * 100;


                    ?>
                    <div>
                        <h2><?php echo $row["frage"]; ?></h2>
                        <div class="ergebnisLine flexbox-box">
                            <img src="images/<?php echo $row['img1'];?>">
                            
                            <div class="bar flexbox-box">
                                <h3><?php echo $row['antwort1'];?></h3>
                                <div class="meter meter1">
                                    <span data-width="<?php echo $prozent1; ?>%"></span>
                                </div>
                                <div class="percentage"><span class="percentage1"><?php echo $prozent1; ?> %</span> <p><span><?php echo $row['clicks1'];?></span> Stimmen</p></div>
                            </div>
                        </div>

                        <div class="ergebnisLine flexbox-box">
                            <img src="images/<?php echo $row['img2'];?>">
                            
                            <div class="bar flexbox-box">
                                <h3><?php echo $row['antwort2'];?></h3>
                                <div class="meter meter2">
                                    <span data-width="<?php echo $prozent2; ?>%"></span>
                                </div>
                                <div class="percentage"><span class="percentage2"><?php echo $prozent1; ?> %</span> <p><span><?php echo $row['clicks2'];?></span> Stimmen</p></div>
                            </div>
                        </div>
                    </div>

                    

                    <?php
                }

 ?>

            

        </div>
    </div>
</section>