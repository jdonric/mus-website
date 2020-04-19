<html>
<title>Mixin' Up Spirits | Mobile Mixologist (& Bartenders) in the DC Metro Area</title>
<head>
        
        <link rel="shortcut icon" href="https://res.cloudinary.com/rapha3l/image/upload/v1531505861/tab_mus_qxsjtj.png">
        <style type="text/css">
        body {
    margin:0;
    font-family: 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
body {
    
}
/*HEADER*/
#header {
    width: 100%;
    height: 20%;
    background-color: black;
    
}
h1, #nav {
    display: inline-block;
    color: white;
}
h1 {
    margin-left: 53px;
}
h4 {
    display: inline-block;
    margin-left: 33px;
    color: #ffa208;
}
/*SOLO H2*/

#slogan {
    text-align: left;
    margin:auto;
    display:block;
    letter-spacing: 1px;
    font-size: 4em;
 width:60%;
    margin-top: 10%;
    color: white;
    text-shadow: 2px 1px #ffa208;
}

#mobile-logo {
    display:none;
    margin-left:60%;
    width:40%;
}


/*BAKGROUND VID*/
#theVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
  z-index:-1;
  opacity: 0.87;
}
/*MOBILE*/
@media only screen and (max-width: 700px) {
    #header {
        height: 26%;
    }
    h2 {
        font-size: 4em;
        margin-left:15%;
        width:50%;
    }
    #mobile-logo {
    display:block;
    margin:auto;
    width:60%;
}

    #slogan {
    text-align: left;
    
    letter-spacing: 1px;
    font-size: 4em !important;
 
    margin-top: 10%;
    color: white;
    text-shadow: 2px 1px #ffa208;
    display:block;
}
}
/*FOOTER*/
#footer {
    bottom: 0;
    color: grey;
    width:60%;
}
        </style>
    </head>
    <body>

        <?php require "header.php"; ?>

        <video autoplay muted loop id="theVideo">
                <source src="https://res.cloudinary.com/rapha3l/video/upload/v1546795490/back_vid_adgu5w.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
        </video>

       

        <p id="slogan">Premier mobile bartenders and mixologists in the Nation's Capitol</p>

      
        
        <div id="footer">
             
            <h6>Mixin' Up Spirits, LLC &copy; est. 2017</h6>

        </div>

       
</html>
