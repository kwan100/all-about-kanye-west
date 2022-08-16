<?php
if(!isset($_GET["voter_id"]) || empty($_GET["voter_id"])) {
    $fail = "ERROR";
}
else {
    $host = "303.itpwebdev.com";
    $user = "kwanwoob_db_user";
    $password = "Kbwoo100!cpa";
    $db = "kwanwoob_kanye_db";

    $mysqli = new mysqli($host, $user, $password, $db);
    if ( $mysqli->connect_errno ) {
        echo $mysqli->connect_error;
        exit();
    }

    $mysqli->set_charset('utf8');

    $sql = "SELECT 808s.song AS 808s, graduation.song AS graduation, jesus_is_king.song AS jesus_is_king, kanye_west_presents_good_music_cruel_summer.song AS kanye_west_presents_good_music_cruel_summer,
    kids_see_ghosts.song AS kids_see_ghosts, late_registration.song AS late_registration, my_beautiful_dark_twisted_fantasy.song AS my_beautiful_dark_twisted_fantasy, the_college_dropout.song AS the_college_dropout,
    the_life_of_pablo.song AS the_life_of_pablo, watch_the_throne.song AS watch_the_throne, ye.song AS ye, yeezus.song AS yeezus, voters.name AS voter, voters.id AS voter_id
    FROM voters
    LEFT JOIN 808s
        ON 808s.id = voters.808s_id
    LEFT JOIN graduation
        ON graduation.id = voters.graduation_id
    LEFT JOIN jesus_is_king
        ON jesus_is_king.id = voters.jesus_is_king_id
    LEFT JOIN kanye_west_presents_good_music_cruel_summer
        ON kanye_west_presents_good_music_cruel_summer.id = voters.kanye_west_presents_good_music_cruel_summer_id
    LEFT JOIN kids_see_ghosts
        ON kids_see_ghosts.id = voters.kids_see_ghosts_id
    LEFT JOIN late_registration
        ON late_registration.id = voters.late_registration_id
    LEFT JOIN my_beautiful_dark_twisted_fantasy
        ON my_beautiful_dark_twisted_fantasy.id = voters.my_beautiful_dark_twisted_fantasy_id
    LEFT JOIN the_college_dropout
        ON the_college_dropout.id = voters.the_college_dropout_id
    LEFT JOIN the_life_of_pablo
        ON the_life_of_pablo.id = voters.the_life_of_pablo_id
    LEFT JOIN watch_the_throne
        ON watch_the_throne.id = voters.watch_the_throne_id
    LEFT JOIN ye
        ON ye.id = voters.ye_id
    LEFT JOIN yeezus
        ON yeezus.id = voters.yeezus_id
    WHERE voters.id = " . $_GET["voter_id"] . ";";

    $search = $mysqli->query($sql);
    if (!$search) {
        echo $mysqli->error;
        exit();
    }

    $row = $search->fetch_assoc();

    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL ABOUT KANYE WEST</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-edit">
        <div class="container-fluid">
            <a class="navbar-brand name" href="home.html">AAKW</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">ABOUT</a>                
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="share.php">SHARE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="search.php">SEARCH</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="body">
        <div class="info" style="text-transform:uppercase;">
            <?php echo $row["voter"]; ?>'S FAVORITES
        </div>
        <div class="about-info">
            <?php if (isset($error) && !empty($error)): ?>
                <div class="text-danger">
                    <?php echo $error; ?>
                </div>
            <?php else : ?>				
                <table class="table table-responsive mt-4 table-light">
                    <?php if(isset($row["the_college_dropout"]) && !empty($row["the_college_dropout"])) :?>
                        <tr>
                            <th class="text-right">THE COLLEGE DROPOUT:</th>
                            <td>
                                <?php echo $row["the_college_dropout"]; ?>
                            </td>
                        </tr>
                    <?php endif;?>
                    <?php if(isset($row["late_registration"]) && !empty($row["late_registration"])) :?>
                        <tr>
                            <th class="text-right">LATE REGISTRATION:</th>
                            <td>
                                <?php echo $row["late_registration"]; ?>
                            </td>
                        </tr>
                    <?php endif;?>
                    <?php if(isset($row["graduation"]) && !empty($row["graduation"])) :?>
                        <tr>
                            <th class="text-right">GRADUATION:</th>
                            <td>
                                <?php echo $row["graduation"]; ?>
                            </td>
                        </tr>
                    <?php endif;?>
                    <?php if(isset($row["808s"]) && !empty($row["808s"])) :?>
                        <tr>
                            <th class="text-right">808S & HEARTBREAK:</th>
                            <td>
                                <?php echo $row["808s"]; ?>
                            </td>
                        </tr>
                    <?php endif;?>
                    <?php if(isset($row["my_beautiful_dark_twisted_fantasy"]) && !empty($row["my_beautiful_dark_twisted_fantasy"])) :?>
                        <tr>
                            <th class="text-right">MY BEAUTIFUL DARK TWISTED FANTASY:</th>
                            <td>
                                <?php echo $row["my_beautiful_dark_twisted_fantasy"]; ?>
                            </td>
                        </tr>
                    <?php endif;?>
                    <?php if(isset($row["watch_the_throne"]) && !empty($row["watch_the_throne"])) :?>
                        <tr>
                            <th class="text-right">WATCH THE THRONE:</th>
                            <td>
                                <?php echo $row["watch_the_throne"]; ?>
                            </td>
                        </tr>
                    <?php endif;?>
                    <?php if(isset($row["kanye_west_presents_good_music_cruel_summer"]) && !empty($row["kanye_west_presents_good_music_cruel_summer"])) :?>
                        <tr>
                            <th class="text-right">KANYE WEST PRESENTS GOOD MUSIC CRUEL SUMMER:</th>
                            <td>
                                <?php echo $row["kanye_west_presents_good_music_cruel_summer"]; ?>
                            </td>
                        </tr>
                    <?php endif;?>        
                    <?php if(isset($row["yeezus"]) && !empty($row["yeezus"])) :?>
                        <tr>
                            <th class="text-right">YEEZUS:</th>
                            <td>
                                <?php echo $row["yeezus"]; ?>
                            </td>
                        </tr>
                    <?php endif;?>            
                    <?php if(isset($row["the_life_of_pablo"]) && !empty($row["the_life_of_pablo"])) :?>
                        <tr>
                            <th class="text-right">THE LIFE OF PABLO:</th>
                            <td>
                                <?php echo $row["the_life_of_pablo"]; ?>
                            </td>
                        </tr>
                    <?php endif;?>   
                    <?php if(isset($row["ye"]) && !empty($row["ye"])) :?>
                        <tr>
                            <th class="text-right">YE:</th>
                            <td>
                                <?php echo $row["ye"]; ?>
                            </td>
                        </tr>
                    <?php endif;?>   
                    <?php if(isset($row["kids_see_ghosts"]) && !empty($row["kids_see_ghosts"])) :?>
                        <tr>
                            <th class="text-right">KIDS SEE GHOSTS:</th>
                            <td>
                                <?php echo $row["kids_see_ghosts"]; ?>
                            </td>
                        </tr>
                    <?php endif;?>  
                    <?php if(isset($row["jesus_is_king"]) && !empty($row["jesus_is_king"])) :?>
                        <tr>
                            <th class="text-right">JESUS IS KING:</th>
                            <td>
                                <?php echo $row["jesus_is_king"]; ?>
                            </td>
                        </tr>
                    <?php endif;?>           
                </table>
            <?php endif; ?>
        </div>

        <div class="about-info"></div>
        <div class="about-info"></div>
        <div class="about-info"></div>
        <div class="about-info"></div>
        <div class="about-info"></div>
        <div class="about-info"></div>
        <div class="about-info"></div>

        <div class="about-info">
            <a onclick="return confirm('DELETE INFO?')" href="delete.php?voter_id=<?php echo $row['voter_id'];?>" 
            class="btn btn-danger">DELETE INFO</a>
        </div>

        <div class="about-info">
            <a href="edit.php?voter_id=<?php echo $row['voter_id'];?>" class="btn btn-warning">EDIT FAVORITES</a>
        </div>

        <div class="about-info">
            <a href="search.php" role="button" class="btn btn-primary">BACK TO SEARCH</a>
        </div>
    </div>

    <div class="footer">
        ©2021 AAKW
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>