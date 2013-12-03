var resHash = new Array();

function setAllowedRes(){
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

function hasExtension(arg){

	if( arg.length === 1 || ( arg[0] === "" && arg.length === 2 ) ) {
	    return -1; //hidden file with no extension		
	}
	arg.pop();
	if( arg.length == 0){
		alert("message1");	
		return 0;//visible file with no extension
	}
	else return 1;
}

function isPicture( argFile ){
	var a = argFile.split(".");
	format = a[1];
	alert(format);
	if( hasExtension(a)!=1 ){
		return 0;
	}
	else if( (format!="gif")&&(format!="jpeg")&&(format!="jpg")&&(format!="png") ){
		return 0;
	}
	else return 1;
}

$(document).ready(function(){

	setAllowedRes();

	$(".fileInput").on('change', function(ev){
		if( isPicture(this.value) ){
			var f = ev.target.files[0];
			var fr = new FileReader();
			var x = resHash[this.id]['x'];
			var y = resHash[this.id]['y'];
			var thisFI = this;
			fr.onload = function(ev2){
				console.dir(ev2);
				var image = new Image();
				image.src = ev2.target.result;
				if( (image.width>x)||(image.height>y) ){
					alert("Invalide image dimensions!");
					thisFI.value = "";
				}
			};
			fr.readAsDataURL(f);
		}
		else{
			alert("Invalide file type!");
			this.value = "";
		}
	});

});