$(document).ready(function() {
 $('.edit-filed').on('click',function(){
    if($(this).hasClass('active')){
       $(this).parent().children('input').prop('readonly', true);
       $(this).parent().children('textarea').prop('readonly', true);
       $(this).removeClass('active');
    }else{
      $(this).parent().children('input').prop('readonly', false);
      $(this).parent().children('textarea').prop('readonly', false);
      $(this).addClass('active');
    }
    //console.log('t');
  });
  $('.drop').on('click',function(){
    $(this).parent().children('.drop-category').toggleClass('active').toggle();
  });
  $(document).mouseup(function (e)
  {
      var container = $(".drop");
      if (!container.is(e.target) // if the target of the click isn't the container...
          && container.has(e.target).length === 0 ) // ... nor a descendant of the container
      {
        //if($('.drop').has(e.target).length !=1 && $('.drop').css('display')=='block'){
           $('.drop-category.active').toggleClass('active').toggle();
       // }
      }
  });
  $('.furniture-listing-settings .filter-settings .sort .drop').on('click',function(){
    $(this).parent().children('.filter-drop').toggleClass('active').toggle();
  });
  $(document).mouseup(function (e)
  {
      var container = $(".furniture-listing-settings .filter-settings .sort .drop");
      if (!container.is(e.target) // if the target of the click isn't the container...
          && container.has(e.target).length === 0 ) // ... nor a descendant of the container
      {
        //if($('.drop').has(e.target).length !=1 && $('.drop').css('display')=='block'){
           $('.filter-drop.active').toggleClass('active').toggle();
       // }
      }
  });
  $('.education-listing-settings .filter-settings .sort .drop').on('click',function(){
    $(this).parent().children('.filter-drop').toggleClass('active').toggle();
  });
  $(document).mouseup(function (e)
  {
      var container = $(".education-listing-settings .filter-settings .sort .drop");
      if (!container.is(e.target) // if the target of the click isn't the container...
          && container.has(e.target).length === 0 ) // ... nor a descendant of the container
      {
        //if($('.drop').has(e.target).length !=1 && $('.drop').css('display')=='block'){
           $('.filter-drop.active').toggleClass('active').toggle();
       // }
      }
  });
  $('.education-drop-down-settings .settings-edu .sort .drop').on('click',function(){
    $(this).parent().children('.filter-drop').toggleClass('active').toggle();
  });
  $(document).mouseup(function (e)
  {
      var container = $(".education-drop-down-settings .settings-edu .sort .drop");
      if (!container.is(e.target) // if the target of the click isn't the container...
          && container.has(e.target).length === 0 ) // ... nor a descendant of the container
      {
        //if($('.drop').has(e.target).length !=1 && $('.drop').css('display')=='block'){
           $('.filter-drop.active').toggleClass('active').toggle();
       // }
      }
  });
  $('.agent-detail .agent-filter .sort .drop').on('click',function(){
    $(this).parent().children('.filter-drop').toggleClass('active').toggle();
  });
  $(document).mouseup(function (e)
  {
      var container = $(".agent-detail .agent-filter .sort .drop");
      if (!container.is(e.target) // if the target of the click isn't the container...
          && container.has(e.target).length === 0 ) // ... nor a descendant of the container
      {
        //if($('.drop').has(e.target).length !=1 && $('.drop').css('display')=='block'){
           $('.filter-drop.active').toggleClass('active').toggle();
       // }
      }
  });
  $('.drop-item').on('click',function(){
    $(this).parent().parent().children('.drop').val($(this).attr('item-value'));
  });
  $("#home-slider").owlCarousel({
     navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      pagination : false,
      singleItem:true,
      autoPlay :true
  });
  $("#product-slider").owlCarousel({
      autoPlay: 3000, //Set AutoPlay to 3 seconds
      navigation : false, // Show next and prev buttons
      pagination : false,
  });
 $(".search-items").on('click',function(){
 	var ID=$(this).attr("id");
 	$( ".search-field-box" )
	  .removeClass( "active")
	  .filter(function( index ) {
	    return $( this ).attr( "id" ) === ID;
	  })
	  .addClass( "active");
 });
 $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      },
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
   
    $( "#agent-slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      },
    });
});

 



 