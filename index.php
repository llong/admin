<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cisco - SMB Marketplace - Admin Panel</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container">
    <a href="/"><img src="images/cisco-logo-light.png"  height="50px" alt="Cisco Logo"></a>
    </div>
  </nav>


  <div class="container">
  <a href="#" class="pull-right">Sign Out</a>
  <ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="#" id="admin">Administrator</a></li>
    <li role="presentation"><a href="#" id="manage">Manage</a></li>
    <li role="presentation"><a href="#" id="messages">Messages</a></li>
  </ul>
  </div>

  <div class="row" id="toggle-form"></div>

<div class="row" id="toggle-button">
  <div class="container">
  <div class="toggle-button">
    <span>^</span>
  </div>
</div>
</div>

<div class="spacer"></div>

<div class="row">
  <div class="container">
    <span class="form-label">Sales Report From 01/09/2012 to 30/09/2012
    <button class="btn btn-default btn-sm pull-right">Export to Excel</button>
    <hr>

    <table class="table">
      <thead>
        <tr>
          <th>Product SKU</th>
          <th>Product Description</th>
          <th>Product Category</th>
          <th>Services SKU</th>
          <th>Customer Province</th>
          <th>Service Type</th>
        </tr>
      </thead>
      <tbody>
      	<?php 

      	for(i=0;i<=20;i++){
        echo 
        	"<tr>
		          <td>ASA3435-BUN-K9</td>
		          <td>Cisco ASA 5520 Fi</td>
		          <td>Security</td>
		          <td>CON-SNT-A34BUNK9</td>
		          <td>California</td>
		          <td>SmartNet</td>
	        </tr>"
    	}
        ?>
      </tbody>
    </table>
  </div>
</div>

<script src="lib/jquery-2.1.4.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>
