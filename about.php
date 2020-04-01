<html>
    <head>
    <title>About | Mixin' Up Spirits</title>
    <link rel="shortcut icon" href="https://res.cloudinary.com/rapha3l/image/upload/v1531505861/tab_mus_qxsjtj.png">
            <style type="text/css">
                /*BODY*/
            body {
                margin:0;
                font-family: 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
             /*   background-color: #FFF5EE; */
            }
            /*SLIDESHOW*/
            .slideshow {
            width: 75%;
            margin: auto;
            display: block;
            margin-top: 5%;
            z-index: -1;
            opacity: 0.8;
               margin-bottom: 5%; 
               -webkit-box-shadow: 5px 8px 6px -6px #ffa208;
	   -moz-box-shadow:5px 8px 6px -6px #ffa208;
	        box-shadow: 5px 8px 6px -6px #ffa208; 
            }

            h2 {
                color:black ;
                text-shadow: 2px 1px #ffa208;
                font-size: 56px;
                letter-spacing: 4px;
                text-align: center;

            }

            p {
                width: 55%;
                font-size: 1em;
                font-weight:lighter;
                margin-left: 20%;
                margin-top: 2%;
                text-align: center;
                letter-spacing: 1.5px;
            }

        .h3 {
            text-align: center;
            font-size: 1.5em;
            background-color: #ffa208;
            opacity: 0.6;
            padding: 2.5%;
            color:white;
            font-style: italic;
            letter-spacing: 3px;

            -webkit-box-shadow: 5px 8px 6px -6px black;
	   -moz-box-shadow:5px 8px 6px -6px black;
	        box-shadow: 5px 8px 6px -6px black;
            
        }
        

        #info {
            width: 30%;
            height: auto;
            margin:auto;
            display: block;
            margin-bottom: 5%; 
               -webkit-box-shadow: 5px 8px 6px -6px #ffa208;
	   -moz-box-shadow:5px 8px 6px -6px #ffa208;
	        box-shadow: 5px 8px 6px -6px #ffa208;
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
    </head>
<body>
<?php require "header.php"; ?>

<h2>What is Mixin' Up Spirits?</h2>

<p>Based in Washington, DC, we provide bartending services for a wide range of clientele and venues, even non-alcoholic and kiddie events! We at Mixin&rsquo; Up Spirits pride ourselves on our <b><em>professionalism</em></b>, our <b><em>versatility</em></b>, and <b><em>personability</em></b>. Mixin&rsquo; Up Spirits is guarunteed to serve a good drink for those good times.</p>


<div class="slideshow" style="width:65%">
        <img class="mySlides" src="https://res.cloudinary.com/rapha3l/image/upload/v1531424918/good_times_nsozhv.jpg" style="width:100%">
        <img class="mySlides" src="https://res.cloudinary.com/rapha3l/image/upload/v1531424918/logo_photo_sh7fnw.jpg" style="width:100%">
        <img class="mySlides" src="https://res.cloudinary.com/rapha3l/image/upload/v1531424918/good_times_2_hjgpyf.jpg" style="width:100%">
        <img class="mySlides" src="https://res.cloudinary.com/rapha3l/image/upload/v1531424919/event_types_fhmviq.jpg" style="width:100%">

    </div>
    <br/>
  
    <p class="h3">TIPS & TAM Certified</p>
<p >You can book us for your next event the confidence that you will not only being paying for good drinks and stellar customer service, but also a safe and responsible atmosphere for everyone. Mixin' Up Spirits staff behind the bar are trained and certified in <b>TIPS (Training for Intervention ProcedureS)</b> and <b>TAM (Techniques of Alcohol Management)</b> to also ensure a safe drinking experience for all of your guests. </p>
<br/>
<br/>


<p class="h3">Bartending  vs  Mixolgy</p>
<p >What's is the difference?</p>
<br/>
<br/>

    <img id="info" src="https://res.cloudinary.com/rapha3l/image/upload/v1554493702/bt_vs_mx_wef98p.png">

   <!--FOOTER-->
   <?php require "footer.php"; ?>

<script>
//slideshow
        var myIndex = 0;
        
        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 2550); // Change image every 2 seconds
        }
        carousel();

</script>


    

</body>
</html>
