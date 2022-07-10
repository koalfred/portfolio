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
    <meta name="description" content="My name is Alfred Ko and I am a front-end developer.">
    <meta name="keywords" content="HTML, CSS, SASS, SCSS, JavaScript, PHP, portfolio, front-end, developer">
    <meta name="author" content="Alfred Ko">
    <title>Alfred Ko's Portfolio</title>
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
          <h1>I am</h1>
          <img src="images/avatar.png" alt="avatar" class="avatar">
          <h1>Alfred Ko</h1>
          <p class="introductory-text">Hello! My name is Alfred Ko and I am a Canada-based front-end web developer. Welcome to my portfolio, and I look forward to working with you!</p>
        </div>
        <?php include("includes/footer.php"); ?>
      </div>
      <?php include("includes/loading.php"); ?>
      <script src="scripts/scripts.js"></script>
  </body>
</html>