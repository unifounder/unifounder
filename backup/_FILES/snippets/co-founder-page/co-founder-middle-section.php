<?php
    require '_FILES/includes/connect.php';

    $CofounderData = $dbh->prepare("SELECT * FROM cofounderpage");
    $CofounderData->execute();
    //$get_data_coFounder = $CofounderData->fetchAll(PDO::FETCH_ASSOC);
?>

<section>
    <div class="wrapper">
        <div class="co-founder-middle-sectionn">
            <div class="co-founder-sidepanel">
                <div class="co-founder-cases-grid">
                    <?php
                        while($r = $CofounderData->fetch(PDO::FETCH_ASSOC))
                        {
                            ?>
                            <div class="co-founder-cases">
                                <figure>
                                    <img 
                                    src="https://placeimg.com/200/140/any" 
                                    alt="">
                                </figure>
                                    <h4><?php echo $r['name'];?></h4>
                                    <h5><?php echo $r['university'];?></h5>
                                    <div class="co-founder-cases-skills">
                                        <p>-<?php echo $r['skill1'];?></p>
                                        <p>-<?php echo $r['skill2'];?></p>
                                        <p>-<?php echo $r['skill3'];?></p>
                                        <a href="#">See Profile</a>
                                    </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>