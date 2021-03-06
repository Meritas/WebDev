var resHash = new Array();

function setAllowedRes(){
        resHash['file1_1'] = {};
        resHash['file1_2'] = {};
        resHash['file1_3'] = {};
        resHash['file2_1'] = {};
        resHash['file2_2'] = {};
        resHash['file3_1'] = {};
        resHash['file3_2'] = {};

        resHash['file1_1']['x'] = 354;
        resHash['file1_1']['y'] = 405;
        resHash['file1_2']['x'] = 354;
        resHash['file1_2']['y'] = 250;
        resHash['file1_3']['x'] = 896;
        resHash['file1_3']['y'] = 250;
        resHash['file2_1']['x'] = 354;
        resHash['file2_1']['y'] = 705;
        resHash['file2_2']['x'] = 896;
        resHash['file2_2']['y'] = 250;
        resHash['file3_1']['x'] = 354;
        resHash['file3_1']['y'] = 720;
        resHash['file3_2']['x'] = 1250;
        resHash['file3_2']['y'] = 250;
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

function isPictureExt( argFile ){
        var a = argFile.split(".");
        format = a[1];
        if( hasExtension(a)!=1 ){
                return 0;
        }
        else if( (format!="gif")&&(format!="jpeg")&&(format!="jpg")&&(format!="png") ){
                return 0;
        }
        else return 1;
}

function isRealImage( object ){
	
	if( (object.height==0) || (object.width==0) ) return 0;
	else return 1;
}

$(document).ready(function(){

        setAllowedRes();

        $('input[type=file]').on('change', function(ev){
                if( isPictureExt(this.value) ){
                        var f = ev.target.files[0];
                        var fr = new FileReader();
                        var x = resHash[this.id]['x'];
                        var y = resHash[this.id]['y'];
                        var thisFI = this;
                        fr.onload = function(ev2){
                                console.dir(ev2);
                                var image = new Image();
                                image.src = ev2.target.result;
                                if ( isRealImage(image) ){
	                                if( (image.width!=x)||(image.height!=y) ){
	                                        alert("Invalid image dimensions!");
	                                        thisFI.value = "";
	                                }
	                            }
	                            else{
	                            	alert("Invalid image file!");
	                            }
                        };
                        fr.readAsDataURL(f);
                }
                else{
                        alert("Invalid file type!");
                        this.value = "";
                }
        });

});	


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


//File input visibility triggering
$(document).ready(function(){

    $("#r1_1").mouseenter( function(){
        $("#file1_1").css("visibility", "visible");
    });
    $("#r1_1").mouseleave( function(){
        $("#file1_1").css("visibility", "hidden");
    });

    $("#r1_2").mouseenter( function(){
        $("#file1_2").css("visibility", "visible");
    });
    $("#r1_2").mouseleave( function(){
        $("#file1_2").css("visibility", "hidden");
    });

    $("#r1_3").mouseenter( function(){
        $("#file1_3").css("visibility", "visible");
    });
    $("#r1_3").mouseleave( function(){
        $("#file1_3").css("visibility", "hidden");
    });
 
    $("#r2_1").mouseenter( function(){
        $("#file2_1").css("visibility", "visible");
    });
    $("#r2_1").mouseleave( function(){
        $("#file2_1").css("visibility", "hidden");
    });

    $("#r2_3").mouseenter( function(){
        $("#file2_3").css("visibility", "visible");
    });
    $("#r2_3").mouseleave( function(){
        $("#file2_3").css("visibility", "hidden");
    });

    $("#r3_1").mouseenter( function(){
        $("#file3_1").css("visibility", "visible");
    });
    $("#r3_1").mouseleave( function(){
        $("#file3_1").css("visibility", "hidden");
    });

    $("#r3_3").mouseenter( function(){
        $("#file3_3").css("visibility", "visible");
    });
    $("#r3_3").mouseleave( function(){
        $("#file3_3").css("visibility", "hidden");
    });
});



function go_back(){

    window.history.back();
}
