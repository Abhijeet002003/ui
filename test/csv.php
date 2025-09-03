<?php
include 'db.php';
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="data.csv"');
$output=fopen('php://output','w');
fputcsv($output,['Name','Email', 'Address']);
$result=$conn->query("select * from users");
while ($row=$result->fetch_assoc()) {
    fputcsv($output,$row);

}
?>