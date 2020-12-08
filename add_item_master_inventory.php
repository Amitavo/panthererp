<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Master Inventory</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->

  <link href="css/sb-admin-2.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- Jquery CDN required -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>

<body id="page-top">


  <!-- Page Wrapper -->
  <div id="wrapper ">



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column ">

      <!-- Main Content -->
      <div id="content pl-3 pr-3 ">

        <!-- Begin Page Content -->
        <div class="container-fluid ">
          <div class="row">

            <div class="col-lg-12">

              <!-- Purchase Order Form-->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <div class="row justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary d-inline ml-3 align-self-center">Add Items to Master Invenory</h6>
                    <div>
                      <a href="new-vendor.php">
                        <button type="button" class="btn btn-primary btn-sm "> + New Vendor</button>
                      </a>
                      <a href="new-item.php">
                        <button type="button" class="btn btn-success btn-sm ml-2 mr-3">+ New Item</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-body pl-4 pr-4">
                  <div class="container-fluid">

                    <h2 class="text-center font-weight-bold mb-5 pagetitle"><u>Unique International Master Invontory </u></h2>
                  </div>
                  <!-- ******************* Form starts here ********************-->

                  <form action="submit_master_inventory.php" method="post" class="">
                    <div class="row">
                      <div class="col-3 mt-2">
                        <span class="font-weight-bold">Seller Invoice No :</span>

                        <input type="text" name="inv_no" id="inv_2" class="form-control " />

                        <div class=" mt-3">
                          <span class="font-weight-bold ">Invoice Date :</span>
                          <input type="date" name="inv_dt" id="inv_dt" class="form-control " />
                        </div>
                      </div>
                      <div class="col-6"></div>
                      <div class="col-3 mt-2">
                        <p class="text-right font-weight-bold">Date :
                          <span>
                            <?php
                            echo date("d/m/y");
                            ?>
                          </span>
                        </p>

                      </div>
                    </div>
                    <div class="mt-4">
                      <div class="col-12">
                        <div class="row justify-content-between">
                          <div class="">
                            <label for="vendor">
                              <h6 class="font-weight-bold mb-0">Select A Vendor :</h6>
                            </label>
                            <?php
                            echo '<select name="vendor" id="vendor" style="width:200px" class="form-control">'; // Open your drop down box
                            $sql = "SELECT vendor_id, name FROM vendor";
                            $result = $conn->query($sql);
                            // Loop through the query results, outputing the options one by one
                            while ($row = $result->fetch_assoc()) {
                              echo '<option value="' . $row["vendor_id"] . '">' . $row["name"] . '</option>';
                            }
                            echo '</select>'; // Close your drop down box
                            ?>
                          </div>
                        </div>
                        <div class=" row mt-5 mb-3 border-bottom">
                          <div class="col-1 border border-1 bg-light text-center ">
                            <p class="pt-3 font-weight-bold">#</p>
                          </div>
                          <div class="col-3 border border-1 bg-light text-center">
                            <p class="pt-3 font-weight-bold">ITEM</p>
                          </div>
                          <div class="col-1 border border-1 bg-light text-center">
                            <p class="pt-3 font-weight-bold">HSN</p>
                          </div>
                          <div class="col-1 border border-1 bg-light text-center">
                            <p class="pt-3 font-weight-bold">GST</p>
                          </div>
                          <div class="col-1 border border-1 bg-light text-center">
                            <p class="pt-3 font-weight-bold">RATE</p>
                          </div>
                          <div class="col-1 border border-1 bg-light text-center">
                            <p class="pt-3 font-weight-bold">QTY</p>
                          </div>
                          <div class="col-2 border border-1 bg-light text-center">
                            <p class="pt-3 font-weight-bold">PRICE</p>
                          </div>
                          <div class="col-2 border border-1 bg-light text-center">
                            <p class="pt-3 font-weight-bold">TOTAL</p>
                          </div>
                        </div>
                        <!-- Table Header Ends -->

                        <!-- Table Body Starts -->
                        <!-- First Row -->
                        <div class="form-row mb-2 ">
                          <div class="col-1 ">
                            <p class="text-center form-control">1.</p>
                          </div>
                          <div class="col-3 ">
                            <div>

                              <?php
                              echo '<select name="item1" id="item1" class="form-control">'; // Open your drop down box
                              $sql = "SELECT * FROM item_list";
                              $result = $conn->query($sql);
                              // Loop through the query results, outputing the options one by one
                              while ($row = $result->fetch_array()) {
                                echo '<option value="' . $row["item_id"] . '">' . $row["item_name"] . '</option>';
                              }
                              echo '</select>'; // Close your drop down box
                              ?>
                            </div>
                          </div>
                          <div class="col-1 ">
                            <input type="text" name="hsn1" id="hsn1" class="form-control" />
                          </div>
                          <div class="col-1">
                            <input type="number" name="gst1" min="0" class="form-control" id="gst1" />
                            <span>
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="rate1" id="rate1" min="0" class="form-control" required />
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="qty1" id="qty1" min="0" class="form-control" required />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="price1" id="price1" min="0" class="form-control" required />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="total1" id="total1" min="0" class="form-control" required />
                          </div>
                        </div>
                        <!-- Row 2-->
                        <div class="form-row mb-2 ">
                          <div class="col-1 ">
                            <p class="text-center form-control">2.</p>
                          </div>
                          <div class="col-3 ">
                            <div>

                              <?php
                              echo '<select name="item2" id="item2" class="form-control">'; // Open your drop down box
                              $sql = "SELECT * FROM item_list";
                              $result = $conn->query($sql);
                              // Loop through the query results, outputing the options one by one
                              while ($row = $result->fetch_array()) {
                                echo '<option value="' . $row["item_id"] . '">' . $row["item_name"] . '</option>';
                              }
                              echo '</select>'; // Close your drop down box
                              ?>
                            </div>
                          </div>
                          <div class="col-1 ">
                            <input type="text" name="hsn2" id="hsn2" class="form-control" />
                          </div>
                          <div class="col-1">
                            <input type="number" name="gst2" min="0" class="form-control" id="gst2" />
                            <span>
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="rate2" id="rate2" min="0" class="form-control" />
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="qty2" id="qty2" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="price2" id="price2" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="total2" id="total2" min="0" class="form-control" />
                          </div>
                        </div>
                        <!-- Row 2 ends-->

                        <!-- Row 3-->
                        <div class="form-row mb-2 ">
                          <div class="col-1 ">
                            <p class="text-center form-control">3.</p>
                          </div>
                          <div class="col-3 ">
                            <div>

                              <?php
                              echo '<select name="item3" id="item3" class="form-control">'; // Open your drop down box
                              $sql = "SELECT * FROM item_list";
                              $result = $conn->query($sql);
                              // Loop through the query results, outputing the options one by one
                              while ($row = $result->fetch_array()) {
                                echo '<option value="' . $row["item_id"] . '">' . $row["item_name"] . '</option>';
                              }
                              echo '</select>'; // Close your drop down box
                              ?>
                            </div>
                          </div>
                          <div class="col-1 ">
                            <input type="text" name="hsn3" id="hsn3" class="form-control" />
                          </div>
                          <div class="col-1">
                            <input type="number" name="gst3" id="gst3" min="0" class="form-control" />
                            <span>
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="rate3" id="rate3" min="0" class="form-control" />
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="qty3" id="qty3" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="price3" id="price3" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="total3" id="total3" min="0" class="form-control" />
                          </div>
                        </div>
                        <!-- Row 3 ends -->

                        <!-- Row 4 -->
                        <div class="form-row mb-2 ">
                          <div class="col-1 ">
                            <p class="text-center form-control">4.</p>
                          </div>
                          <div class="col-3 ">
                            <div>

                              <?php
                              echo '<select name="item4" id="item4" class="form-control">'; // Open your drop down box
                              $sql = "SELECT * FROM item_list";
                              $result = $conn->query($sql);
                              // Loop through the query results, outputing the options one by one
                              while ($row = $result->fetch_array()) {
                                echo '<option value="' . $row["item_id"] . '">' . $row["item_name"] . '</option>';
                              }
                              echo '</select>'; // Close your drop down box
                              ?>
                            </div>
                          </div>
                          <div class="col-1 ">
                            <input type="text" name="hsn4" id="hsn4" class="form-control" />
                          </div>
                          <div class="col-1">
                            <input type="number" name="gst4" id="gst4" min="0" class="form-control" />
                            <span>
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="rate4" id="rate4" min="0" class="form-control" />
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="qty4" id="qty4" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="price4" id="price4" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="total4" id="total4" min="0" class="form-control" />
                          </div>
                        </div>
                        <!-- Row 4 ends -->

                        <!-- Row 5 -->
                        <div class="form-row mb-2 ">
                          <div class="col-1 ">
                            <p class="text-center form-control">5.</p>
                          </div>
                          <div class="col-3 ">
                            <div>

                              <?php
                              echo '<select name="item5" id="item5" class="form-control">'; // Open your drop down box
                              $sql = "SELECT * FROM item_list";
                              $result = $conn->query($sql);
                              // Loop through the query results, outputing the options one by one
                              while ($row = $result->fetch_array()) {
                                echo '<option value="' . $row["item_id"] . '">' . $row["item_name"] . '</option>';
                              }
                              echo '</select>'; // Close your drop down box
                              ?>
                            </div>
                          </div>
                          <div class="col-1 ">
                            <input type="text" name="hsn5" id="hsn5" class="form-control" />
                          </div>
                          <div class="col-1">
                            <input type="number" name="gst5" id="gst5" min="0" class="form-control" />
                            <span>
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="rate5" id="rate5" min="0" class="form-control" />
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="qty5" id="qty5" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="price5" id="price5" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="total5" id="total5" min="0" class="form-control" />
                          </div>
                        </div>
                        <!-- Row 5 ends -->

                        <!-- Row 6 -->
                        <div class="form-row mb-2 ">
                          <div class="col-1 ">
                            <p class="text-center form-control">6.</p>
                          </div>
                          <div class="col-3 ">
                            <div>

                              <?php
                              echo '<select name="item6" id="item6" class="form-control">'; // Open your drop down box
                              $sql = "SELECT * FROM item_list";
                              $result = $conn->query($sql);
                              // Loop through the query results, outputing the options one by one
                              while ($row = $result->fetch_array()) {
                                echo '<option value="' . $row["item_id"] . '">' . $row["item_name"] . '</option>';
                              }
                              echo '</select>'; // Close your drop down box
                              ?>
                            </div>
                          </div>
                          <div class="col-1 ">
                            <input type="text" name="hsn6" id="hsn6" class="form-control" />
                          </div>
                          <div class="col-1">
                            <input type="number" name="gst6" id="gst6" min="0" class="form-control" />
                            <span>
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="rate6" id="rate6" min="0" class="form-control" />
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="qty6" id="qty6" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="price6" id="price6" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="total6" id="total6" min="0" class="form-control" />
                          </div>
                        </div>
                        <!-- Row 6 ends -->

                        <!-- Row 7 -->
                        <div class="form-row mb-2 ">
                          <div class="col-1 ">
                            <p class="text-center form-control">7.</p>
                          </div>
                          <div class="col-3 ">
                            <div>

                              <?php
                              echo '<select name="item7" id="item7" class="form-control">'; // Open your drop down box
                              $sql = "SELECT * FROM item_list";
                              $result = $conn->query($sql);
                              // Loop through the query results, outputing the options one by one
                              while ($row = $result->fetch_array()) {
                                echo '<option value="' . $row["item_id"] . '">' . $row["item_name"] . '</option>';
                              }
                              echo '</select>'; // Close your drop down box
                              ?>
                            </div>
                          </div>
                          <div class="col-1 ">
                            <input type="text" name="hsn7" id="hsn7" class="form-control" />
                          </div>
                          <div class="col-1">
                            <input type="number" name="gst7" id="gst7" min="0" class="form-control" />
                            <span>
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="rate7" id="rate7" min="0" class="form-control" />
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="qty7" id="qty7" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="price7" id="price7" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="total7" id="total7" min="0" class="form-control" />
                          </div>
                        </div>
                        <!-- Row 7 ends -->

                        <!-- Row 8 -->
                        <div class="form-row mb-2 ">
                          <div class="col-1 ">
                            <p class="text-center form-control">8.</p>
                          </div>
                          <div class="col-3 ">
                            <div>

                              <?php
                              echo '<select name="item8" id="item8" class="form-control">'; // Open your drop down box
                              $sql = "SELECT * FROM item_list";
                              $result = $conn->query($sql);
                              // Loop through the query results, outputing the options one by one
                              while ($row = $result->fetch_array()) {
                                echo '<option value="' . $row["item_id"] . '">' . $row["item_name"] . '</option>';
                              }
                              echo '</select>'; // Close your drop down box
                              ?>
                            </div>
                          </div>
                          <div class="col-1 ">
                            <input type="text" name="hsn8" id="hsn8" class="form-control" />
                          </div>
                          <div class="col-1">
                            <input type="number" name="gst8" id="gst8" min="0" class="form-control" />
                            <span>
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="rate8" id="rate8" min="0" class="form-control" />
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="qty8" id="qty8" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="price8" id="price8" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="total8" id="total8" min="0" class="form-control" />
                          </div>
                        </div>
                        <!-- Row 8 ends -->

                        <!-- Row 9 -->
                        <div class="form-row mb-2 ">
                          <div class="col-1 ">
                            <p class="text-center form-control">9.</p>
                          </div>
                          <div class="col-3 ">
                            <div>

                              <?php
                              echo '<select name="item9" id="item9" class="form-control">'; // Open your drop down box
                              $sql = "SELECT * FROM item_list";
                              $result = $conn->query($sql);
                              // Loop through the query results, outputing the options one by one
                              while ($row = $result->fetch_array()) {
                                echo '<option value="' . $row["item_id"] . '">' . $row["item_name"] . '</option>';
                              }
                              echo '</select>'; // Close your drop down box
                              ?>
                            </div>
                          </div>
                          <div class="col-1 ">
                            <input type="text" name="hsn9" id="hsn9" class="form-control" />
                          </div>
                          <div class="col-1">
                            <input type="number" name="gst9" id="gst9" min="0" class="form-control" />
                            <span>
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="rate9" id="rate9" min="0" class="form-control" />
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="qty9" id="qty9" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="price9" id="price9" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="total9" id="total9" min="0" class="form-control" />
                          </div>
                        </div>
                        <!-- Row 9 ends -->

                        <!-- Row 10 -->
                        <div class="form-row mb-2 ">
                          <div class="col-1 ">
                            <p class="text-center form-control">10.</p>
                          </div>
                          <div class="col-3 ">
                            <div>

                              <?php
                              echo '<select name="item10" id="item10" class="form-control">'; // Open your drop down box
                              $sql = "SELECT * FROM item_list";
                              $result = $conn->query($sql);
                              // Loop through the query results, outputing the options one by one
                              while ($row = $result->fetch_array()) {
                                echo '<option value="' . $row["item_id"] . '">' . $row["item_name"] . '</option>';
                              }
                              echo '</select>'; // Close your drop down box
                              ?>
                            </div>
                          </div>
                          <div class="col-1 ">
                            <input type="text" name="hsn10" id="hsn10" class="form-control" />
                          </div>
                          <div class="col-1">
                            <input type="number" name="gst10" id="gst10" min="0" class="form-control" />
                            <span>
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="rate10" id="rate10" min="0" class="form-control" />
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="qty10" id="qty10" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="price10" id="price10" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="total10" id="total10" min="0" class="form-control" />
                          </div>
                        </div>
                        <!-- Row 10 ends -->

                        <!-- Row 11 -->
                        <div class="form-row mb-2 ">
                          <div class="col-1 ">
                            <p class="text-center form-control">11.</p>
                          </div>
                          <div class="col-3 ">
                            <div>

                              <?php
                              echo '<select name="item11" id="item11" class="form-control">'; // Open your drop down box
                              $sql = "SELECT * FROM item_list";
                              $result = $conn->query($sql);
                              // Loop through the query results, outputing the options one by one
                              while ($row = $result->fetch_array()) {
                                echo '<option value="' . $row["item_id"] . '">' . $row["item_name"] . '</option>';
                              }
                              echo '</select>'; // Close your drop down box
                              ?>
                            </div>
                          </div>
                          <div class="col-1 ">
                            <input type="text" name="hsn11" id="hsn11" class="form-control" />
                          </div>
                          <div class="col-1">
                            <input type="number" name="gst11" id="gst11" min="0" class="form-control" />
                            <span>
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="rate11" id="rate11" min="0" class="form-control" />
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="qty11" id="qty11" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="price11" id="price11" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="total11" id="total11" min="0" class="form-control" />
                          </div>
                        </div>
                        <!-- Row 11 ends -->

                        <!-- Row 12 -->
                        <div class="form-row mb-2 ">
                          <div class="col-1 ">
                            <p class="text-center form-control">12.</p>
                          </div>
                          <div class="col-3 ">
                            <div>

                              <?php
                              echo '<select name="item12" id="item12" class="form-control">'; // Open your drop down box
                              $sql = "SELECT * FROM item_list";
                              $result = $conn->query($sql);
                              // Loop through the query results, outputing the options one by one
                              while ($row = $result->fetch_array()) {
                                echo '<option value="' . $row["item_id"] . '">' . $row["item_name"] . '</option>';
                              }
                              echo '</select>'; // Close your drop down box
                              ?>
                            </div>
                          </div>
                          <div class="col-1 ">
                            <input type="text" name="hsn12" id="hsn12" class="form-control" />
                          </div>
                          <div class="col-1">
                            <input type="number" name="gst12" id="gst12" min="0" class="form-control" />
                            <span>
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="rate12" id="rate12" min="0" class="form-control" />
                          </div>
                          <div class="col-1 ">
                            <input type="number" name="qty12" id="qty12" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="price12" id="price12" min="0" class="form-control" />
                          </div>
                          <div class="col-2 ">
                            <input type="number" name="total12" id="total12" min="0" class="form-control" />
                          </div>
                        </div>
                        <!-- Row 12 ends -->

                        <div class="row ">
                          <div class="row col-12 justify-content-end mt-4  p-0">
                            <button type="reset" class="btn btn-outline-secondary justify-content-end ">Reset</button>
                            <button type="submit" class="btn btn-primary ml-4 pl-5 pr-5 m-0" name="POSubmit">Submit</button>
                          </div>
                        </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Main Content -->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script>
    $(document).ready(function() {
      $('#item1').change(function() {
        var id = $('#item1').val();
        if (id != "") {
          $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
              id: id
            },
            dataType: "JSON",
            success: function(data) {
              $('#hsn1').val(data.hsn);
              $('#gst1').val(data.gst);
              $('#rate1').val(data.price);
            }
          })
        } else {
          alert("Please Select item");
        }
      });
    })
    // Calculating the value of Price1
    $('#qty1').change(function() {
      $("#price1").val(
        $("#rate1").val() * $("#qty1").val()
      );
      //Calculating the value of Total1
      var price = parseInt($("#price1").val());
      var gst = parseInt($("#gst1").val());
      var totalGst = price * gst / 100;
      $("#total1").val(
        price + totalGst
      )
    })
    // Second Row Calculation--------------
    $(document).ready(function() {
      $('#item2').change(function() {
        var id = $('#item2').val();
        if (id != "") {
          $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
              id: id
            },
            dataType: "JSON",
            success: function(data) {
              $('#hsn2').val(data.hsn);
              $('#gst2').val(data.gst);
              $('#rate2').val(data.price);
            }
          })
        } else {
          alert("Please Select item");
        }
      });
    })
    // Calculating the value of Price2
    $('#qty2').change(function() {
      $("#price2").val(
        $("#rate2").val() * $("#qty2").val()
      );
      //Calculating the value of Total2
      var price = parseInt($("#price2").val());
      var gst = parseInt($("#gst2").val());
      var totalGst = price * gst / 100;
      $("#total2").val(
        price + totalGst
      )
    })

    // Row 3 Calculation--------------
    $(document).ready(function() {
      $('#item3').change(function() {
        var id = $('#item3').val();
        if (id != "") {
          $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
              id: id
            },
            dataType: "JSON",
            success: function(data) {
              $('#hsn3').val(data.hsn);
              $('#gst3').val(data.gst);
              $('#rate3').val(data.price);
            }
          })
        } else {
          alert("Please Select item");
        }
      });
    })
    // Calculating the value of Price2
    $('#qty3').change(function() {
      $("#price3").val(
        $("#rate3").val() * $("#qty3").val()
      );
      //Calculating the value of Total2
      var price = parseInt($("#price3").val());
      var gst = parseInt($("#gst3").val());
      var totalGst = price * gst / 100;
      $("#total3").val(
        price + totalGst
      )
    })

    // Row 4 Calculation--------------
    $(document).ready(function() {
      $('#item4').change(function() {
        var id = $('#item4').val();
        if (id != "") {
          $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
              id: id
            },
            dataType: "JSON",
            success: function(data) {
              $('#hsn4').val(data.hsn);
              $('#gst4').val(data.gst);
              $('#rate4').val(data.price);
            }
          })
        } else {
          alert("Please Select item");
        }
      });
    })
    // Calculating the value of Price2
    $('#qty4').change(function() {
      $("#price4").val(
        $("#rate4").val() * $("#qty4").val()
      );
      //Calculating the value of Total2
      var price = parseInt($("#price4").val());
      var gst = parseInt($("#gst4").val());
      var totalGst = price * gst / 100;
      $("#total4").val(
        price + totalGst
      )
    })

    // Row 5 Calculation--------------
    $(document).ready(function() {
      $('#item5').change(function() {
        var id = $('#item5').val();
        if (id != "") {
          $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
              id: id
            },
            dataType: "JSON",
            success: function(data) {
              $('#hsn5').val(data.hsn);
              $('#gst5').val(data.gst);
              $('#rate5').val(data.price);
            }
          })
        } else {
          alert("Please Select item");
        }
      });
    })
    // Calculating the value of Price2
    $('#qty5').change(function() {
      $("#price5").val(
        $("#rate5").val() * $("#qty5").val()
      );
      //Calculating the value of Total2
      var price = parseInt($("#price5").val());
      var gst = parseInt($("#gst5").val());
      var totalGst = price * gst / 100;
      $("#total5").val(
        price + totalGst
      )
    })

    // Row 6 Calculation--------------
    $(document).ready(function() {
      $('#item6').change(function() {
        var id = $('#item6').val();
        if (id != "") {
          $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
              id: id
            },
            dataType: "JSON",
            success: function(data) {
              $('#hsn6').val(data.hsn);
              $('#gst6').val(data.gst);
              $('#rate6').val(data.price);
            }
          })
        } else {
          alert("Please Select item");
        }
      });
    })
    // Calculating the value of Price2
    $('#qty6').change(function() {
      $("#price6").val(
        $("#rate6").val() * $("#qty6").val()
      );
      //Calculating the value of Total2
      var price = parseInt($("#price6").val());
      var gst = parseInt($("#gst6").val());
      var totalGst = price * gst / 100;
      $("#total6").val(
        price + totalGst
      )
    })

    // Row 7 Calculation--------------
    $(document).ready(function() {
      $('#item7').change(function() {
        var id = $('#item7').val();
        if (id != "") {
          $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
              id: id
            },
            dataType: "JSON",
            success: function(data) {
              $('#hsn7').val(data.hsn);
              $('#gst7').val(data.gst);
              $('#rate7').val(data.price);
            }
          })
        } else {
          alert("Please Select item");
        }
      });
    })
    // Calculating the value of Price7
    $('#qty7').change(function() {
      $("#price7").val(
        $("#rate7").val() * $("#qty7").val()
      );
      //Calculating the value of Total7
      var price = parseInt($("#price7").val());
      var gst = parseInt($("#gst7").val());
      var totalGst = price * gst / 100;
      $("#total7").val(
        price + totalGst
      )
    })

    // Row 8 Calculation--------------
    $(document).ready(function() {
      $('#item8').change(function() {
        var id = $('#item8').val();
        if (id != "") {
          $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
              id: id
            },
            dataType: "JSON",
            success: function(data) {
              $('#hsn8').val(data.hsn);
              $('#gst8').val(data.gst);
              $('#rate8').val(data.price);
            }
          })
        } else {
          alert("Please Select item");
        }
      });
    })
    // Calculating the value of Price8
    $('#qty8').change(function() {
      $("#price8").val(
        $("#rate8").val() * $("#qty8").val()
      );
      //Calculating the value of Total2
      var price = parseInt($("#price8").val());
      var gst = parseInt($("#gst8").val());
      var totalGst = price * gst / 100;
      $("#total8").val(
        price + totalGst
      )
    })

    // Row 9 Calculation--------------
    $(document).ready(function() {
      $('#item9').change(function() {
        var id = $('#item9').val();
        if (id != "") {
          $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
              id: id
            },
            dataType: "JSON",
            success: function(data) {
              $('#hsn9').val(data.hsn);
              $('#gst9').val(data.gst);
              $('#rate9').val(data.price);
            }
          })
        } else {
          alert("Please Select item");
        }
      });
    })
    // Calculating the value of Price9
    $('#qty9').change(function() {
      $("#price9").val(
        $("#rate9").val() * $("#qty9").val()
      );
      //Calculating the value of Total9
      var price = parseInt($("#price9").val());
      var gst = parseInt($("#gst9").val());
      var totalGst = price * gst / 100;
      $("#total9").val(
        price + totalGst
      )
    })

    // Row 10 Calculation--------------
    $(document).ready(function() {
      $('#item10').change(function() {
        var id = $('#item10').val();
        if (id != "") {
          $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
              id: id
            },
            dataType: "JSON",
            success: function(data) {
              $('#hsn10').val(data.hsn);
              $('#gst10').val(data.gst);
              $('#rate10').val(data.price);
            }
          })
        } else {
          alert("Please Select item");
        }
      });
    })
    // Calculating the value of Price10
    $('#qty10').change(function() {
      $("#price10").val(
        $("#rate10").val() * $("#qty10").val()
      );
      //Calculating the value of Total10
      var price = parseInt($("#price10").val());
      var gst = parseInt($("#gst10").val());
      var totalGst = price * gst / 100;
      $("#total10").val(
        price + totalGst
      )
    })

    // Row 11 Calculation--------------
    $(document).ready(function() {
      $('#item11').change(function() {
        var id = $('#item11').val();
        if (id != "") {
          $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
              id: id
            },
            dataType: "JSON",
            success: function(data) {
              $('#hsn11').val(data.hsn);
              $('#gst11').val(data.gst);
              $('#rate11').val(data.price);
            }
          })
        } else {
          alert("Please Select item");
        }
      });
    })
    // Calculating the value of Price11
    $('#qty11').change(function() {
      $("#price11").val(
        $("#rate11").val() * $("#qty11").val()
      );
      //Calculating the value of Total11
      var price = parseInt($("#price11").val());
      var gst = parseInt($("#gst11").val());
      var totalGst = price * gst / 100;
      $("#total11").val(
        price + totalGst
      )
    })

    // Row 12 Calculation--------------
    $(document).ready(function() {
      $('#item12').change(function() {
        var id = $('#item12').val();
        if (id != "") {
          $.ajax({
            url: "fetch.php",
            method: "POST",
            data: {
              id: id
            },
            dataType: "JSON",
            success: function(data) {
              $('#hsn12').val(data.hsn);
              $('#gst12').val(data.gst);
              $('#rate12').val(data.price);
            }
          })
        } else {
          alert("Please Select item");
        }
      });
    })
    // Calculating the value of Price11
    $('#qty12').change(function() {
      $("#price12").val(
        $("#rate12").val() * $("#qty12").val()
      );
      //Calculating the value of Total11
      var price = parseInt($("#price12").val());
      var gst = parseInt($("#gst12").val());
      var totalGst = price * gst / 100;
      $("#total12").val(
        price + totalGst
      )
    })
  </script>
</body>

</html>