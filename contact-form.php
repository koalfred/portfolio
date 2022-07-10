<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Contact</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/styles.css">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php include("includes/nav.php"); ?>
    <div class="main_body">
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
    </div>
    <?php include("includes/footer.php"); ?>
    <script src="scripts/scripts.js"></script>
  </body>
</html>