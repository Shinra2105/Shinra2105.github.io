<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_line.php');
session_start();
$datay = $_SESSION['arr'];
if ($_SESSION['type']==4) {
	;
}
// Setup the graph
$graph = new Graph(count($datay)*45,350);
 if($_SESSION['type']==1)
		$graph->SetScale("textint",0,0);	
	else 
		$graph->SetScale("textint",0,0);

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);
$graph->SetBox(false);

$graph->title->Set("Gráfica de tiempos: ".$_SESSION['EncodTitle']);
$graph->ygrid->Show(true);//true
$graph->xgrid->Show(true);//true
$graph->xaxis->SetTickLabels($_SESSION['data']);
$graph->yaxis->SetTickLabels("-","0","+");

//$graph->xaxis->SetLabelPos(SIDE_UP);
$graph->xaxis->SetPos(0);

// Create the line
$p1 = new LinePlot($datay);
$p1->SetStyle('dashed'); 
$graph->Add($p1);
 
$p1->SetStepStyle();
$p1->SetColor('#0000FF');

// Output line
$graph->Stroke();
session_destroy();
?>