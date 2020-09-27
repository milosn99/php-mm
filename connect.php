<?php
$ime = filter_input(INPUT_POST, 'ime');
$email = filter_input(INPUT_POST, 'email');
$telefon = filter_input(INPUT_POST, 'telefon');
$datum = filter_input(INPUT_POST, 'datum');
$model = filter_input(INPUT_POST, 'model');
$msg = filter_input(INPUT_POST, 'msg');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "majstormika";

if(isset($_POST['kliknuto'])) {
    $file = "assets/data.json";
    $arr = array(
        'ime'     => $_POST['ime'],
        'email'    => $_POST['email'],
        'telefon'    => $_POST['telefon'],
        'datum' => $_POST['datum'],
        'model'    => $_POST['model'],
        'msg'    => $_POST['msg']
    );
    $json_string = json_encode($arr);
    file_put_contents($file, $json_string);
}

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
} else {
    $sql = "INSERT INTO zakazivanja (ime, email, telefon, datum, model, msg) values ('$ime','$email', '$telefon', '$datum', '$model', '$msg')";
    if ($conn->query($sql)) {
        echo "New record is inserted sucessfully";
    } else {
        echo "Error: " . $sql . " " . $conn->error;
    }
    $conn->close();
};


?>


