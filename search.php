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

$sql_the_college_dropout = "SELECT * FROM the_college_dropout;";
$results_the_college_dropout = $mysqli->query($sql_the_college_dropout);
if ($results_the_college_dropout == false) {
	echo $mysqli->error;
	exit();
}

$sql_late_registration = "SELECT * FROM late_registration;";
$results_late_registration = $mysqli->query($sql_late_registration);
if ($results_late_registration == false) {
	echo $mysqli->error;
	exit();
}

$sql_graduation = "SELECT * FROM graduation;";
$results_graduation = $mysqli->query($sql_graduation);
if ($results_graduation == false) {
	echo $mysqli->error;
	exit();
}

$sql_808s = "SELECT * FROM 808s;";
$results_808s = $mysqli->query($sql_808s);
if ($results_808s == false) {
	echo $mysqli->error;
	exit();
}

$sql_my_beautiful_dark_twisted_fantasy = "SELECT * FROM my_beautiful_dark_twisted_fantasy;";
$results_my_beautiful_dark_twisted_fantasy = $mysqli->query($sql_my_beautiful_dark_twisted_fantasy);
if ($results_my_beautiful_dark_twisted_fantasy == false) {
	echo $mysqli->error;
	exit();
}

$sql_watch_the_throne = "SELECT * FROM watch_the_throne;";
$results_watch_the_throne = $mysqli->query($sql_watch_the_throne);
if ($results_watch_the_throne == false) {
	echo $mysqli->error;
	exit();
}

$sql_kanye_west_presents_good_music_cruel_summer = "SELECT * FROM kanye_west_presents_good_music_cruel_summer;";
$results_kanye_west_presents_good_music_cruel_summer = $mysqli->query($sql_kanye_west_presents_good_music_cruel_summer);
if ($results_kanye_west_presents_good_music_cruel_summer == false) {
	echo $mysqli->error;
	exit();
}

$sql_yeezus = "SELECT * FROM yeezus;";
$results_yeezus = $mysqli->query($sql_yeezus);
if ($results_yeezus == false) {
	echo $mysqli->error;
	exit();
}

$sql_the_life_of_pablo = "SELECT * FROM the_life_of_pablo;";
$results_the_life_of_pablo = $mysqli->query($sql_the_life_of_pablo);
if ($results_the_life_of_pablo == false) {
	echo $mysqli->error;
	exit();
}

$sql_ye = "SELECT * FROM ye;";
$results_ye = $mysqli->query($sql_ye);
if ($results_ye == false) {
	echo $mysqli->error;
	exit();
}

$sql_kids_see_ghosts = "SELECT * FROM kids_see_ghosts;";
$results_kids_see_ghosts = $mysqli->query($sql_kids_see_ghosts);
if ($results_kids_see_ghosts == false) {
	echo $mysqli->error;
	exit();
}

