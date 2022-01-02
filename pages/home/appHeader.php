<?php $base_url= "http://localhost:83/Event-Management/"?>


<div class="collapse" id="searcharea">
    <!-- top search -->
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
              <button class="btn btn-primary" type="button">Search</button>
        </span>
    </div>
</div>

<!-- /.top search -->
<div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 top-message">
                    <p>WELCOME TO Dream Creation</p>
                </div>
                <div class="col-md-6 top-links">
                    <ul class="listnone">
                        <li><a href="faq.html"> Help </a></li>
                        
                        <li><a href="<?php echo $base_url?>pages/login.php">Log in</a></li>
                        <li>
                            <a role="button" data-toggle="collapse" href="#searcharea" aria-expanded="false" aria-controls="searcharea"> <i class="fa fa-search"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</div>
<!-- End Top Bar -->
<div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 logo">
                    <div class="navbar-brand">
                        <a href="<?php echo $base_url?>"><img src="<?php echo $base_url ?>assets/images/logo.png" alt="Wedding Vendors" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="navigation" id="navigation">
                        <ul>
                            <li>
                                <a href="<?php echo $base_url; ?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url; ?>pages/contact/index.php">Contact</a>
                            </li>
                            <li class="active">
                                <a href="#gallery">Gallery</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo $base_url; ?>pages/about.php">About Us</a>
                            </li>
                        </ul>
                    </div>
                
                </div>
            </div>
        </div>
</div>
<!-- End Main Header -->
