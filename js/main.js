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
  $('.search-drop-area').on('click',function(){
    //console.log("asd");
    $('.search-drop').removeClass('active');
    $(this).parent().children('.search-drop').toggleClass('active');
  });
  $(document).mouseup(function (e)
  {
      var container = $(".search-drop");
      if (!container.is(e.target) // if the target of the click isn't the container...
          && container.has(e.target).length === 0 ) // ... nor a descendant of the container
      {
        //if($('.drop').has(e.target).length !=1 && $('.drop').css('display')=='block'){
           $('.search-drop.active').toggleClass('active');
       // }
      }
  });
   $('.search-drop .drop-item').on('click',function(){
    $(this).parent().parent().children('.search-drop-area').children('.text').children('span').html($(this).attr('item-value'));
     $(this).parent().parent().children('.search-drop-area').children('.text').children('input').val($(this).attr('item-value'));
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

  $('.property-listing-area .right .filter-settings .sort .drop').on('click',function(){
    $(this).parent().children('.filter-drop').toggleClass('active').toggle();
  });
  $(document).mouseup(function (e)
  {
      var container = $(".property-listing-area .right .filter-settings .sort .drop");
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

  $('.setting-choose-big').on('click',function(){
    $(this).children('.drop-category').toggleClass('active').toggle();
  });
  $(document).mouseup(function (e)
  {
      var container = $(".setting-choose-big");
      if (!container.is(e.target) // if the target of the click isn't the container...
          && container.has(e.target).length === 0 ) // ... nor a descendant of the container
      {
        //if($('.drop').has(e.target).length !=1 && $('.drop').css('display')=='block'){
           $('.drop-category.active').toggleClass('active').toggle();
       // }
      }
  });
  $('.setting-choose-small').on('click',function(){
    $(this).children('.drop-category').toggleClass('active').toggle();
  });
  $(document).mouseup(function (e)
  {
      var container = $(".setting-choose-small");
      if (!container.is(e.target) // if the target of the click isn't the container...
          && container.has(e.target).length === 0 ) // ... nor a descendant of the container
      {
        //if($('.drop').has(e.target).length !=1 && $('.drop').css('display')=='block'){
           $('.drop-category.active').toggleClass('active').toggle();
       // }
      }
  });
  $('.drop-item').on('click',function(){
    $(this).parent().parent().children('.drop').val($(this).attr('item-value'));
  });
  $('.setting-choose-big .drop-category .drop-item').on('click',function(){
    $(this).parent().parent().children('span').children('.text').html($(this).attr('item-value'));
    $(this).parent().parent().children('span').children('input').val($(this).attr('item-value'));
  });
  $('.setting-choose-small .drop-category .drop-item').on('click',function(){
    $(this).parent().parent().children('span').children('.text').html($(this).attr('item-value'));
     $(this).parent().parent().children('span').children('input').val($(this).attr('item-value'));
  });
   $('.change .items').on('click',function(){
    //console.log($(this).attr('item-value'));
    $(this).parent().parent().children('.drop').children('.text').html($(this).attr('item-value'));
    $(this).parent().parent().children('.drop').children('input').val($(this).attr('item-value'));
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
  $('#product-slider .item').on('click', function(event){
    var $this = $(this);
    var smallimageID = $this.attr('id');
    var res = smallimageID.split("image");
    $('.big-image img').removeClass('active');
    $('#bigimage'+res[1]).addClass('active');
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
 
});

 



 