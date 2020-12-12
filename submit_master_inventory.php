<?php
require_once("DB_POS_sqli.php");
if (isset($_POST["POSubmit"])) {
        $item1 = $_POST["item1"];
        $qty1 = $_POST["qty1"];
        $item2 = $_POST["item2"];
        $qty2 = $_POST["qty2"];
        $item3 = $_POST["item3"];
        $qty3 = $_POST["qty3"];
        $item4 = $_POST["item4"];
        $qty4 = $_POST["qty4"];
        $item5 = $_POST["item5"];
        $qty5 = $_POST["qty5"];
        $item6 = $_POST["item6"];
        $qty6 = $_POST["qty6"];
        $item7 = $_POST["item7"];
        $qty7 = $_POST["qty7"];
        $item8 = $_POST["item8"];
        $qty8 = $_POST["qty8"];
        $item9 = $_POST["item9"];
        $qty9 = $_POST["qty9"];
        $item10 = $_POST["item10"];
        $qty10 = $_POST["qty10"];
        $item11 = $_POST["item11"];
        $qty11 = $_POST["qty11"];
        $item12 = $_POST["item12"];
        $qty12 = $_POST["qty12"];


        $sql = "SELECT * FROM item_list WHERE item_id = $item1";
        $result = mysqli_query($conn, $sql);
        print_r($result);

        if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                        $current_qty = $row["item_qty"];
                        $updated_qty = $current_qty + $qty1;
                        echo "<br>Current Qty is " . $updated_qty;
                        $sql = "UPDATE item_list SET item_qty=$updated_qty WHERE item_id = $item1";

                        if ($conn->query($sql) === TRUE) {
                                echo "Record updated successfully";
                        } else {
                                echo "Error updating record: " . $conn->error;
                        }
                }
        } else {
                echo "<br> 0 results";
        }
        // Item 2 Update
        if (!empty($item2)) {
                $sql = "SELECT * FROM item_list WHERE item_id = $item2";
                $result = mysqli_query($conn, $sql);
                print_r($result);

                if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                                $current_qty = $row["item_qty"];
                                $updated_qty = $current_qty + $qty2;
                                echo "<br>Current Qty is " . $updated_qty;
                                $sql = "UPDATE item_list SET item_qty=$updated_qty WHERE item_id = $item2";

                                if ($conn->query($sql) === TRUE) {
                                        echo "Record updated successfully";
                                } else {
                                        echo "Error updating record: " . $conn->error;
                                }
                        }
                } else {
                        echo "<br> 0 results";
                }
        }

        // Item 3 Update
        if (!empty($item3)) {
                $sql = "SELECT * FROM item_list WHERE item_id = $item3";
                $result = mysqli_query($conn, $sql);
                print_r($result);

                if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                                $current_qty = $row["item_qty"];
                                $updated_qty = $current_qty + $qty3;
                                echo "<br>Current Qty is " . $updated_qty;
                                $sql = "UPDATE item_list SET item_qty=$updated_qty WHERE item_id = $item3";

                                if ($conn->query($sql) === TRUE) {
                                        echo "Record updated successfully";
                                } else {
                                        echo "Error updating record: " . $conn->error;
                                }
                        }
                } else {
                        echo "<br> 0 results";
                }
        }

        // Item 4 Update
        if (!empty($item4)) {
                $sql = "SELECT * FROM item_list WHERE item_id = $item4";
                $result = mysqli_query($conn, $sql);
                print_r($result);

                if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                                $current_qty = $row["item_qty"];
                                $updated_qty = $current_qty + $qty4;
                                echo "<br>Current Qty is " . $updated_qty;
                                $sql = "UPDATE item_list SET item_qty=$updated_qty WHERE item_id = $item4";

                                if ($conn->query($sql) === TRUE) {
                                        echo "Record updated successfully";
                                } else {
                                        echo "Error updating record: " . $conn->error;
                                }
                        }
                } else {
                        echo "<br> 0 results";
                }
        }

        // Item 5 Update
        if (!empty($item5)) {
                $sql = "SELECT * FROM item_list WHERE item_id = $item5";
                $result = mysqli_query($conn, $sql);
                print_r($result);

                if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                                $current_qty = $row["item_qty"];
                                $updated_qty = $current_qty + $qty5;
                                echo "<br>Current Qty is " . $updated_qty;
                                $sql = "UPDATE item_list SET item_qty=$updated_qty WHERE item_id = $item5";

                                if ($conn->query($sql) === TRUE) {
                                        echo "Record updated successfully";
                                } else {
                                        echo "Error updating record: " . $conn->error;
                                }
                        }
                } else {
                        echo "<br> 0 results";
                }
        }

        // Item 6 Update
        if (!empty($item6)) {
                $sql = "SELECT * FROM item_list WHERE item_id = $item6";
                $result = mysqli_query($conn, $sql);
                print_r($result);

                if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                                $current_qty = $row["item_qty"];
                                $updated_qty = $current_qty + $qty6;
                                echo "<br>Current Qty is " . $updated_qty;
                                $sql = "UPDATE item_list SET item_qty=$updated_qty WHERE item_id = $item6";

                                if ($conn->query($sql) === TRUE) {
                                        echo "Record updated successfully";
                                } else {
                                        echo "Error updating record: " . $conn->error;
                                }
                        }
                } else {
                        echo "<br> 0 results";
                }
        }

        // Item 7 Update
        if (!empty($item7)) {
                $sql = "SELECT * FROM item_list WHERE item_id = $item7";
                $result = mysqli_query($conn, $sql);
                print_r($result);

                if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                                $current_qty = $row["item_qty"];
                                $updated_qty = $current_qty + $qty7;
                                echo "<br>Current Qty is " . $updated_qty;
                                $sql = "UPDATE item_list SET item_qty=$updated_qty WHERE item_id = $item7";

                                if ($conn->query($sql) === TRUE) {
                                        echo "Record updated successfully";
                                } else {
                                        echo "Error updating record: " . $conn->error;
                                }
                        }
                } else {
                        echo "<br> 0 results";
                }
        }

        // Item 8 Update
        if (!empty($item8)) {
                $sql = "SELECT * FROM item_list WHERE item_id = $item8";
                $result = mysqli_query($conn, $sql);
                print_r($result);

                if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                                $current_qty = $row["item_qty"];
                                $updated_qty = $current_qty + $qty8;
                                echo "<br>Current Qty is " . $updated_qty;
                                $sql = "UPDATE item_list SET item_qty=$updated_qty WHERE item_id = $item8";

                                if ($conn->query($sql) === TRUE) {
                                        echo "Record updated successfully";
                                } else {
                                        echo "Error updating record: " . $conn->error;
                                }
                        }
                } else {
                        echo "<br> 0 results";
                }
        }

        // Item 9 Update
        if (!empty($item9)) {
                $sql = "SELECT * FROM item_list WHERE item_id = $item9";
                $result = mysqli_query($conn, $sql);
                print_r($result);

                if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                                $current_qty = $row["item_qty"];
                                $updated_qty = $current_qty + $qty9;
                                echo "<br>Current Qty is " . $updated_qty;
                                $sql = "UPDATE item_list SET item_qty=$updated_qty WHERE item_id = $item9";

                                if ($conn->query($sql) === TRUE) {
                                        echo "Record updated successfully";
                                } else {
                                        echo "Error updating record: " . $conn->error;
                                }
                        }
                } else {
                        echo "<br> 0 results";
                }
        }

        // Item 10 Update
        if (!empty($item10)) {
                $sql = "SELECT * FROM item_list WHERE item_id = $item10";
                $result = mysqli_query($conn, $sql);
                print_r($result);

                if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                                $current_qty = $row["item_qty"];
                                $updated_qty = $current_qty + $qty10;
                                echo "<br>Current Qty is " . $updated_qty;
                                $sql = "UPDATE item_list SET item_qty=$updated_qty WHERE item_id = $item10";

                                if ($conn->query($sql) === TRUE) {
                                        echo "Record updated successfully";
                                } else {
                                        echo "Error updating record: " . $conn->error;
                                }
                        }
                } else {
                        echo "<br> 0 results";
                }
        }

        // Item 11 Update
        if (!empty($item11)) {
                $sql = "SELECT * FROM item_list WHERE item_id = $item11";
                $result = mysqli_query($conn, $sql);
                print_r($result);

                if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                                $current_qty = $row["item_qty"];
                                $updated_qty = $current_qty + $qty11;
                                echo "<br>Current Qty is " . $updated_qty;
                                $sql = "UPDATE item_list SET item_qty=$updated_qty WHERE item_id = $item11";

                                if ($conn->query($sql) === TRUE) {
                                        echo "Record updated successfully";
                                } else {
                                        echo "Error updating record: " . $conn->error;
                                }
                        }
                } else {
                        echo "<br> 0 results";
                }
        }

        // Item 12 Update
        if (!empty($item12)) {
                $sql = "SELECT * FROM item_list WHERE item_id = $item12";
                $result = mysqli_query($conn, $sql);
                print_r($result);

                if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                                $current_qty = $row["item_qty"];
                                $updated_qty = $current_qty + $qty12;
                                echo "<br>Current Qty is " . $updated_qty;
                                $sql = "UPDATE item_list SET item_qty=$updated_qty WHERE item_id = $item12";

                                if ($conn->query($sql) === TRUE) {
                                        echo "Record updated successfully";
                                } else {
                                        echo "Error updating record: " . $conn->error;
                                }
                        }
                } else {
                        echo "<br> 0 results";
                }
        }
}
