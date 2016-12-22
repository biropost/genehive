
<!DOCTYPE html>
<html lang="en">

<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Genhive</title>
           <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
             <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Theme CSS -->
         <link href="style.css" rel="stylesheet">
        <link href="css/grayscale.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="css/custom-bars.css" />


        <!-- Custom Fonts -->

<style type="text/css">
.progress-bar{
  background-color:rgba(255,255,255, 0)!important;
  border: none!important;
  box-shadow: none!important;
}

body{
background-color: #F9F9F9;
}
.tooltip{
    opacity:1!important;
}


</style>
</head>






<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">

            <!-- The navbar-header goes here -->
            <div class="navbar-header col-sm-2 col-md-4">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> <span class="light">START</span> genehive
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=" col-md-8 collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#N-Dame">Intro</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#DIY">DIY</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#documentation">documentation</a>
                    </li>
                    <li>
                        <!--<a class="page-scroll" href="#contact">contact us</a>-->


                        <a href="#openModal">contact us</a>

                        <div id="openModal" class="modalDialog">
                            <div class="">
                                <a href="#close" title="Close" class="close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                                <?php include('contact.php');?>
                            </div>
                        </div>



                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<!-- /.Navigation -->






    <!-- Intro Header -->
    <header class="intro">
        <?php include('genAlg.php');?>
    </header>
    <!-- About nDameSection -->

    <section id="N-Dame" class="container content-section">
        <?php include('nDameSection.php');?>
    </section>

    <!-- DIY nDameValSection -->
    <section id="DIY" class="content-section text-center">
        <?php include('nDameValSection.php');?>
    </section>

    <!-- GenAlgCodeSection -->
    <section id="documentation" class="content-section text-center">
        <?php include('GenAlgCodeSection.php');?>
    </section>



    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>


</body>

</html>
