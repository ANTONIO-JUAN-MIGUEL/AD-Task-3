<?php
require_once __DIR__ . '/utils/config.util.php';

// DECLARATIONS
$siteTitle = "Madman's Boxing Basics";
$upcomingMatch = true;
$fightingStyle = "Slugger/Brawler Style";
$punchTypes = getPunchTypes();
$founderInfo = getFounderInfo();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $siteTitle; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include __DIR__ . '/components/navigation.component.php'; ?>

    <div class="home-container">
        <h1>Welcome to <?php echo $siteTitle; ?>!</h1>

        <p>Here in Madman's Boxing Basics, you will learn the basic punches in boxing:
            <?php
            foreach ($punchTypes as $index => $punch) {
                echo $punch;
                if ($index < count($punchTypes) - 1) {
                    echo ", ";
                }
            }
            ?>. <br> <br> You will also learn the different stances in boxing. Our founder's current fighting
            style is the <br>
            <?php echo $fightingStyle; ?>.
        </p>

        <div class="photo-container">
            <img src="assets/img/Box.jpg" alt="Boxing Basics">
        </div>

        <p>Founded by <?php echo $founderInfo['name']; ?>, an amateur boxer with a record of
            <?php echo $founderInfo['record']; ?> in the <?php echo $founderInfo['division']; ?> division.

            <?php
            if ($upcomingMatch) {
                echo "He has an upcoming amateur championship title match scheduled this year and will be fighting in the professionals next year.";
            } else {
                echo "My next match is currently uncheduled.";
            }
            ?>
        </p>

        <a href="page/index.php" class="home-link">Learn More About Boxing Basics</a>
    </div>
</body>

</html>
ode Cod
<!--e Code Code CodCode Code Code CodCode