<?php
header("Content-type: application/json");

include "../config/connection.php";
$conn = connect();

$action = $_POST['action'];
function register_expense($conn)
{
    extract($_POST);

    $data = array();

    $sql = "CALL register_transaction('', '$amount', '$type', '$description', '$userId)";
    $result = mysqli_query($conn, $sql);

    if ($result) $data = array("status" => true, "data" => "Registered Successfully");
    if (!$result) $data = array("status" => false, mysqli_connect($conn));

    echo json_encode($data);
}
