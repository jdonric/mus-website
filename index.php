<html>
<title>Mixin' Up Spirits</title>
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
    height: 18%;
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
h2 {
    text-align: center;
    width: 30%;
    letter-spacing: 1px;
    font-size: 23px;
    margin-left: 35%;
    margin-top: 3%;
    color: black;
}


/*SLIDESHOW*/
.slideshow {
    margin:auto;
    display: block;
    margin-top: 60px;
}

/*MOBILE*/
@media only screen and (max-width: 700px) {
    #header {
        height: 24%;
    }
}


/*FOOTER*/


#footer {
    bottom: 1;
    color: lightgrey;
    width:60%;
}

        </style>
    </head>
    <body>

        <!--HEADER-->
        <div id="header">
            <a href="index.php"><h1>Mixin' Up Spirits</h1></a>
       <div id="nav">
          <a href="about.php"><h4>About</h4></a>
          <a href="gallery.php"><h4>Gallery</h4></a>
          <a href="contact.php"><h4>Contact</h4></a>
       </div>
        </div>

        <h2>Premier mobile bartenders and mixologists in the Nation's Capitol</h2>

        
        <div class="slideshow" style="width:55%">
            <img class="mySlides" src="https://res.cloudinary.com/rapha3l/image/upload/v1531424918/good_times_nsozhv.jpg" style="width:100%">
            <img class="mySlides" src="https://res.cloudinary.com/rapha3l/image/upload/v1531424918/logo_photo_sh7fnw.jpg" style="width:100%">
            <img class="mySlides" src="https://res.cloudinary.com/rapha3l/image/upload/v1531424918/good_times_2_hjgpyf.jpg" style="width:100%">
            <img class="mySlides" src="https://res.cloudinary.com/rapha3l/image/upload/v1531424919/event_types_fhmviq.jpg" style="width:100%">

            
        </div> 

        
        <div id="footer">
             
            <h6>Mixin' Up Spirits, LLC &copy; est. 2017</h6>

        </div>

        <script>
            var myIndex = 0;
            carousel();
            
            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                   x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 2000); // Change image every 2 seconds
            }
            </script>
        

    </body>
</html>