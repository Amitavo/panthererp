<?php
require_once("DB_POS.php");
$SearchQueryParameter = $_GET["id"];




$sql = "SELECT * FROM purchase_order WHERE po_no='$SearchQueryParameter' ";
$stmt = $conn->query($sql);
while ($DataRows  = $stmt->fetch()) {

  $po_no = $DataRows["po_no"];
  $date = $DataRows["date"];
  $vendor_id = $DataRows["vendor_id"];
  $total = $DataRows["total"];
  $shipping = $DataRows["shipping"];
  $status = $DataRows["status"];

  $item1_id = $DataRows["item1_id"];
  $item2_id = $DataRows["item2_id"];
  $item3_id = $DataRows["item3_id"];
  $item4_id = $DataRows["item4_id"];
  $item5_id = $DataRows["item5_id"];
  $item6_id = $DataRows["item6_id"];
  $item7_id = $DataRows["item7_id"];
  $item8_id = $DataRows["item8_id"];
  $item9_id = $DataRows["item9_id"];
  $item10_id = $DataRows["item10_id"];
  $item11_id = $DataRows["item11_id"];
  $item12_id = $DataRows["item12_id"];

  $qty1 = $DataRows["qty1"];
  $qty2 = $DataRows["qty2"];
  $qty3 = $DataRows["qty3"];
  $qty4 = $DataRows["qty4"];
  $qty5 = $DataRows["qty5"];
  $qty6 = $DataRows["qty6"];
  $qty7 = $DataRows["qty7"];
  $qty8 = $DataRows["qty8"];
  $qty9 = $DataRows["qty9"];
  $qty10 = $DataRows["qty10"];
  $qty11 = $DataRows["qty11"];
  $qty12 = $DataRows["qty12"];



  // Converting the values from null to 0

  $qty2 == 0 ? $qty2 = null : "";
  $qty3 == 0 ? $qty3 = null : "";
  $qty4 == 0 ? $qty4 = null : "";
  $qty5 == 0 ? $qty5 = null : "";
  $qty6 == 0 ? $qty6 = null : "";
  $qty7 == 0 ? $qty7 = null : "";
  $qty8 == 0 ? $qty8 = null : "";
  $qty9 == 0 ? $qty9 = null : "";
  $qty10 == 0 ? $qty10 = null : "";
  $qty11 == 0 ? $qty11 = null : "";
  $qty12 == 0 ? $qty12 = null : "";

  // Convertion ends from null to 0

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

  <title>Purchase Order</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include("./include/sidebar.php"); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Update a purchase order</h1>

          <div class="row">

            <div class="col-lg-12">

              <!-- Purchase Order Form-->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Update Purchase Order</h6>
                </div>
                <div class="card-body">
                  <div class="container">
                    <div class=" container-fluid ">
                      <h2 class="text-center font-weight-bold mb-5"><u>Unique International Purchase Order</u></h2>
                    </div>

                    <!-- Form Starts Here` -->
                    <form action="update-po-final.php" method="post" class="container ">
                      <div class="row">
                        <div class="col-9  p-0 m-0 mt-2">
                          <span class="font-weight-bold">PO NO :</span>
                          <input name="po_no" value="<?php echo $po_no ?>" style="width:100px; border:none;"></input>
                        </div>
                        <div class="col-3 mt-2  justify-content-end">
                          <span class="text-right font-weight-bold">Date :</span>
                          <span class="text-right">
                            <?php
                            echo date("d-m-y", strtotime($date));
                            ?>
                          </span>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col-12">



                          <div class="row justify-content-between">
                            <div class="">
                              <label for="vendor">
                                <h5>Select A Vendor :</h5>
                              </label>
                              <?php
                              echo '<select name="vendor" id="vendor" style="width:200px" class="form-control">'; // Open your drop down box
                              $sqlvendor = "SELECT vendor_id, name FROM vendor";
                              $result = $conn->query($sqlvendor);

                              // Loop through the query results, outputing the options one by one
                              while ($row = $result->fetch()) {
                                if ($row["vendor_id"] == $vendor_id) {
                                  echo '<option value="' . $row["vendor_id"] . '"selected >' . $row["name"] . '</option>';
                                } else {
                                  echo '<option value="' . $row["vendor_id"] . '">' . $row["name"] . '</option>';
                                }
                              }
                              echo '</select>'; // Close your drop down box
                              ?>
                            </div>
                            <div>
                              <a href="new-vendor.php">
                                <button type="button" class="btn btn-primary btn-sm ml-4"> + New Vendor</button>
                              </a>
                              <a href="new-item.php">
                                <button type="button" class="btn btn-success btn-sm ml-2">+ New Item</button>
                              </a>
                            </div>
                          </div>

                          <!-- Table Header Starts -->
                          <div class="row mt-5 mb-3 border-bottom">
                            <div class="col-2 border border-1 bg-light text-center ">
                              <p class="pt-3 font-weight-bold">SR NO</p>
                            </div>
                            <div class="col-6 border border-1 bg-light text-center">
                              <p class="pt-3 font-weight-bold">ITEM</p>
                            </div>
                            <div class="col-4 border border-1 bg-light text-center">
                              <p class="pt-3 font-weight-bold">QTY</p>
                            </div>
                          </div>
                          <!-- Table Header Ends -->

                          <!-- Table Body Starts -->

                          <div class="form-row mb-2 ">
                            <div class="col-2 ">
                              <p class="text-center ">1.</p>
                            </div>
                            <div class="col-6 ">
                              <div>
                                <?php
                                echo '<select name="item1" id="item1" class="form-control">'; // Open your drop down box
                                $sql = "SELECT item_name, item_id FROM item_list";
                                $result = $conn->query($sql);
                                // Loop through the query results, outputing the options one by one
                                while ($row = $result->fetch()) {

                                  if ($row["item_id"] !== $item1_id) {
                                    echo '<option value="' . $row["item_name"] . '">' . $row["item_name"] . '</option>';
                                  } else {
                                    echo '<option value="' . $row["item_name"] . '"selected >' . $row["item_name"] . '</option>';
                                  }
                                }
                                echo '</select>'; // Close your drop down box

                                ?>
                              </div>
                            </div>
                            <div class="col-4 ">
                              <input type="number" name="qty1" id="qty1" min="1" max="20000" class="form-control" value="<?php echo $qty1; ?>" />
                            </div>
                          </div>

                          <div class="form-row mb-2">
                            <div class="col-2 ">
                              <p class="text-center ">2.</p>
                            </div>
                            <div class="col-6 ">
                              <div>
                                <?php
                                echo '<select name="item2" id="item2" class="form-control">'; // Open your drop down box
                                $sql = "SELECT item_name, item_id FROM item_list";
                                $result = $conn->query($sql);
                                // Loop through the query results, outputing the options one by one
                                while ($row = $result->fetch()) {

                                  if ($row["item_id"] !== $item2_id) {
                                    echo '<option value="' . $row["item_name"] . '">' . $row["item_name"] . '</option>';
                                  } else {
                                    echo '<option value="' . $row["item_name"] . '"selected >' . $row["item_name"] . '</option>';
                                  }
                                }
                                echo '</select>'; // Close your drop down box
                                ?>
                              </div>
                            </div>
                            <div class="col-4 ">
                              <input type="number" name="qty2" id="qty2" min="1" max="20000" class="form-control" value="<?php echo $qty2; ?>" />
                            </div>
                          </div>

                          <div class="form-row mb-2">
                            <div class="col-2 ">
                              <p class="text-center ">3.</p>
                            </div>
                            <div class="col-6 ">
                              <div>
                                <?php
                                echo '<select name="item3" id="item3" class="form-control">'; // Open your drop down box
                                $sql = "SELECT item_name, item_id FROM item_list";
                                $result = $conn->query($sql);
                                // Loop through the query results, outputing the options one by one
                                while ($row = $result->fetch()) {

                                  if ($row["item_id"] !== $item3_id) {
                                    echo '<option value="' . $row["item_name"] . '">' . $row["item_name"] . '</option>';
                                  } else {
                                    echo '<option value="' . $row["item_name"] . '"selected >' . $row["item_name"] . '</option>';
                                  }
                                }
                                echo '</select>'; // Close your drop down box
                                ?>
                              </div>
                            </div>
                            <div class="col-4 ">
                              <input type="number" name="qty3" id="qty3" min="1" max="20000" class="form-control" value="<?php echo $qty3; ?>" />
                            </div>
                          </div>

                          <div class="form-row mb-2">
                            <div class="col-2 ">
                              <p class="text-center ">4.</p>
                            </div>
                            <div class="col-6 ">
                              <div>
                                <?php
                                echo '<select name="item4" id="item4" class="form-control">'; // Open your drop down box
                                $sql = "SELECT item_name, item_id FROM item_list";
                                $result = $conn->query($sql);
                                // Loop through the query results, outputing the options one by one
                                while ($row = $result->fetch()) {

                                  if ($row["item_id"] !== $item4_id) {
                                    echo '<option value="' . $row["item_name"] . '">' . $row["item_name"] . '</option>';
                                  } else {
                                    echo '<option value="' . $row["item_name"] . '"selected >' . $row["item_name"] . '</option>';
                                  }
                                }
                                echo '</select>'; // Close your drop down bo4
                                ?>
                              </div>
                            </div>
                            <div class="col-4 ">
                              <input type="number" name="qty4" id="qty4" min="1" max="20000" class="form-control" value="<?php echo $qty4; ?>" />
                            </div>
                          </div>

                          <div class="form-row mb-2">
                            <div class="col-2 ">
                              <p class="text-center ">5.</p>
                            </div>
                            <div class="col-6 ">
                              <div>
                                <?php
                                echo '<select name="item5" id="item5" class="form-control">'; // Open your drop down box
                                $sql = "SELECT item_name, item_id FROM item_list";
                                $result = $conn->query($sql);
                                // Loop through the query results, outputing the options one by one
                                while ($row = $result->fetch()) {

                                  if ($row["item_id"] !== $item5_id) {
                                    echo '<option value="' . $row["item_name"] . '">' . $row["item_name"] . '</option>';
                                  } else {
                                    echo '<option value="' . $row["item_name"] . '"selected >' . $row["item_name"] . '</option>';
                                  }
                                }
                                echo '</select>'; // Close your drop down bo4
                                ?>
                              </div>
                            </div>
                            <div class="col-4 ">
                              <input type="number" name="qty5" id="qty5" min="1" max="20000" class="form-control" value="<?php echo $qty5; ?>" />
                            </div>
                          </div>

                          <div class="form-row mb-2">
                            <div class="col-2 ">
                              <p class="text-center ">6.</p>
                            </div>
                            <div class="col-6 ">
                              <div>
                                <?php
                                echo '<select name="item6" id="item6" class="form-control">'; // Open your drop down box
                                $sql = "SELECT item_name, item_id FROM item_list";
                                $result = $conn->query($sql);
                                // Loop through the query results, outputing the options one by one
                                while ($row = $result->fetch()) {

                                  if ($row["item_id"] !== $item6_id) {
                                    echo '<option value="' . $row["item_name"] . '">' . $row["item_name"] . '</option>';
                                  } else {
                                    echo '<option value="' . $row["item_name"] . '"selected >' . $row["item_name"] . '</option>';
                                  }
                                }
                                echo '</select>'; // Close your drop down bo4
                                ?>
                              </div>
                            </div>
                            <div class="col-4 ">
                              <input type="number" name="qty6" id="qty6" min="1" max="20000" class="form-control" value="<?php echo $qty6; ?>" />
                            </div>
                          </div>

                          <div class="form-row mb-2">
                            <div class="col-2 ">
                              <p class="text-center ">7.</p>
                            </div>
                            <div class="col-6 ">
                              <div>
                                <?php
                                echo '<select name="item7" id="item7" class="form-control">'; // Open your drop down box
                                $sql = "SELECT item_name, item_id FROM item_list";
                                $result = $conn->query($sql);
                                // Loop through the query results, outputing the options one by one
                                while ($row = $result->fetch()) {

                                  if ($row["item_id"] !== $item7_id) {
                                    echo '<option value="' . $row["item_name"] . '">' . $row["item_name"] . '</option>';
                                  } else {
                                    echo '<option value="' . $row["item_name"] . '"selected >' . $row["item_name"] . '</option>';
                                  }
                                }
                                echo '</select>'; // Close your drop down bo4
                                ?>
                              </div>
                            </div>
                            <div class="col-4 ">
                              <input type="number" name="qty7" id="qty7" min="1" max="20000" class="form-control" value="<?php echo $qty7; ?>" />
                            </div>
                          </div>

                          <div class="form-row mb-2">
                            <div class="col-2 ">
                              <p class="text-center ">8.</p>
                            </div>
                            <div class="col-6 ">
                              <div>
                                <?php
                                echo '<select name="item8" id="item8" class="form-control">'; // Open your drop down box
                                $sql = "SELECT item_name, item_id FROM item_list";
                                $result = $conn->query($sql);
                                // Loop through the query results, outputing the options one by one
                                while ($row = $result->fetch()) {

                                  if ($row["item_id"] !== $item8_id) {
                                    echo '<option value="' . $row["item_name"] . '">' . $row["item_name"] . '</option>';
                                  } else {
                                    echo '<option value="' . $row["item_name"] . '"selected >' . $row["item_name"] . '</option>';
                                  }
                                }
                                echo '</select>'; // Close your drop down bo4
                                ?>
                              </div>
                            </div>
                            <div class="col-4 ">
                              <input type="number" name="qty8" id="qty8" min="1" max="20000" class="form-control" value="<?php echo $qty8; ?>" />
                            </div>
                          </div>

                          <div class="form-row mb-2">
                            <div class="col-2 ">
                              <p class="text-center ">9.</p>
                            </div>
                            <div class="col-6 ">
                              <div>
                                <?php
                                echo '<select name="item9" id="item9" class="form-control">'; // Open your drop down box
                                $sql = "SELECT item_name, item_id FROM item_list";
                                $result = $conn->query($sql);
                                // Loop through the query results, outputing the options one by one
                                while ($row = $result->fetch()) {

                                  if ($row["item_id"] !== $item9_id) {
                                    echo '<option value="' . $row["item_name"] . '">' . $row["item_name"] . '</option>';
                                  } else {
                                    echo '<option value="' . $row["item_name"] . '"selected >' . $row["item_name"] . '</option>';
                                  }
                                }
                                echo '</select>'; // Close your drop down bo4
                                ?>
                              </div>
                            </div>
                            <div class="col-4 ">
                              <input type="number" name="qty9" id="qty9" min="1" max="20000" class="form-control" value="<?php echo $qty9; ?>" />
                            </div>
                          </div>

                          <div class="form-row mb-2">
                            <div class="col-2 ">
                              <p class="text-center ">10.</p>
                            </div>
                            <div class="col-6 ">
                              <div>
                                <?php
                                echo '<select name="item10" id="item10" class="form-control">'; // Open your drop down box
                                $sql = "SELECT item_name, item_id FROM item_list";
                                $result = $conn->query($sql);
                                // Loop through the query results, outputing the options one by one
                                while ($row = $result->fetch()) {

                                  if ($row["item_id"] !== $item10_id) {
                                    echo '<option value="' . $row["item_name"] . '">' . $row["item_name"] . '</option>';
                                  } else {
                                    echo '<option value="' . $row["item_name"] . '"selected >' . $row["item_name"] . '</option>';
                                  }
                                }
                                echo '</select>'; // Close your drop down bo4
                                ?>
                              </div>
                            </div>
                            <div class="col-4 ">
                              <input type="number" name="qty10" id="qty10" min="1" max="20000" class="form-control" value="<?php echo $qty10; ?>" />
                            </div>
                          </div>

                          <div class="form-row mb-2">
                            <div class="col-2 ">
                              <p class="text-center ">11.</p>
                            </div>
                            <div class="col-6 ">
                              <div>
                                <?php
                                echo '<select name="item11" id="item11" class="form-control">'; // Open your drop down box
                                $sql = "SELECT item_name, item_id FROM item_list";
                                $result = $conn->query($sql);
                                // Loop through the query results, outputing the options one by one
                                while ($row = $result->fetch()) {

                                  if ($row["item_id"] !== $item11_id) {
                                    echo '<option value="' . $row["item_name"] . '">' . $row["item_name"] . '</option>';
                                  } else {
                                    echo '<option value="' . $row["item_name"] . '"selected >' . $row["item_name"] . '</option>';
                                  }
                                }
                                echo '</select>'; // Close your drop down bo4
                                ?>
                              </div>
                            </div>
                            <div class="col-4 ">
                              <input type="number" name="qty11" id="qty11" min="1" max="20000" class="form-control" value="<?php echo $qty11; ?>" />
                            </div>
                          </div>

                          <div class="form-row mb-2">
                            <div class="col-2 ">
                              <p class="text-center ">12.</p>
                            </div>
                            <div class="col-6 ">
                              <div>
                                <?php
                                echo '<select name="item12" id="item12" class="form-control">'; // Open your drop down box
                                $sql = "SELECT item_name, item_id FROM item_list";
                                $result = $conn->query($sql);
                                // Loop through the query results, outputing the options one by one
                                while ($row = $result->fetch()) {

                                  if ($row["item_id"] !== $item12_id) {
                                    echo '<option value="' . $row["item_name"] . '">' . $row["item_name"] . '</option>';
                                  } else {
                                    echo '<option value="' . $row["item_name"] . '"selected >' . $row["item_name"] . '</option>';
                                  }
                                }
                                echo '</select>'; // Close your drop down bo4
                                ?>
                              </div>
                            </div>
                            <div class="col-4 ">
                              <input type="number" name="qty12" id="qty12" min="1" max="20000" class="form-control" value="<?php echo $qty12; ?>" />
                            </div>
                          </div>

                          <div class="form-row mb-2">
                            <div class="col-2 ">
                              <p class="text-center "></p>
                            </div>
                            <div class="col-6 ">
                              <div>
                                <p class="text-right text-primary font-weight-bold">Enter Shipping cost (if any): </p>
                              </div>
                            </div>
                            <div class="col-4 ">
                              <input type="number" name="shipping" id="shipping" min="0" max="200000" class="form-control" value="<?php echo $shipping; ?>" />
                            </div>
                          </div>


                          <div class="row ">
                            <div class="row col-12 justify-content-end mt-4  p-0">
                              <button type="reset" class="btn btn-outline-secondary justify-content-end ">Reset</button>
                              <button type="submit" class="btn btn-primary ml-4 pl-5 pr-5 m-0" name="POSubmit">Next</button>
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
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Your Website 2020</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>