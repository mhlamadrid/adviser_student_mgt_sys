/*
needed values are
total number of students per classification
	total freshmen ... total seniors
total number of students per classification per academic standing
	total freshmen good standing, total freshmen warning standing, ... total seniors dismissed standing

access an input hidden object	
var x = document.getElementById("myInput");
*/

var graph;
var freshBar;
var juniorBar;
var seniorBar;
var sophoBar;

$(document).ready(function (){
	// create new Snap SVG from SVG id
	graph = Snap("#mainGraph");

	// create X and Y axes
	// path (M(ove) goRight goDown direction length)
	var vertical = graph.path ("M 45 10 V 500");
	var horizontal = graph.path ("M 45 500 H 500");
	
	// put the axes into a group then add stroke
	var axes = graph.group (vertical, horizontal);
	axes.attr ({
		stroke: "#000",
		strokeWidth: 5
	});
	
	// graph.text (x, y, text);
	// vertical labels
	var ver_1 = graph.text (10, 450, "10%");
	var ver_2 = graph.text (10, 400, "20%");
	var ver_3 = graph.text (10, 350, "30%");
	var ver_4 = graph.text (10, 300, "40%");
	var ver_5 = graph.text (10, 250, "50%");
	var ver_6 = graph.text (10, 200, "60%");
	var ver_7 = graph.text (10, 150, "70%");
	var ver_8 = graph.text (10, 100, "80%");
	var ver_9 = graph.text (10, 50, "90%");

	// horizontal labels
	var hor_1 = graph.text (100, 530, "F/OF");
	var hor_2 = graph.text (200, 530, "SO");
	var hor_3 = graph.text (300, 530, "JR");
	var hor_4 = graph.text (400, 530, "SR");


	// graph.rect (x, y, width, length, curvy edge)
	// create bars
	freshBar = graph.rect (70, 10, 80, 480, 5);

	sophoBar = graph.rect (170, 10, 80, 480, 5);

	juniorBar = graph.rect (270, 10, 80, 480, 5);

	seniorBar = graph.rect (370, 10, 80, 480, 5);

	// group the bars
	var bars = graph.group (freshBar, sophoBar, juniorBar, seniorBar);
	bars.attr({
		stroke: "#000",
		strokeWidth: 2,
		fill: "#bada55"
	});
	
	freshBar.click (function (){
		$("#freshModal").modal('show');
	});
	
	sophoBar.click (function (){
		$("#sophoModal").modal('show');
	});
	
	juniorBar.click (function (){
		$("#juniorModal").modal('show');
	});
	
	seniorBar.click (function (){
		$("#seniorModal").modal('show');
	});

	// closing
});

/*
for animations
340 total height. around 30units per 10%. subtract 30xH to 340
.animate ({height: 10, (50) y: 330}, 2000); //< 10% 
.animate ({height: 30, (100) y: 310}, 2000); //10% 50 500
.animate ({height: 70, (150) y: 270}, 2000); //20% 100 450
.animate ({height: 100,(200) y: 240}, 2000); //30% 150 400
.animate ({height: 130,(250) y: 210}, 2000); //40% 200 350
.animate ({height: 170,(300) y: 170}, 2000); //50% 250 300
.animate ({height: 210,(350) y: 130}, 2000); //60% 300 250
.animate ({height: 240,(400) y: 100}, 2000); //70% 350 200
.animate ({height: 280,(450) y: 60}, 2000); //80% 400 150
.animate ({height: 310,(500)y: 30}, 2000); //90% 450 100
.animate ({height: 330,(550)y: 10}, 2000); //100% 500 50
*/

function animateGood ()
{
	freshBar.animate ({height: 400, y: 90}, 2000); //80%
	sophoBar.animate ({height: 350, y: 140}, 2000); //70%
	juniorBar.animate ({height: 350, y: 140}, 2000); //70%
	seniorBar.animate ({height: 150, y: 340}, 2000); //30%
}

function animateProbation ()
{
	freshBar.animate ({height: 50, y: 440}, 2000); //10%
	sophoBar.animate ({height: 50, y: 440}, 2000); //10%
	juniorBar.animate ({height: 50, y: 440}, 2000); //10%
	seniorBar.animate ({height: 50, y: 440}, 2000); //10%
}

function animateDismissed ()
{
	freshBar.animate ({height: 30, y: 460}, 2000); //<10%
	sophoBar.animate ({height: 50, y: 440}, 2000); //10%
	juniorBar.animate ({height: 50, y: 440}, 2000); //10%
	seniorBar.animate ({height: 30, y: 460}, 2000); //<10%
}

function refresh ()
{
	freshBar.animate ({height: 480, y: 10}, 2000); //100%
	sophoBar.animate ({height: 480, y: 10}, 2000); //100%
	juniorBar.animate ({height: 480, y: 10}, 2000); //100%
	seniorBar.animate ({height: 480, y: 10}, 2000); //100%
}
