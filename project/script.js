/*var resHash = new Array();

function setAllowedRes(){
	resHash['file1_1'] = {};
	resHash['file1_2'] = {};
	resHash['file1_3'] = {};
	resHash['file2_1'] = {};
	resHash['file2_2'] = {};
	resHash['file3_1'] = {};
	resHash['file3_2'] = {};

	resHash['file1_1']['x'] = 1000;
	resHash['file1_1']['y'] = 1000;
	resHash['file1_2']['x'] = 1000;
	resHash['file1_2']['y'] = 1000;
	resHash['file1_3']['x'] = 1000;
	resHash['file1_3']['y'] = 1000;
	resHash['file2_1']['x'] = 1000;
	resHash['file2_1']['y'] = 1000;
	resHash['file2_2']['x'] = 1000;
	resHash['file2_2']['y'] = 1000;
	resHash['file3_1']['x'] = 1000;
	resHash['file3_1']['y'] = 1000;
	resHash['file3_2']['x'] = 1000;
	resHash['file3_2']['y'] = 1000;
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

function isPicture( fileInput, argFile, ev ){
	var result = new Array(); //[0]=>Success/Failure message; [1]=>Image object on success
	result[0] = 0;//Failure message by default
	result[1] = null;//
	var a = argFile.split(".");
	format = a[1];
	if( hasExtension(a)!=1 ){
		return result;
	}
	else if( (format!="gif")&&(format!="jpeg")&&(format!="jpg")&&(format!="png") ){
		return result;
	}
	else{
		var f = ev.target.files[0];
		var fr = new FileReader();
		var x = resHash[fileInput.id]['x'];
		var y = resHash[fileInput.id]['y'];
		fr.onload = function(ev2){
			console.dir(ev2);
			var image = new Image();
			image.src = ev2.target.result;
			if( (image.width<=0) || (image.height<=0) ){
				return result;
			}
			fr.readAsDataURL(f);				
			result[0] = 1;
			result[1] = image;
		}
		return result;
	}
}

$(document).ready(function(){

	setAllowedRes();
	(".fileInput").on('change', function(ev){
		result = isPicture(this, this.value, ev);
		if( result[0] ){
			var x = resHash[this.id]['x'];
			var y = resHash[this.id]['y'];
			if( (result[1].width>x) || (result[1].height>y) ){
				alert("Invalid image dimensions!");
				this.value ="";
			}
		}else{
			alert("Invalid file type!")
			this.value="";
		}

});*/

/*$(".fileInput").on('change', function(ev){
		if( isPicture(this, this.value, ev) ){
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
					alert("Invalid image dimensions!");
					thisFI.value = "";
				}
			};
			fr.readAsDataURL(f);
		}
		else{
			alert("Invalide file type!");
			this.value = "";
		}
	});*/
	
	
	
$(document).ready(function(){
	
	$("#MenuBar").mouseenter( function(){
		$("#MenuBar").css("width", "15%");
		$("#MainContainer").css("width", "100%");
	});
	$("#MenuBar").mouseleave( function(){
		$("#MenuBar").css("width", "0%");
		$("#MainContainer").css("width", "100%");

	});
	
});

