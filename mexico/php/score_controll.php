<?php require_once("database_connect.php");?>
<?php 

function NewScore($bere_bodovi, $tonći_bodovi, $muni_bodovi, $biuk_bodovi, $ciko_bodovi, $sezona) {
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET `UKUPNI BODOVI`='$bere_bodovi' + `UKUPNI BODOVI` WHERE IME='Bere' AND SEZONA='$sezona'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET `UKUPNI BODOVI`='$tonći_bodovi' + `UKUPNI BODOVI` WHERE IME='Tonći' AND SEZONA='$sezona'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET `UKUPNI BODOVI`='$muni_bodovi' + `UKUPNI BODOVI` WHERE IME='Muni' AND SEZONA='$sezona'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET `UKUPNI BODOVI`='$biuk_bodovi' + `UKUPNI BODOVI` WHERE IME='Biuk' AND SEZONA='$sezona'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET `UKUPNI BODOVI`='$ciko_bodovi' + `UKUPNI BODOVI` WHERE IME='Ciko' AND SEZONA='$sezona'");
}

function NewKuća($bere_bodovi, $tonći_bodovi, $muni_bodovi, $biuk_bodovi, $ciko_bodovi, $sezona) {
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE='$bere_bodovi' + KUĆE WHERE IME='Bere' AND SEZONA='$sezona'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE='$tonći_bodovi' + KUĆE WHERE IME='Tonći' AND SEZONA='$sezona'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE='$muni_bodovi' + KUĆE WHERE IME='Muni' AND SEZONA='$sezona'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE='$biuk_bodovi' + KUĆE WHERE IME='Biuk' AND SEZONA='$sezona'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE='$ciko_bodovi' + KUĆE WHERE IME='Ciko' AND SEZONA='$sezona'");
}

function NewKuća_Svima($sezona) {
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE=1 + KUĆE WHERE IME='Bere' AND SEZONA='$sezona'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE=1 + KUĆE WHERE IME='Tonći' AND SEZONA='$sezona'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE=1 + KUĆE WHERE IME='Muni' AND SEZONA='$sezona'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE=1 + KUĆE WHERE IME='Biuk' AND SEZONA='$sezona'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE=1 + KUĆE WHERE IME='Ciko' AND SEZONA='$sezona'");
}

function NewSeason($sezona) {
    getDbAccess()->executeQuery("INSERT INTO `MEXICO_2`(`IME`, `UKUPNI BODOVI`, `KUĆE`, `PPK`, `SEZONA`) 
    VALUES 
    ('Bere', 0, 0, 0, $sezona),
    ('Muni', 0, 0, 0, $sezona),
    ('Tonći', 0, 0, 0, $sezona),
    ('Biuk', 0, 0, 0, $sezona),
    ('Ciko', 0, 0, 0, $sezona);");
}

?>