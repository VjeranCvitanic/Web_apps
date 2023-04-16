<?php require_once("database_connect.php");?>

<?php
$result = getDbAccess()->executeQuery("SELECT MAX(SEZONA) FROM MEXICO_2");
if ($result !== false) {
    $sezona_max = $result[0][0];
} else {
    $sezona_max = 0;
}
?>