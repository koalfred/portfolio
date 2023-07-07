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
    <meta name="description" content="A compilation of my works as a front-end developer.">
    <meta name="keywords" content="HTML, CSS, SASS, SCSS, JavaScript, PHP, portfolio, front-end, developer">
    <meta name="author" content="Alfred Ko">
    <title>My Works</title>
    <link rel='icon' href='favicon/favicon-32x32.png' type='image/ico'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="scss/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap" rel="stylesheet">
    <meta name="google-site-verification" content="6h1rZsCLYJdK0MWDZPhxp-QXCOjzc5EE176cVqcM2iM" />
</head>
<body>
  <?php include("includes/nav.php"); ?>
  <div class="main_body">
    <div class="works-wrapper">
      <h1>Data Analysis Works</h1>
      <div class="slick-items-3">
        <?php include('includes/works/rows/da_1.php'); ?>
        <?php include('includes/works/rows/da_2.php'); ?>
        <?php include('includes/works/rows/da_3.php'); ?>
        <?php include('includes/works/rows/da_4.php'); ?>
        <?php include('includes/works/rows/da_5.php'); ?>
        <?php include('includes/works/rows/da_6.php'); ?>
        <?php include('includes/works/rows/da_7.php'); ?>
        <?php include('includes/works/rows/da_8.php'); ?>
      </div>
      <?php include('includes/works/modals/da_modal_1.php'); ?>
      <?php include('includes/works/modals/da_modal_2.php'); ?>
      <?php include('includes/works/modals/da_modal_3.php'); ?>
      <?php include('includes/works/modals/da_modal_4.php'); ?>
      <?php include('includes/works/modals/da_modal_5.php'); ?>
      <?php include('includes/works/modals/da_modal_6.php'); ?>
      <?php include('includes/works/modals/da_modal_7.php'); ?>
      <?php include('includes/works/modals/da_modal_8.php'); ?>
    </div>
    <div class="works-wrapper">
      <h1>Recent Web Development Works</h1>
      <div class="slick-items">
        <?php include('includes/works/rows/row_9.php'); ?>
        <?php include('includes/works/rows/row_8.php'); ?>
        <?php include('includes/works/rows/row_7.php'); ?>
      </div>
      <?php include('includes/works/modals/modal_9.php'); ?>
      <?php include('includes/works/modals/modal_8.php');?>
      <?php include('includes/works/modals/modal_7.php'); ?>
    </div>
    <div class="works-wrapper">
      <h1>School Works</h1>
      <div class="slick-items-2">
        <?php include('includes/works/rows/row_1.php'); ?>
        <?php include('includes/works/rows/row_2.php'); ?>
        <?php include('includes/works/rows/row_3.php'); ?>
        <?php include('includes/works/rows/row_4.php'); ?>
        <?php include('includes/works/rows/row_5.php'); ?>
        <?php include('includes/works/rows/row_6.php'); ?>
      </div>
    </div>
    <?php include('includes/works/modals/modal_1.php'); ?>
    <?php include('includes/works/modals/modal_2.php'); ?>
    <?php include('includes/works/modals/modal_3.php'); ?>
    <?php include('includes/works/modals/modal_4.php'); ?>
    <?php include('includes/works/modals/modal_5.php'); ?>
    <?php include('includes/works/modals/modal_6.php'); ?>
  </div>
  <?php include("includes/footer.php"); ?>
</div>
<?php include("includes/loading.php"); ?>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="scripts/scripts.js"></script>
</body>
</html>