<?php
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
WHERE 1 = 1";

if (isset($_GET["808s"]) && !empty($_GET["808s"])) {
	$sql = $sql . " AND voters.808s_id = " . $_GET['808s'];
}

if (isset($_GET["graduation"]) && !empty($_GET["graduation"])) {
	$sql = $sql . " AND voters.graduation_id = " . $_GET['graduation'];
}

if (isset($_GET["jesus_is_king"]) && !empty($_GET["jesus_is_king"])) {
	$sql = $sql . " AND voters.jesus_is_king_id = " . $_GET['jesus_is_king'];
}

if (isset($_GET["kanye_west_presents_good_music_cruel_summer"]) && !empty($_GET["kanye_west_presents_good_music_cruel_summer"])) {
	$sql = $sql . " AND voters.kanye_west_presents_good_music_cruel_summer_id = " . $_GET['kanye_west_presents_good_music_cruel_summer'];
}

if (isset($_GET["kids_see_ghosts"]) && !empty($_GET["kids_see_ghosts"])) {
	$sql = $sql . " AND voters.kids_see_ghosts_id = " . $_GET['kids_see_ghosts'];
}

if (isset($_GET["late_registration"]) && !empty($_GET["late_registration"])) {
	$sql = $sql . " AND voters.late_registration_id = " . $_GET['late_registration'];
}

if (isset($_GET["my_beautiful_dark_twisted_fantasy"]) && !empty($_GET["my_beautiful_dark_twisted_fantasy"])) {
	$sql = $sql . " AND voters.my_beautiful_dark_twisted_fantasy_id = " . $_GET['my_beautiful_dark_twisted_fantasy'];
}

if (isset($_GET["the_college_dropout"]) && !empty($_GET["the_college_dropout"])) {
	$sql = $sql . " AND voters.the_college_dropout_id = " . $_GET['the_college_dropout'];
}

if (isset($_GET["the_life_of_pablo"]) && !empty($_GET["the_life_of_pablo"])) {
	$sql = $sql . " AND voters.the_life_of_pablo_id = " . $_GET['the_life_of_pablo'];
}

if (isset($_GET["watch_the_throne"]) && !empty($_GET["watch_the_throne"])) {
	$sql = $sql . " AND voters.watch_the_throne_id = " . $_GET['watch_the_throne'];
}

if (isset($_GET["ye"]) && !empty($_GET["ye"])) {
	$sql = $sql . " AND voters.ye_id = " . $_GET['ye'];
}

if (isset($_GET["yeezus"]) && !empty($_GET["yeezus"])) {
	$sql = $sql . " AND voters.yeezus_id = " . $_GET['yeezus'];
}

$sql = $sql . ";";

$search = $mysqli->query($sql);

if ($search == false) {
	echo $mysqli->error;
	exit();
}

$mysqli->close();
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
            FANS WITH SIMILAR INTERESTS
        </div>

        <table class="table table-hover table-responsive mt-4 table-light">
			<thead>
				<tr>
					<th>FANS</th>
				</tr>
			</thead>
			<tbody>				
                <?php while ($row = $search->fetch_assoc()) : ?>
                    <tr>
                        <td>
                            <a href="info.php?voter_id=<?php echo $row['voter_id'];?>">
                                <?php echo $row['voter']; ?>
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
			</tbody>
		</table>

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