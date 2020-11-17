

<?php
require_once('DB_POS.php');
$SearchQueryParameter = $_GET["id"];
// echo "<h1> PO NO FECHED IS ".$SearchQueryParameter."</h1>";

// Data Fetching from po list

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
    
}

// echo "<br>Vendor is ".$vendor_id;
// echo "<br>Shipping is ".$shipping;
// echo "<br>Total is ".$total;

//Fetching Vendor Details from Vendor table.\
$sql_vendor = "SELECT * FROM vendor WHERE vendor_id='$vendor_id' ";
$stmt_vendor = $conn->query($sql_vendor);

while ($DataRows  = $stmt_vendor->fetch()) {
  $vendor_name = $DataRows["name"];
  $vendor_number = $DataRows["number"];
  $vendor_address = $DataRows["address"];
  $vendor_gst_no = $DataRows["gst_no"];
}

//Fetching Item details from PO table

//Item 1 details

$sql1 = "SELECT * FROM item_list WHERE item_id='$item1_id'";
$stmt1 = $conn->query($sql1);

while ($DataRows  = $stmt1->fetch()) {
  $item1 = $DataRows["item_name"];
  $item1_price = $DataRows["item_price"];
  $item1_tax = $DataRows["item_tax"];
  $item1_total = ($item1_price +($item1_tax*$item1_price/100))*$qty1;
}

