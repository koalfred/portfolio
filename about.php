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
        <meta name="description" content="An overview about myself and how I got started in the IT industry as a front-end developer.">
        <meta name="keywords" content="HTML, CSS, SASS, SCSS, JavaScript, PHP, portfolio, about, front-end, developer">
        <meta name="author" content="Alfred Ko">
        <title>About</title>
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
                <h1>About</h1>
                <div class="about-content">
                <p>Hello everybody! My name is Alfred Ko and I am a Canada-based front-end web developer. I have graduated from the Technical Web Designer Program (TWD) at the British Columbia Institute of Technology. Before entering this program, I obtained my Bachelor of Arts in Speech Sciences at the University of British Columbia, but I felt that I wanted a career change. After pulling up Codecademy one day and trying out their HTML and CSS course out of curiosity, I really got into coding, and when I discovered that there was such a field that uses coding called “web development”, that was when I felt really sold on it. I love not only the problem solving aspect of the field, but with coding you can also enrich the visual outlook and browsing experience of websites as well.</p> 
                <p>I have had 2 years of experience in the field, starting from working in teams for various projects during the TWD Program, which has allowed me to become a better communicator, and a more co-operative person. After finishing the program, I have continued to work on different projects making sure that websites are as beautiful, dynamic and innovative as possible.</p>
                <p>When I am not at work, you can find me swimming, jogging, running, playing chess or casually picking up a new language.</p>
                <p>Thank you, and I hope to hear from you soon!</p>
                </div>
                <div class="flexed-tables">
                    <table class="table-flex">
                        <tr>
                            <th>Languages</th>
                        </tr>
                        <tr>
                            <td>HTML</td>
                        </tr>
                        <tr>
                            <td>CSS</td>
                        </tr>
                        <tr>
                            <td>SASS</td>
                        </tr>
                        <tr>
                            <td>JavaScript</td>
                        </tr>
                        <tr>
                            <td>PHP</td>
                        </tr>
                    </table>
                    <table class="table-flex">
                        <tr>
                            <th>Tools</th>
                        </tr>
                        <tr>
                            <td>GitHub</td>
                        </tr>
                        <tr>
                            <td>SEO/Google Analytics</td>
                        </tr>
                        <tr>
                            <td>Adobe Photoshop</td>
                        </tr>
                        <tr>
                            <td>Adobe Illustrator</td>
                        </tr>
                        <tr>
                            <td>Adobe XD</td>
                        </tr>
                        <tr>
                            <td>WordPress</td>
                        </tr>
                        <tr>
                            <td>Laravel</td>
                        </tr>
                    </table>
                </div>
            </div>
            <?php include("includes/footer.php"); ?>
        </div>
        <?php include("includes/loading.php"); ?>
        <script src="scripts/scripts.js"></script>
    </body>
</html>