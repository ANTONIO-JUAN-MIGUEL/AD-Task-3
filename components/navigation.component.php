<?php
// DECLARATIONS
$currentYear = date("Y");
$navLinks = [
    "Home" => "../index.php",
    "Boxing Basics" => "../page/index.php"
];
?>

<nav>
    <?php
    foreach ($navLinks as $text => $url) {
        echo "<a href=\"$url\">$text</a>";
        if ($text != array_key_last($navLinks)) {
            echo " | ";
        }
    }
    ?>
</nav>