<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Are you local weddding vendor provider & looking for wedding vendor website template. Wedding Vendor Responsive Website Template suitable for wedding vendor supplier, wedding agency, wedding company, wedding events etc.. ">
    <meta name="keywords" content="Wedding Vendor, wedding template, wedding website template, events, wedding party, wedding cake, wedding dress, wedding couple, couple, Wedding Venues Website Template">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login your account</title>
   <?php include('../components/JsAndCss/allCss.php')?>
</head>

<body cz-shortcut-listen="true">
 

  <?php include('./home/appHeader.php')?>


  <div class="tp-page-head">
    <!-- page header -->
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="page-header text-center">
            <div class="icon-circle">
              <i class="icon icon-size-60 icon-padlock-1 icon-white"></i>
            </div>
            <h1>Welcome back to your account</h1>
            <p>We're happy to have you back.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.page header -->
  <div class="tp-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Login Page</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="main-container">
    <div class="container">
      <div class="row">
        <div class="col-md-6 st-tabs">
          <!-- Nav tabs -->
          <div class="well-box">
            <h3>Login</h3>
            <form>
              <!-- Text input-->
              <div class="form-group">
                <label class="control-label" for="email">E-mail<span class="required">*</span></label>
                <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md"
                  required="">
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="control-label" for="password">Password<span class="required">*</span></label>
                <input id="password" name="password" type="text" placeholder="Password" class="form-control input-md"
                  required="">
              </div>
              <!-- Button -->
              <div class="form-group">
                <button id="submit" name="submit" class="btn btn-primary btn-lg">Login</button>
                <a href="/wedding/wedding-new/forget-password.html" class="pull-right">
                  <small>Forgot Password ?</small></a>
              </div>
            </form>
          </div>
          <div class="well-box social-login"> <a href="#"
              class="btn facebook-btn"><i class="fa fa-facebook-square"></i>Facebook</a> <a
              href="#" class="btn twitter-btn"><i
                class="fa fa-twitter-square"></i>Twitter</a> <a
              href="#" class="btn google-btn"><i
                class="fa fa-google-plus-square"></i>Google+</a> </div>
        </div>
        <div class="col-md-6 st-tabs">
          <!-- Nav tabs -->
          <div class="well-box">
            <h3>Register</h3>
            <form>
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                    <label class="control-label" for="first_name">First Name<span class="required">*</span></label>
                    <input id="first_name" name="first_name" type="text" placeholder="First Name" class="form-control input-md"
                      required="">
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                      <label class="control-label" for="last_name">Last Name<span class="required">*</span></label>
                      <input id="last_name" name="last_name" type="text" placeholder="Last Name" class="form-control input-md"
                        required="">
                    </div>
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="control-label" for="email">E-mail<span class="required">*</span></label>
                <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md"
                  required="">
              </div>

              <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                      <input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
                      <label class="form-check-label" for="male">
                        Male
                      </label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                      <input class="form-check-input" type="radio" name="gender" id="female" value="FeMale" checked>
                      <label class="form-check-label" for="female">
                        Female
                      </label>
                    </div>
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="control-label" for="password">Password<span class="required">*</span></label>
                <input id="password" name="password" type="text" placeholder="Password" class="form-control input-md"
                  required="">
              </div>
              <!-- Button -->
              <div class="form-group">
                <button id="submit" name="submit" class="btn btn-primary btn-lg">Sign up</button>
                <a href="/wedding/wedding-new/forget-password.html" class="pull-right">
                  <small>Forgot Password ?</small></a>
              </div>
            </form>
          </div>
          <div class="well-box social-login"> <a href="#"
              class="btn facebook-btn"><i class="fa fa-facebook-square"></i>Facebook</a> <a
              href="#" class="btn twitter-btn"><i
                class="fa fa-twitter-square"></i>Twitter</a> <a
              href="#" class="btn google-btn"><i
                class="fa fa-google-plus-square"></i>Google+</a> </div>
        </div>
      </div>
    </div>

    
    <!-- /.Footer -->
   
    <?php include('./home/appFooter.php')?>
    

  </div>


  <?php include('../components/JsAndCss/allJs.php')?>
  
</body>

</html>