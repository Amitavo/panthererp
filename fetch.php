<?php
//fetch.php
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $connect = mysqli_connect("localhost", "root", "root", "pos");
    $query  = "SELECT * FROM item_list WHERE item_id = '$id'";
    $result = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_array($result)) {
        $data["gst"] = $row["item_tax"];
        $data["price"] = $row["item_price"];
        $data["hsn"] = $row["item_hsn"];
    }

    echo json_encode($data);
}
