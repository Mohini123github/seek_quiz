
<!doctype html>
<html lang="en">

<head>
    <base href="<?php echo base_url('assets/');?>"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
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
                                            <div class="col-sm-8">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link" aria-current="page" href="<?php echo base_url('index.php/welcome/teacherDashboard');?>">Dashboard</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Users</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Groups</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Reports</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Settings</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-sm-4">
                                                <form class="navbar-form navbar-right" role="form">
                                                <a href="<?php echo base_url('index.php/welcome/plan');?>"class="btn btn-primary" type="submit">Upragde Now</a>
                                                <a href="#" class=""><i class="fa-solid fa-bell ms-2 text-secondary fs-4 "></i></a>
                                                <a href="#" class=""><i class="fa fa-question-circle ms-1 fs-4  text-secondary"></i></a>
                                                <a href="#" style="text-decoration:none;"><i class="fa-solid fa-right-from-bracket fs-4 ms-1   text-secondary"></i><span class="text-secondary fs-5 ms-1">Logout</span></a>
        
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
<!--=========================================nabvar==================================== -->
<div class="row">
	<div class="col-md-12 studash ">
		<p class="mt-1">You have used 0 of 20 responses this month.<a href="#">Upgrade for more responses and to access additional features</a></p>
	</div>
</div>
<div class="row">
	<div class="col-sm-1 stulist"></div>
	<div class="col-sm-10 ">
		<center><button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Create Quiz
</button></center>
	</div>
	<div class="col-sm-1 stulist "></div>
</div>
<!-----modal part for quiz creation----->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="text-center">Select a quiz type</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="row">
       	<div class="col-sm-6" style="border: 10px solid #dfdfdf; background:#dfdfdf ;">
       		<img src="images/classic-quiz-select.png" height="180px" width="180px">
        				<center><button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#createQuiz">Classic Quiz</button></center>
        				<p class="p">Create any type of quiz, test or exam for learners to take independently during a set time frame</p>
       	</div>
       	<div class="col-sm-6" style="border: 10px solid #dfdfdf;background:#dfdfdf ;">
       		<img src="images/live-event-select.png" height="180px" width="180px">
        				<center><button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#createQuiz">Classic Quiz</button></center>
        				<p class="p">Build and host a live quiz game to play with learners in real-time</p>
       	</div>
       </div>
      </div>
      
    </div>
  </div>
</div>
<!-----modal part for quiz creation End ----->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="createQuiz" tabindex="-1" aria-labelledby="createQuizLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="createQuizLabel">New Quiz</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <input type="text" class="form-control" name="" placeholder="Enter title for your Quiz">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Create Quiz</button>
      </div>
    </div>
  </div>
</div>