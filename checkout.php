<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <title>Pizzeratta</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="images/favicon2.png">
      <!-- Bootstrap core CSS -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <link href="style/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="style/main.css" />
      <link href="style/osahan2.min.css" rel="stylesheet">
    </head>
      <body>
    <main class="container1" style="max-width:1170px; width:100%;">
        <div class="row w-100">
         <div class="col-md-3">   
        <header>
            <A href="index.php" class="logo">PIZZERATTA</A>
            <section class="nav mt-4">
                <button class="nav-button" id="drop">
                    <hr>
                    <hr></button>
                <nav class="w-100">
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="store.php">Menu</a></li>                        
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="login.php">Login/Register</a></li>
                    </ul>
                </nav>

            </section>
        </header>
            </div> 
            <div class="col-md-8">
       <main class="middle">
  <section class="checkout-page section-padding">
         <div class="container2">
            
               <div class="col-md-12">
                  <div class="checkout-step">
                     <div class="accordion" id="accordionExample">
                        <div class="card checkout-step-one">
                           <div class="card-header" id="headingOne">
                              <h5 class="mb-0">
                                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 <span class="number">1</span> Phone Number 
                                 </button>
                              </h5>
                           </div>
                           <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">
                                 <p>We need your phone number so that we can update you about your order.</p>
                                 <form>
                                    <div class="form-row align-items-center">
                                       <div class="col-auto">
                                          <label class="sr-only">phone number</label>
                                          <div class="input-group mb-2">
                                             <div class="input-group-prepend">
                                                <div class="input-group-text"><span class="mdi mdi-cellphone-iphone"></span></div>
                                             </div>
                                             <input type="text" class="form-control" placeholder="Enter phone number">
                                          </div>
                                       </div>
                                       <div class="col-auto">
                                          <button type="button" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="btn btn-secondary mb-2 btn-lg">NEXT</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                      <div class="card checkout-step-two">
                           <div class="card-header" id="headingTwo">
                              <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <span class="number">2</span> Customer Detail
                                 </button>
                              </h5>
                           </div>
                           <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                              <div class="card-body">
                                 <form>
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label class="control-label">First Name <span class="required">*</span></label>
                                             <input class="form-control border-form-control" value="" placeholder="Mandeep" type="text">
                                          </div>
                                       </div>
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label class="control-label">Last Name <span class="required">*</span></label>
                                             <input class="form-control border-form-control" value="" placeholder="Kaur" type="text">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label class="control-label">Phone <span class="required">*</span></label>
                                             <input class="form-control border-form-control" value="" placeholder="123 456 7890" type="number">
                                          </div>
                                       </div>
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label class="control-label">Email Address <span class="required">*</span></label>
                                             <input class="form-control border-form-control " value="" placeholder="pizzeratta@gmail.com" disabled="" type="email">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label class="control-label">Country <span class="required">*</span></label>
                                             <input class="form-control border-form-control">
                                               
                                          </div>
                                       </div>
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label class="control-label">City <span class="required">*</span></label>
                                             <input class="form-control border-form-control">
                                                
                                        
                                        </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label class="control-label">Zip Code <span class="required">*</span></label>
                                             <input class="form-control border-form-control" value="" placeholder="123456" type="number">
                                          </div>
                                       </div>
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label class="control-label">State <span class="required">*</span></label>
                                              <input class="form-control border-form-control">
                                          </div>
                                       </div>
                                    </div>
                                     <button type="button" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="btn btn-secondary mb-2 btn-lg">NEXT</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingThree">
                              <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 <span class="number">3</span> Payment
                                 </button>
                              </h5>
                           </div>
                           <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                              <div class="card-body">
                                 <form class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                       <label class="control-label">Card Number</label>
                                       <input class="form-control border-form-control" value="" placeholder="0000 0000 0000 0000" type="text">
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-4">
                                          <div class="form-group">
                                             <label class="control-label">Month</label>
                                             <input class="form-control border-form-control" value="" placeholder="01" type="text">
                                          </div>
                                       </div>
                                       <div class="col-sm-4">
                                          <div class="form-group">
                                             <label class="control-label">Year</label>
                                             <input class="form-control border-form-control" value="" placeholder="15" type="text">
                                          </div>
                                       </div>
                                       
                                       <div class="col-sm-4">
                                          <div class="form-group">
                                             <label class="control-label">CVV</label>
                                             <input class="form-control border-form-control" value="" placeholder="135" type="text">
                                          </div>
                                       </div>
                                    </div>
                                    <hr>
                                    <div class="custom-control custom-radio">
                                       <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                       <label class="custom-control-label" for="customRadio1">Would you like to pay by Cash on Delivery?</label>
                                    </div>
                                    <p>Vestibulum semper accumsan nisi, at blandit tortor maxi'mus in phasellus malesuada sodales odio, at dapibus libero malesuada quis.</p>
                                    <button type="button" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour" class="btn btn-secondary mb-2 btn-lg">NEXT</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingThree">
                              <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                 <span class="number">4</span> Order Complete
                                 </button>
                              </h5>
                           </div>
                           <div id="collapsefour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                              <div class="card-body">
                                 <div class="text-center">
                                    <div class="col-lg-10 col-md-10 mx-auto order-done">
                                       <i class="mdi mdi-check-circle-outline text-secondary"></i>
                                       <h4 class="text-success">Congrats! Your Order has been Accepted..</h4>
                                       <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, Sed ex est, consectetur eget consectetur, Lorem ipsum dolor sit amet...
                                       </p>
                                    </div>
                                    <div class="text-center">
                                       <a href="index.php"><button type="submit" class="btn btn-secondary mb-2 btn-lg">Return to store</button></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
             </div>
      </section>
           
            </main>
            </div>
            </div>
          </main>
          </body>
       
       <footer class="footer">
        <div class="row">


            <div class="col-md-6">
                <nav>
                    <ul>
                        <li>
                            <h5 class="mb-3 mt-0"><a class="logo" href="index.html"><img src="images/logo21.png" alt="Pizza"></a></h5>
                        </li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="store.php">Menu</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="login.php">Login/Register</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-3">
                &copy; 2020 www.Pizzeratta.com
            </div>
            <div class="col-md-3">
                An elite food publisher<br>
                <span>Pizzeratta - Created for Pizzeratta</span>
            </div>
        </div>

    </footer>

</body>

</html>
