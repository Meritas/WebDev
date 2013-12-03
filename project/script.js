var resHash = new Array();

var r1_1 = new Array();
var r1_2 = new Array();
var r1_3 = new Array();
var r2_1 = new Array();
var r2_2 = new Array();
var r3_1 = new Array();
var r3_2 = new Array();

function setAllowedRes(){

	/*r1_1[0] = 0;
	r1_1[1] = 0;
	r1_2[0] = 0;
	r1_2[1] = 0;
	r1_3[0] = 0;
	r1_3[1] = 0;
	r2_1[0] = 0;
	r2_1[1] = 0;
	r2_2 = 0;
	r3_1 = 0;
	r3_2 = 0;*/
	
	resHash['file1_1'] = {};
	resHash['file1_2'] = {};
	resHash['file1_3'] = {};
	resHash['file2_1'] = {};
	resHash['file2_2'] = {};
	resHash['file3_1'] = {};
	resHash['file3_2'] = {};

	resHash['file1_1']['x'] = 0;
	resHash['file1_1']['y'] = 0;
	resHash['file1_2']['x'] = 0;
	resHash['file1_2']['y'] = 0;
	resHash['file1_3']['x'] = 0;
	resHash['file1_3']['y'] = 0;
	resHash['file2_1']['x'] = 0;
	resHash['file2_1']['y'] = 0;
	resHash['file2_2']['x'] = 0;
	resHash['file2_2']['y'] = 0;
	resHash['file3_1']['x'] = 0;
	resHash['file3_1']['y'] = 0;
	resHash['file3_2']['x'] = 0;
	resHash['file3_2']['y'] = 0;
}

$(document).ready(function(){

	setAllowedRes();

	$(".fileInput").on('change', function(ev){
		var f = ev.target.files[0];
		var fr = new FileReader();
		var x = resHash[this.id]['x'];
		var y = resHash[this.id]['y'];
		fr.onload = function(ev2){
			console.dir(ev2);
			var image = new Image();
			image.src = ev2.target.result;
			if( (image.width>x)||(image.height>y) ){
				alert("Error!");
			}
		};
		fr.readAsDataURL(f);
	});

});