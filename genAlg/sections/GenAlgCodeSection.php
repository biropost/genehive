



<div class="row documentation" style="padding-top:40px; padding-bottom:40px; background-color:#f7f7f7;">




    <div class="container">
        <svg class="hidden">
            <defs>
                <path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z"/>
            </defs>
        </svg>
            
            <section>
                <div class="tabs tabs-style-shape">
                    <nav>
                        <ul>
                            <li>
                                <a href="#section-shape-1">
                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                    <span>NQClient.cpp</span>
                                </a>
                            </li>
                            <li>
                                <a href="#section-shape-2">
                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                    <span>Environment.h</span>
                                </a>
                            </li>
                            <li>
                                <a href="#section-shape-3">
                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                    <span>NQPopulation.h</span>
                                </a>
                            </li>
                            <li>
                                <a href="#section-shape-4">
                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                    <span>Population.h</span>
                                </a>
                            </li>
                            <li>
                                <a href="#section-shape-5">
                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>

                                    <span>NQChromosome.h</span>
                                </a>
                            </li>
                            <li>
                                <a href="#section-shape-6">
                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
                                    <span>Chromosome1D.h</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="content-wrap">
                        <section id="section-shape-1"><small><?php include('genAlg/genAlg_Code/NQClient.php');?></small></section>
                        <section id="section-shape-2"> <small><?php include('genAlg/genAlg_Code/Environment.php');?></small></section>
                        <section id="section-shape-3"><small><?php include('genAlg/genAlg_Code/NQPopulation.php');?></small></section>
                        <section id="section-shape-4"><small><?php include('genAlg/genAlg_Code/Population.php');?></small></section>
                        <section id="section-shape-5"><small><?php include('genAlg/genAlg_Code/NQChromosome.php');?></small></section>
                        <section id="section-shape-6"><small><?php include('genAlg/genAlg_Code/Chromosome1D.php');?></small></section>
                    </div><!-- /content -->
                </div><!-- /tabs -->
            </section>
        <script src="js/modernizr_tabs.custom.js"></script>
         
        <script src="js/cbpFWTabs.js"></script>
        <script>
            (function() {

                [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
                    new CBPFWTabs( el );
                });

            })();
        </script>

        <script type="text/javascript" src="js/js-syntaxhighlighter/shCore.js"></script>
        <script type="text/javascript" src="js/js-syntaxhighlighter/shBrushCpp.js"></script>
        <script type="text/javascript" src="js/js-syntaxhighlighter/shBrushPlain.js"></script>
        <link href="css/syntaxhighlighter/shCore.css" rel="stylesheet" type="text/css" />
        <link href="css/syntaxhighlighter/shThemeDefault.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript">
            SyntaxHighlighter.all()
        </script>


</div>
<br>
<br>
<button class="btn btn-lg btn-default"><a href="/Users/biropo/Sites/genehive/genAlg_Code">Hier herunterladen</a></button>

</div><!-- /container -->
<!-- old version



    <div class="container">
        <div class="well col-xs-12">

                          <!-- Nav tabs 
                          <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="col-md-2 nopad active" >
                                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                    <div class="tab">NQClient</div>
                                </a>
                            </li>
                            <li role="presentation" class="col-md-2 nopad">
                                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                                    <div class="tab">Environment</div>
                                </a>
                            </li>
                            <li role="presentation" class="col-md-2 nopad">
                                <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                                    <div class="tab">NQPopulation</div>
                                </a>
                            </li>
                            <li role="presentation" class="col-md-2 nopad">
                                <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
                                    <div class="tab">Population</div>
                                </a>
                            </li>
                            <li role="presentation" class="col-md-2 nopad">
                                <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
                                    <div class="tab">NQChromosome</div>
                                </a>
                            </li>
                            <li role="presentation" class="col-md-2 nopad">
                                <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
                                    <div class="tab">Chromosome1D</div>
                                </a>
                            </li>
                          </ul>

                          <!-- Tab panes
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane text-left active" >
                                <div class="container">
                                    
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane text-left">
                                <div class="container">
                                    
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane text-left" >
                                <div class="container">
                                    
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane text-left" >
                                <div class="container">
                                    
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane text-left" >
                                <div class="container">
                                    
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane text-left" >
                                <div class="container">
                                    
                                </div>
                            </div>
                          </div>
             
        </div>
    </div>
</div>
-->

