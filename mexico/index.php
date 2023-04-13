<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FESB MEKSIKO LIGA</title>
	<LINK REL="stylesheet" HREF="styles/style.css" TYPE="text/css">
</head>

<?global $sezona;?>
<?$sezona = 0;?>

<?php
// Start a session
session_start();

// Set the value of the global variable

require_once("./php/get_season.php");

// Store the global variable in the session
$_SESSION['sezona'] = $sezona;
?>


<?global $sezona_za_gledat;?>
<?$sezona_za_gledat = 0;?>

<body style="background-image: url(images/mexican-background.webp);">

    <img alt="mexico" src="images/mexico-shadow.png" class="logo"></img>
    <p>FESB meksiko liga sezona <?php echo $sezona; ?></p>

    <?php include_once("php/print_scores.php");?>


    <div id="buttons">
        <button id="Button" class="button">Unesi novi rezultat</button>
        <button id="myButton2" class="button">Povećaj broj odigranih kuća</button>
        <button id="myButton3" class="button">Povećaj broj odigranih kuća SVIMA</button>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn button">Sezone</button>
            <div id="myDropdown" class="dropdown-content">
            <?php for ($i = 1; $i <= $sezona; $i++) { ?>
                <a href="./Sezone/index.php?sezona_za_gledat=<?php echo $i;?>">Sezona <?php echo $i;?></a>
                <?php } ?>
            </div>
        </div>
        <button id="myButton4" class="button">Završi sezonu <?php echo $sezona; ?></button>

        <a href="music.html" target="_blank" class="button">Glazba</a>
    </div>

    <br>

    <div id="bottom" class="tumble">
        <img alt="tumbleweed" src="images/tumbleweed.png" class="animation"></img>
    </div>
    
    <script src="button.js"></script>
</body>

</html>
