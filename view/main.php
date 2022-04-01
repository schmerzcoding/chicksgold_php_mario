<!DOCTYPE html>
<?php 
require_once "view/header/header.php";
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Chicks Gold PHP Test</title>

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="view/css/styles.css" rel="stylesheet" />
    </head>
    <body style="background: url(view/images/wallpaper.png); background-repeat:no-repeat; background-size:cover; color:white;">
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a id="index_mirror" class="navbar-brand" href="#">Chicks Gold</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><button class="w3-button" id="index_btn" style="color:white;">Home</button></li>
                        <li class="nav-item"><button class="w3-button" id="accounts_btn" style="color:white;">Accounts</button></li>
                        <li class="nav-item"><button class="w3-button" id="orders_btn" style="color:white;">Orders</button></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header - set the background image for the header in the line below-->
            <center><div id="container" class="text-center my-5 py-5 bg-image-full" style="width:90%; margin-top:2%;">
                <img id="cg_logo" class="img-fluid rounded-circle mb-4" src="view/images/chicksgold_icon.jpg" alt="..."/>
                <h1 class="text-white fs-3 fw-bolder">ChicksGold Inc.</h1>
                <p class="text-white-50 mb-0">Landing Page</p>
            </div></center>
        <center><br>
        <div id="tabla_cuentas" style="margin-top:2%; width:90%; display:none;">
            <table style="width:100%;" class="w3-table w3-bordered">
                <tr>
                    <td colspan="6">
                        <h1>Accounts Listing</h1>
</td>
<td class="w3-right-align">
    <button id="add_account" class="w3-button" style="border:solid 1px black; border-radius:5px;">Add Account</button>
</td>
</tr>
<tr>
    <td colspan="4"><h3>Filters</h3></td>
    <td>
        <input type="text" class="w3-input" id="filter_1" placeholder="Filter By Category, Title or Description"></input>
    </td>
<td>
    <select id="filter_status" class="w3-select">
        <option value="empty">Status</option>
    <option value="0">0</option>
    <option value="1">1</option>
</select>
</td>
<td>
    <select id="filter_price" class="w3-select">
        <option value="empty">Filter by price</option>
        <option value="opt1">Less than 500$</option>
        <option value="opt2">Less than 1000$</option>
        <option value="opt3">More or Equal than 1000$</option>
    </select>
</td>
</tr>
<tr>
    <td style="text-align:center;">ID</td>
    <td style="text-align:center;">Category</td>
    <td style="text-align:center;">Title</td>
    <td style="text-align:center;">Price</td>
    <td style="text-align:center;">Description</td>
    <td style="text-align:center;">Status</td>
    <td style="text-align:center;">Actions</td>
</tr>
<tbody id="account_list">

</tbody>
            </table>
        </div>
        <div id="tabla_ordenes" style="margin-top:2%; width:90%; display:none;">
            <table style="width:100%;" class="w3-table w3-bordered">
                <tr>
                    <td colspan="4">
                        <h1>
                            Orders Listing
</h1>
</td>
</tr>
<tr>
    <td colspan="2"><h3>Filters</h3></td>
    <td>
        <input type="text" class="w3-input" id="filter_2" placeholder="Filter By Payment Method or account ID"></input>
    </td>
<td>
    <select id="filter_total" class="w3-select">
        <option value="empty">Filter by total</option>
        <option value="opt1">Less than 500$</option>
        <option value="opt2">Less than 1000$</option>
        <option value="opt3">More or Equal than 1000$</option>
    </select>
</td>
</tr>
<tr>
    <td style="text-align:center;">ID</td>
    <td style="text-align:center;">Total</td>
    <td style="text-align:center;">Payment Method</td>
    <td style="text-align:center;">Order Account</td>
</tr>
<tbody id="order_list">

</tbody>
            </table>
        </div>
</center>
<?php include "new_account.php";?>
<?php include "modify_account.php";?>
<?php include "purchase_account.php";?> 
<script src="view/js/jquery.min.js"></script>
<script src="view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="view/js/sweetalert/sweetalert.min.js"></script>
 <script src="view/js/sb-admin-2.js"></script> 
<script src="view/js/sb-admin-2.min.js"></script>
        <script src="view/js/scripts.js"></script>
    
</html>
