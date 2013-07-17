$(document).ready(function(){
	$(contentTextBox).load("news_item.php?tID=1", function(responseText, statusText, xhr){

	});
});

$(document).ready(function(){
	$("#n1").click(function(event){
		$("#contentTextBox").load("news_item.php?tID=1", function(responseText, statusText, xhr){
			/*if(statusText==="error"){
				alert("Error loading content!");
			}*/
		});
	});
});

$(document).ready(function(){
	$("#n2").click(function(event){
		$("#contentTextBox").load("news_item.php?tID=2", function(responseText, statusText, xhr){
			/*if(statusText==="error"){
				alert("Error loading content!");
			}*/
		});
	});
});

$(document).ready(function(){
	$("#n3").click(function(event){
		$("#contentTextBox").load("news_item.php?tID=3", function(responseText, statusText, xhr){
			/*if(statusText==="error"){
				alert("Error loading content!");
			}*/
		});
	});
});

$(document).ready(function(){
	$("#n4").click(function(event){
		$("#contentTextBox").load("news_item.php?tID=4", function(responseText, statusText, xhr){
			/*if(statusText==="error"){
				alert("Error loading content!");
			}*/
		});
	});
});

$(document).ready(function(){
	$("#n5").click(function(event){
		$("#contentTextBox").load("news_item.php?tID=5", function(responseText, statusText, xhr){
			/*if(statusText==="error"){
				alert("Error loading content!");
			}*/
		});
	});
});

$(document).ready(function(){
	$("#n6").click(function(event){
		$("#contentTextBox").load("news_item.php?tID=6", function(responseText, statusText, xhr){
			/*if(statusText==="error"){
				alert("Error loading content!");
			}*/
		});
	});
});

$(document).ready(function(){
	$("#n7").click(function(event){
		$("#contentTextBox").load("news_item.php?tID=7", function(responseText, statusText, xhr){
			/*if(statusText==="error"){
				alert("Error loading content!");
			}*/
		});
	});
});

$(document).ready(function(){
	$("#n8").click(function(event){
		$("#contentTextBox").load("news_item.php?tID=8", function(responseText, statusText, xhr){
			/*if(statusText==="error"){
				alert("Error loading content!");
			}*/
		});
	});
});

$(document).ready(function(){
	$("#n9").click(function(event){
		$("#contentTextBox").load("news_item.php?tID=9", function(responseText, statusText, xhr){
			/*if(statusText==="error"){
				alert("Error loading content!");
			}*/
		});
	});
});

$(document).ready(function(){
	$("#n10").click(function(event){
		$("#contentTextBox").load("news_item.php?tID=10", function(responseText, statusText, xhr){
			/*if(statusText==="error"){
				alert("Error loading content!");
			}*/
		});
	});
});
/*$.MySpace = {
	dropLock : 0
};



$(document).ready(function(){
	if( $.cookie("styleSelection") === "1"){
		$("#styleSelection").val('Inverted');
		$("#content").css({
			"background-color": 'black',
			"color": '#f0f0f0'
		});
		$("#indexBar").css({
			"background-color": '#f0f0f0',
			"color": 'black',
			"border-color": 'black'
		});
	}
});



$(document).ready(function(){
	$("#toggle").click(function(event){
		$('#menuUl').toggle();
		if($('#menu').css("position")==='absolute'){
			$('#menu').css({"position": 'fixed'});
		}
	 	else{
	 		$('#menu').css({"position": 'absolute'});
	 	}
	});
});



$(document).ready(function(){	
	$("a").click(function(event){
		if($.MySpace.dropLock === 1){
			event.preventDefault();
			$(this).parent().hide();
		}
	});
});



$(document).ready(function(){
	$("#reset").click(function(event){
		$("a").parent().show();
		$("#menuUl").show();
		});
	});

	
$(document).ready(function(){*/
	/*if( $.cookie("styleSelection") !== "1"){
		$.cookie("styleSelection", "0");
	}*/
	/*if($.cookie("styleSelection") === "1" ){
		return;
	}
	$.cookie("styleSelection", "0");
});



$(document).ready(function(){
	$("#dropLock").click(function(event){
		if($.MySpace.dropLock === 0){
			$.MySpace.dropLock = 1;
			alert("Menu buttons are gonna be dropped on click from now on!");
		} else {
			$.MySpace.dropLock = 0;
			alert("Menu buttons locked.");
		}
	});
});



$(document).ready(function(){
	$("#styleSelection").change(function(){
		if( $("#styleSelection").val() === "Inverted" ){
			alert("Inverted!");
			$.cookie("styleSelection", "1");
		} else 
		if( $("#styleSelection").val() === "Classic" ){
			alert("Classic!");
			$.cookie("styleSelection", "0");
		}
		location.reload();
	});
});*/