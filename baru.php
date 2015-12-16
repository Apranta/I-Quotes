<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("ap-cdbr-azure-southeast-a.cloudapp.net", "b6a18f25b309d1", "bd9a8d78", "rezidb");

$result = $conn->query("SELECT * FROM kata");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Quotes":"'  . $rs["Quotes"] . '",';
    $outp .= '"Author":"'   . $rs["Author"]        . '",';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
