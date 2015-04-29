/*
simple echo of variables from view html
values are 10% ... 90% since pang present lang naman.
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
	freshBar = graph.rect (70, 10, 80, 480, 5).attr({
		stroke: "#000", //outline
		strokeWidth: 3, //thickness
		fill: "#8ec4d0" //color
	});

	sophoBar = graph.rect (170, 10, 80, 480, 5).attr({
		stroke: "#000",
		strokeWidth: 3,
		fill: "#91ffb4"
	});

	juniorBar = graph.rect (270, 10, 80, 480, 5).attr({
		stroke: "#000",
		strokeWidth: 3,
		fill: "#a9a9e6"
	});

	seniorBar = graph.rect (370, 10, 80, 480, 5).attr({
		stroke: "#000",
		strokeWidth: 3,
		fill: "#ffc0cb"
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
.animate ({height: 10, y: 330}, 2000); //< 10%
.animate ({height: 50, y: 440}, 2000); //10%
.animate ({height: 100, y: 390}, 2000); //20%
.animate ({height: 150, y: 340}, 2000); //30%
.animate ({height: 200, y: 290}, 2000); //40%
.animate ({height: 250, y: 240}, 2000); //50%
.animate ({height: 300, y: 190}, 2000); //60%
.animate ({height: 350, y: 140}, 2000); //70%
.animate ({height: 400, y: 90}, 2000); //80%
.animate ({height: 450, y: 40}, 2000); //90%
.animate ({height: 330, y: 10}, 2000); //100%
*/

function animateGood (fGood, fTotal, sGood, sTotal, jGood, jTotal, srGood, srTotal)
{
	var fPercent = fGood/fTotal;
	var sPercent = sGood/sTotal;
	var jPercent = jGood/jTotal;
	var srPercent = srGood/srTotal;

	var fPercent = Math.round( fPercent * 10 ) / 10;
	var sPercent = Math.round( sPercent * 10 ) / 10;
	var jPercent = Math.round( jPercent * 10 ) / 10;
	var srPercent = Math.round( srPercent * 10 ) / 10;

	switch (fPercent)
	{
		case .1:
				freshBar.animate ({height: 50, y: 440}, 2000); //10%
				break;
		case .2:
				freshBar.animate ({height: 100, y: 390}, 2000); //20%
				break;
		case .3:
				freshBar.animate ({height: 150, y: 340}, 2000); //30%
				break;
		case .4: 
				freshBar.animate ({height: 200, y: 290}, 2000); //40%
				break;
		case .5:
				freshBar.animate ({height: 250, y: 240}, 2000); //50%
				break;
		case .6:
				freshBar.animate ({height: 300, y: 190}, 2000); //60%
				break;
		case .7:
				freshBar.animate ({height: 350, y: 140}, 2000); //70%
				break;
		case .8:
				freshBar.animate ({height: 400, y: 90}, 2000); //80%
				break;
		case .9:
				freshBar.animate ({height: 450, y: 40}, 2000); //90%
				break;
	}

	switch (sPercent)
	{
		case .1:
				sophoBar.animate ({height: 50, y: 440}, 2000); //10%
				break;
		case .2:
				sophoBar.animate ({height: 100, y: 390}, 2000); //20%
				break;
		case .3:
				sophoBar.animate ({height: 150, y: 340}, 2000); //30%
				break;
		case .4: 
				sophoBar.animate ({height: 200, y: 290}, 2000); //40%
				break;
		case .5:
				sophoBar.animate ({height: 250, y: 240}, 2000); //50%
				break;
		case .6:
				sophoBar.animate ({height: 300, y: 190}, 2000); //60%
				break;
		case .7:
				sophoBar.animate ({height: 350, y: 140}, 2000); //70%
				break;
		case .8:
				sophoBar.animate ({height: 400, y: 90}, 2000); //80%
				break;
		case .9:
				sophoBar.animate ({height: 450, y: 40}, 2000); //90%
				break;
	}

	switch (jPercent)
	{
		case .1:
				juniorBar.animate ({height: 50, y: 440}, 2000); //10%
				break;
		case .2:
				juniorBar.animate ({height: 100, y: 390}, 2000); //20%
				break;
		case .3:
				juniorBar.animate ({height: 150, y: 340}, 2000); //30%
				break;
		case .4: 
				juniorBar.animate ({height: 200, y: 290}, 2000); //40%
				break;
		case .5:
				juniorBar.animate ({height: 250, y: 240}, 2000); //50%
				break;
		case .6:
				juniorBar.animate ({height: 300, y: 190}, 2000); //60%
				break;
		case .7:
				juniorBar.animate ({height: 350, y: 140}, 2000); //70%
				break;
		case .8:
				juniorBar.animate ({height: 400, y: 90}, 2000); //80%
				break;
		case .9:
				juniorBar.animate ({height: 450, y: 40}, 2000); //90%
				break;
	}

	switch (srPercent)
	{
		case .1:
				seniorBar.animate ({height: 50, y: 440}, 2000); //10%
				break;
		case .2:
				seniorBar.animate ({height: 100, y: 390}, 2000); //20%
				break;
		case .3:
				seniorBar.animate ({height: 150, y: 340}, 2000); //30%
				break;
		case .4: 
				seniorBar.animate ({height: 200, y: 290}, 2000); //40%
				break;
		case .5:
				seniorBar.animate ({height: 250, y: 240}, 2000); //50%
				break;
		case .6:
				seniorBar.animate ({height: 300, y: 190}, 2000); //60%
				break;
		case .7:
				seniorBar.animate ({height: 350, y: 140}, 2000); //70%
				break;
		case .8:
				seniorBar.animate ({height: 400, y: 90}, 2000); //80%
				break;
		case .9:
				seniorBar.animate ({height: 450, y: 40}, 2000); //90%
				break;
	}
}

