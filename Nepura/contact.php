<?php
	 
	if(isset($_POST['submit'])){
		$name= $_post['name'];
		$email= $_post['email'];
		$mobile= $_post['mobile'];
		$msg= $_post['msg'];
		$body = $name."\n".$email."\n".$mobile."\n".$msg;
		if(mail('nepuraasthawan@gmail','Check',$body,'From:shashank09234@gmail.com')){
				echo 'Thanks for Contacting Us';
		} else
			echo 'Form not Submited';
	
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome_5.8.1.css">
    <link rel="stylesheet" href="style.css">
    <title>Contact | Nepura</title>
</head>
<body id="bod">
    <nav id="menu">
        <div>
            <img src="img/logo.jpeg">
            <h1>
                E-Village Nepura
            </h1></div>
        <ul>
            <li>
                <a href="index.html" >Home</a>
                <a href="about.html" >About</a>
                <a href="gallary.html">Gallary</a>
                <a href="members.html" >Memebers</a>
                <a href="contact.html" id="active">Contact</a>
            </li>
        </ul>
    </nav>
    <!-----------------------Flex Box----------------->
<div id="flex">
    <!----------------------Contact Form--------------------------->
    <form action="" method= "POST" id="form">
        <input type="text" name="name" placeholder="Your Name" class="text-field"><br>
        <input type="email"name="email" placeholder="Email id" class="text-field"><br>
        <input type="text" name="mobile" placeholder="Mobile No" class="text-field"><br>
        <textarea type="text" name="msg" placeholder="Your Name" rows="5" class="text-field"></textarea><br>
        <input type="submit" name="submit" value="Send" id="btn-send"></input>
    </form>
    <!-------------------------Right Sidebar-------------------->
    <div id="side-bar">
            <h1>Address</h1>
            <h4>Village:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nepura</h4>
            <h4>Panchayat:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Malti</h4>
            <h4>Post:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Asthawan</h4>
            <h4>Police Station: Asthawan</h4>
            <h4>Sub-Division:&nbsp;&nbsp;&nbsp;Biharsharif</h4>
            <h4>District:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nalanda</h4>
            <h4>State:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bihar</h4>
            <h4>Pin Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;803107</h4>
            <h4>nepuraasthawan@gmail.com</h4>
            <h4><a href="#"><i class="fa-facebook-f "></i></a></h4>
            <img src="img/map.png" >
    </div>

</div>
    <!-----------------Footer---------------------->
    <footer id="footer">
        <h3>Design and Develope by <span><u>Suman Web Technology Pvt Ltd</u></span></h3>
    </footer>
</body>
</html>