
var currentItem;
var prevItem;
var items;
// click on the next icon
// finds the next id


$("#start").on("click", function(){
	currentItem = $(".current");
	currentItem.hide().removeClass("current");
	currentItem.next().show().addClass("current");

});


$("#next").on("click", function(){



	//find the current class
	 item = $("#form div").last();

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
	
	
	event.preventDefault()
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

	 
	console.log(prevItem);

}


});





/*$(".category-section").hide();
$(".listing-details-section").hide();
$(".submitter-section").hide();

$("#nextPage").on("click", function() {

	
	
	if ($(".listing-type-section").hasClass("current")) {
		$(".listing-type-section").hide();
		$(".category-section").show();

	}
	



 	
});
*/
