        <div class="row" style="padding-top:50px; padding-bottom:40px; padding-bottom:40px;  background-color:#fefefe;">
        	<div class="container">
	            <div class="col-xs-12 col-sm-6 col-md-8">
	                <h2>Das N-Damen Problem</h2>               
	                <p>Ziel des N-Damen-Problems ist es, n Damen auf einem n x n Schachbrett zu positionieren. Hier muss beachtet werden, dass sich keine der Damen “bedrohen” darf.</p>                     
	            </div>
	            <div class=" col-xs-12 col-sm-6 col-md-4">
	            	<div class="col-sm-2"></div>
	            	<img class="col-xs-12 col-sm-10" src="css/img/queenreach.svg">
	            </div>
	        </div>
        </div>


        <div class="row" style="padding-top:40px; padding-bottom:40px; background-color:#fdfdfd;">
        	<div class="container">
	            <div class="col-xs-12 col-sm-6 col-md-4 hidden-xs">
	            	<div class="col-xs-2">
		                <h3>[1] <br>[3] <br>[5] <br>[7] <br>[2] <br>[0] <br>[6] <br>[4]</h3>
	            	</div>           	
	                <img class="col-xs-10" src="css/img/queenpos.svg">			
	            </div>
	            <div class=" col-xs-12 col-sm-6 col-md-8">           	
	       				<h2>Die Kodierung</h2>
						<p>Zum Abbilden einer Positionierung von n Damen verwenden wir ein n-stelliges Array, das die Positionen von allen Damen von oben nach unten gezählt verrät.</p>      
	            </div>

	            <div class="col-xs-12 col-sm-12 col-md-4 visible-xs">
	            	<div class="col-xs-2 visible-sm">
		                <h2>[1] <br><br>[3] <br><br>[5] <br><br>[7] <br><br>[2] <br><br>[0] <br><br>[6] <br><br>[4]</h2>
	            	</div>
	            	<div class="col-xs-2 visible-xs">
		                <h2>[1] <br>[3] <br>[5] <br>[7] <br>[2] <br>[0] <br>[6] <br>[4]</h2>
	            	</div>
	                <img class="col-xs-10" src="css/img/queenpos.svg">			
	            </div>
	        </div>
        </div>



        <div class="row" style="padding-top:40px; padding-bottom:40px; background-color:#fcfcfc;">
        	<div class="container">
	            <div class="col-xs-12">
	                <h2>Initialisierung</h2>                
	                <p class="col-sm-8">Es werden zufällige Zahlen in dem Array gespeichert. Dieses Array entspricht einem Chromosom bzw. einer möglichen Positionierung von n-Damen. Die Initialisierung wird so oft wiederholt, bis die Populationsgröße erreicht ist.</p>
	                <img class="col-sm-4" src="css/img/initialisierung.png">
	            </div>
	        </div>
        </div>


        <div class="row" style="padding-top:40px; padding-bottom:40px; background-color:#fbfbfb;">
        	<div class="container">
	            <div class="col-xs-4">
	                <h2>Evaluierung</h2>                
	                <p class="col-sm-12">Das Array hat eine Fitness, die die Anzahl an Kollisionen ist. Dementsprechend ist 0 die Fitness einer Lösung.</p>
	            </div>
	            <div class="col-xs-8">
	                <h2>Selektion</h2>                
	                <p class="col-sm-12">- Das Ziel der Selektion ist, die besten Chromosomen der Population auszuwählen.<br>
- Nach der Selektion wurden schlechtesten Chromosomen daher eliminiert.<br>
- Ein Teil der Individuen der Population nehmen an einem Turnier teil. <br>- Das Individuum, das das Turnier “gewinnt”, wird ausgewählt.</p>
	            </div>
	        </div>
	        </div>
        </div>

        <div class="row" style="padding-top:40px; padding-bottom:40px; background-color:#fafafa;">
        	<div class="container">
	            <div class="col-xs-12">
	            	<div class="col-sm-8">
		                <h2>Crossover</h2>                
		                <p>
						- Der Austausch zweier Chromosomenstücke wird Crossover genannt.<br>
						- Bei dem Ein-Punkt-Crossover werden Gene entlang einer Linie ausgetauscht.<br>
						- Der Crossover-Punkt wird zufällig bestimmt<br>
						- Die Elterngeneration geht hierbei verloren.<br>
						- Das beste Individuum wird keinem Crossover unterzogen.</p>
					</div>
					<img class="col-sm-4" style="padding-top:20px;" src="css/img/crossover1.png">
	            </div>
	        </div>
        </div>

        <div class="row" style="padding-top:40px; padding-bottom:40px; background-color:#f9f9f9;">
        	<div class="container">
	            <div class="col-xs-12">
	            	<dix class="col-sm-10">
		                <h2>Mutation</h2>                
		                <p>
						- Gene werden durch ein Zufallsprinzip mutiert.<br>
						- Die Gene, die mutiert werden, werden auchzufällig gewählt. <br>
						- Die Zahl der ersetzten Gene sollte nicht zu groß sein, da Mutationen oft schädlich sind<br>
						- Mutationen sind oft schädlich.<br>
						- Allele, die es nicht in der Anfangspopulation gegeben hat, können nur durch Mutation entstehen.<br>
						</p>
					</dix>
					<img class="col-sm-2"  style="padding-top:20px;" src="css/img/mutation.png">
	            </div>
	        </div>
        </div>