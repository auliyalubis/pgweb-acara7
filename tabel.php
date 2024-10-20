<!DOCTYPE html>
<html>
<body>
    
<?php
$nama = array("Aul", "Shelamita", "Regita", "Arin", "Nadine");
$handphone = array("Samsung", "IPhone", "IPhone", "Samsung", "Infinix"); 
$colors = array("Violet", "Cream", "Putih", "Biru", "Biru");

echo "<table border='1'>";
for($i=0; $i<=4; $i++) {
    echo"<tr><td> $nama[$i] </td><td> $handphone[$i] </td><td> $colors[$i] </td><tr>";
}
echo "</table>";
?>

</body>
</html> 