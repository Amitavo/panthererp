

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
// require_once("DB_POS.php");

if(isset($_POST["POSubmit"])){
  if($_POST[item1] !== "Select a Item --"){

      $po_no = $_POST["po_no"];
      $vendor = $_POST["vendor"];
      $item1 = $_POST["item1"];
      
  
      $qty1 = $_POST["qty1"];
      if(!empty($_POST['shipping'])){
        $shipping = $_POST['shipping'];
      }
      if(!empty($_POST['qty2']) && $_POST[item2] !== "Select a Item --"){
        $item2 = $_POST["item2"];
        $qty2 = $_POST["qty2"];
      }
      if(!empty($_POST['qty3']) && $_POST[item3] !== "Select a Item --"){
        $item3 = $_POST["item3"];
        $qty3 = $_POST["qty3"];
      }
      if(!empty($_POST['qty4']) && $_POST[item4] !== "Select a Item --"){
        $item4 = $_POST["item4"];
        $qty4 = $_POST["qty4"];
      }
     if(!empty($_POST['qty5']) && $_POST[item5] !== "Select a Item --"){
        $item5 = $_POST["item5"];
        $qty5 = $_POST["qty5"];
      }
      if(!empty($_POST['qty6']) && $_POST[item6] !== "Select a Item --"){
        $item6 = $_POST["item6"];
        $qty6 = $_POST["qty6"];
      }
      if(!empty($_POST['qty7']) && $_POST[item7] !== "Select a Item --"){
        $item7 = $_POST["item7"];
        $qty7 = $_POST["qty7"];
      }
      if(!empty($_POST['qty8']) && $_POST[item8] !== "Select a Item --"){
        $item8 = $_POST["item8"];
        $qty8 = $_POST["qty8"];
      }
      if(!empty($_POST['qty9']) && $_POST[item9] !== "Select a Item --"){
        $item9 = $_POST["item9"];
        $qty9 = $_POST["qty9"];
      }
      if(!empty($_POST['qty10']) && $_POST[item10] !== "Select a Item --"){
        $item10 = $_POST["item10"];
        $qty10 = $_POST["qty10"];
      }
      if(!empty($_POST['qty11']) && $_POST[item11] !== "Select a Item --"){
        $item11 = $_POST["item11"];
        $qty11 = $_POST["qty11"];
      }
      if(!empty($_POST['qty12']) && $_POST[item12] !== "Select a Item --"){
        $item12 = $_POST["item12"];
        $qty12 = $_POST["qty12"];
      }

      }

      session_start();
    // Set session variables

    $_SESSION[vendor_id] = $vendor;
      // if ($shipping !== null){
      //   $_SESSION[shipping] = $shipping;
      // }else {
      //   $_SESSION[shipping]= 0;
      // }
      $shipping!== null ? ($_SESSION[shipping] = $shipping) : ($_SESSION[shipping]= 0);
        echo "<br>Qty1: ".$qty1;
        echo "<br>Qty2: ".$qty2;
        echo "<br>Qty3: ".$qty3;
        echo "<br>Qty4: ".$qty4;

      

        // Converting the values from null to 0
        $qty2 === null? $qty2=0:"";
        $qty3 === null? $qty3=0:"";
        $qty4 === null? $qty4=0:"";
        $qty5 === null? $qty5=0:"";
        $qty6 === null? $qty6=0:"";
        $qty7 === null? $qty7=0:"";
        $qty8 === null? $qty8=0:"";
        $qty9 === null? $qty9=0:"";
        $qty10 === null? $qty10=0:"";
        $qty11 === null? $qty11=0:"";
        $qty12 === null? $qty12=0:"";
        // Convertion ends from null to 0
    
      $_SESSION[qty1] = $qty1;
      $_SESSION[qty2] = $qty2;
      $_SESSION[qty3] = $qty3;
      $_SESSION[qty4] = $qty4;
      $_SESSION[qty5] = $qty5;
      $_SESSION[qty6] = $qty6;
      $_SESSION[qty7] = $qty7;
      $_SESSION[qty8] = $qty8;
      $_SESSION[qty9] = $qty9;
      $_SESSION[qty10] = $qty10;
      $_SESSION[qty11] = $qty11;
      $_SESSION[qty12] = $qty12;
}

