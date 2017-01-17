<!-- Navigation -->
    <nav class="navbar navbar-ant navbar-fixed-top" role="navigation" >
        <div class="container">

            <!-- The navbar-header goes here -->
            <div class="navbar-header col-sm-2 col-md-4">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php" style="color:black">
                    <i class="fa fa-play-circle"></i> <span class="light">START</span> genehive
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=" col-md-8 collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden active">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Intro"  style="color:black">Intro</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#description" style="color:black">description</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#documentation" style="color:black">documentation</a>
                    </li>
                    <li>
                        <a href="#openModal" style="color:black">contact us</a>
                        <div id="openModal" class="modalDialog">
                            <div class="">
                                <a href="#close" title="Close" class="close">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </a>
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