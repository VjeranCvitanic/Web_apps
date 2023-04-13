<?php require_once("database_connect.php");?>
<?php 
function NewScore($bere_bodovi, $tonći_bodovi, $muni_bodovi, $biuk_bodovi, $ciko_bodovi) {
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET `UKUPNI BODOVI`='$bere_bodovi' + `UKUPNI BODOVI` WHERE IME='Bere'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET `UKUPNI BODOVI`='$tonći_bodovi' + `UKUPNI BODOVI` WHERE IME='Tonći'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET `UKUPNI BODOVI`='$muni_bodovi' + `UKUPNI BODOVI` WHERE IME='Muni'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET `UKUPNI BODOVI`='$biuk_bodovi' + `UKUPNI BODOVI` WHERE IME='Biuk'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET `UKUPNI BODOVI`='$ciko_bodovi' + `UKUPNI BODOVI` WHERE IME='Ciko'");
}

function NewKuća($bere_bodovi, $tonći_bodovi, $muni_bodovi, $biuk_bodovi, $ciko_bodovi) {
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE='$bere_bodovi' + KUĆE WHERE IME='Bere'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE='$tonći_bodovi' + KUĆE WHERE IME='Tonći'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE='$muni_bodovi' + KUĆE WHERE IME='Muni'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE='$biuk_bodovi' + KUĆE WHERE IME='Biuk'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE='$ciko_bodovi' + KUĆE WHERE IME='Ciko'");
}

function NewKuća_Svima() {
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE=1 + KUĆE WHERE IME='Bere'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE=1 + KUĆE WHERE IME='Tonći'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE=1 + KUĆE WHERE IME='Muni'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE=1 + KUĆE WHERE IME='Biuk'");
    getDbAccess()->executeQuery("UPDATE MEXICO_2 SET KUĆE=1 + KUĆE WHERE IME='Ciko'");
}

function NewSeason() {
    $stmt = getDbAccess()->executeQuery('SHOW COLUMNS FROM MEXICO_2');
    // Loop through the rows
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Do something with each row
        echo $row['IME'] . "<br>";
    }
}

?>