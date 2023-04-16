<?php require_once("database_connect.php");?>
<div><table width="100%">
<?php

global $sezona_;
$players = getDbAccess()->executeQuery("SELECT * FROM MEXICO_2 WHERE SEZONA=$sezona_ ORDER BY PPK Desc");

echo "<thead>
    <tr>
        <th>
            Ime
        </th>
        <th>
            Bodovi po kući
        </th>
        <th>
            Ukupni bodovi
        </th>
        <th>
            Kuće
        </th>
    </tr>
</thead>
<tbody>";

foreach($players as $player)
{   
    if($player[3] > 0)
    {
        $avg = $player[2]/$player[3];
        $avg = round($avg, 2);
    }
    else
    {
        $avg = 0;
    }
    
    getDbAccess()->executeQuery("UPDATE Mexico SET PPK='$avg' WHERE ID='$player[0]'"); //PPK = bodovi po kući
    echo "<tr><td>"
    .$player[1]."</td>
    <td>"
    .$avg."</td>
    <td>"
    .$player[2]."</td>
    <td>"
    .$player[3]."</td></tr>";
}

echo "</tbody>";

?>
</table>
</div>
</body>
</html>