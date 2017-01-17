<?php

$getumfrage_data_sql = "SELECT * FROM umfrage";
$result = mysqli_query($dblink, $getumfrage_data_sql);
$row = mysqli_fetch_assoc($result);

print_r($row);

// $clicks1 = (int)$row['clicks1'];
// $clicks2 = (int)$row['clicks2'];

// $summeClicks = $clicks1 + $clicks2;
// $prozent1 = ($clicks1/$summeClicks) * 100;
// $prozent2 = ($clicks2/$summeClicks) * 100;


if(($_SESSION['login'] == 1) ){?>



    <section class="backend">
        <div class="wrapper">
                <h1>Administration</h1>
                <a class="logout" href="index.php?page=logout">Logout</a>


                <h2>Aktuelle Umfrage:<br> <?php echo $row['frage']; ?></h2>


            <input id="umfrageBeenden" type="button" class="btn" value="Umfrage beenden und speichern">
            <input id="umfrageErstellen" type="button" class="btn" value="Neue Umfrage erstellen">




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
            

        </div>
    </section>

    <section class="backend hide" id="neueUmfrage">
        <div class="wrapper">
            <form action="umfrage_erstellen" method="post" accept-charset="utf-8">
                <div class="flexbox-box">
                <label for="frage">Gib hier die Fragestellung ein</label>
                <input type="text" name="frage">
                </div>
                <div class="flexbox-box">
                    <label for="antwort1">Gib hier die 1. Antwort ein</label>
                    <input type="text" name="antwort1">
                </div>
                <div class="flexbox-box">
                    <label for="bild1">Lade hier die 1. Bild hoch</label>
                    <input type="text" name="bild1">
                </div>
                <div class="flexbox-box">
                    <label for="antwort2">Gib hier die 2. Antwort ein</label>
                    <input type="text" name="antwort2">
                </div>
                <div class="flexbox-box">
                    <label for="bild2">Lade hier die 2. Bild hoch</label>
                    <input type="text" name="bild2">
                </div>
                <div class="flex-box">
                    <input type="submit" value="Umfrage erstellen" class="btn" id="umfrageSubmit">
                </div>
            </form>
            

        </div>
        
    </section>




    <section class="backend alte_umfragen" id="bisherigeUmfragen">
        <div class="wrapper">
            <div class="flexbox-box">
                <h1>Bisherige Umfragen</h1>
                


                <div id="bisherigeErgebnisse">
                <?php
                    $getumfrage_sql = "SELECT frage, antwort1, img1, clicks1, antwort2, img2, clicks2, id FROM alte_umfragen ORDER BY id ASC";
                    $result = mysqli_query($dblink, $getumfrage_sql);

                    if(mysqli_num_rows($result) == 0) { 
                        echo '<h2 class="keineEintraege">Bis jetzt gab es noch keine Umfragen</h2>';
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
                                    <div class="percentage"><span class="percentage1"><?php echo round($prozent1); ?> %</span> <p><span><?php echo $row['clicks1'];?></span> Stimmen</p></div>
                                </div>
                            </div>

                            <div class="ergebnisLine flexbox-box">
                                <img src="images/<?php echo $row['img2'];?>">
                                
                                <div class="bar flexbox-box">
                                    <h3><?php echo $row['antwort2'];?></h3>
                                    <div class="meter meter2">
                                        <span data-width="<?php echo $prozent2; ?>%"></span>
                                    </div>
                                    <div class="percentage"><span class="percentage2"><?php echo round($prozent2); ?> %</span> <p><span><?php echo $row['clicks2'];?></span> Stimmen</p></div>
                                </div>
                            </div>
                        </div>

                        

            <?php
                    }

            ?>
                </div>
                

            </div>
        </div>
    </section>

<?php } else {
    
    include("includes/login.php");
    ?>

    <section id="login">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>?page=admin" method="post">
            <label for="name">Name</label><br>
            <input type="text" name="user_name"><br>
            <label for="password">Passwort</label><br>
            <input type="password" name="user_password"><br>

            <input type="submit" name="login" value="Einloggen">
        </form>
    </section>
<?php }

