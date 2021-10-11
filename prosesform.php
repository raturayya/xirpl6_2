<!DOCTYPE html>
<html>
    <head></head>
    <body> 
    <?php
    if (isset($_GET['namaa']) AND isset($_GET['email']))
{
    $namaa = $_GET['namaa'];
    $email = $_GET['email'];
}
else
{
    echo "Maaf, anda harus mengakses halaman ini  dari form.html<br><br>";
}

if(!empty($namaa))
{
    echo "Nama: $namaa <br /> Email: $email";
}

else
{
    die("Maaf, anda harus mengisi nama");
}
?>

</body>
</html>