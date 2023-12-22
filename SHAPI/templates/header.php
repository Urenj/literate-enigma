<head>
	<title>AniNeru</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!--Import materialize.css-->
	<link rel="stylesheet" type="text/css" href="/SHAPI/css/materialize.min.css">

	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Borel&family=Dosis:wght@200;300;400;500;600;700;800&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap');

        ::selection{
          background-color: #c89703;
          color: white;
        }
        header{
          margin: 0 0 0 0;
          padding: 30px 0 25px 0;
          background-color: #212121;
        }

        nav {
            position: fixed;
            z-index: 4;
        }

        nav .brand-logo {
            font-family: 'Borel';
            padding: 12px 50px;
        }
        nav .right.hide-on-med-and-down{
            font-family: 'Titillium Web';
            padding-right: 30px;
        }

        .sidenav{
            font-family: 'Titillium Web';
            margin-top: 0;
            color: #fff;
            width: 250px;
            padding-left: 20px;
            height: 100vh;
            background-image: linear-gradient(30deg ,#212121, #ffc107);
            border-top-right-radius: 80px;
        }

        aside a {
            font-size: 12pt;
            color: #fff;
            display: block;
            padding: 12px;
            padding-left: 30px;
            text-decoration: none;
            -webkit-tap-highlight-color:transparent;
        }

        .sidenav a:hover {
            color: black;
            background: #fff;
            outline: none;
            position: relative;
            background-color: #fff;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        .sidenav a i {
            margin-right: 5px;
        }

        .sidenav a:hover::after {
            content: "";
            position: absolute;
            background-color: transparent;
            bottom: 100%;
            right: 0;
            height: 35px;
            width: 35px;
            border-bottom-right-radius: 18px;
            box-shadow: 0 20px 0 0 #fff;
        }

        aside{
            margin-left: 20px;
            font-size: 17pt;
        }
        .sidenav a:hover::before {
            content: "";
            position: absolute;
            background-color: transparent;
            top: 38px;
            right: 0;
            height: 35px;
            width: 35px;
            border-top-right-radius: 18px;
            box-shadow: 0 -20px 0 0 #fff;
        }

        .sidenav p {
            margin: 0;
            padding: 40px 0;
        }

        .user-view{
            padding: 0 0;
            margin-right: 0;
        }
        .sidenav {
            font-family: 'Titillium Web';
            /* width: 100%; */
            height: 100vh;
            margin: 0;
        }

        .social {
            height: 0;  
        }

        .social i:before {
            width: 14px;
            height: 14px;
            font-size: 14px;
            position: fixed;
            color: #fff;
            background: #0077B5;
            padding: 10px;
            border-radius: 50%;
            top:5px;
            right:5px;
        }


        .page-footer.grey.darken-4.amber-text h1{
            padding-top: 0;
            font-family: 'Borel';
        }
        .page-footer.grey.darken-4.amber-text p {
            padding-top: 0;
        }

		.brand{
			background: #cbb09c !important;
		}
		.brand-text{
			color: #cbb09c !important;
		}

		form{
			max-width: 460px;
			margin: 20px auto;
			padding: 20px;
		}

	</style>

</head>
<body>
    <!-- Navbar -->
    <nav class="nav-wraper amber">
        <div class="nabi">
            <a href="#" class="brand-logo black-text ">AniNeru</a>
            <a href="#" class="sidenav-trigger" data-target="mobile-links">
                <i class="material-icons black-text">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#" class="ho black-text waves-effect waves-yellow">Home</a></li>
                <li><a href="#about" class="ab black-text waves-effect waves-yellow">About</a></li>
                <li><a href="#commission" class="co black-text waves-effect waves-yellow">Commission</a></li>
                <li><a href="#process" class="te black-text waves-effect waves-yellow">Terms & Process</a></li>
                <li><a href="#updates" class="te black-text waves-effect waves-yellow">Updates</a></li>
                <li><a href="mailto:contactanineru@gmail.com" class="btn black amber-text waves-effect waves-yellow">Contact Me!
                    <i class="material-icons left">email</i>
                </a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav user-view" id="mobile-links">
        
         <!-- <div class="user-view"> -->
            <p> Menu </p>
            <aside>
            <a href="#">
              <i class="fa fa-home" aria-hidden="true"></i>
              Home
            </a>
            <a href="#about">
              <i class="fa fa-user-o" aria-hidden="true"></i>
              About
            </a>
            <a href="#commission">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              Commission
            </a>
            <a href="#process">
              <i class="fa fa-question-circle" aria-hidden="true"></i>
              Terms & Process
            </a>
            <a href="#updates">
              <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
              Updates
            </a>
            <p style="padding-top: 0; padding-bottom: 0; margin-left: 50px ;">-----</p>
            <a href="mailto:contactanineru@gmail.com" color=""><i class="fa fa-envelope" aria-hidden="true"></i>AniNeru Mail Here~
            </a>
            </aside>
            
          
     </ul>	