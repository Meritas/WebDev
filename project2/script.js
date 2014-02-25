var itemsHTML = new Array();
var itemsNum = new Array();
var blocks = new Array();

function initialize_items_html(){

	itemsHTML[0] = "<span>INFORMATION</span>";
	itemsHTML[1] = "<span>BEST OFFERS</span>";
	itemsHTML[2] = "<span>MULTIMEDIA</span>";
	itemsHTML[3] = "<span>BILLING</span>";
	itemsHTML[4] = "<span>SPA&WELLNESS</span>";
	itemsHTML[5] = "<span>SETTINGS</span>";
}

function initialize_items_num(){
	
	itemsNum[0] = 4;
	itemsNum[1] = 5;
	itemsNum[2] = 0;
	itemsNum[3] = 1;
	itemsNum[4] = 2;	
}



function iterate_item(num, arg){

	if( itemsNum[num] + arg > 5 ){
		itemsNum[num] = 0 + arg - 1;
		return;
	}
	else if( itemsNum[num] + arg < 0){
		itemsNum[num] = 5 + arg + 1;
		return;
	}
	else{
		itemsNum[num] = itemsNum[num]+arg;
		return;
	}

}

function update_HTML_1(){

	$("#Block1").html( itemsHTML[ itemsNum[0] ] );
}

function update_HTML_2(){

	$("#Block2").html( itemsHTML[ itemsNum[1] ] );
}

function update_HTML_3(){

	$("#Block3").html( itemsHTML[ itemsNum[2] ] );
}

function update_HTML_4(){

	$("#Block4").html( itemsHTML[ itemsNum[3] ] );
}

function update_HTML_5(){

	$("#Block5").html( itemsHTML[ itemsNum[4] ] );
}

function move_right(){

	var callback = $.Callbacks();
	callback.add( iterate_item(0, -1) );
	callback.add( iterate_item(1, -1) );
	callback.add( iterate_item(2, -1) );
	callback.add( iterate_item(3, -1) );
	callback.add( iterate_item(4, -1) );
	callback.add(update_HTML_1);
	callback.add(update_HTML_2);
	callback.add(update_HTML_3);
	callback.add(update_HTML_4);
	callback.add(update_HTML_5);

	callback.fire();
}

function move_left(){

	var callback = $.Callbacks();
	callback.add( iterate_item(0, 1) );
	callback.add( iterate_item(1, 1) );
	callback.add( iterate_item(2, 1) );
	callback.add( iterate_item(3, 1) );
	callback.add( iterate_item(4, 1) );
	callback.add(update_HTML_1);
	callback.add(update_HTML_2);
	callback.add(update_HTML_3);
	callback.add(update_HTML_4);
	callback.add(update_HTML_5);

	callback.fire();
}

$(document).ready(function(){

	initialize_items_html();
	initialize_items_num();
	
	var callbacks = $.Callbacks();

	//move_left();
	//move_right();
	$(document).keydown( function(ev){
		var keyCode = ev.keyCode;
		if( keyCode === 37 ){
			move_left();
		}
		else if( keyCode === 39 ){
			move_right();
		}
	});

});

