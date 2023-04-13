<?php require_once("database_connect.php");?>

<?php
$result = getDbAccess()->executeQuery("SELECT MAX(SEZONA) FROM MEXICO_2");
if ($result !== false) {
    $sezona_ = $result[0][0];
} else {
    $sezona_ = 0;
}
?>