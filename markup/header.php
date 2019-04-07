<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Push Your Borders</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">


<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    
 	
    <!-- Main Header-->
    <header class="main-header">
    	
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo" style="width: 260px"><a href="/"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>
                   	
                   	<div class="nav-outer clearfix">
						<!-- Option Box -->
						<!-- <div class="option-box clearfix">
							<div class="search-btn"><a class="search-icon-btn" href="#"><i class="fas fa-search"></i></a></div>
							<div class="user-btn"><a class="user-icon-btn" href="shop-single.html"><i class="fas fa-user"></i></a></div>
						</div> -->
						
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class="dropdown"><a href="/">Квесты</a>
									</li>
									<!-- <li class="dropdown"><a href="#">Рейтинг</a>
									</li> -->
									<li class="dropdown"><a href="/create">Создать квест</a>
									</li>
									<li class="dropdown"><a href="/about">О нас</a>
									</li>
									<?php if($isLogged){?>
									<li class="dropdown"><a href="/exit">Выйти</a>
									</li>
									<?php } else { ?>
									<li class="dropdown"><a href="/login">Войти</a>
									</li>
									<li class="dropdown"><a href="/register">Регистрация</a>
									</li>
									<?php } ?>
								</ul>
							</div>
							
						</nav>
						
					</div>
                   
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
		
    </header>
    <!--End Main Header -->