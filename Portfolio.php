<?php
include './Admin/config/connection.php';
$conn = connect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Portfolio - Hakaale Personal Portfolio</title>
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

    <!-- Modernizr JS File -->
    <script src="js/modernizr.custom.js"></script>
</head>

<body class="portfolio">
<!-- Header Starts -->
<?php include './includes/header.php'; ?>
<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>portfolio</span></h1>
    <span class="title-bg">works</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
    <div id="grid-gallery" class="container grid-gallery">
        <!-- Portfolio Grid Starts -->
        <section class="grid-wrap">
            <ul class="row grid">
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <?php 
                            $sql = "select * from portfolio where id = 1";
                            $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_object($result)):
                        ?>
                        <img src="./img/projects/<?php echo $row->preview_image; ?>" alt="Portolio Image" />
                        <div><span><?php echo $row->title; ?></span></div>
                        <?php endwhile; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->

                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <?php 
                            $sql = "select * from portfolio where id = 2";
                            $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_object($result)):
                        ?>
                        <img src="./img/projects/<?php echo $row->preview_image; ?>" alt="Portolio Image" />
                        <div><span><?php echo $row->title; ?></span></div>
                        <?php endwhile; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->

                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <?php 
                            $sql = "select * from portfolio where id = 3";
                            $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_object($result)):
                        ?>
                        <img src="./img/projects/<?php echo $row->preview_image; ?>" alt="Portolio Image" />
                        <div><span><?php echo $row->title; ?></span></div>
                        <?php endwhile; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->

                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <?php 
                            $sql = "select * from portfolio where id = 4";
                            $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_object($result)):
                        ?>
                        <img src="./img/projects/<?php echo $row->preview_image; ?>" alt="Portolio Image" />
                        <div><span><?php echo $row->title; ?></span></div>
                        <?php endwhile; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->

                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <?php 
                            $sql = "select * from portfolio where id = 5";
                            $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_object($result)):
                        ?>
                        <img src="./img/projects/<?php echo $row->preview_image; ?>" alt="Portolio Image" />
                        <div><span><?php echo $row->title; ?></span></div>
                        <?php endwhile; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <?php 
                            $sql = "select * from portfolio where id = 6";
                            $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_object($result)):
                        ?>
                        <img src="./img/projects/<?php echo $row->preview_image; ?>" alt="Portolio Image" />
                        <div><span><?php echo $row->title; ?></span></div>
                        <?php endwhile; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <?php 
                            $sql = "select * from portfolio where id = 7";
                            $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_object($result)):
                        ?>
                        <img src="./img/projects/<?php echo $row->preview_image; ?>" alt="Portolio Image" />
                        <div><span><?php echo $row->title; ?></span></div>
                        <?php endwhile; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <?php 
                            $sql = "select * from portfolio where id = 8";
                            $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_object($result)):
                        ?>
                        <img src="./img/projects/<?php echo $row->preview_image; ?>" alt="Portolio Image" />
                        <div><span><?php echo $row->title; ?></span></div>
                        <?php endwhile; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <?php 
                            $sql = "select * from portfolio where id = 9";
                            $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_object($result)):
                        ?>
                        <img src="./img/projects/<?php echo $row->preview_image; ?>" alt="Portolio Image" />
                        <div><span><?php echo $row->title; ?></span></div>
                        <?php endwhile; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
            </ul>
        </section>
        <!-- Portfolio Grid Ends -->
        <!-- Portfolio Details Starts -->
        <section class="slideshow">
            <ul>
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                            <?php
                                $sql = "select * from portfolio where id = 1";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)):
                            ?>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3><?php echo $row->title; ?></h3>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase"><?php echo $row->project; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase"><?php echo $row->client; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase"><?php echo $row->languages; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><?php echo $row->preview; ?></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <img src="./img/projects/<?php echo $row->content_img1?>" alt="Portolio Image" />
                        <!-- Main Project Content Ends -->
                        <?php endwhile ; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                            <?php
                                $sql = "select * from portfolio where id = 2";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)):
                            ?>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3><?php echo $row->title; ?></h3>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase"><?php echo $row->project; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase"><?php echo $row->client; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase"><?php echo $row->languages; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><?php echo $row->preview; ?></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <img src="./img/projects/<?php echo $row->content_img1?>" alt="Portolio Image" />
                        <!-- Main Project Content Ends -->
                        <?php endwhile ; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                    <?php
                            $sql = "select * from portfolio where id=3";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_object($result)):
                        ?>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3><?php echo $row->title; ?></h3>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase"><?php echo $row->project; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase"><?php echo $row->client; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase"><?php echo $row->languages; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><?php echo $row->preview; ?></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider" data-slide-to="0" class="active"></li>
                                <li data-target="#slider" data-slide-to="1"></li>
                                <li data-target="#slider" data-slide-to="2"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./Admin/Images/<?php echo $row->content_img1; ?>" alt="Portolio Image" />
                                </div>
                                <div class="carousel-item">
                                    <img src="./Admin/Images/<?php echo $row->content_img2; ?>" alt="Portolio Image" />
                                </div>
                                <div class="carousel-item">
                                    <img src="./Admin/Images/<?php echo $row->content_img3; ?>" alt="Portolio Image" />
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                        <?php endwhile; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <?php
                            $sql = "select * from portfolio where id=4";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_object($result)):
                        ?>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3><?php echo $row->title; ?></h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Themeforest</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.themeforest.net</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <video id="video" class="responsive-video" controls poster="">
                            <source src="./Admin/Images/Madara Uchiha AMV - Centuries.mp4" type="video/mp4">
                        </video>
                        <!-- Main Project Content Ends -->
                        <?php endwhile ; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                            <?php
                                $sql = "select * from portfolio where id = 5";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)):
                            ?>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3><?php echo $row->title; ?></h3>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase"><?php echo $row->project; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase"><?php echo $row->client; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase"><?php echo $row->languages; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><?php echo $row->preview; ?></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <img src="./img/projects/<?php echo $row->content_img1?>" alt="Portolio Image" />
                        <!-- Main Project Content Ends -->
                        <?php endwhile ; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                            <?php
                                $sql = "select * from portfolio where id = 6";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)):
                            ?>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3><?php echo $row->title; ?></h3>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase"><?php echo $row->project; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase"><?php echo $row->client; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase"><?php echo $row->languages; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><?php echo $row->preview; ?></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <img src="./img/projects/<?php echo $row->content_img1?>" alt="Portolio Image" />
                        <!-- Main Project Content Ends -->
                        <?php endwhile ; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                            <?php
                                $sql = "select * from portfolio where id = 7";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)):
                            ?>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3><?php echo $row->title; ?></h3>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase"><?php echo $row->project; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase"><?php echo $row->client; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase"><?php echo $row->languages; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><?php echo $row->preview; ?></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <img src="./img/projects/<?php echo $row->content_img1?>" alt="Portolio Image" />
                        <!-- Main Project Content Ends -->
                        <?php endwhile ; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                            <?php
                                $sql = "select * from portfolio where id = 8";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)):
                            ?>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3><?php echo $row->title; ?></h3>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase"><?php echo $row->project; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase"><?php echo $row->client; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase"><?php echo $row->languages; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><?php echo $row->preview; ?></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <img src="./img/projects/<?php echo $row->content_img1?>" alt="Portolio Image" />
                        <!-- Main Project Content Ends -->
                        <?php endwhile ; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                            <?php
                                $sql = "select * from portfolio where id = 9";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_object($result)):
                            ?>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3><?php echo $row->title; ?></h3>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase"><?php echo $row->project; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase"><?php echo $row->client; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase"><?php echo $row->languages; ?></span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><?php echo $row->preview; ?></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <img src="./img/projects/<?php echo $row->content_img1?>" alt="Portolio Image" />
                        <!-- Main Project Content Ends -->
                        <?php endwhile ; ?>
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
            </ul>
            <!-- Portfolio Navigation Starts -->
            <nav>
                <span class="icon nav-prev"><img src="img/projects/navigation/left-arrow.png" alt="previous"></span>
                <span class="icon nav-next"><img src="img/projects/navigation/right-arrow.png" alt="next"></span>
                <span class="nav-close"><img src="img/projects/navigation/close-button.png" alt="close"> </span>
            </nav>
            <!-- Portfolio Navigation Ends -->
        </section>
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
