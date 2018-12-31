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
    width: 380px;
    letter-spacing: 1px;
    font-size: 40px;
    margin-left: 20%;
    margin-top: 50px;
    color: black;
}


/*SLIDESHOW*/
.slideshow {
    margin:auto;
    display: block;
    margin-top: 60px;
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
            <a href="https://mixinupspirits.tumblr.com"><h1>Mixin' Up Spirits</h1></a>
       <div id="nav">
          <a href="https://mixinupspirits.tumblr.com/about"><h4>About</h4></a>
          <a href="https://mixinupspirits.tumblr.com/gallery"><h4>Gallery</h4></a>
          <a href="https://mixinupspirits.tumblr.com/contact"><h4>Contact</h4></a>
       </div>
        </div>

        <h2>Premier mobile bartenders and mixologists in the Nation's Capitol</h2>

        
        <div class="slideshow" style="width:70%">
            <img class="mySlides" src="https://static.tumblr.com/d0yqrew/3Slpdnu70/good_times_2_.jpg -HighRes" style="width:100%">
            <img class="mySlides" src="https://static.tumblr.com/d0yqrew/ko8pdnuol/good_times_.jpg -HighRes" style="width:100%">
            <img class="mySlides" src="https://static.tumblr.com/d0yqrew/4bipdnu77/event_types_.jpg -HighRes" style="width:100%">
            <img class="mySlides" src="https://static.tumblr.com/d0yqrew/XnTpdnukl/logo_photo_0.jpg -HighRes" style="width:100%">

            
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
            </script
        

    </body>
</html>