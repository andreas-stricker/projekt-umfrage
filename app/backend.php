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

<section id="ergebnis">
            <div class="wrapper">
                <div class="flexbox-box">
                    <h1>Umfrage: <?php echo $row['frage']; ?></h1>
                    <h2>Ergebnis</h2>

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
                </div>
            </div>
        </section>