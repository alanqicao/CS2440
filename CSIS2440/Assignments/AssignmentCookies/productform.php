<!DOCTYPE html>
<?php
require_once 'DataBaseConnection.php';
$sneaky =$_POST['sneaky'];
$name =$_POST['PName'];
$priceP =$_POST['Price'];
$imageP =$_POST['Image'];
$desc=$_POST['Desc'];
$catag=$_POST[''];
$action =$_POST['Action'];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Planet Form</title>
        <!-- Custom fonts for this theme -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Theme CSS -->

        <link href="../../../css/freelancer.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8"><header class="h2">Make a New Products</header></div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    Products currently in Store
                    <?php
                    //this should work if the database is connedted properly
                    $search = "SELECT ProductName FROM CSIS2440.Products Order By ProductName";

                    $return = $con->query($search);

                    if (!$return) {
                        $message = "Whole query " . $search;
                        echo $message;
                        die('Invalid query: ' . mysqli_error($con));
                    }
                    echo "<table><th>Name</th>";
                    while ($row = $return->fetch_assoc()) {
                        echo "<tr><td>" . $row['ProductName'] . "</td></tr>";
                    }
                    echo "</table>";
                    ?>
                </div>
                <div class="col-sm-8">
                    <form method = "post" action = "productform.php" class="form-horizontal">
                        <div class="form-group">
                            <?php
                            if (isset($_POST['Submit']) || $sneaky == 1) {
                                //do the task we need to do using a switch
                                print("<fieldset>");
                                switch ($action) {
                                    case "Insert":
                                        include 'Add.php';
                                        break;
                                    case"Update":
                                        include 'Update.php';
                                        break;
                                    case"Search":
                                        include 'Search.php';
                                        break;
                                    default: print("Something is wrong");
                                }
                                print <<<HTML
                                <!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="UnSubmit">Ok</label>
  <div class="col-md-4">
    <input id="submit" name="UnSubmit" class="btn btn-primary" type="submit"></input>
  </div>
</div>
    <input type='hidden' value=0 name='sneaky'></input></fieldset>
HTML;
                            } else {
                                //show the form
                                print <<<HTML
<fieldset>

<!-- Form Name -->
<legend>Product Form</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="PName">Product Name</label>  
  <div class="col-md-4">
  <input id="PName" name="PName" type="text" placeholder="Product Name" class="form-control input-md" required="">
  <span class="help-block">Name of the Product need to be unique</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Price">Product Price</label>  
  <div class="col-md-4">
  <input id="Price" name="Price" type="text" placeholder="0" class="form-control input-md" >
  <span class="help-block">A positive number</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Image">Product Image</label>  
  <div class="col-md-4">
  <input id="Image" name="Image" type="text" placeholder="Link Here" class="form-control input-md" >
  <span class="help-block">Image Link</span>  
  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Desc">Product Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="Desc" name="Desc">A short description of the product</textarea>
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Action">Select One</label>
  <div class="col-md-4">
    <select id="Action" name="Action" class="form-control">
      <option value="Search">Search</option>
      <option value="Insert">Add</option>
      <option value="Update">Update</option>
    </select>
  </div>
</div>
                                
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit">Submit</label>
  <div class="col-md-4">
    <input id="submit" name="Submit" class="btn btn-primary" type="submit"></input>
  </div>
</div>                                
<input type="hidden" value=1 name="sneaky"></input>
</fieldset>
HTML;
                            }
                            ?>
                        </div>
                    </form>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </div>
        
            <!-- Bootstrap core JavaScript -->
            <script src="../../../vendor/jquery/jquery.min.js" type="text/javascript"></script>
            <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

            <!-- Plugin JavaScript -->
            <script src="../../../vendor/jquery-easing/jquery.easing.min.js" type="text/javascript"></script>

            <!-- Contact Form JavaScript -->
            <script src="../../../js/jqBootstrapValidation.min.js" type="text/javascript"></script>
            <script src="../../../js/contact_me.min.js" type="text/javascript"></script>

            <!-- Custom scripts for this template -->
            <script src="../../../js/freelancer.min.js" type="text/javascript"></script>
    </body>
</html>
