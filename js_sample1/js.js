var SHAPE;

function computearea(){
	var s1 = $("#side1").val();
	var s2 = $("#side2").val();
	
	var area = s1*s2;
	
	$("#shapearea").html(
	"<table border='1'>"+
		"<tr>" +
			"<td>"+ SHAPE +"</td>" +
			"<td>"+ area +"</td>" +
		"</tr>"+
	"</table>"
	);
	
	
}

function clearfield(){
	$("#side1").val('');
	$("#side2").val('');
	$("#shapearea").html(0);
}

function selectedshape(){
	var sel = $("#shape").val();
	console.log(sel);
	switch(sel){
		case '1':
			SHAPE="Square";
			break;
		case '2':
			SHAPE="Rectangle";
			break;
		default:
			SHAPE="Parallelogram";
			break;
	}
	console.log(SHAPE);
}