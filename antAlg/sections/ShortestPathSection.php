        <div class="row" style="padding-top:50px; padding-bottom:40px; padding-bottom:40px;  background-color:#fefefe;">
        	<div class="container text-left">
	            <div class="col-xs-12">
	                <h2>Das Problem des kürzesten Weges</h2>               
	                <p>Ein kürzester Pfad ist in der Graphentheorie ein Pfad zwischen zwei unterschiedlichen Knoten eines Graphen,
	                welcher minimale Länge bezüglich einer Gewichtsfunktion hat.
	                Haben die Kanten im Graphen alle das Gewicht 1, ist der kürzeste Pfad mit der geringstmöglichen Anzahl von Kanten zwischen dem Anfangspunkt und dem Ziel.
					</p>                     
	            </div>
	            <div class=" col-xs-12">
	            	
	            	<img class="col-xs-8 col-xs-offset-2" src="css/img/paths.png">
	            </div>
	        </div>
        </div>


        <div class="row" style="padding-top:40px; padding-bottom:40px; background-color:#fdfdfd;">
        	<div class="container text-left">

	            <div class=" col-xs-12">           	
	       				<h2>Ablauf - das natürliche Vorbild</h2>
						<p>Hier wenden wir uns an ein natürliches Vorbild, die Pheromonspur von Ameisen.<br>
						Bei der Futtersuche scheiden einzelne Ameisen entlang ihres Weges einen Duftstoff (Pheromon) aus. Andere Ameisen wählen wahrscheinlicher einen Weg mit höherer Pheromonkonzentration. Verbindet man in einem Experiment eine Futterquelle mit zwei unterschiedlich langen Wegen mit dem Nest, so betreten die Ameisen auf ihrer Suche nach Futter beide Wege etwa gleich häufig. Die Ameisen auf dem kürzeren Weg kehren jedoch schneller von der Futterstelle zurück, so dass mit der Zeit auf dem kürzesten Pfad eine höhere Pheromonkonzentration als auf dem anderen vorherrscht. In der Folge wählen die nachkommenden Ameisen bevorzugt diesen Weg: Sie scheinen entlang einer Straße zu laufen, eine Ameisenstraße ist entstanden.</p>      
	            </div>	
	            	           <div class="col-xs-12">
          	
	              <img class="col-xs-6 col-xs-offset-3" src="css/img/ACOant.png">			
	            </div>
      
	        </div>
        </div>



        <div class="row" style="padding-top:40px; padding-bottom:40px; background-color:#fcfcfc;">
        	<div class="container text-left">
	           <div class="col-xs-12 col-sm-4">
          	
	              <img class="col-xs-10" src="css/img/ant_matrix.png">			
	            </div>
	            <div class=" col-xs-12 col-sm-8">           	
	       				<h2>Die Kodierung</h2>
						<p>Der Graph ist in einem 2D Array gespeichert.
						Die vertikale Achse dieses Arrays beschreibt den Anfangs-Knoten, die horizontale den Ziel-Knoten.
						Hierbei bedeutet -1, dass keine Verbindung besteht.
						Jeder sonstige Wert zwischen Anfangs-, und Ziel-Knoten symbolisiert die Distanz der Vebindung.
						</p>      
	            </div>	
	        </div>
        </div>


        <div class="row" style="padding-top:40px; padding-bottom:40px; background-color:#fbfbfb;">
        	<div class="container">
	            <div class="col-xs-12 text-left">
	                <h2>Ameisen Algorithmus, die Schritte:</h2>                
	                
	                	
	                		<h4>Initialisierung</h4> 
	                		<p>Bei diesem Schritt sind alle Ameisen noch im Anfamgs-Knoten </p>
	                		
	                		<h4>Reise 1</h4>
	                		<p>Hier werden die Ameisen zunächst, gleichmäßig verteilt zu allen (mit dem Anfangs-Knoten) verbundenen Knoten geschickt.	
	                		</p>                			
	                		
	                		<h4>Pheromonspur 1</h4>	                			
	                		<p>	Wenn sie zurückkehren wird der gelegte Pheromonwert an die Anzahl der Ameisen und die Distanz des Weges angepasst.
	                			Am Ende von jedem Zyklus wird die pheromonspur dirch einen 0.n Wert dividiert, dadurch verblasst die Spur nach einiger Zeit.
	                		</p>
	                		
	                		<h4>Travel 2->n</h4> 
	                		<p>	Nun reisen die Ameisen zum nächst jewiligen Knoten und die Phermone werden erneut den Werten entsprechend gelegt. 
	                			Die Anzahl der reisenden Ameisen wird nun nicht mehr gleichmäßig, sondern den pheromonwerten entsprechend aufgeteilt. 
	                			Von jetzt an wiederholen sich die vorherigen Schritte wiederholen sich bis ein optimaler (kürzester) Weg gefunden wird.
	                		</p>

	            </div>
	        </div>
	        </div>
        </div>

        <div class="row" style="padding-top:40px; padding-bottom:40px; background-color:#fafafa;">
        	<div class="container">
	            <div class="col-xs-12 text-left">
	            	
		                <h2>Ameisenalgorithmus: Anwendungen</h2>                
		                <p>
						

Die charakteristischen Eigenschaften eines diskreten Optimierungsproblems sind: eine endliche Menge von Knoten, eine endliche Menge von gerichteten, gewichteten Kanten, und oft explizit markierte Start- und Zielknoten.
Weil die Kanten gerichtet sind, muss die Gewichtung der Kanten allerdings in beiden Richtungen nicht gleich sein und es können auch eventuell mehrere Gewichtungen pro Kante existieren. 

ACO-Algorithmen eignen sich besonders gut für das Lösen von NP-harten Problemen. Das Problem kann dabei nach einem oder nach mehreren Zielen optimiert werden. ACO-Algorithmen können auch eingesetzt werden, um dynamische Probleme zu lösen, bei denen sich die Kosten der verschiedenen Kanten während des Problemlösungsprozesses verändern. Weil die einzelnen Ameisen untereinander Unabhängig sind, können auch verteilte Probleme, deren Informationen über mehrere Rechner verteilt sind, mit einem ACO-Algorithmus gelöst werden.

Der ACO kann auf das Traveling Salesperson Problem effizient angewendet werden. Andere Anwendungen sind z.B. Post- und Auslieferungsrouten, Routenoptimierung zur Nachschubversorgung von Fertigungslinien mit minimalem Transportmitteleinsatz, um im Telefonnetzwerk schnell freie Strecken zu finden sowie für Personaleinsatzplanung.


						</p>
					
					
	            </div>
	        </div>
        </div>
        <!--

        <div class="row" style="padding-top:40px; padding-bottom:40px; background-color:#f9f9f9;">
        	
        </div>
        -->