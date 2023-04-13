<!DOCTYPE html>
<html lang="en">

<body style="background-image: url(../images/mexican-background.webp);">

<?global $sezona_;?>
<?$sezona_ = 7;?>

<?php
if (isset($_GET['sezona_za_gledat'])) {
  $sezona_ = $_GET['sezona_za_gledat'];
}
?>

<?php require_once("./php/get_season_.php");?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FESB MEKSIKO LIGA SEZONA 1</title>
	<LINK REL="stylesheet" HREF="../styles/style.css" TYPE="text/css">
</head>

<body style="background-image: url(../images/mexican-background.webp);">

    <img alt="mexico" src="../images/mexico-shadow.png" class="logo"></img>
    <p>FESB meksiko liga SEZONA <?php echo $sezona_; ?></p>

    <?php include_once("php/print_scores.php");?>

    <br>

    <div id="bottom" class="tumble">
        <img alt="tumbleweed" src="../images/tumbleweed.png" class="animation"></img>
    </div>
    
</body>

</html>