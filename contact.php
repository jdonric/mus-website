<html> 
    <head>
        <title>
          Contact | Mixin' Up Spirits
        </title>
        <link rel="shortcut icon" href="https://res.cloudinary.com/rapha3l/image/upload/v1531505861/tab_mus_qxsjtj.png">
        
        <style type="text/css">
            /*BODY*/
body {
   /* background-color: #FFF5EE; */
    margin:0;
    font-family: 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
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

h2{
    width: 45%;
    margin: 3%;
    font-size: 1.2em;
    text-align: center;
}

a:link {
    text-decoration: none;
    color: #ffa208;
}

a:hover {
    color: lightgrey;
}

a:visited {
    color: white;
}


/* "HIDDEN MODAL" */
.feedback {
    width: 58%;
    height: 55%;
    background-image: url('https://res.cloudinary.com/rapha3l/image/upload/v1546821389/cocktail2_z4gfun.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    padding: 40px;
    margin:auto;
    display: block;

    -webkit-box-shadow: 5px 8px 6px -6px #ffa208;
	   -moz-box-shadow:5px 8px 6px -6px #ffa208;
	        box-shadow: 5px 8px 6px -6px #ffa208; 
}

input {
    margin: 20px;
    display: block;
    border-color: white;
    border-style: solid;
    width: 38%;
}
input, button {
    display: block;
}

.your-name {
    height: 9%;
    
}

.your-comment {
    height: 30%;
}

h3 {
    font-size: 23px;
    color: white;
}

button {
    padding: 20px;
    background-color: black;
    color: white;
    border-radius: 85%;
    border-style: none;
    margin-left: 40px;
    margin-top: 40px;
}






/*FOOTER*/
hr {
    color: #ffa208;

}

#footer {
    margin-top: 60px;
    bottom: 2;
    position: relative;
    width:60%;
}



/*MOBILE*/
@media only screen and (max-width: 700px) {
    #header {
        height: 25%;
    }

    .feedback {
    width: 58%;
    height: 55%;
    background-image: url('https://res.cloudinary.com/rapha3l/image/upload/v1546821389/cocktail2_z4gfun.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    padding: 40px;
    margin:auto;
    display: block;
}
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

        <!--HEY, CONTACT US-->
        <h2>For booking and general inquiries, email us at mixinupspirits@gmail.com. </h2>


   <!--"HIDDEN MODAL"-->

        <div class="modal-container">
            
            
            <form class="feedback">
                    <h3>Tell Us How We're Doing!</h3>
            <button id="button">   <a href="survey.php" target="_black">Survey</a></button> 
           </form>
             
        </div>




       <!--FOOTER-->
       <?php require "footer.php"; ?>

  

</body>
</html>
           