//Item 2 details
if(!empty($item2_id)){
  $sql2 = "SELECT * FROM item_list WHERE item_id='$item2_id'";
  $stmt2 = $conn->query($sql2);
  
  while ($DataRows  = $stmt2->fetch()) {
    $item2 = $DataRows["item_name"];
    $item2_price = $DataRows["item_price"];
    $item2_tax = $DataRows["item_tax"];
    $item2_total = ($item2_price +($item2_tax*$item2_price/100))*$qty2;
  }

}
//Item 3 details
if(!empty($item3_id)){
  $sql3 = "SELECT * FROM item_list WHERE item_id='$item3_id'";
  $stmt3 = $conn->query($sql3);
  
  while ($DataRows  = $stmt3->fetch()) {
    $item3 = $DataRows["item_name"];
    $item3_price = $DataRows["item_price"];
    $item3_tax = $DataRows["item_tax"];
    $item3_total = ($item3_price +($item3_tax/100*$item3_price))*$qty3;
  }

}
//Item 4 details
if(!empty($item4_id)){
  $sql4 = "SELECT * FROM item_list WHERE item_id='$item4_id'";
  $stmt4 = $conn->query($sql4);
  
  while ($DataRows  = $stmt4->fetch()) {
    $item4 = $DataRows["item_name"];
    $item4_price = $DataRows["item_price"];
    $item4_tax = $DataRows["item_tax"];
    $item4_total = ($item4_price +($item4_tax*$item4_price/100))*$qty4;
  }

}
//Item 5 details
if(!empty($item5_id)){
  $sql5 = "SELECT * FROM item_list WHERE item_id='$item5_id'";
  $stmt5 = $conn->query($sql5);
  
  while ($DataRows  = $stmt5->fetch()) {
    $item5 = $DataRows["item_name"];
    $item5_price = $DataRows["item_price"];
    $item5_tax = $DataRows["item_tax"];
    $item5_total = ($item5_price +($item5_tax*$item5_price/100))*$qty5;
  }

}
//Item 6 details
if(!empty($item6_id)){
  $sql6 = "SELECT * FROM item_list WHERE item_id='$item6_id'";
  $stmt6 = $conn->query($sql6);
  
  while ($DataRows  = $stmt6->fetch()) {
    $item6 = $DataRows["item_name"];
    $item6_price = $DataRows["item_price"];
    $item6_tax = $DataRows["item_tax"];
    $item6_total = ($item6_price +($item6_tax*$item6_price/100))*$qty6;
  }

}
//Item 7 details
if(!empty($item7_id)){
  $sql7 = "SELECT * FROM item_list WHERE item_id='$item7_id'";
  $stmt7 = $conn->query($sql7);
  
  while ($DataRows  = $stmt7->fetch()) {
    $item7 = $DataRows["item_name"];
    $item7_price = $DataRows["item_price"];
    $item7_tax = $DataRows["item_tax"];
    $item7_total = ($item7_price +($item7_tax*$item7_price/100))*$qty7;
  }

}
//Item 8 details
if(!empty($item8_id)){
  $sql8 = "SELECT * FROM item_list WHERE item_id='$item8_id'";
  $stmt8 = $conn->query($sql8);
  
  while ($DataRows  = $stmt8->fetch()) {
    $item8 = $DataRows["item_name"];
    $item8_price = $DataRows["item_price"];
    $item8_tax = $DataRows["item_tax"];
    $item8_total = ($item8_price +($item8_tax*$item8_price/100))*$qty8;
  }

}
//Item 9 details
if(!empty($item9_id)){
  $sql9 = "SELECT * FROM item_list WHERE item_id='$item9_id'";
  $stmt9 = $conn->query($sql9);
  
  while ($DataRows  = $stmt9->fetch()) {
    $item9 = $DataRows["item_name"];
    $item9_price = $DataRows["item_price"];
    $item9_tax = $DataRows["item_tax"];
    $item9_total = ($item9_price +($item9_tax*$item9_price/100))*$qty9;
  }

}
//Item 10 details
if(!empty($item10_id)){
  $sql10 = "SELECT * FROM item_list WHERE item_id='$item10_id'";
  $stmt10 = $conn->query($sql10);
  
  while ($DataRows  = $stmt10->fetch()) {
    $item10 = $DataRows["item_name"];
    $item10_price = $DataRows["item_price"];
    $item10_tax = $DataRows["item_tax"];
    $item10_total = ($item10_price +($item10_tax*$item10_price/100))*$qty10;
  }

}
//Item 11 details
if(!empty($item11_id)){
  $sql11 = "SELECT * FROM item_list WHERE item_id='$item11_id'";
  $stmt11 = $conn->query($sql11);
  
  while ($DataRows  = $stmt11->fetch()) {
    $item11 = $DataRows["item_name"];
    $item11_price = $DataRows["item_price"];
    $item11_tax = $DataRows["item_tax"];
    $item11_total = ($item11_price +($item11_tax*$item11_price/100))*$qty11;
  }

}
//Item 12 details
if(!empty($item12_id)){
  $sql12 = "SELECT * FROM item_list WHERE item_id='$item12_id'";
  $stmt12 = $conn->query($sql12);
  
  while ($DataRows  = $stmt12->fetch()) {
    $item12 = $DataRows["item_name"];
    $item12_price = $DataRows["item_price"];
    $item12_tax = $DataRows["item_tax"];
    $item12_total = ($item12_price +($item12_tax*$item12_price/100))*$qty12;
  }

}
// Calculating subtotal value
$subtotal = $item1_total + $item2_total + $item3_total + $item4_total + $item5_total + $item6_total + $item7_total + $item8_total + $item9_total + $item10_total + $item11_total + $item11_total;

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
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Panther <sup>ERP</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Purchase Oreder</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item " href="create-po.php">Create PO</a>
            <a class="collapse-item active" href="view_po_all.php">View All PO</a>
            <a class="collapse-item" href="cards.html">Edit PO</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Master Inventory</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
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
          <h1 class="h3 mb-4 text-gray-800">View purchase order</h1>

          <div class="row">

            <div class="col-lg-12">

              <!-- Purchase Order Form-->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">New Purchase Order</h6>
                </div>
                <div class="card-body">
                  <div class="container">
                    <div class=" container-fluid ">
                      <h2 class="text-center font-weight-bold mb-1"><u>Unique International Purchase Order</u></h2>
                      <p class="text-center mb-5"><span class="font-weight-bold">Address:</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta, eveniet!</p>

                    </div>
                    <div class="row">
                      <div class="col-9 mt-2">
                       <u> <span class="font-weight-bold">PO NO :</span>
                        <span ><?php echo $po_no ?></span></u>
                      </div>
                      <div class="col-3 mt-2  text-right pr-4">
                        <span class="text-right font-weight-bold">Date :</span>
                        <span class="text-right">
                        <?php echo date("d-m-y", strtotime($date));?>
                        </span>
                      </div>
                    </div>
                    <div class="row mt-5">
                      <div class="col-12">
                        <div class="row justify-content-lg-between">

                          <div class="col-4">
                            <h5 class="font-weight-bold">Vendor Details:</h5>
                            <span><?php echo $vendor_name;?></span><br/>
                            <span><?php echo $vendor_number.", ".$vendor_email; ?></span><br/>
                            <span><?php echo $vendor_address;?></span><br/>
                            <span><?php if(!empty($vendor_gst_no)){echo "GST NO: ". $vendor_gst_no;} ?></span><br/>
                            
                          </div>
                          <div class="col-4 ">
                            <h5 class="font-weight-bold">Ship To:</h5>
                            <span>Unique Internationals.</span><br/>
                            <span>164, Mohkampur, Near Amar Ujala,</span><br/>
                            <span>Meerut, Uttar Pradesh- 250002</span>
                          </div>

                        </div>


                        



                        <table class="table  mt-5">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Item</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Price(INR)</th>
                              <th scope="col">Tax(%)</th>
                              <th scope="col">Total(INR)</th>
                            </tr>
                          </thead>
                          <tbody>

                            <?php 

                              if(!empty($qty1) ){
                                echo "<tr>";
                                echo "<th scope = 'row'>1</th>";
                                echo "<td>".$item1."</td>";
                                echo "<td>".$qty1."</td>";
                                echo "<td>".$item1_price."</td>";
                                echo "<td>".$item1_tax."</td>";
                                echo "<td>".$item1_total."</td>";
                              }
                              if(!empty($qty2) ){
                                echo "<tr>";
                                echo "<th scope = 'row'>2</th>";
                                echo "<td>".$item2."</td>";
                                echo "<td>".$qty2."</td>";
                                echo "<td>".$item2_price."</td>";
                                echo "<td>".$item2_tax."</td>";
                                echo "<td>".$item2_total."</td>";
                              }
                              if(!empty($qty3) ){
                                echo "<tr>";
                                echo "<th scope = 'row'>3</th>";
                                echo "<td>".$item3."</td>";
                                echo "<td>".$qty3."</td>";
                                echo "<td>".$item3_price."</td>";
                                echo "<td>".$item3_tax."</td>";
                                echo "<td>".$item3_total."</td>";
                              }
                              if(!empty($qty4) ){
                                echo "<tr>";
                                echo "<th scope = 'row'>4</th>";
                                echo "<td>".$item4."</td>";
                                echo "<td>".$qty4."</td>";
                                echo "<td>".$item4_price."</td>";
                                echo "<td>".$item4_tax."</td>";
                                echo "<td>".$item4_total."</td>";
                              }
                              if(!empty($qty5) ){
                                echo "<tr>";
                                echo "<th scope = 'row'>5</th>";
                                echo "<td>".$item5."</td>";
                                echo "<td>".$qty5."</td>";
                                echo "<td>".$item5_price."</td>";
                                echo "<td>".$item5_tax."</td>";
                                echo "<td>".$item5_total."</td>";
                              }
                              if(!empty($qty6) ){
                                echo "<tr>";
                                echo "<th scope = 'row'>6</th>";
                                echo "<td>".$item6."</td>";
                                echo "<td>".$qty6."</td>";
                                echo "<td>".$item6_price."</td>";
                                echo "<td>".$item6_tax."</td>";
                                echo "<td>".$item6_total."</td>";
                              }
                              if(!empty($qty7) ){
                                echo "<tr>";
                                echo "<th scope = 'row'>7</th>";
                                echo "<td>".$item7."</td>";
                                echo "<td>".$qty7."</td>";
                                echo "<td>".$item7_price."</td>";
                                echo "<td>".$item7_tax."</td>";
                                echo "<td>".$item7_total."</td>";
                              }
                              if(!empty($qty8) ){
                                echo "<tr>";
                                echo "<th scope = 'row'>8</th>";
                                echo "<td>".$item8."</td>";
                                echo "<td>".$qty8."</td>";
                                echo "<td>".$item8_price."</td>";
                                echo "<td>".$item8_tax."</td>";
                                echo "<td>".$item8_total."</td>";
                              }
                              if(!empty($qty9) ){
                                echo "<tr>";
                                echo "<th scope = 'row'>9</th>";
                                echo "<td>".$item9."</td>";
                                echo "<td>".$qty9."</td>";
                                echo "<td>".$item9_price."</td>";
                                echo "<td>".$item9_tax."</td>";
                                echo "<td>".$item9_total."</td>";
                              }
                              if(!empty($qty10) ){
                                echo "<tr>";
                                echo "<th scope = 'row'>10</th>";
                                echo "<td>".$item10."</td>";
                                echo "<td>".$qty10."</td>";
                                echo "<td>".$item10_price."</td>";
                                echo "<td>".$item10_tax."</td>";
                                echo "<td>".$item10_total."</td>";
                              }
                              if(!empty($qty11) ){
                                echo "<tr>";
                                echo "<th scope = 'row'>11</th>";
                                echo "<td>".$item11."</td>";
                                echo "<td>".$qty11."</td>";
                                echo "<td>".$item11_price."</td>";
                                echo "<td>".$item11_tax."</td>";
                                echo "<td>".$item11_total."</td>";
                              }
                              if(!empty($qty12) ){
                                echo "<tr>";
                                echo "<th scope = 'row'>12</th>";
                                echo "<td>".$item12."</td>";
                                echo "<td>".$qty12."</td>";
                                echo "<td>".$item12_price."</td>";
                                echo "<td>".$item12_tax."</td>";
                                echo "<td>".$item12_total."</td>";
                              }
                            
                            ?>
                         
                            
                            <tr>
                              <th scope="row"></th>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td>SUBTOTAL </td>
                              <td><?php echo $subtotal; ?></td>
                            </tr>
                            <tr>
                              <th scope="row"></th>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td>SHIPPING</td>
                              <td><?php 
                              echo $shipping;
                              ?>
                              <!-- <input type="number" name="shipping" id="shipping" class="form-control bg-light border-0 small w-50"> -->
                              <!-- <script>
                              let shipping = document.getElementById("shipping");
                              shipping.addEventListener("change",shippingValue);
                             function shippingValue (){
                               let shippingCost = shipping.value;
                               console.log(shippingCost);
                             }
                              </script> -->
                              </td>
                            </tr>
                            <tr>
                              <th scope="row"></th>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td class="font-weight-bold">TOTAL</td>
                              <td class="font-weight-bold">
                              <?php
                              if($shipping > 0){
                                $total = $subtotal + $shipping;
                              }else {
                                $total = $subtotal ;
                              }
                              echo $total;

                              session_start();
                              // Set session variables
                              $_SESSION[total] = $total;
                              ?>
                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="row ">
                          <div class="col-6">
                            <div class="">
                              <div class=" ">
                                <label for="comment">Comment or Special Instruction </label>
                                <textarea name="comment" id="comment" cols="40" rows="2" placeholder="Insert you comment here..." class="form-control"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 mt-5 ">
                         
                            
                            <button onclick="window.print()" type="reset" class="btn btn-outline-secondary justify-content-end mr-5">Print PO</button>
                            <!-- <button onclick="<?php ?>" type="submit" class="btn btn-primary pl-5 pr-5 ml-5" name="Submit">Submit</button> -->
                            
                            <a href='create-po-final-submit.php' class="btn btn-primary pl-5 pr-5 ml-5">Submit PO</a>
                          </div>

                        </div>
                        

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
