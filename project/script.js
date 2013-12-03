var r1_1 = new Array();
var r1_2 = new Array();
var r1_3 = new Array();
var r2_1 = new Array();
var r2_2 = new Array();
var r3_1 = new Array();
var r3_2 = new Array();

function setAllowedRes(){

	r1_1 = 0;
	r1_2 = 0;
	r1_3 = 0;
	r2_1 = 0;
	r2_2 = 0;
	r3_1 = 0;
	r3_2 = 0;
}

$(document).ready(function(){

	setAllowedRes();
	
	
	$(".fileInput").on('change', function(ev){
		alert(ev.target.id);
		var f = ev.target.files[0];
		var fr = new FileReader();

		fr.onload = function(ev2){
			console.dir(ev2);
			var image = new Image();
			image.src = ev2.target.result;
			alert(image.width);
		};
		fr.readAsDataURL(f);
	});

});