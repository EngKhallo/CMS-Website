<?php
include './Admin/config/connection.php';
$conn = connect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About - Hakaale Personal Portfolio</title>
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

<body class="about">
    <!-- Header Starts -->
    <?php include './includes/header.php'; ?>
    <!-- Header Ends -->
    <!-- Page Title Starts -->
    <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
        <h1>ABOUT <span>ME</span></h1>
        <span class="title-bg">Resume</span>
    </section>
    <!-- Page Title Ends -->
    <!-- Main Content Starts -->
    <section class="main-content revealator-slideup revealator-once revealator-delay1">
        <div class="container">
            <div class="row">
                <!-- Personal Info Starts -->
                <div class="col-12 col-lg-5 col-xl-6">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-uppercase custom-title mb-0 ft-wt-600">personal infos</h3>
                        </div>
                        <div class="col-12 d-block d-sm-none">
                            <img src="http://via.placeholder.com/300x300.jpg" class="img-fluid main-img-mobile" alt="my picture" />
                        </div>
                        <div class="col-6">
                            <ul class="about-list list-unstyled open-sans-font">
                                <li> <span class="title">first name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Mukhtar</span> </li>
                                <li> <span class="title">Middle name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Mohammed</span> </li>
                                <li> <span class="title">last name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Ali</span> </li>
                                <!-- <li> <span class="title">Age :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">31 Years</span> </li> -->
                                <li> <span class="title">Nationality :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Somali</span> </li>
                                <li> <span class="title">Consultant Freelance :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Available</span> </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="about-list list-unstyled open-sans-font">
                                <li> <span class="title">Address :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Somaliland</span> </li>
                                <li> <span class="title">phone / Whatsapp :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">+252633111126</span> </li>
                                <li> <span class="title">Email :</span> <span class="d-block d-sm-inline-block d-lg-block d-xl-inline-block">mukhtar.hakaale@gmail.com</span> </li>
                                <li> <span class="title">Skype :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">hakaale</span> </li>
                                <li> <span class="title">langages :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Arabic, English, Somali</span> </li>
                            </ul>
                        </div>
                        <!-- <div class="col-12 mt-3">
                        <a class="button" href="../dark/Resume-Mukhtar-Hakaale.pdf">
                            <span class="button-text">Download CV</span>
                            <span class="button-icon fa fa-download"></span>
                        </a>
                    </div> -->
                    </div>
                </div>
                <!-- Personal Info Ends -->
                <!-- Boxes Starts -->
                <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-6">
                            <div class="box-stats with-margin">
                                <h3 class="poppins-font position-relative">
                                    <?php
                                    $sql = "select number from achieves where id =1";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_object($result)) :
                                    ?>
                                        <?php echo $row->number; ?>
                                    <?php endwhile; ?>
                                </h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">years of <span class="d-block">experience</span></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box-stats with-margin">
                                <h3 class="poppins-font position-relative">
                                    <?php
                                    $sql = "select number from achieves where id =2";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_object($result)) :
                                    ?>
                                        <?php echo $row->number; ?>
                                    <?php endwhile; ?>
                                </h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">completed <span class="d-block">projects</span></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box-stats">
                                <h3 class="poppins-font position-relative">
                                    <?php
                                    $sql = "select number from achieves where id =3";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_object($result)) :
                                    ?>
                                        <?php echo $row->number; ?>
                                    <?php endwhile; ?>
                                </h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">Happy<span class="d-block">customers</span></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box-stats">
                                <h3 class="poppins-font position-relative">
                                    <?php
                                    $sql = "select number from achieves where id =4";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_object($result)) :
                                    ?>
                                        <?php echo $row->number; ?>
                                    <?php endwhile; ?>
                                </h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">awards <span class="d-block">won</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Boxes Ends -->
            </div>
            <hr class="separator">
            <!-- Skills Starts -->
            <div class="row">
                <div class="col-12">
                    <h3 class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">My Skills</h3>
                </div>


                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p95">
                        <span>
                            <?php
                            $sql = "select percentage from skills where id =1";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_object($result)) :
                            ?>
                                <?php echo $row->percentage; ?>
                            <?php endwhile; ?>
                            %</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">
                        <?php
                        $sql = "select title from skills where id =1";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_object($result)) :
                        ?>
                            <?php echo $row->title; ?>
                        <?php endwhile; ?>
                    </h6>
                </div>



                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p97">
                        <span>
                            <?php
                            $sql = "select percentage from skills where id =2";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_object($result)) :
                            ?>
                                <?php echo $row->percentage; ?>
                            <?php endwhile; ?>
                            %</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">
                        <?php
                        $sql = "select title from skills where id =2";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_object($result)) :
                        ?>
                            <?php echo $row->title; ?>
                        <?php endwhile; ?>
                    </h6>
                </div>


                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p89">
                        <span>
                            <?php
                            $sql = "select percentage from skills where id =3";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_object($result)) :
                            ?>
                                <?php echo $row->percentage; ?>
                                <?php endwhile; ?>%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">
                        <?php
                        $sql = "select title from skills where id =3";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_object($result)) :
                        ?>
                            <?php echo $row->title; ?>
                        <?php endwhile; ?>
                    </h6>
                </div>



                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p85">
                        <span><?php
                                $sql = "select percentage from skills where id =4";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                <?php echo $row->percentage; ?>
                                <?php endwhile; ?>%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">
                        <?php
                        $sql = "select title from skills where id =4";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_object($result)) :
                        ?>
                            <?php echo $row->title; ?>
                        <?php endwhile; ?>
                    </h6>
                </div>




                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p80">
                        <span><?php
                                $sql = "select percentage from skills where id =5";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_object($result)) :
                                ?>
                                <?php echo $row->percentage; ?>
                                <?php endwhile; ?>%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">
                        <?php
                        $sql = "select title from skills where id =5";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_object($result)) :
                        ?>
                            <?php echo $row->title; ?>
                        <?php endwhile; ?>
                    </h6>
                </div>




                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p84">
                        <span>
                            <?php
                            $sql = "select percentage from skills where id =6";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_object($result)) :
                            ?>
                                <?php echo $row->percentage; ?>
                            <?php endwhile; ?>
                            %</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">
                        <?php
                        $sql = "select title from skills where id =6";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_object($result)) :
                        ?>
                            <?php echo $row->title; ?>
                        <?php endwhile; ?></h6>
                </div>



                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p99">
                        <span>
                            <?php
                            $sql = "select percentage from skills where id =7";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_object($result)) :
                            ?>
                                <?php echo $row->percentage; ?>
                            <?php endwhile; ?>
                            %</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">
                        <?php
                        $sql = "select title from skills where id =7";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_object($result)) :
                        ?>
                            <?php echo $row->title; ?>
                        <?php endwhile; ?>
                    </h6>
                </div>



                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p80">
                        <span>
                            <?php
                            $sql = "select percentage from skills where id=8";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_object($result)) :
                            ?>
                                <?php echo $row->percentage; ?>
                            <?php endwhile; ?>
                            %</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">
                        <?php
                        $sql = "select title from skills where id =8";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_object($result)) :
                        ?>
                            <?php echo $row->title; ?>
                        <?php endwhile; ?></h6>
                </div>


            </div>
            <!-- Skills Ends -->



            <hr class="separator mt-1">
            <!-- Experience & Education Starts -->
            <div class="row">
                <div class="col-12">
                    <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Experience <span>&</span> Education</h3>
                </div>
                <div class="col-lg-6 m-15px-tb">
                    <div class="resume-box">
                        <ul>
                            <!-- experience 1 start -->
                            <li>
                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">
                                    <?php
                                    $sql = "select time from experience where id =1";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_object($result)) :
                                    ?>
                                        <?php echo $row->time; ?>
                                    <?php endwhile; ?>
                                </span>
                                <h5 class="poppins-font text-uppercase">
                                    <?php
                                    $sql = "select title from experience where id =1";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_object($result)) :
                                    ?>
                                        <?php echo $row->title; ?>
                                    <?php endwhile; ?>
                                    <span class="place open-sans-font">
                                        <?php
                                        $sql = "select place from experience where id =1";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_object($result)) :
                                        ?>
                                            <?php echo $row->place; ?>
                                        <?php endwhile; ?>
                                    </span>

                                </h5>
                                <p class="open-sans-font">
                                <?php
                                    $sql = "select information from experience where id =1";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_object($result)) :
                                    ?>
                                        <?php echo $row->information; ?>
                                    <?php endwhile; ?>
                                </p>
                            </li>
                            <!-- experience 1 end -->
                            

                            <!-- experience 2 start -->
                            <li>
                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <?php 
                                    $sql = 'select * from experience where id = 2';
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_object($result)):
                                ?>
                                <span class="time open-sans-font text-uppercase"><?php echo $row->time; ?></span>
                                <h5 class="poppins-font text-uppercase"><?php echo $row->title; ?> <span class="place open-sans-font"><?php echo $row->place; ?></span></h5>
                                <p class="open-sans-font">
                                <?php echo $row->information; ?>
                                 </p>

                               <?php endwhile; ?>
                            </li>
                            <!-- experience 2 end -->


                            <!-- experience 3 start -->                    
                            <li>
                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <?php 
                                    $sql = "select * from experience where id =3";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_object($result)):
                                ?>
                                <span class="time open-sans-font text-uppercase"><?php echo $row->time?></span>
                                <h5 class="poppins-font text-uppercase"><?php echo $row->title?><span class="place open-sans-font"><?php echo $row->place?></span></h5>
                                <p class="open-sans-font">
                                <?php echo $row->information; ?>
                                </p>
                                <?php endwhile; ?>
                            </li>
                            <!-- experience 3 end -->


                            <!-- experience 4 start -->                    
                            <li>
                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <?php 
                                    $sql = "select * from experience where id =4";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_object($result)):
                                ?>
                                <span class="time open-sans-font text-uppercase"><?php echo $row->time?></span>
                                <h5 class="poppins-font text-uppercase"><?php echo $row->title?><span class="place open-sans-font"><?php echo $row->place?></span></h5>
                                <p class="open-sans-font">
                                <?php echo $row->information; ?>
                                </p>
                                <?php endwhile; ?>
                            </li>
                            <!-- experience 4 end -->

                        </ul>


                    </div>
                </div>


                <div class="col-lg-6 m-15px-tb">
                    <div class="resume-box">
                        <ul>
                           <!-- education 1 start -->                    
                            <li>
                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <?php 
                                    $sql = "select * from experience where id =5";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_object($result)):
                                ?>
                                <span class="time open-sans-font text-uppercase"><?php echo $row->time?></span>
                                <h5 class="poppins-font text-uppercase"><?php echo $row->title?><span class="place open-sans-font"><?php echo $row->place?></span></h5>
                                <p class="open-sans-font">
                                <?php echo $row->information; ?>
                                </p>
                                <?php endwhile; ?>
                            </li>
                            <!-- education 1 end -->

                            <li>
                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <?php 
                                    $sql = "select * from experience where id =6";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_object($result)):
                                ?>
                                <span class="time open-sans-font text-uppercase"><?php echo $row->time?></span>
                                <h5 class="poppins-font text-uppercase"><?php echo $row->title?><span class="place open-sans-font"><?php echo $row->place?></span></h5>
                                <p class="open-sans-font">
                                <?php echo $row->information; ?>
                                </p>
                                <?php endwhile; ?>
                            </li>

                            <!-- Education 2 start -->
                            <li>
                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <?php 
                                    $sql = "select * from experience where id =7";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_object($result)):
                                ?>
                                <span class="time open-sans-font text-uppercase"><?php echo $row->time?></span>
                                <h5 class="poppins-font text-uppercase"><?php echo $row->title?><span class="place open-sans-font"><?php echo $row->place?></span></h5>
                                <p class="open-sans-font">
                                <?php echo $row->information; ?>
                                </p>
                                <?php endwhile; ?>
                            </li>
                            <!-- Education 2 end -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Experience & Education Ends -->
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