function animateProbation (fProb, fTotal, sProb, sTotal, jProb, jTotal, srProb, srTotal)
{
	var fPer = fProb/fTotal;
	var sPer = sProb/sTotal;
	var jPer = jProb/jTotal;
	var srPer = srProb/srTotal;

	var fPer = Math.round( fPer * 10 ) / 10;
	var sPer = Math.round( sPer * 10 ) / 10;
	var jPer = Math.round( jPer * 10 ) / 10;
	var srPer = Math.round( srPer * 10 ) / 10;

	switch (fPer)
	{
		case .1:
				freshBar.animate ({height: 50, y: 440}, 2000); //10%
				break;
		case .2:
				freshBar.animate ({height: 100, y: 390}, 2000); //20%
				break;
		case .3:
				freshBar.animate ({height: 150, y: 340}, 2000); //30%
				break;
		case .4: 
				freshBar.animate ({height: 200, y: 290}, 2000); //40%
				break;
		case .5:
				freshBar.animate ({height: 250, y: 240}, 2000); //50%
				break;
		case .6:
				freshBar.animate ({height: 300, y: 190}, 2000); //60%
				break;
		case .7:
				freshBar.animate ({height: 350, y: 140}, 2000); //70%
				break;
		case .8:
				freshBar.animate ({height: 400, y: 90}, 2000); //80%
				break;
		case .9:
				freshBar.animate ({height: 450, y: 40}, 2000); //90%
				break;
	}

	switch (sPer)
	{
		case .1:
				sophoBar.animate ({height: 50, y: 440}, 2000); //10%
				break;
		case .2:
				sophoBar.animate ({height: 100, y: 390}, 2000); //20%
				break;
		case .3:
				sophoBar.animate ({height: 150, y: 340}, 2000); //30%
				break;
		case .4: 
				sophoBar.animate ({height: 200, y: 290}, 2000); //40%
				break;
		case .5:
				sophoBar.animate ({height: 250, y: 240}, 2000); //50%
				break;
		case .6:
				sophoBar.animate ({height: 300, y: 190}, 2000); //60%
				break;
		case .7:
				sophoBar.animate ({height: 350, y: 140}, 2000); //70%
				break;
		case .8:
				sophoBar.animate ({height: 400, y: 90}, 2000); //80%
				break;
		case .9:
				sophoBar.animate ({height: 450, y: 40}, 2000); //90%
				break;
	}

	switch (jPer)
	{
		case .1:
				juniorBar.animate ({height: 50, y: 440}, 2000); //10%
				break;
		case .2:
				juniorBar.animate ({height: 100, y: 390}, 2000); //20%
				break;
		case .3:
				juniorBar.animate ({height: 150, y: 340}, 2000); //30%
				break;
		case .4: 
				juniorBar.animate ({height: 200, y: 290}, 2000); //40%
				break;
		case .5:
				juniorBar.animate ({height: 250, y: 240}, 2000); //50%
				break;
		case .6:
				juniorBar.animate ({height: 300, y: 190}, 2000); //60%
				break;
		case .7:
				juniorBar.animate ({height: 350, y: 140}, 2000); //70%
				break;
		case .8:
				juniorBar.animate ({height: 400, y: 90}, 2000); //80%
				break;
		case .9:
				juniorBar.animate ({height: 450, y: 40}, 2000); //90%
				break;
	}

	switch (srPer)
	{
		case .1:
				seniorBar.animate ({height: 50, y: 440}, 2000); //10%
				break;
		case .2:
				seniorBar.animate ({height: 100, y: 390}, 2000); //20%
				break;
		case .3:
				seniorBar.animate ({height: 150, y: 340}, 2000); //30%
				break;
		case .4: 
				seniorBar.animate ({height: 200, y: 290}, 2000); //40%
				break;
		case .5:
				seniorBar.animate ({height: 250, y: 240}, 2000); //50%
				break;
		case .6:
				seniorBar.animate ({height: 300, y: 190}, 2000); //60%
				break;
		case .7:
				seniorBar.animate ({height: 350, y: 140}, 2000); //70%
				break;
		case .8:
				seniorBar.animate ({height: 400, y: 90}, 2000); //80%
				break;
		case .9:
				seniorBar.animate ({height: 450, y: 40}, 2000); //90%
				break;
	}
}