$sql_jesus_is_king = "SELECT * FROM jesus_is_king;";
$results_jesus_is_king = $mysqli->query($sql_jesus_is_king);
if ($results_jesus_is_king == false) {
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
            SEARCH FOR FANS WITH SIMILAR INTERESTS
        </div>
        <form action="search_results.php" method="GET">
            <div class="container sub-info">
                <div class="row row-edit">
                    <label for="the-college-dropout-id" class="col-form-label text-sm-right">THE COLLEGE DROPOUT:</label>
                    <select name="the_college_dropout" id="the-college-dropout-id" class="form-control">
                        <option value="" selected disabled>-- SELECT ONE --</option>
                        
                        <?php while($row = $results_the_college_dropout->fetch_assoc()): ?>
                            <option value="<?php echo $row['id']; ?>">
                                <?php echo $row['song']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="row row-edit">
                    <label for="late-registration-id" class="col-form-label text-sm-right">LATE REGISTRATION:</label>
                    <select name="late_registration" id="late-registration-id" class="form-control">
                        <option value="" selected disabled>-- SELECT ONE --</option>

                        <?php while($row = $results_late_registration->fetch_assoc()): ?>
                            <option value="<?php echo $row['id']; ?>">
                                <?php echo $row['song']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="row row-edit">
                    <label for="graduation-id" class="col-form-label text-sm-right">GRADUATION:</label>
                    <select name="graduation" id="graduation-id" class="form-control">
                        <option value="" selected disabled>-- SELECT ONE --</option>

                        <?php while($row = $results_graduation->fetch_assoc()): ?>
                            <option value="<?php echo $row['id']; ?>">
                                <?php echo $row['song']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="row row-edit">
                    <label for="808s-id" class="col-form-label text-sm-right">808S & HEARTBREAK:</label>
                    <select name="808s" id="808s-id" class="form-control">
                        <option value="" selected disabled>-- SELECT ONE --</option>

                        <?php while($row = $results_808s->fetch_assoc()): ?>
                            <option value="<?php echo $row['id']; ?>">
                                <?php echo $row['song']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="row row-edit">
                    <label for="my-beautiful-dark-twisted-fantasty-id" class="col-form-label text-sm-right">MY BEAUTIFUL DARK TWISTED FANTASY:</label>
                    <select name="my_beautiful_dark_twisted_fantasy" id="my-beautiful-dark-twisted-fantasty-id" class="form-control">
                        <option value="" selected disabled>-- SELECT ONE --</option>

                        <?php while($row = $results_my_beautiful_dark_twisted_fantasy->fetch_assoc()): ?>
                            <option value="<?php echo $row['id']; ?>">
                                <?php echo $row['song']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="row row-edit">
                    <label for="watch-the-throne-id" class="col-form-label text-sm-right">WATCH THE THRONE:</label>
                    <select name="watch_the_throne" id="watch-the-throne-id" class="form-control">
                        <option value="" selected disabled>-- SELECT ONE --</option>

                        <?php while($row = $results_watch_the_throne->fetch_assoc()): ?>
                            <option value="<?php echo $row['id']; ?>">
                                <?php echo $row['song']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="row row-edit">
                    <label for="kanye-west-presents-good-music-cruel-summer-id" class="col-form-label text-sm-right">KANYE WEST PRESENTS GOOD MUSIC CRUEL SUMMER:</label>
                    <select name="kanye_west_presents_good_music_cruel_summer" id="kanye-west-presents-good-music-cruel-summer-id" class="form-control">
                        <option value="" selected disabled>-- SELECT ONE --</option>

                        <?php while($row = $results_kanye_west_presents_good_music_cruel_summer->fetch_assoc()): ?>
                            <option value="<?php echo $row['id']; ?>">
                                <?php echo $row['song']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="row row-edit">
                    <label for="yeezus-id" class="col-form-label text-sm-right">YEEZUS:</label>
                    <select name="yeezus" id="yeezus-id" class="form-control">
                        <option value="" selected disabled>-- SELECT ONE --</option>

                        <?php while($row = $results_yeezus->fetch_assoc()): ?>
                            <option value="<?php echo $row['id']; ?>">
                                <?php echo $row['song']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="row row-edit">
                    <label for="the-life-of-pablo-id" class="col-form-label text-sm-right">THE LIFE OF PABLO:</label>
                    <select name="the_life_of_pablo" id="the-life-of-pablo-id" class="form-control">
                        <option value="" selected disabled>-- SELECT ONE --</option>

                        <?php while($row = $results_the_life_of_pablo->fetch_assoc()): ?>
                            <option value="<?php echo $row['id']; ?>">
                                <?php echo $row['song']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="row row-edit">
                    <label for="ye-id" class="col-form-label text-sm-right">YE:</label>
                    <select name="ye" id="ye-id" class="form-control">
                        <option value="" selected disabled>-- SELECT ONE --</option>

                        <?php while($row = $results_ye->fetch_assoc()): ?>
                            <option value="<?php echo $row['id']; ?>">
                                <?php echo $row['song']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="row row-edit">
                    <label for="kids-see-ghosts-id" class="col-form-label text-sm-right">KIDS SEE GHOSTS:</label>
                    <select name="kids_see_ghosts" id="kids-see-ghosts-id" class="form-control">
                        <option value="" selected disabled>-- SELECT ONE --</option>

                        <?php while($row = $results_kids_see_ghosts->fetch_assoc()): ?>
                            <option value="<?php echo $row['id']; ?>">
                                <?php echo $row['song']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="row row-edit">
                    <label for="jesus-is-king-id" class="col-form-label text-sm-right">JESUS IS KING:</label>
                    <select name="jesus_is_king" id="jesus-is-king-id" class="form-control">
                        <option value="" selected disabled>-- SELECT ONE --</option>

                        <?php while($row = $results_jesus_is_king->fetch_assoc()): ?>
                            <option value="<?php echo $row['id']; ?>">
                                <?php echo $row['song']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>
               
                <div class="buttons">
                    <button type="submit" class="btn btn-primary">SEARCH</button>
                    <button type="reset" class="btn btn-light">RESET</button>
                </div>
            </div>
        </form>
    </div>

    <div class="footer">
        ©2021 AAKW
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>