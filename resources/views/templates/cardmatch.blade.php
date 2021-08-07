<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Bootstrap Profile Cards 2019</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
    <style>
                    /*****************
                - Header -
            *****************/
         
            header {
                position:relative;
                left:0;
                top:0;
                width:100%;
                min-height:120px;
                padding:50px 0;
                color:#fff;
                background-image: -moz-linear-gradient( 136deg, rgb(4, 0, 8) 0%, #262262 100%);
                background-image: -webkit-linear-gradient( 136deg, rgb(4, 0, 8) 0%, #262262 100%);
                background-image: -ms-linear-gradient( 136deg, rgb(4, 0, 8) 0%, rgb(39, 34, 98) 100%);
                margin-bottom:30px
            }

            /* Logo */
            header .logo {
                clear:both;
                display:block;
                text-align:center;
                padding-bottom:10px;
            }

            /* Title */
            header h1 {
                font-weight:300;
                font-size:24px;
                color:#eee;	
                letter-spacing:2px;
                text-align:center;
                text-transform:uppercase;
                margin:0 !important;
                padding-bottom:25px;
            }
            @charset "utf-8";
            @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Open Sans:400,600,800');
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            div,
            input,
            p,
            a {
                font-family: "Open Sans";
                margin: 0px;
            }

            a,
            a:hover,
            a:focus {
                color: inherit;
            }

            body, html {
                color: white;
                background-image: -moz-linear-gradient( 136deg, rgb(4, 0, 8) 0%, #262262 100%);
                background-image: -webkit-linear-gradient( 136deg, rgb(4, 0, 8) 0%, #262262 100%);
                background-image: -ms-linear-gradient( 136deg, rgb(4, 0, 8) 0%, rgb(39, 34, 98) 100%);
                height: 100%;
            }

            .container-fluid,
            .container {
                max-width: 1200px;
            }

            .card-container {
                padding: 100px 0px;
                -webkit-perspective: 1000;
                perspective: 1000;
            }

            .profile-card-1 {
                background-color: #FFF;
                border-radius: 10px;
                box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
                background-image: url(../img/profile-bg-1.jpg);
                background-position: center;
                padding-top: 100px;
                overflow: hidden;
                position: relative;
                margin: 10px auto;
                cursor: pointer;
                max-width: 300px;
            }

            .profile-card-1 .profile-content {
                position: relative;
                background-color: #FFF;
                padding: 70px 20px 20px 20px;
                text-align: center;
            }

            .profile-card-1 .profile-img {
                position: absolute;
                height: 100px;
                left: 0px;
                right: 0px;
                z-index: 10;
                top: -50px;
                transition: all 0.25s linear;
                transform-style: preserve-3d;
            }

            .profile-card-1 .profile-img img {
                height: 100px;
                margin: auto;
                border-radius: 50%;
                border: 5px solid #FFF;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            }

            .profile-card-1 .profile-name {
                font-size: 18px;
                font-weight: bold;
                color: #021830;
            }

            .profile-card-1 .profile-address {
                color: #777;
                font-size: 12px;
                margin: 0px 0px 15px 0px;
            }

            .profile-card-1 .profile-description {
                font-size: 13px;
                padding: 5px 10px;
                color: #777;
            }

            .profile-card-1 .profile-icons .fa {
                margin: 5px;
                color: #777;
            }

            .profile-card-1:hover {
                box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.1);
            }

            .profile-card-1:hover .profile-img {
                transform: rotateY(180deg);
            }

            .profile-card-2,  #match{
                max-width: 300px;
                background-color: #FFF;
                box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
                background-position: center;
                overflow: hidden;
                position: relative;
                margin: 10px auto;
                cursor: pointer;
                border-radius: 10px;
            }

            .profile-card-2 img, #match img{
                transition: all linear 0.25s;
            }
            

            .profile-card-2 .profile-name,  #match .profile-name{
                position: absolute;
                left: 30px;
                bottom: 70px;
                font-size: 30px;
                color: #FFF;
                text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
                font-weight: bold;
                transition: all linear 0.25s;
            }

            .profile-card-2 .profile-icons{
                position: absolute;
                bottom: 30px;
                right: 30px;
                color: #FFF;
                transition: all linear 0.25s;
            }

            .profile-card-2 .profile-username{
                position: absolute;
                bottom: 50px;
                left: 30px;
                color: #FFF;
                font-size: 13px;
                transition: all linear 0.25s;
            }

            .profile-card-2 .profile-icons .fa {
                margin: 5px;
            }

            .profile-card-2:hover img {
                filter: grayscale(100%);
            }
            #match:hover img {
                filter: hue-rotate(90deg);
            }

            .profile-card-2:hover .profile-name {
                bottom: 80px;
            }

            .profile-card-2:hover .profile-username {
                bottom: 60px;
            }

            .profile-card-2:hover .profile-icons {
                right: 40px;
            }

            .profile-card-3 {
                background-color: #FFF;
                border-radius: 5px;
                box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                position: relative;
                margin: 10px auto;
                cursor: pointer;
                padding: 25px 15px;
            }

            .profile-card-3 .profile-name {
                font-weight: bold;
                color: #21304e;
            }

            .profile-card-3 .profile-location {
                color: #999;
                font-size: 13px;
                font-weight: 600;
            }

            .profile-card-3 img {
                height: 100px;
                width: 100px;
                object-fit: cover;
                margin: 10px auto;
                border-radius: 50%;
                transition: all linear 0.25s;
            }

            .profile-card-3 .profile-description {
                font-size: 13px;
                color: #777;
                padding: 10px;
            }

            .profile-card-3 .profile-icons {
                margin: 15px 0px;
            }

            .profile-card-3 .profile-icons .fa {
                color: #fe455a;
                margin: 0px 5px;
            }

            .profile-card-3:hover img {
                height: 110px;
                width: 110px;
                margin: 5px auto;
            }

            .profile-card-4 {
                max-width: 300px;
                background-color: #FFF;
                border-radius: 5px;
                box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                position: relative;
                margin: 10px auto;
                cursor: pointer;
            }

            .profile-card-4 img {
                transition: all 0.25s linear;
            }

            .profile-card-4 .profile-content {
                position: relative;
                padding: 15px;
                background-color: #FFF;
            }

            .profile-card-4 .profile-name {
                font-weight: bold;
                position: absolute;
                left: 0px;
                right: 0px;
                top: -70px;
                color: #FFF;
                font-size: 17px;
            }

            .profile-card-4 .profile-name p {
                font-weight: 600;
                font-size: 13px;
                letter-spacing: 1.5px;
            }

            .profile-card-4 .profile-description {
                color: #777;
                font-size: 12px;
                padding: 10px;
            }

            .profile-card-4 .profile-overview {
                padding: 15px 0px;
            }

            .profile-card-4 .profile-overview p {
                font-size: 10px;
                font-weight: 600;
                color: #777;
            }

            .profile-card-4 .profile-overview h4 {
                color: #273751;
                font-weight: bold;
            }

            .profile-card-4 .profile-content::before {
                content: "";
                position: absolute;
                height: 20px;
                top: -10px;
                left: 0px;
                right: 0px;
                background-color: #FFF;
                z-index: 0;
                transform: skewY(3deg);
            }

            .profile-card-4:hover img {
                transform: rotate(5deg) scale(1.1, 1.1);
                filter: brightness(110%);
            }

            .profile-card-5 {
                max-width: 300px;
                background-color: #FFF;
                border-radius: 5px;
                box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                position: relative;
                margin: 10px auto;
                cursor: pointer;
                padding: 50px 15px 25px 15px;
            }

            .profile-card-5 img {
                height: 100px;
                width: 100px;
                object-fit: cover;
                margin: 10px auto;
                border-radius: 50%;
                transition: all linear 0.25s;
                position: relative;
            }

            .profile-card-5::before {
                content: "";
                position: absolute;
                top: -60px;
                right: 0px;
                left: 0px;
                height: 170px;
                background-color: #4fb96e;
                transform: skewY(-20deg);
            }

            .profile-card-5 .profile-name {
                padding-top: 15px;
                font-weight: bold;
                color: #333;
            }

            .profile-card-5 .profile-designation {
                font-size: 13px;
                color: #777;
            }

            .profile-card-3 .profile-location {
                color: #999;
                font-size: 13px;
                font-weight: 600;
            }

            .profile-card-5 .profile-description {
                font-size: 13px;
                color: #777;
                padding: 10px;
            }

            .profile-card-5 .profile-overview {
                padding: 15px 0px;
            }

            .profile-card-5 .profile-overview p {
                color: #777;
                font-size: 13px;
            }

            .profile-card-5 .profile-overview h2 {
                font-weight: bold;
                color: #1e2832;
            }

            .profile-card-5 .profile-icons .fa {
                margin: 7px;
                color: #4fb96e;
            }

            .profile-card-5:hover img {
                transform: rotate(-5deg);
            }

            .profile-card-6 {
                max-width: 300px;
                background-color: #FFF;
                border-radius: 5px;
                box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                position: relative;
                margin: 10px auto;
                cursor: pointer;
            }

            .profile-card-6 img {
                transition: all 0.15s linear;
            }

            .profile-card-6 .profile-name {
                position: absolute;
                top: 10px;
                left: 10px;
                font-size: 25px;
                font-weight: bold;
                color: #FFF;
                padding: 15px 20px;
                background: linear-gradient(140deg, rgba(0, 0, 0, 0.4) 50%, rgba(255, 255, 0, 0) 50%);
                transition: all 0.15s linear;
            }

            .profile-card-6 .profile-position {
                position: absolute;
                color: rgba(255, 255, 255, 0.4);
                left: 30px;
                top: 100px;
                transition: all 0.15s linear;
            }

            .profile-card-6 .profile-overview {
                position: absolute;
                bottom: 0px;
                left: 0px;
                right: 0px;
                background: linear-gradient(0deg, rgba(0, 0, 0, 0.4) 50%, rgba(255, 255, 0, 0));
                color: #FFF;
                padding: 50px 0px 20px 0px;
                transition: all 0.15s linear;
            }

            .profile-card-6 .profile-overview h3 {
                font-weight: bold;
            }

            .profile-card-6 .profile-overview p {
                color: rgba(255, 255, 255, 0.7);
            }

            .profile-card-6:hover img {
                filter: brightness(80%);
            }

            .profile-card-6:hover .profile-name {
                padding-left: 25px;
                padding-top: 20px;
            }

            .profile-card-6:hover .profile-position {
                left: 40px;
            }

            .profile-card-6:hover .profile-overview {
                padding-bottom: 25px;
            }

            .profile-card-7 {
                background-color: #FFF;
                border-radius: 5px;
                box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                position: relative;
                margin: 10px auto;
                cursor: pointer;
            }

            .profile-card-7 .profile-content {
                padding: 60px 30px 30px 30px;
                background-color: #FFF;
                position: relative;
            }

            .profile-card-7 .profile-content img {
                position: absolute;
                height: 80px;
                width: 80px;
                border-radius: 50%;
                top: -40px;
                border: 5px solid #FFF;
            }

            .profile-card-7 .profile-content .profile-name {
                position: absolute;
                font-size: 17px;
                font-weight: bold;
                top: -35px;
                left: 125px;
                color: #FFF;
            }

            .profile-card-7 .profile-overview {
                padding: 5px 0px;
            }

            .profile-card-7 .profile-overview p {
                color: #777;
                font-size: 11px;
                font-weight: 600;
            }

            .profile-card-7 .profile-overview h5 {
                color: #142437;
                font-weight: bold;
            }

            .profile-card-8 {
                background: linear-gradient(#09121c, #36445a);
                border-radius: 5px;
                box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                position: relative;
                margin: 10px auto;
                cursor: pointer;
                transition: all 0.25s linear;
            }

            .profile-card-8 .profile-name {
                position: absolute;
                left: 0px;
                right: 0px;
                top: 25px;
                color: #58d683;
                font-size: 17px;
                font-weight: bold;
            }

            .profile-card-8 .profile-designation {
                position: absolute;
                left: 0px;
                right: 0px;
                top: 50px;
                color: #FFF;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: 1px;
            }

            .profile-card-8 .profile-icons {
                position: absolute;
                left: 0px;
                right: 0px;
                top: 80px;
                color: rgba(255, 255, 255, 0.7);
            }

            .profile-card-8 .profile-icons .fa {
                margin: 5px;
            }

            .profile-card-8:hover {
                transform: scale(1.05, 1.05);
            }

            .profile-card-9 {
                border-radius: 10px;
                box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                position: relative;
                margin: 10px auto;
                cursor: pointer;
                padding: 30px 15px;
                background-color: #FFF;
                transition: all 0.25s linear;
            }

            .profile-card-9 img {
                height: 120px;
                width: 120px;
                border-radius: 50%;
                margin: 10px auto;
            }

            .profile-card-9 .profile-name {
                font-size: 15px;
                color: #3249b9;
                font-weight: 600;
            }

            .profile-card-9 .profile-designation {
                font-size: 13px;
                color: #777;
            }

            .profile-card-9 .profile-description {
                padding: 10px;
                font-size: 13px;
                color: #777;
                margin: 15px 0px;
                background-color: #F1F2F3;
                border-radius: 5px;
            }

            .profile-card-9 a {
                padding: 10px 15px;
                background-color: #3249b9;
                color: #FFF;
                font-size: 11px;
                border-radius: 25px;
            }

            .profile-card-9:hover {
                transform: scale(1.05, 1.05);
            }

            .profile-card-10 {
                border-radius: 5px;
                box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                position: relative;
                margin: 10px auto;
                cursor: pointer;
                padding: 30px 15px;
                background-color: #1f2124;
                color: #EEE;
            }

            .profile-card-10 img {
                margin: 10px auto;
                width: 100px;
                height: 100px;
                border-radius: 50%;
                border: 10px solid transparent;
                box-shadow: 0px 0px 0px 2px #64c17b;
                transition: all 0.25s linear;
            }

            .profile-card-10 .profile-name {
                color: #FFF;
                font-weight: bold;
                font-size: 17px;
            }

            .profile-card-10 .profile-location {
                font-size: 13px;
                opacity: 0.7;
            }

            .profile-card-10 .profile-description {
                padding: 10px;
                font-size: 13px;
            }

            .profile-card-10 .profile-icons .fa {
                color: #ffc75e;
                margin: 10px;
            }

            .profile-card-10:hover img {
                transform: scale(1.1);
            }
    </style>
<body>
<!-- partial:index.partial.html -->
<header>
    <div class="container text-center">

        <!-- Logo -->
        <div class="logo">
			  <h1><b>Pessoas próximas de você</b></h1>
        </div>

        <h3>Filtragem localização, interesses, e gostos</h3>

    </div>
</header>

<div class="container">
	<div class="row">
        <div class="col-md-4">  
            <div class="profile-card-2"><img src="{{asset('assets\img\feliztriste.jpg')}}" class="img img-responsive">
                <div class="profile-name " style="color: rgb(54, 50, 50)">Próximo</div>
            </div>
        </div>

<div class="col-md-4">
    <h4 class="text-center"><strong>"Eu creio haver corações que poderiam cortar diamantes."</strong></h4>
    <div class="profile-card-6"><img src="http://envato.jayasankarkr.in/code/profile/assets/img/profile-6.jpg" class="img img-responsive">
        <div class="profile-name">JOHN
            <br>DOE</div>
        <div class="profile-position">@username</div>
        <div class="profile-overview">
            <div class="profile-overview">
                <div class="row text-center">
                    <div class="col-xs-4">
                        <h3>1</h3>
                        <p>Postagens</p>
                    </div>
                    <div class="col-xs-4">
                        <h3>50</h3>
                        <p>Seguidores</p>
                    </div>
                    <div class="col-xs-4">
                        <h3>8</h3>
                        <p>Livraria</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
		<div class="col-md-4">
            <div id="match"><img src="{{asset('assets\img\feliztriste.jpg')}}" class="img img-responsive">
                <div class="profile-name " style="color: rgb(54, 50, 50)">Gostei</div>
            </div>
</div>
	</div>
</div>


<div class="container" style="background-color: rgba(0, 0, 0, 0.493); text-align: center;">
    <h2>O usuário também gosta de: <h1>
</div>
<!-- partial -->

</body>
</html>
