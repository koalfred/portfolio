<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169240904-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-169240904-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Interested having your website designed and developed? Contact me!">
    <meta name="keywords" content="HTML, CSS, SASS, SCSS, JavaScript, PHP, portfolio, front-end, developer, contact">
    <meta name="author" content="Alfred Ko">
    <title>Contact</title>
    <link rel='icon' href='favicon/favicon-32x32.png' type='image/ico'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap" rel="stylesheet">
    <meta name="google-site-verification" content="6h1rZsCLYJdK0MWDZPhxp-QXCOjzc5EE176cVqcM2iM" />
  </head>
<body>
    <?php include("includes/nav.php"); ?>
    <div class="main_body">
        <div class="wrapper">
            <h1>Contact</h1>
            <div class="contact-intro">
                <p>Are you interested in working on a project together? Feel free to leave a message!</p>
                <h4>Note: All information will be kept confidential.</h4>
            </div>
            <form action="contact-form.php" name="form" id="form" class="form" method="post">
                <div class="names">
                    <div class="first-name">
                        <h3><label for="fname">First Name</label></h3>
                        <input type="text" name="fname" id="fname" class="fname" placeholder="Your first name...">
                    </div>
                    <div class="last-name">
                        <h3><label for="lname">Last Name</label></h3>
                        <input type="text" name="lname" id="lname" class="lname" placeholder="Your last name...">
                    </div>
                </div>
                <div class="mail-message">
                    <div class="class-email">
                        <h3><label for="email">E-mail</label></h3>
                        <input type="text" name="email" id="email" class="email" placeholder="Your e-mail address...">
                    </div>
                    <div class="class-message">
                        <h3><label for="message">Message</label></h3>
                        <textarea name="message" class="message" id="message" rows="10" placeholder="Write your message here."></textarea>
                    </div>
                </div>
                <input type="submit" name="submit" class="submit">
            </form>
            <div class="contact-info">
                <h2>Further Contact</h2>
                <p>alfred.frontend@gmail.com</p>
                <div class="social-media-icons">
                    <a href="https://twitter.com/alfredjihoon" id="twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/alfred-ko-440079b9/" id="linkedin">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
      </div>
      <?php include("includes/loading.php"); ?>
      <script src="scripts/scripts.js"></script>
</body>
</html>