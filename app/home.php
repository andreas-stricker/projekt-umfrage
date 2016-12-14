 <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php 
            $getumfrage_sql = "SELECT frage, antwort1, img1, antwort2, img2 FROM umfrage";
            $result = mysqli_query($dblink, $getumfrage_sql);
            $row   = mysqli_fetch_row($result);
            $frage = $row['0'];
            $antwort1 = $row['1'];       
            $img1 = 'images/'.$row['2'].'.jpg';
            $antwort2 = $row['3'];       
            $img2 = 'images/'.$row['4'].'.jpg';
        ?>
        

        <section id="umfrage">
            <div class="wrapper">
                <h1>Umfrage</h1>
                <h2><?php echo $frage; ?></h2>

                <form class="flexbox-box">
                    <div class="radioContainer flexbox-box">
                        <div class="flex-item">
                        	<input type="radio" name="antwort" id="1" value="1">
                        	<label for="1" class="flexbox-box">
                        		  <img src="http://placehold.it/350x300">
                        		<p><?php echo $antwort1; ?></p>
                        	</label> 
                        </div>
                        <div class="flex-item">
                        	<input type="radio" name="antwort" id="2" value="2">
                        	<label for="2" class="flexbox-box">
                        		  <img src="http://placehold.it/350x300">
                        		<p><?php echo $antwort2; ?></p>
                        	</label>
                        </div>
                    </div>
                    <div class="bottom">
                        <input id="absenden" type="button" value="Abstimmen">
                        <a href="#" class="zumErgebnis">Zum Ergebnis</a>
                    </div>

                </form>

                <div class="hinweis">
                    <img class="icon icons8-Attention" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAADQUlEQVRoQ+2ZjZFNQRCFz0aACBABIkAEiAARIAJEgAgQASJABIgAESAC6qu686pf377z/2o9dqq2trb23p5zuk/3TPc90ZGvkyPHrzMCpx3BmRG4Kum6pBuSLknib7s+S/om6YOkj5L4e3iNEgDoXUn3FtAtgCDzStLrhVjLu7tnewmcl/RY0sOuXdcvPZf0VNLPVns9BG5LeikJEjMX4O9LettitJXAs4LX3y0AkAeAks7JBwjzmxy5lQFJNB7VkqglwOaAR+t+/VpI4blaCWCPSAL2XGCT3CAaxVVLAMlE4NEtIGqBe0AQIY/IJ7+qSNQQAOADZx2vI4UppXCRFuXVR+NFqVCUCBDmNw78lyX86HzmoiQjwyvO6J1cYucIEN6vrtrgeRJxNviEGRJE1UYCeV7ekmmOQCSdaw2y+e08WYp2ehwHfXLvbkppyyiewPt2kbBPGjTTS4At2McnNlFYRX6LgDeAdCDVUm1GCCBfwFophQ7cIoD3AZwWNZmy1rJGCLAP5ZWzJy0IEYW9FRGINHih0ftsMkqAKPxweFc5GBHwzLkeUE5b1ygB9qOs2msHVwyKy25FBPxLPfKZEYFIRitnRgQoYbYZubk0IacRAU7792ZjzghklI2AD31L7be2Z0goysc9p0cRmLHxLAkV7fwXBI5OQiSKvRH2JnFr0kfP+yTmJrw37agpo6vaOwNZpY3imXTIg6wSY/axroNs1lVilED3VYKNuThdNAh6TuPRcuzl8z0antVep7Nd0YarRwhE3WDTdfpvbGjCG/E/21KiiqgrQkocbIds6rlM2rFlthssNdrRWIWDjlHHbBLIlhGOH8t3j1VSbkbTCSLBCT1zsMW12Q+MhwdbiQT9MN8B/KL5Z5OWZt/aADBTv2jawXeDaJy5h6EkofQwGxGJiATgqdl0S7VEsIctgEdj+irwgKslkJOT9QhHPzNOpEXy2fE6I5I0Xs/12EXZlDqy0hWAzZFUNBYvvZv7P4SRzEE/cFhJEX4/te4lgNexVyvB3T6tEvIAKX14jR97d6ohwt2GSPLTXZJHCVigSd/pM6sfk9OMpM+sKU9qiGafmUlgGEyPgTMCPV6b+c7RR+APKEO+MQWY04MAAAAASUVORK5CYII=" width="48" height="48">
                    <h3>Sie haben noch keine Auswahl getroffen. Bitte wählen Sie zuerst eine Antwort</h3>
                    <a class="btn">Okay</a>
                </div>
            </div>
        </section>

        <section id="ergebnis" class="hide">
            <div class="wrapper">
                <div class="flexbox-box">
                    <h1>Umfrage: <?php echo $frage;?></h1>
                    <h2>Ergebnis</h2>

                    <div>
                        <div class="ergebnisLine flexbox-box">
                            <img src="http://placehold.it/150x110">
                            
                            <div class="bar flexbox-box">
                                <h3>Antwort 1</h3>
                                <div class="meter meter1">
                                    <span data-width="75%"></span>
                                </div>
                                <div class="percentage"><span class="percentage1">90 %</span> <p><span id="stimmen1"></span> Stimmen</p></div>
                            </div>
                        </div>

                        <div class="ergebnisLine flexbox-box">
                            <img src="http://placehold.it/150x110">
                            
                            <div class="bar flexbox-box">
                                <h3>Antwort 2</h3>
                                <div class="meter meter2">
                                    <span data-width="25%"></span>
                                </div>
                                <div class="percentage"><span class="percentage2">10%</span> <p><span id="stimmen2"></span> Stimmen</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


       


    </body>