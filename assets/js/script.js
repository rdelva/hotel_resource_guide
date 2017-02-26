
var currentItem;
var prevItem;
var items;
// click on the next icon
// finds the next id



$("#start").on("click", function(){
	currentItem = $(".current");
	currentItem.hide().removeClass("current");
	currentItem.next().show().addClass("current");
	$("#prev").show();
	$("#next").show();
	$(".headLogo").show();
	$(".deadline").show();

});


$("#next").on("click", function(){



	//find the current class
	 item = $(".section").last();

	 console.log(item);


	//if (!(currentItem.hasClass("box3")))


	if(!(item.hasClass("current")))

	{

	 currentItem = $(".current");	

	//hides and remove the current class
	 currentItem.hide().removeClass("current");

	 //go to the next item and make it visible

	 var nextItem = currentItem.next().show();
	 nextItem.addClass("current");

	console.log("true");
	}

	else {
		event.preventDefault();
	}


});


$("#prev").on("click", function(){



	item = $("#form div").first();
	console.log(item);


	if(!(item.hasClass("current")))
	{


		//find the current class
		 currentItem = $(".current");


		 //remove current class
		 currentItem.hide().removeClass("current");


		 //find the previous item
		 prevItem = currentItem.prev();


		 //add the current  class to prev

		 prevItem = prevItem.show().addClass("current");


		 if(prevItem.hasClass("current") && prevItem.hasClass("main"))
		 {
		 	$("#prev").hide();
		 	$("#next").hide();
		 	$(".deadline").hide();
		 	$(".headLogo").hide();
		 }

		 
		console.log(prevItem);

	}


});


