<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
<div class="topnav">
  <a href="index.html" class="active logo-mobile"><img src="logo.png" alt="Logo"></a>
  <div id="myLinks" class="myLinks">
    <li class="logo-desktop"><a href="index.html" class="active logo-desktop"><img src="logo.png" alt="Logo" class="logo-desktop"></a></li>
    <li><a href="index.html">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="works.html">Works</a></li>
    <li><a href="contact.html">Contact</a></li>
    <li class="fa"><a href="https://twitter.com/alfredjihoon" class="fa fa-twitter" id="twitter"></a><a href="https://www.linkedin.com/in/alfred-ko-440079b9/" class="fa fa-linkedin" id="linkedin"></a></li>
  </div>
  <a href="javascript:void(0);" class="icon container" onclick="myFunction(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </a>
</div>

<div class="wrapper">
<?php

if (isset($_POST['submit']) && isset($_POST['fname']) && isset($_POST['email'])) {
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "ako@alfred-frontend.ca";
    $subject = "From: ".$email;
    $txt = "You have received an email from ".$first_name.".\n\n".$message;
    $headers = "From: ".$email;

    if(mail($to, $subject, $txt, $headers)) {
        echo "<h2>Message sent successfully!</h2>
              <p>Thank you very much for your message. I will be in contact with you shortly.</p>
              <p>I look forward to working with you!</p>";
    } else {
        echo "<h1>Something went wrong.</h1>";
    };

}

?>

</div>   

        <script>
            function myFunction(x) {
               x.classList.toggle("change");
                var x = document.getElementById("myLinks");
                if (x.style.display === "block") {
                x.style.display = "none";
              } else {
               x.style.display = "block";
              }
             }
            </script>
            <footer>
      <p>© 2020 Alfred Ko. All Rights Reserved.</p>
</footer>
</body>
</html>