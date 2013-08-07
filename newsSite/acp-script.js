$(document).ready(function(){
	$(".MOVELEFT").click(function(event){
		var id = $(this).attr('id').replace(/_ml/, '');
		var link = 'cat_move_left.php?cID='+id;
		$("#loaderDiv").load(link, function(responseText, statusText, xhr){

		});
		/*location.reload();*/
		$("body").load("./acp_cat.php", function(responseText, statusText, xhr){

		});
	});
});

$(document).ready(function(){
	$(".MOVERIGHT").click(function(event){
		var id = $(this).attr('id').replace(/_mr/, '');
		var link = 'cat_move_right.php?cID='+id;
		$("#loaderDiv").load(link, function(responseText, statusText, xhr){

		});
		/*location.reload();*/
		$("body").load("./acp_cat.php", function(responseText, statusText, xhr){

		});
	});
});