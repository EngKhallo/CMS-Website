<?php
include './Admin/config/connection.php';
$conn = connect();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hakaale - Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/preloader.min.css" rel="stylesheet">
    <link href="css/circle.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/fm.revealator.jquery.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="css/skins/yellow.css" rel="stylesheet">

    <!-- Favicon Icon -->
    <link rel="icon" type="image/x-icon" href="~/img/favicon_io/favicon-16x16.png">

    <!-- Modernizr JS File -->
    <script src="js/modernizr.custom.js"></script>
</head>

<body class="home">

    <!-- Header Starts -->
    <?php include './includes/header.php'; ?>
    <!-- Header Ends -->
    <!-- Main Content Starts -->
    <section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
        <div class="color-block d-none d-lg-block"></div>
        <div class="row home-details-container align-items-center">
            <div class="col-lg-4 bg position-fixed d-lg-block">
                <?php
                $sql = "SELECT Image FROM home WHERE id=1";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_object($result)) : ?>
                    <img src="./Admin/Images/<?php echo $row->Image; ?>" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="No Image at all"/>
                <?php endwhile; ?>
            </div>
            <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
                <div>
                    <h1 class="text-uppercase poppins-font">I'm Mukhtar Hakaale.<span>The CEO of SomDigital Solutions</span></h1>
                    <p class="open-sans-font">
                        <?php
                        $sql = "SELECT About FROM home WHERE id=1";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_object($result)) : ?>
                    <p><?php echo $row->About; ?></p>
                <?php endwhile; ?>
                </p>
                <a class="button" href="about.php">
                    <span class="button-text">more about me</span>
                    <span class="button-icon fa fa-arrow-right"></span>
                </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Content Ends -->

    <!-- Template JS Files -->
    <script src="js/jquery-3.5.0.min.js"></script>
    <script src="js/preloader.min.js"></script>
    <script src="js/fm.revealator.jquery.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpGridGallery.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>