<style type="text/css">
    /*BODY*/
body {
    margin:0;
    font-family: 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    background-color: white;
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
    color: white;
}
a:link {
    text-decoration: none;
    color: white;
}
a:hover {
    color: lightgrey;
}
a:visited {
    color: #ffa208;
}
/*ABOUT PARAGRAPH*/
p {
    width: 35%;
    height: auto;
    font-size: 18px;
    margin-left: 10%;
    margin-top: 5%;
    text-align: center;
    z-index: 1;
    top:50%;
    color: black;
    background-color: white;
    opacity: 0.85;
    padding: 3%;
    position: absolute;
}
/*SLIDESHOW*/
.slideshow {
   width: 75%;
   margin: auto;
  display: block;
  margin-top: 5%;
  z-index: -1;
    
}
/*FOOTER*/
hr {
    color: #ffa208;
}
#footer {
    margin-top: 60px;
    bottom: 1;
    position: absolute;
    width:60%;
}
/*MOBILE*/
@media only screen and (max-width: 700px) {
    #header {
        height: 24%;
    }
    .slideshow {
    display:none;
}
    p {
    width: 70%;
    font-size: 1em;
    z-index: -1;
    top:25%;
}
}
</style>
<!--HEADER-->
<div id="header">
<a href="index.php"><h1>Mixin&rsquo; Up Spirits</h1></a>
<div id="nav">
<a href="about.php"><h4>About</h4></a>
<a href="gallery.php"><h4>Gallery</h4></a>
<a href="contact.php"><h4>Contact</h4></a>
</div>
</div>

<div class="slideshow" style="width:75%">
        <img class="mySlides" src="https://res.cloudinary.com/rapha3l/image/upload/v1531424918/good_times_nsozhv.jpg" style="width:100%">
        <img class="mySlides" src="https://res.cloudinary.com/rapha3l/image/upload/v1531424918/logo_photo_sh7fnw.jpg" style="width:100%">
        <img class="mySlides" src="https://res.cloudinary.com/rapha3l/image/upload/v1531424918/good_times_2_hjgpyf.jpg" style="width:100%">
        <img class="mySlides" src="https://res.cloudinary.com/rapha3l/image/upload/v1531424919/event_types_fhmviq.jpg" style="width:100%">

        
    </div> 

    <p>Based in Washington, DC, we provide bartending services for a wide range of clientele and venues, even non-alcoholic and kiddie events! We at Mixin&rsquo; Up Spirits pride ourselves on our <b><em>professionalism</em></b>, our <b><em>versatility</em></b>, and <b><em>personability</em></b>. Mixin&rsquo; Up Spirits is guarunteed to serve a good drink for those good times.</p>

<!--<div id="footer"><hr />
<h6>Mixin&rsquo; Up Spirits, LLC &copy; est. 2017</h6>
</div>
-->


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
