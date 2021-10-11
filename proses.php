<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['nama'];
    echo $name;
    $address = $_POST['alamat'];
    echo "<br>";
    echo $address;
}
?>