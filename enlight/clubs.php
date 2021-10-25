<!-- <?php 
include "db_con.php";
session_start();
$sqlclub="SELECT * FROM club WHERE number='1'";
$club=mysqli_query($con,$sqlclub);
$rowclub=mysqli_fetch_assoc($resclub);
$literary=$rowclub["literary"];

$_SESSION["literary"]=$literary;
// $_SESSION["tyid"]=$tyid;
// $_SESSION["fyid1"]=$fyid1;
// $_SESSION["fyid2"]=$fyid2;
// $_SESSION["fyid3"]=$fyid3;
// $_SESSION["fyid4"]=$fyid4;

?>  -->

<!doctype html>
w

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Shradhey Pathak,MNNIT Allahabad">
    <title>Clubs - SMP</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="../enlight/css/bootstrap.css"rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="clubs.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="extra.html">Back To Extras</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="events.html">Events</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="sports.html">Sports</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="mainLite.html">Home</a>
                    </li>
                </ul>
                <!-- <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
            </div>
        </nav>
    </header>

    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img" src="pics/culrav.jpg" alt="Pic">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h4>Culrav : Annual Cultural Fest</h4>
                            <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                            <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" src="pics/avish5.jpg" alt="Pic">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h4>Avishkar : Annual Techno Fest</h4>
                            <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                            <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" src="pics/avishkar.jpg" alt="Pic">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h4>Prosang : Annual Robo And Aero Fest</h4>
                            <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                            <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" src="pics/josh.jpg" alt="Pic">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h4>Josh : Annual Sports Fest</h4>
                            <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                            <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" src="pics/eloquence.jpeg" alt="Pic">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h4>Eloquence : Annual Literary Fest</h4>
                            <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                            <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->

            <body class="text-center">
                <h3><strong>Clubs Of MNNIT</strong></h3>
                <ul style="list-style: none;">
                    <li><a href="#literary">MNNIT Literary Club</a></li>
                    <li><a href="#energy">Energy Club</a></li>
                    <li><a href="#quiz">Gnosis Quiz Club</a></li>
                    <li><a href="#robotics">Robotics Club</a></li>
                    <li><a href="#anokhi">Anokhi Pehel</a></li>
                    <li><a href="#ecell">E - Cell</a></li>
                    <li><a href="#green">Green Club</a></li>
                    <li><a href="#rotaract">Rotaract Club</a></li>
                    <li><a href="#athletics">MNNIT Athletics Club</a></li>
                    <li><a href="#sae">MNNIT SAE Club</a></li>
                    <li><a href="#msme">MSME Club</a></li>
                    <li><a href="#aero">Aero Modelling Club</a></li>
                    <li><a href="#enactus">Enactus Club</a></li>
                    <li><a href="#astronomy">Astronomy Club</a></li>
                    <li><a href="#dance">Dance Club</a></li>
                    <li><a href="#mhm">Media House Of MNNIT</a></li>
                    <li><a href="#drams">Dramatics Club</a></li>
                    <li><a href="#electronics">Electronics Society</a></li>
                </ul>
            </body>

            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <p id="literary"></p>
                    <h2 class="featurette-heading">MNNIT Literary Club</h2>
                    <p id="literary" class="lead">
                        <!-- <?php
          echo $_SESSION["literary"];
          ?> -->
                    </p>
                    <!-- <p class="lead">This is very first event of college when you start your college life here at MNNIT. It is an event which acts as a platform for the newly inducted students to exhibit their extra-curricular talents. Besides it also facilitates better co-ordination and communication between the freshers and the senior students. It is purely an event dedicated to students, hence right from the selection of the events to the management of the function, the responsibility is being borne by senior students in the form of a committee of student co-ordinators.
        </p>
        <p class="lead">There are 14 committees that make this event a grand success. This ranges from dainty dances like Garba, Marathi, Bengali, SouthFolk, Bhangra, Rajasthani, Inaugural and Western to the charming ramp walks of the footprints committee and from the extraordinary talent of the dramatics committee to the technical upbringing of Media House of MNNIT. The Arts committee brightens the stage with a outstanding back drop painted by vibrant colours. The Music committee which sets the stage on fire with their melodious and enchanting performances. The Oration committee which lefts the audience awestruck with their affluent skills.
        </p> -->
                    <a class="lead" target="_blank" href="https://www.facebook.com/MNNITLitClub/">Click here to know more</a>
                </div>
                <div class="col-md-5">
                    <img src="club/literery.jpg" alt="Lit" class="img1">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <p id="energy"></p>
                    <h2 class="featurette-heading">Energy Club</h2>
                    <p class="lead">??</p>
                    <!-- <p class="lead">Having the theme ‘ideate, innovate and create’, the fest has around 60 events being organised over the period of four days. There are over 12 major banners under which whole Avishkar takes place into account. It includes Aerodynamics, Cyberquest, Mechrocosm, Electromania, Power Surge, Genesis, Rasayans, Nirman, Oligopoly, Kreedomania, Monopoly and Robomania. 
        </p>
        <p class="lead">Every year Avishkar occurs at mid-September which witnesses a huge participation from all branches and years. Avishkar’ 19 marked a huge success all it had a team of dedicated students, who worked day and night passionately. From self-driving cars which can follow lanes and identify road signals to creating ‘Vikram’ lander inspired ATVs for different types of terrains on moon, form google assistant based home automation to creating your own android app Avishkar keeps on raising the bar year after year.
        </p> -->
                    <!-- <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p> -->
                    <a class="lead" target="_blank" href="https://www.facebook.com/energyclubmnnit/">Click here to know more</a>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="club/energy.png" alt="energy" class="img1">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <p id="quiz"></p>
                    <h2 class="featurette-heading">Gnosis Quiz Club</h2>
                    <p class="lead">
                    </p>
                    <!-- <p class="lead"><strong> Razzmatazz</strong> where various dance teams from different colleges compete to win the title being judged by the top dancers every year.</p>
        <p class="lead"><strong> Rangmanch and Parimal</strong> an umbrella event for all Hindi literary events</p>
        <p class="lead"><strong> Kavya Sandhya</strong> the inaugural flagship poetry night of Culrav which attracts connoisseurs of poetry, showcasing their talent judged by eminent personalities.
        </p>
        <p class="lead"><strong> Celebrity and Pro-nites </strong>the last two nights of Culrav witnesses thrilling performances from famous celebrities and artists in the fields of rock, hip-hop or EDM.
        </p>
        <p class="lead"><strong> Spandan </strong>which witnesses the charming glamourous ramp walks.
        </p>
        <p class="lead"><strong> Informal Events </strong>from "Stand-up Comedy" to "Googly Cricket" it has a wide variety of events in this arena, to enthral the audiences all the time wherein they stand a chance to win lots of goodies and merchandise.
        </p>
        <p class="lead"><strong> Stunt Show </strong>being hosted by Hero Moto Corp has gathered huge amount of audience last year.
        </p> -->

                    <!-- <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p> -->
                    <a class="lead" target="_blank" href="https://www.facebook.com/gnosismnnit/">Click here to know more</a>
                </div>
                <div class="col-md-5">
                    <img src="club/gnosis.jpg" alt="Gno" class="img1">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <p id="robotics"></p>
                    <h2 class="featurette-heading">Robotics Club</h2>
                    <p class="lead">??
                    </p>

                    <!-- <p class="lead">Eloquence is a wholesome experience for the literary enthusiasts to express themselves. -->
                    <!-- </p> -->
                    <a class="lead" target="_blank" href="https://www.facebook.com/avishkar.robotics/">Click here to know more</a>
                    <!-- <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p> -->
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="club/robotics.jpg" alt="robo" class="img2">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>


            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <p id=id="anokhi"></p>
                    <h2 class="featurette-heading">Anokhi Pehel</h2>
                    <p class="lead">??
                    </p>
                    <!-- <p class="lead">E-Cell helps host Renaissance. This summit includes various events such as E-Talk, E-Plan, Biz-quiz, Panel Discussion, IPL Auction, Stock Market and many more.
        </p>
        <p class="lead">Renaissance also intends to bring together technologists, engineers, medical professionals, business analysts to develop all-inclusive innovation that creates an impact on the quality of life through talks, discussions and workshops.
        </p> -->
                    <!-- lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p> -->-->
                    <a class="lead" target="_blank" href="https://www.facebook.com/anokhipehel/">Click here to know more</a>
                </div>
                <div class="col-md-5">
                    <img src="club/anokhi.jpg" alt="anokhi" class="img1">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <p id="ecell"></p>
                    <h2 class="featurette-heading">E - Cell</h2>
                    <p class="lead">
                    </p>
                    <p class="lead">
                    </p>
                    <!-- <p class="lead">Prosang with an array of exciting events allows to have fun while simultaneously learning amongst brilliant minds from around the country!  -->
                    </p> -->
                    <a class="lead" target="_blank" href="https://www.facebook.com/mnnitecell/">Click here to know more</a>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="club/ecell.jpg" alt="e" class="img1">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <p id="green"></p>
                    <h2 class="featurette-heading">Green Club</h2>
                    <p class="lead">
                    </p>
                    <p class="lead">
                    </p>
                    <p class="lead">

                    </p>
                    <a class="lead" target="_blank" href="https://www.facebook.com/MNNITGreenClub/">Click here to know more</a>

                    <!-- lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p> -->-->
                </div>
                <div class="col-md-5">
                    <img src="club/green.jpg" alt="green" class="img3">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <p id="rotaract"></p>
                    <h2 class="featurette-heading">Rotaract Club</h2>
                    <p class="lead">
                    </p>
                    <p class="lead">
                    </p>
                    <p class="lead">
                    </p>
                    <p class="lead">
                    </p>
                    <p class="lead">
                    </p>
                    <a class="lead" target="_blank" href="https://www.facebook.com/rotaractmnnit/">Click here to know more</a>

                </div>
                <div class="col-md-5 order-md-1">
                    <img src="club/rotoract.jpg" alt="ro" class="img5">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <p id="athletics"></p>
                    <h2 class="featurette-heading">MNNIT Athletics Club</h2>
                    <p class="lead">
                    </p>
                    <p class="lead">
                    </p>
                    <p class="lead">

                    </p>
                    <a class="lead" target="_blank" href="https://www.facebook.com/mnnitatheleticsclub/">Click here to know more</a>

                    <!-- lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p> -->-->
                </div>
                <div class="col-md-5">
                    <img src="club/athletics.jpg" alt="ath" class="img4">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <p id="sae"></p>
                    <h2 class="featurette-heading">MNNIT SAE Club</h2>
                    <p class="lead">
                    </p>
                    <!-- <p class="lead">Extracurricular activities are also being organised which helps to overall development of these students.
          </p>
          <p class="lead">Cloth Donation Drives are also an important initiative carried out by this club.
          </p>
          <p class="lead">They collect blankets, woollen clothes from the college students and nearby areas and distribute them to needy in winters.
          </p>
          <p class="lead">Visiting Blind Schools and Old Age Homes and carrying out Blood Donation Camp are some of the main initiatives taken by this club. Aiming at making this society a better place to live in, Rotaract Club becomes one of the major attractions of MNNIT.
          </p> -->
                    <a class="lead" target="_blank" href="https://www.facebook.com/SAEMNNITCLUB/">Click here to know more</a>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="club/sae.jpg" alt="sae" class="img1">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <p id="msme"></p>
                    <h2 class="featurette-heading">MSME Club</h2>
                    <p id="msme" class="lead">
                    </p>

                    <!-- <p class="lead">‘Sky is the limit’ a sentence engraved on the mind of each of the athletes. A proper amalgamation of coordination and support among the teammates make the troupe stand apart from others.
            </p>
            <p class="lead">This club also organises cleanliness drive to tell students of an institute of national importance that, “If we cannot keep our own college clean then are, we really educated?”. -->

                    </p>
                    <!-- lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p> -->-->
                </div>
                <div class="col-md-5">
                    <img src="club/msme.jpg" alt="msme" class="img1">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>

            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <p id="aero"></p>
                    <h2 class="featurette-heading">Aero Modelling Club</h2>
                    <p class="lead">
                    </p>
                    <p class="lead">
                    </p>
                    <p class="lead">
                    </p>
                    <!-- <p class="lead">They collect blankets, woollen clothes from the college students and nearby areas and distribute them to needy in winters.
            </p>
            <p class="lead">Visiting Blind Schools and Old Age Homes and carrying out Blood Donation Camp are some of the main initiatives taken by this club. Aiming at making this society a better place to live in, Rotaract Club becomes one of the major attractions of MNNIT.
            </p> -->
                    <a class="lead" target="_blank" href="https://www.facebook.com/AeroClubMNNIT/">Click here to know more</a>

                </div>
                <div class="col-md-5 order-md-1">
                    <img src="club/aero.jpg" alt="aero" class="img2">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <p id="enactus"></p>
                    <h2 class="featurette-heading">ENACTUS</h2>
                    <p class="lead">
                    </p>
                    <p class="lead">
                        <!-- <p class="lead">This club also organises cleanliness drive to tell students of an institute of national importance that, “If we cannot keep our own college clean then are, we really educated?”.
    
              </p> -->
                        <!-- lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p> -->-->
                        <a class="lead" target="_blank" href="https://www.facebook.com/enactusmnnit/">Click here to know more</a>
                </div>
                <div class="col-md-5">
                    <img src="club/enactus.png" alt="enactus" class="img3">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <p id="astronomy"></p>
                    <h2 class="featurette-heading">Astronomy Club</h2>
                    <p class="lead">
                    </p>
                    <!-- <p class="lead">Visiting Blind Schools and Old Age Homes and carrying out Blood Donation Camp are some of the main initiatives taken by this club. Aiming at making this society a better place to live in, Rotaract Club becomes one of the major attractions of MNNIT.
              </p> -->
                    <a class="lead" target="_blank" href="https://www.facebook.com/AeroClubMNNIT/">Click here to know more</a>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="club/astronomy.jpg" alt="astro" class="img4">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <p id="dance"></p>
                    <h2 class="featurette-heading">Dance Club</h2>
                    <p class="lead">
                    </p>
                    <!-- <p class="lead">This club also organises cleanliness drive to tell students of an institute of national importance that, “If we cannot keep our own college clean then are, we really educated?”.
      
                </p> -->
                    <!-- lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p> -->-->
                    <a class="lead" target="_blank" href="https://www.facebook.com/dcm.mnnit/">Click here to know more</a>
                </div>
                <div class="col-md-5">
                    <img src="club/dance.jpg" alt="dance" class="img2">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <p id="mhm"></p>
                    <h2 class="featurette-heading">Media House of MNNIT</h2>
                    <p class="lead">
                    </p>
                    <!-- <p class="lead">This club welcomes all those students who perceive this as a science, hobby or a sport. Objective of it is to unify these like-minded enthusiasts on a common platform and do something exciting in new ways.
                </p>
                <p class="lead">This club compels the soul to look upwards and leads us from this world to another
                </p> -->
                    <!-- <p class="lead">Visiting Blind Schools and Old Age Homes and carrying out Blood Donation Camp are some of the main initiatives taken by this club. Aiming at making this society a better place to live in, Rotaract Club becomes one of the major attractions of MNNIT.
                </p> -->
                    <a class="lead" target="_blank" href="https://www.facebook.com/MHM.MNNIT/">Click here to know more</a><br>
                    <a class="lead" target="_blank" href="https://www.youtube.com/channel/UCHytQI3z_Rx-JGVayx8PG4g">Youtube Channel</a>

                </div>
                <div class="col-md-5 order-md-1">
                    <img src="club/mhm.jpg" alt="mhm" class="img3">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <p id="drams"></p>
                    <h2 class="featurette-heading">Dramatics Club</h2>
                    <!-- <p class="lead">Dance club, one of the official club, is the most fascinating and glamorous clubs of MNNIT with maximal audience participation. To drive your interest into this charismatic club we have duo dance, group dance events throughout the year. This club assures the audience that the dance performances will leave them flabbergasted. The main event Razzmatazz during the annual cultural fest, CULRAV attract umpteen people. Swagat, the annual fresher’s event which is organized at the starting of the academic year is a platform for freshers to unveil their outstanding skills and passion to be a virtuoso dancer. This year club plan to organize dance workshops for freshers as well as an event wherein freshers can show cast their talent. </p> -->
                    <p class="lead">
                    </p>
                    <!-- <p class="lead">This club also organises cleanliness drive to tell students of an institute of national importance that, “If we cannot keep our own college clean then are, we really educated?”.
        
                  </p> -->
                    <!-- lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p> -->-->

                    <a class="lead" target="_blank" href="https://www.facebook.com/Alchemy.Dramatics/">Click here to know more</a>
                </div>
                <div class="col-md-5">
                    <img src="club/drams.jpg" alt="drams" class="img1">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <p id="electronics"></p>
                    <h2 class="featurette-heading">Electronics Society</h2>
                    <p class="lead">
                    </p>
                    <!-- <p class="lead">This club welcomes all those students who perceive this as a science, hobby or a sport. Objective of it is to unify these like-minded enthusiasts on a common platform and do something exciting in new ways.
                  </p>
                  <p class="lead">This club compels the soul to look upwards and leads us from this world to another
                  </p> -->
                    <!-- <p class="lead">Visiting Blind Schools and Old Age Homes and carrying out Blood Donation Camp are some of the main initiatives taken by this club. Aiming at making this society a better place to live in, Rotaract Club becomes one of the major attractions of MNNIT.
                  </p> -->
                    <a class="lead" target="_blank" href="https://www.facebook.com/avishkar.electromania/">Click here to know more</a>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="club/electro.jpg" alt="electro" class="img1">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <p id="cc"></p>
                    <h2 class="featurette-heading">Computer Coding Club</h2>
                    <!-- <p class="lead">Dance club, one of the official club, is the most fascinating and glamorous clubs of MNNIT with maximal audience participation. To drive your interest into this charismatic club we have duo dance, group dance events throughout the year. This club assures the audience that the dance performances will leave them flabbergasted. The main event Razzmatazz during the annual cultural fest, CULRAV attract umpteen people. Swagat, the annual fresher’s event which is organized at the starting of the academic year is a platform for freshers to unveil their outstanding skills and passion to be a virtuoso dancer. This year club plan to organize dance workshops for freshers as well as an event wherein freshers can show cast their talent. </p> -->
                    <p class="lead"></p>
                    <!-- <p class="lead">This club also organises cleanliness drive to tell students of an institute of national importance that, “If we cannot keep our own college clean then are, we really educated?”.
                     <a  class="lead" target="_blank" href="https://www.facebook.com/nishaadmnnit/">Click here to know more</a>
                  </p> -->
                    <!-- lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p> -->-->
                    <a class="lead" target="_blank" href="https://www.facebook.com/groups/ccqueries/">Click here to know more</a>
                </div>
                <div class="col-md-5">
                    <img src="club/cc.jpg" alt="cc" class="img1">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <p id="music"></p>
                    <h2 class="featurette-heading">Music Club</h2>
                    <p class="lead">
                    </p>
                    <!-- <p class="lead">This club welcomes all those students who perceive this as a science, hobby or a sport. Objective of it is to unify these like-minded enthusiasts on a common platform and do something exciting in new ways.
                  </p>
                  <p class="lead">This club compels the soul to look upwards and leads us from this world to another
                  </p> -->
                    <!-- <p class="lead">Visiting Blind Schools and Old Age Homes and carrying out Blood Donation Camp are some of the main initiatives taken by this club. Aiming at making this society a better place to live in, Rotaract Club becomes one of the major attractions of MNNIT.
                  </p> -->
                    <a class="lead" target="_blank" href="https://www.facebook.com/nishaadmnnit/">Click here to know more</a>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="club/music.jpg" alt="music" class="img2">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                </div>
            </div>
            <!-- /END THE FEATURETTES -->

        </div>
        <!-- /.container -->
        <br><br>

        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; SMP - MNNIT Allahabad</p>
        </footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="../assets/dist/js/bootstrap.bundle.js"></script>
</body>

</html>