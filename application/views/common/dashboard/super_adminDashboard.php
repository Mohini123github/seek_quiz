<!doctype html>
<html lang="en">

<head>
    <base href="<?php echo base_url('assets/');?>"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" /> -->
</head>

    <style>
    body{
    background:#00c2de;
    }
    .formbackground{
    min-height:500px;
    margin-top:20px;
    background:skyblue;
    margin-bottom: 20px;
    }
    .bgimg{
    min-height:500px;
    background-image:url('images/banner-laptop.png');
    background-size:350px 250px;
    background-position:center;
    background-repeat:no-repeat;
    }
    .bg{
    margin-top:120px;
    margin-left:30px;
    }
    </style>
<body>

    <div class="container-fluid">
        <!-- ============================================Outer open============================================ -->

        <!-- ============================================Navbar============================================ -->
        <div class="row sticky-top" style="background-image: -webkit-linear-gradient(top,#3c3c3c 0,#222 100%);">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar navbar-expand-lg " style="padding: 0px;">

                                <a class="navbar-brand" href="#">
                                    <img src="images/FlexiQuizLogoExtraSmall.jpg" alt="">
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                  </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link" aria-current="page" href="#">Dashboard</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Users</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Settings</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link">Help</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-sm-3">
                                                <form class="navbar-form navbar-right" role="form">
                                                
                                                <a href="#" class=""><i class="fa-solid fa-bell ms-3 text-secondary fs-4 "></i></a>
                                                <a href="#" class=""><i class="fa fa-question-circle ms-4 fs-4  text-secondary"></i></a>
                                                <a href="#" style="text-decoration:none;"><i class="fa-solid fa-right-from-bracket fs-4 ms-4   text-secondary"></i><span class="text-secondary fs-5 ms-1">Logout</span></a>
        
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<!--====================================nabvar============================= -->

<!------organization create form------->
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-10 formbackground">
<div class="row ">
<div class="col-sm-6 bgimg">
<h1 class="text-center text-light mt-5">Create Organization</h1>
<img src="images/banner-mobile.png"class="bg" height="200px" width="100px"/>

</div>
<div class="col-sm-6  d-block ">

<form method="post" action="index.php/Organization/addOrganization" class="m-5 text-light fs-4">
<div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-house"></i></span>
  <input type="text"  class="form-control" placeholder="Organization Name" name="org_name" aria-label="Username" aria-describedby="addon-wrapping">
</div>

<div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
  <input type="text" class="form-control" placeholder="Owner Name" aria-label="Username" name="owner_name" aria-describedby="addon-wrapping">
</div>

<div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-phone"></i></span>
  <input type="text" name="owner_phone" class="form-control" placeholder="Owner's Contact No." aria-label="Username" aria-describedby="addon-wrapping">
</div>
<div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-map-location"></i></span>
  <input type="text" name="org_add"  class="form-control"  placeholder="Organization Address" aria-label="Username" aria-describedby="addon-wrapping">
</div>
<div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-file-waveform"></i></span>
  <textarea type="text" name="org_description" rows="3" class="form-control"placeholder="Write here your Organization Description.." aria-label="Username" aria-describedby="addon-wrapping"></textarea>
</div>
<div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-file-waveform"></i></span>
  <input type="file" name="org_logo" rows="3" class="form-control" placeholder="uplo
  file" aria-label="file" aria-describedby="addon-wrapping">
</div>
<div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
  <input type="text" name="spokeperson_name" class="form-control" placeholder="Spokes Person" aria-label="Username" aria-describedby="addon-wrapping">
</div>
<div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-phone"></i></span>
  <input type="text" name=" spokeperson_phone" class="form-control"  placeholder="Spokes Person's Contact" aria-label="Username" aria-describedby="addon-wrapping">
</div>
<button class="btn btn-primary form-control" type="submit">Submit</button>
</form>
</div>
</div>
</div>
<div class="col-sm-1"></div>
</div>
<!------organization create form------->