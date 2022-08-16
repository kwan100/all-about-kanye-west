<?php
$success = false;

if (!isset($_POST['voter']) || empty($_POST['voter'])) {
	$fail = "PLEASE FILL OUT YOUR NAME";
}
else {
    $host = "303.itpwebdev.com";
	$user = "kwanwoob_db_user";
	$password = "Kbwoo100!cpa";
	$db = "kwanwoob_kanye_db";

	$mysqli = new mysqli($host, $user, $password, $db);
	if ( $mysqli->errno ) {
		echo $mysqli->error;
		exit();
	}

    if (isset($_POST["the_college_dropout"]) && !empty($_POST["the_college_dropout"])) {
		$the_college_dropout = $_POST["the_college_dropout"];
	}
	else {
		$the_college_dropout = "null";
	}

    if (isset($_POST["late_registration"]) && !empty($_POST["late_registration"])) {
		$late_registration = $_POST["late_registration"];
	}
	else {
		$late_registration = "null";
	}

    if (isset($_POST["graduation"]) && !empty($_POST["graduation"])) {
		$graduation = $_POST["graduation"];
	}
	else {
		$graduation = "null";
	}

    if (isset($_POST["808s"]) && !empty($_POST["808s"])) {
		$heartbreak = $_POST["808s"];
	}
	else {
		$heartbreak = "null";
	}

    if (isset($_POST["my_beautiful_dark_twisted_fantasy"]) && !empty($_POST["my_beautiful_dark_twisted_fantasy"])) {
		$my_beautiful_dark_twisted_fantasy = $_POST["my_beautiful_dark_twisted_fantasy"];
	}
	else {
		$my_beautiful_dark_twisted_fantasy = "null";
	}

    if (isset($_POST["watch_the_throne"]) && !empty($_POST["watch_the_throne"])) {
		$watch_the_throne = $_POST["watch_the_throne"];
	}
	else {
		$watch_the_throne = "null";
	}

    if (isset($_POST["kanye_west_presents_good_music_cruel_summer"]) && !empty($_POST["kanye_west_presents_good_music_cruel_summer"])) {
		$kanye_west_presents_good_music_cruel_summer = $_POST["kanye_west_presents_good_music_cruel_summer"];
	}
	else {
		$kanye_west_presents_good_music_cruel_summer = "null";
	}

    if (isset($_POST["yeezus"]) && !empty($_POST["yeezus"])) {
		$yeezus = $_POST["yeezus"];
	}
	else {
		$yeezus = "null";
	}

    if (isset($_POST["the_life_of_pablo"]) && !empty($_POST["the_life_of_pablo"])) {
		$the_life_of_pablo = $_POST["the_life_of_pablo"];
	}
	else {
		$the_life_of_pablo = "null";
	}

    if (isset($_POST["ye"]) && !empty($_POST["ye"])) {
		$ye = $_POST["ye.id"];
	}
	else {
		$ye = "null";
	}

    if (isset($_POST["kids_see_ghosts"]) && !empty($_POST["kids_see_ghosts"])) {
		$kids_see_ghosts = $_POST["kids_see_ghosts"];
	}
	else {
		$kids_see_ghosts = "null";
	}

    if (isset($_POST["jesus_is_king"]) && !empty($_POST["jesus_is_king"])) {
		$jesus_is_king = $_POST["jesus_is_king"];
	}
	else {
		$jesus_is_king = "null";
	}

	$voter = $mysqli->real_escape_string($_POST["voter"]);

    $statement = $mysqli->prepare("UPDATE voters SET name = ?, ye_id = ?, kids_see_ghosts_id = ?,
	the_college_dropout_id = ?, yeezus_id = ?, graduation_id = ?, late_registration_id = ?, 
    jesus_is_king_id = ?, my_beautiful_dark_twisted_fantasy_id = ?, kanye_west_presents_good_music_cruel_summer_id = ?, 
    808s_id = ?, watch_the_throne_id = ?, the_life_of_pablo_id = ? WHERE voters.id = ?");

	$statement->bind_param("siiiiiiiiiiiii", $voter, $_POST["voter.ye_id"], $_POST["voter.kids_see_ghosts_id"], $_POST["voter.the_college_dropout"],
    $_POST["voter.yeezus_id"], $_POST["voter.graduation_id"], $_POST["voter.late_registration_id"], $_POST["voter.jesus_is_king_id"],
    $_POST["voter.my_beautiful_dark_twisted_fantasy_id"], $_POST["voter.kanye_west_presents_good_music_cruel_summer_id"], $_POST["voter.808s_id"],
    $_POST["voter.watch_the_throne_id"], $_POST["voter.the_life_of_pablo_id"], $_POST["voter_id"]);

    $executed = $statement->execute(); 
    if(!$executed) {
        echo $mysqli->error;
    }

    if ($mysqli->affected_rows == 1) {
		$success = true;
	}

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
        <div class="info">
            EDIT FAVORITES
        </div>
        
        <div class="about-info">
            <?php if (isset($fail) && !empty($fail)) :?>
                <?php echo $fail; ?>
            <?php endif;?>
            <?php if($success): ?>
                YOUR FAVORITES HAVE BEEN EDITED
            <?php endif;?>
        </div>

        <div class="about-info"></div>
        <div class="about-info"></div>
        <div class="about-info"></div>
        <div class="about-info"></div>
        <div class="about-info"></div>
        <div class="about-info"></div>
        <div class="about-info"></div>
        <div class="about-info"></div>
        <div class="about-info"></div>
        <div class="about-info"></div>
        <div class="about-info"></div>
        <div class="about-info"></div>
        <div class="about-info"></div>
        <div class="about-info"></div>

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