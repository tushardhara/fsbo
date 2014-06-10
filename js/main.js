$(document).ready(function() {
 
  $("#home-slider").owlCarousel({
     navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      pagination : false,
      singleItem:true,
      autoPlay :true
  });
 $( "#search-draggable" ).draggable({ containment: "#dragable-search-area", scroll: false ,cursor: "move" });
 $(".search-items").on('click',function(){
 	var ID=$(this).attr("id");
 	$( ".search-field-box" )
	  .removeClass( "active")
	  .filter(function( index ) {
	    return $( this ).attr( "id" ) === ID;
	  })
	  .addClass( "active");
 });
});