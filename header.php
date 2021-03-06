<?php
    include 'dbh.php';
?>

<!DOCTYPE html>
<html>
	<head>   
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
                <meta name="description" content="On this website you can search the well known Niweera TVDB using keywords and check if the required TVSeries is in the TVDB.">
                <meta name="keywords" content="TV Series, Niweera, TVDB, Niwder.me, Niwder, Nipuna, Weerasekara, Nipuna Weerasekara, Niweera">
                <meta name="robots" content="index, follow">
                <meta name="contact" content="niweera@niwder.me">
                <meta name="author" content="Nipuna Weerasekara">
                <link rel="icon" href="./logo.jpg">
                
                <title>Niweera TVDB</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
                <!-- Bootstrap core CSS -->
                <link href="./dist/css/bootstrap.css" rel="stylesheet">

                <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
                <link href="./assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

                <!-- Custom styles for this template -->
                <link href="cover.css" rel="stylesheet">

                <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
                <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
                <script src="./assets/js/ie-emulation-modes-warning.js"></script>
                
                    <link href="./ps/css/perfect-scrollbar.css" rel="stylesheet">
                    <script src="./ps/dist/perfect-scrollbar.js"></script>
                
                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
                <style type="text/css">
                    .gwd-strong-36qe {
                    position: absolute;
                    text-align: center;
                    color: rgb(8, 17, 252);
                    height: 46px;
                    width: 268px;
                    transform-origin: 211.913px 245.783px 0px;
                    left: 361px;
                    top: 160px;
                    }

                    .gwd-span-m917 {
                      font-size: xx-large;
                      text-align: center;
                    }
                    .gwd-div-jj4z {
                      font-size: xx-large;

                    }
                    .gwd-div-y2i7 {
                      font-size: xx-large;
                    }
                    .gwd-div-1hye {
                      font-size: 25px;
                    }
                    .gwd-div-3w96 {
                      font-size: 0px;
                    }
                    .gwd-div-yj4v {
                      font-size: 25px;
                    }
                    .gwd-span-17ns {
                      font-size: xx-large;
                      text-align: center;
                    }
                    .gwd-div-wm78 {
                      font-size: xx-large;
                    }
                    .gwd-div-ihur {
                      font-size: xx-large;
                    }
                    .gwd-div-1w0q {
                      font-size: xx-large;
                    }
                    .gwd-span-xg5h {
                      font-weight: bold;
                      text-align: center;
                    }
                    .gwd-span-1or6 {
                      font-weight: bold;
                      text-align: center;
                    }
                    .gwd-span-z2vs {
                      font-style: italic;
                      text-align: center;
                    }
                    .gwd-span-1sfm {
                      font-weight: bold;
                      text-align: center;
                    }
                    .gwd-span-3cqb {
                      font-style: italic;
                      text-align: center;
                    }
                    .gwd-span-1foh {
                      font-weight: bold;
                      text-align: center;
                    }
                    .gwd-span-5aqf {
                      font-weight: bold;
                      text-align: center;
                    }
                    .gwd-strong-17pv {
                      position: absolute;
                      height: 75px;
                      text-align: center;
                      color: rgb(226, 20, 20);
                      top: 58px;
                      font-size: 40px;
                      left: 135px;
                      width: 701px;
                      transform-origin: 351.913px 349.783px 0px;
                    }
                    .gwd-strong-36qe {
                      text-align: center;
                      color: rgb(8, 17, 252);


                    }
                    .gwd-strong-ktpv {
                      position: absolute;
                      text-align: center;
                      left: 41px;
                      width: 903px;
                      top: 360px;
                      height: 195px;
                      transform-origin: 445.913px 47.783px 0px;
                    }
                    .gwd-span-3av5 {
                      font-size: 32px;
                      text-align: center;
                    }
                    .gwd-div-1ntb {
                      font-size: 32px;
                    }
                    .gwd-div-uqlk {
                      font-size: 32px;
                      font-weight: normal;
                    }
                    .gwd-div-skmm {
                      font-size: 32px;
                    }
                    .gwd-a-1cbp {
                      font-size: 20px;
                      text-align: center;
                    }
                    .gwd-span-1l5l {
                      font-weight: normal;
                      text-align: center;
                    }
                    .gwd-span-15j4 {
                      font-weight: normal;
                      text-align: center;
                    }
                    .gwd-span-15nd {
                      font-weight: normal;
                      text-align: center;
                    }
                    .gwd-span-1gs5 {
                      font-style: italic;
                      text-align: center;
                    }
                    .gwd-span-pzfg {
                      font-weight: normal;
                      text-align: center;
                    }
                    .gwd-span-1g8w {
                      font-style: italic;
                      text-align: center;
                    }
                    .gwd-span-1a8i {
                      font-weight: normal;
                      text-align: center;
                    }
                    .gwd-span-1b7p {
                      font-weight: normal;
                      text-align: center;
                    }
                    .gwd-span-7f50 {
                      font-weight: normal;
                      text-align: center;
                    }
                    .gwd-span-1km8 {
                      font-weight: normal;
                      text-align: center;
                    }
                    .gwd-span-yd5g {
                      font-style: italic;
                      text-align: center;
                    }
                    .gwd-a-10w7 {
                      font-size: 32px;
                      text-align: center;
                    }
                    .content {
                       max-width: 500px;
                      margin: auto;
                      left: 50%;
                      transform-style: preserve-3d;
                      width: 500px;
                      height: 1px;
                      transform-origin: 0px 18px 0px;
                      transform: translate3d(-229px, -17px, 0px);
                    }

                    strong { 
                    font-weight: bold;
                    text-align: center;
                    }
                    span {
                    text-align: center;
                    }
                    .divclass {
                    margin-left: 0px;
                    border-radius: 10px;
                    background-color: #3b3a30;
                    padding: 10px;
                    align-content:center; 
                    .divclass:after{
                        content: "";
                        display: block;
                        padding-bottom: 100%;
                    }
                    .square {
  width: 50%;
}

.square:after {
  content: "";
  display: block;
  padding-bottom: 100%;
}

                }
                /*footer social icons */
                ul.social-network {
                    list-style: none;
                    display: inline;
                    margin-left:0 !important;
                    padding: 0;
                }
                ul.social-network li {
                    display: inline;
                    margin: 0 5px;
                }


                /*footer social icons */
                .social-network a.icoRss:hover {
                    background-color: #F56505;
                }
                .social-network a.icoFacebook:hover {
                    background-color:#3B5998;
                }
                .social-network a.icoTwitter:hover {
                    background-color:#33ccff;
                }
                .social-network a.icoGoogle:hover {
                    background-color:#BD3518;
                }
                .social-network a.icoVimeo:hover {
                    background-color:#0590B8;
                }
                .social-network a.icoLinkedin:hover {
                    background-color:#007bb7;
                }
                .social-network a.icoInstagram:hover {
                    background-color: orangered;
                }
                .social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
                .social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i, .social-network a.icoInstagram:hover i {
                    color:#fff;
                }
                a.socialIcon:hover, .socialHoverClass {
                    color:#44BCDD;
                }

                .social-circle li a {
                    display:inline-block;
                    position:relative;
                    margin:0 auto 0 auto;
                    -moz-border-radius:50%;
                    -webkit-border-radius:50%;
                    border-radius:50%;
                    text-align:center;
                    width: 50px;
                    height: 50px;
                    font-size:20px;
                }
                .social-circle li i {
                    margin:0;
                    line-height:50px;
                    text-align: center;
                }

                .social-circle li a:hover i, .triggeredHover {
                    -moz-transform: rotate(360deg);
                    -webkit-transform: rotate(360deg);
                    -ms--transform: rotate(360deg);
                    transform: rotate(360deg);
                    -webkit-transition: all 0.2s;
                    -moz-transition: all 0.2s;
                    -o-transition: all 0.2s;
                    -ms-transition: all 0.2s;
                    transition: all 0.2s;
                }
                .social-circle i {
                    color: black;
                    -webkit-transition: all 0.8s;
                    -moz-transition: all 0.8s;
                    -o-transition: all 0.8s;
                    -ms-transition: all 0.8s;
                    transition: all 0.8s;
                }
                </style>
        </head>
	<body>