// Filtering Data--------------------------------
$sql = "SELECT vendor_id, name, number,address,email,gst_no FROM vendor WHERE vendor_id  = '$vendor' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    $vendor_name = $row['name'];
    $vendor_number = $row['number'];
    $vendor_address = $row['address'];
    $vendor_email = $row['email'];
    $vendor_gst_no = $row['gst_no'];

    
  }
} else {
  echo "0 results";
}

//todo 
//fetch data from db with where condition, and save value in a variable

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
            
            <a class="collapse-item active" href="create-po.php">Create PO</a>
            <a class="collapse-item " href="view_po_all.php">View All PO</a>
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
          <h1 class="h3 mb-4 text-gray-800">Update purchase order</h1>

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
                      <h2 class="text-center font-weight-bold mb-1"><u>Unique International Purchase Order</u></h2>
                      <p class="text-center mb-5"><span class="font-weight-bold">Address:</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta, eveniet!</p>

                    </div>
                    <div class="row">
                      <div class="col-9 mt-2">
                       <u> <span class="font-weight-bold">PO NO :</span>
                        <span ><?php 
                        session_start();
                        $po_no = $_SESSION[po_no];
                          echo $po_no;
                          ?></span></u>
                      </div>
                      <div class="col-3 mt-2  text-right pr-4">
                        <span class="text-right font-weight-bold">Date :</span>
                        <span class="text-right">
                          <?php 
                          echo date("Y/m/d");
                          ?>
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
                            <span><?php echo "GST NO: ". $vendor_gst_no;?></span><br/>
                            
                          </div>
                          <div class="col-4 ">
                            <h5 class="font-weight-bold">Ship To:</h5>
                            <span>Unique Internationals.</span><br/>
                            <span>164, Mohkampur, Near Amar Ujala,</span><br/>
                            <span>Meerut, Uttar Pradesh- 250002</span>
                          </div>

                        </div>


                        <!-- Table Starts Here -->
                        <?php
                        // Item1--------------
                        $sql1 = "SELECT item_id, item_name, item_price,item_tax,item_attributes FROM item_list WHERE item_name  = '$item1' ";
                        $result1 = $conn->query($sql1);
                        
                        if ($result1->num_rows > 0) {
                          // output data of each row
                          while($row = $result1->fetch_assoc()) {
                            $item1_id = $row['item_id'];
                            $item1_price = $row['item_price'];
                            $item1_tax = $row['item_tax'];
                            $item1_attributes = $row['item_attributes'];
                            $item1_total = ($item1_price +($item1_tax*$item1_price/100))*$qty1;
                             
                          }
                        } else {
                          echo "bad results";
                        }
                        // Item2--------------
                        $sql2 = "SELECT item_id, item_name, item_price,item_tax,item_attributes FROM item_list WHERE item_name  = '$item2' ";
                        $result2 = $conn->query($sql2);
                        
                        if ($result2->num_rows > 0) {
                          // output data of each row
                          while($row = $result2->fetch_assoc()) {
                            $item2_id = $row['item_id'];
                            $item2_price = $row['item_price'];
                            $item2_tax = $row['item_tax'];
                            $item2_attributes = $row['item_attributes'];
                            $item2_total = ($item2_price +($item2_tax*$item2_price/100))*$qty2;
                          }
                        } 
                        
                        // Item3--------------
                        $sql3 = "SELECT item_id, item_name, item_price,item_tax,item_attributes FROM item_list WHERE item_name  = '$item3' ";
                        $result3 = $conn->query($sql3);
                        
                        if ($result3->num_rows > 0) {
                          // output data of each row
                          while($row = $result3->fetch_assoc()) {
                            $item3_id = $row['item_id'];
                            
                            $item3_price = $row['item_price'];
                            $item3_tax = $row['item_tax'];
                            $item3_attributes = $row['item_attributes'];
                            $item3_total = ($item3_price +($item3_tax/100*$item3_price))*$qty3;
                          }
                        } 
                        // echo "Item Id 3 :--".$item3_id;
                        // Item4--------------
                        $sql4 = "SELECT item_id, item_name, item_price,item_tax,item_attributes FROM item_list WHERE item_name  = '$item4' ";
                        $result4 = $conn->query($sql4);
                        
                        if ($result4->num_rows > 0) {
                          // output data of each row
                          while($row = $result4->fetch_assoc()) {
                            $item4_id = $row['item_id'];
                            $item4_price = $row['item_price'];
                            $item4_tax = $row['item_tax'];
                            $item4_attributes = $row['item_attributes'];
                            $item4_total = ($item4_price +($item4_tax*$item4_price/100))*$qty4;
                          }
                        } 

                        // Item5--------------
                        $sql5 = "SELECT item_id, item_name, item_price,item_tax,item_attributes FROM item_list WHERE item_name  = '$item5' ";
                        $result5 = $conn->query($sql5);
                        
                        if ($result5->num_rows > 0) {
                          // output data of each row
                          while($row = $result5->fetch_assoc()) {
                            $item5_id = $row['item_id'];
                            $item5_price = $row['item_price'];
                            $item5_tax = $row['item_tax'];
                            $item5_attributes = $row['item_attributes'];
                            $item5_total = ($item5_price +($item5_tax*$item5_price/100))*$qty5;
                          }
                        } 

                        // Item6--------------
                        $sql6 = "SELECT item_id, item_name, item_price,item_tax,item_attributes FROM item_list WHERE item_name  = '$item6' ";
                        $result6 = $conn->query($sql6);
                        
                        if ($result6->num_rows > 0) {
                          // output data of each row
                          while($row = $result6->fetch_assoc()) {
                            $item6_id = $row['item_id'];
                            $item6_price = $row['item_price'];
                            $item6_tax = $row['item_tax'];
                            $item6_attributes = $row['item_attributes'];
                            $item6_total = ($item6_price +($item6_tax*$item6_price/100))*$qty6;
                          }
                        } 

                        // Item7--------------
                        $sql7 = "SELECT item_id, item_name, item_price,item_tax,item_attributes FROM item_list WHERE item_name  = '$item7' ";
                        $result7 = $conn->query($sql7);
                        
                        if ($result7->num_rows > 0) {
                          // output data of each row
                          while($row = $result7->fetch_assoc()) {
                            $item7_id = $row['item_id'];
                            $item7_price = $row['item_price'];
                            $item7_tax = $row['item_tax'];
                            $item7_attributes = $row['item_attributes'];
                            $item7_total = ($item7_price +($item7_tax*$item7_price/100))*$qty7;
                          }
                        } 
                      
                        // Item8--------------
                        $sql8 = "SELECT item_id, item_name, item_price,item_tax,item_attributes FROM item_list WHERE item_name  = '$item8' ";
                       
                        $result8 = $conn->query($sql8);
                        
                        if ($result8->num_rows > 0) {
                          // output data of each row
                          while($row = $result8->fetch_assoc()) {
                            $item8_id = $row['item_id'];
                            $item8_price = $row['item_price'];
                            $item8_tax = $row['item_tax'];
                            $item8_attributes = $row['item_attributes'];
                            $item8_total = ($item8_price +($item8_tax*$item8_price/100))*$qty8;
                          
                          }
                        } 

                        // Item9--------------
                        $sql9 = "SELECT item_id, item_name, item_price,item_tax,item_attributes FROM item_list WHERE item_name  = '$item9' ";
                        
                        $result9 = $conn->query($sql9);
                        
                        if ($result9->num_rows > 0) {
                          // output data of each row
                          while($row = $result9->fetch_assoc()) {
                            $item9_id = $row['item_id'];
                            $item9_price = $row['item_price'];
                            $item9_tax = $row['item_tax'];
                            $item9_attributes = $row['item_attributes'];
                            $item9_total = ($item9_price +($item9_tax*$item9_price/100))*$qty9;
                            
                          }
                        } 

                        // Item10--------------
                        $sql10 = "SELECT item_id, item_name, item_price,item_tax,item_attributes FROM item_list WHERE item_name  = '$item10' ";
                       
                        $result10 = $conn->query($sql10);
                        
                        if ($result10->num_rows > 0) {
                          // output data of each row
                          while($row = $result10->fetch_assoc()) {
                            $item10_id = $row['item_id'];
                            $item10_price = $row['item_price'];
                            $item10_tax = $row['item_tax'];
                            $item10_attributes = $row['item_attributes'];
                            $item10_total = ($item10_price +($item10_tax*$item10_price/100))*$qty10;
                            
                          }
                        } 

                        // Item11--------------
                        $sql11 = "SELECT item_id, item_name, item_price,item_tax,item_attributes FROM item_list WHERE item_name  = '$item11' ";
                        
                        $result11 = $conn->query($sql11);
                        
                        if ($result11->num_rows > 0) {
                          // output data of each row
                          while($row = $result11->fetch_assoc()) {
                            $item11_id = $row['item_id'];
                            $item11_price = $row['item_price'];
                            $item11_tax = $row['item_tax'];
                            $item11_attributes = $row['item_attributes'];
                            $item11_total = ($item11_price +($item11_tax*$item11_price/100))*$qty11;
                            
                          }
                        } 

                        // Item12--------------
                        $sql12 = "SELECT item_id, item_name, item_price,item_tax,item_attributes FROM item_list WHERE item_name  = '$item12' ";
                        $result12 = $conn->query($sql12);
                        
                        if ($result12->num_rows > 0) {
                          // output data of each row
                          while($row = $result12->fetch_assoc()) {
                            $item12_id = $row['item_id'];
                            $item12_price = $row['item_price'];
                            $item12_tax = $row['item_tax'];
                            $item12_attributes = $row['item_attributes'];
                            $item12_total = ($item12_price +($item12_tax*$item12_price/100))*$qty12;
                            
                          }
                        } 

                        $subtotal = $item1_total + $item2_total + $item3_total + $item4_total + $item5_total + $item6_total + $item7_total + $item8_total + $item9_total + $item10_total + $item11_total + $item11_total;
                        
                        session_start();
                        // Set session variables
                        
                        // Converting the values to 0 from null
                        $item2_id === null? $item2_id=0:"";
                        $item3_id === null? $item3_id=0:"";
                        $item4_id === null? $item4_id=0:"";
                        $item5_id === null? $item5_id=0:"";
                        $item6_id === null? $item6_id=0:"";
                        $item6_id === null? $item6_id=0:"";
                        $item7_id === null? $item7_id=0:"";
                        $item8_id === null? $item8_id=0:"";
                        $item9_id === null? $item9_id=0:"";
                        $item10_id === null? $item10_id=0:"";
                        $item11_id === null? $item11_id=0:"";
                        $item12_id === null? $item12_id=0:"";
                        // Convertion ends  to 0 from null
                        

                    
                        
                        $_SESSION[item1] = $item1_id;
                        $_SESSION[item2] = $item2_id;
                        $_SESSION[item3] = $item3_id;
                        $_SESSION[item4] = $item4_id;
                        $_SESSION[item5] = $item5_id;
                        $_SESSION[item6] = $item6_id;
                        $_SESSION[item7] = $item7_id;
                        $_SESSION[item8] = $item8_id;
                        $_SESSION[item9] = $item9_id;
                        $_SESSION[item10] = $item10_id;
                        $_SESSION[item11] = $item11_id;
                        $_SESSION[item12] = $item12_id;


                        ?>



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
                            
                            <a href='update-po-final-submit.php' class="btn btn-primary pl-5 pr-5 ml-5">Update PO</a>
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