function animateDismissed (fDiss, fTotal, sDiss, sTotal, jDiss, jTotal, srDiss, srTotal)
{
	var fPer = fDiss/fTotal;
	var sPer = sDiss/sTotal;
	var jPer = jDiss/jTotal;
	var srPer = srDiss/srTotal;

	var fPer = Math.round( fPer * 10 ) / 10;
	var sPer = Math.round( sPer * 10 ) / 10;
	var jPer = Math.round( jPer * 10 ) / 10;
	var srPer = Math.round( srPer * 10 ) / 10;

	switch (fPer)
	{
		case .1:
				freshBar.animate ({height: 50, y: 440}, 2000); //10%
				break;
		case .2:
				freshBar.animate ({height: 100, y: 390}, 2000); //20%
				break;
		case .3:
				freshBar.animate ({height: 150, y: 340}, 2000); //30%
				break;
		case .4: 
				freshBar.animate ({height: 200, y: 290}, 2000); //40%
				break;
		case .5:
				freshBar.animate ({height: 250, y: 240}, 2000); //50%
				break;
		case .6:
				freshBar.animate ({height: 300, y: 190}, 2000); //60%
				break;
		case .7:
				freshBar.animate ({height: 350, y: 140}, 2000); //70%
				break;
		case .8:
				freshBar.animate ({height: 400, y: 90}, 2000); //80%
				break;
		case .9:
				freshBar.animate ({height: 450, y: 40}, 2000); //90%
				break;
	}

	switch (sPer)
	{
		case .1:
				sophoBar.animate ({height: 50, y: 440}, 2000); //10%
				break;
		case .2:
				sophoBar.animate ({height: 100, y: 390}, 2000); //20%
				break;
		case .3:
				sophoBar.animate ({height: 150, y: 340}, 2000); //30%
				break;
		case .4: 
				sophoBar.animate ({height: 200, y: 290}, 2000); //40%
				break;
		case .5:
				sophoBar.animate ({height: 250, y: 240}, 2000); //50%
				break;
		case .6:
				sophoBar.animate ({height: 300, y: 190}, 2000); //60%
				break;
		case .7:
				sophoBar.animate ({height: 350, y: 140}, 2000); //70%
				break;
		case .8:
				sophoBar.animate ({height: 400, y: 90}, 2000); //80%
				break;
		case .9:
				sophoBar.animate ({height: 450, y: 40}, 2000); //90%
				break;
	}

	switch (jPer)
	{
		case .1:
				juniorBar.animate ({height: 50, y: 440}, 2000); //10%
				break;
		case .2:
				juniorBar.animate ({height: 100, y: 390}, 2000); //20%
				break;
		case .3:
				juniorBar.animate ({height: 150, y: 340}, 2000); //30%
				break;
		case .4: 
				juniorBar.animate ({height: 200, y: 290}, 2000); //40%
				break;
		case .5:
				juniorBar.animate ({height: 250, y: 240}, 2000); //50%
				break;
		case .6:
				juniorBar.animate ({height: 300, y: 190}, 2000); //60%
				break;
		case .7:
				juniorBar.animate ({height: 350, y: 140}, 2000); //70%
				break;
		case .8:
				juniorBar.animate ({height: 400, y: 90}, 2000); //80%
				break;
		case .9:
				juniorBar.animate ({height: 450, y: 40}, 2000); //90%
				break;
	}

	switch (srPer)
	{
		case .1:
				seniorBar.animate ({height: 50, y: 440}, 2000); //10%
				break;
		case .2:
				seniorBar.animate ({height: 100, y: 390}, 2000); //20%
				break;
		case .3:
				seniorBar.animate ({height: 150, y: 340}, 2000); //30%
				break;
		case .4: 
				seniorBar.animate ({height: 200, y: 290}, 2000); //40%
				break;
		case .5:
				seniorBar.animate ({height: 250, y: 240}, 2000); //50%
				break;
		case .6:
				seniorBar.animate ({height: 300, y: 190}, 2000); //60%
				break;
		case .7:
				seniorBar.animate ({height: 350, y: 140}, 2000); //70%
				break;
		case .8:
				seniorBar.animate ({height: 400, y: 90}, 2000); //80%
				break;
		case .9:
				seniorBar.animate ({height: 450, y: 40}, 2000); //90%
				break;
	}
}

function refresh ()
{
	freshBar.animate ({height: 480, y: 10}, 2000); //100%
	sophoBar.animate ({height: 480, y: 10}, 2000); //100%
	juniorBar.animate ({height: 480, y: 10}, 2000); //100%
	seniorBar.animate ({height: 480, y: 10}, 2000); //100%
}
