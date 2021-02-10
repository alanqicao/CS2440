<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Check Us Out</title>
    </head>
    <body>
                <!--            navBar-->
            <header class="header__container">

                <nav class = "primary-nav">

                    <a href="index.html" class ="btn btn-alt">Home</a>
                    <a href="productinfo.php" class ="btn btn-alt">Product Information</a>
                    <a href="SignUp.html" class ="btn btn-alt">Sign up</a>
                    <a href="login.php" class ="btn btn-alt">Login</a>
                    <a href="order.html" class ="btn btn-alt">Order Online</a>


                </nav>

            </header>
                
        <div class="container-fluid">
            <div class="row">
                <form class="form-group" action="response.php" method="post">
                    <fieldset>
                        <legend><h3>Seclect a product or service</h3></legend>

                        <!--ask user/ name-->
                        <div class="form-group">
                            <label class="col-md-8 control-label" for="UserName">User Name</label>  
                            <div class="col-md-8">
                                <input id="UserName" name="UserName" type="text" placeholder="User Name" required="required" class="form-control input-md" name="UserName">
                                <span class="help-block">This is the name you will go by</span>  
                            </div>
                        </div>

                        <!--select a product or service-->
                        <div class="form-group">
                            <label class="col-md-8 control-label" for="Products">Products and Service</label>  
                            <div class="col-md-8">
                               
                                <select name="Products" id="Products">
                                    <option value="0" >Cookies and Brownies</option>
                                    <option value="1" >Breads and Pastries</option>
                                    <option value="2" >Cakes and Pies</option>
                                    <option value="3" >Birthday Cake</option>
                                    <option value="4" >Party Box</option>
                                </select>
                                <span class="help-block">Check out our products</span>  
                            </div>
                        </div>
                        
                        <!--ask location or service-->
                        
                        
                        <div class="form-group">
                            <label class="col-md-8 control-label" for="ShipState">Ship State</label>  
                            <div class="col-md-8">
                                <input id="ShipState" name="ShipState" type="text" placeholder="UT" required="required" maxlength="2" class="form-control input-md" name="ShipState">
                                <span class="help-block">This is the shipping state your will use, Only use abbreviations </span>  
                            </div>
                        </div>
                        
                        <!--submit-->
                        
                        
                        <div class="form-group">
 
                            <div class="col-md-8">
                                <input id="Submit" name="Submit" type="submit"  class="form-control input-group-btn" name="Submit">
                                 
                            </div>
                        </div>
                        
                        
                        

                    </fieldset>
                </form>




             


            </div>

        </div>



    </body>
</html>
