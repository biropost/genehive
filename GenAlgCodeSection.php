



<div class="documentation">
    <div class="container">
        <div class="well col-xs-12">

                          <!-- Nav tabs -->
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

                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane text-left active" id="home">
                                <div class="container">
                                    <?php include('genAlg_Code/NQClient.php');?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane text-left" id="profile">
                                <div class="container">
                                    <?php include('genAlg_Code/Environment.php');?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane text-left" id="messages">
                                <div class="container">
                                    <?php include('genAlg_Code/NQPopulation.php');?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane text-left" id="settings">
                                <div class="container">
                                    <?php include('genAlg_Code/Population.php');?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane text-left" id="settings">
                                <div class="container">
                                    <?php include('genAlg_Code/NQChromosome.php');?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane text-left" id="settings">
                                <div class="container">
                                    <?php include('genAlg_Code/Chromosome1D.php');?>
                                </div>
                            </div>
                          </div>
             
        </div>
    </div>
</div>