<?php
include("koneksi.php");


$sql = "SELECT jam, SUM(jumlah) as total 
        FROM pengunjung 
        GROUP BY jam 
        ORDER BY jam ASC";

$result = $conn->query($sql);

$xValues = [];
$yValues = [];

while ($row = $result->fetch_assoc()) {
    $xValues[] = $row['jam'];     
    $yValues[] = $row['total']; 
}

echo json_encode([
    "xValues" => $xValues,
    "yValues" => $yValues
]);
