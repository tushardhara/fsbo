$(document).ready(function() {
 $('.edit-filed').on('click',function(){
    if($(this).hasClass('active')){
       $(this).parent().children('input').prop('disabled', true);
       $(this).parent().children('textarea').prop('disabled', true);
       $(this).removeClass('active');
    }else{
      $(this).parent().children('input').prop('disabled', false);
      $(this).parent().children('textarea').prop('disabled', false);
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
  $('.drop-item').on('click',function(){
    $(this).parent().parent().children('.drop').val($(this).attr('item-value'));
  });
  $('.filter-drop .items').on('click',function(){
    //event.preventDefault();
    alert('asd');
    console.log($(this).attr('item-value'));
    //$(this).parent().parent().children('.text').html($(this).attr('item-value'));
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
  $('#Container').mixItUp({
    load: {
      filter: '.cat1'
    }
  });

});

function mp_initialize_map (mp_position, mp_marker_url, mp_marker_w, mp_marker_h, mp_marker_title) {

      // fornisce latitudine e longitudine
      var latlng = new google.maps.LatLng(mp_position[0],mp_position[1]);
      var marker = new google.maps.MarkerImage(mp_marker_url, new google.maps.Size(mp_marker_w,mp_marker_h), new google.maps.Point(0,0) );

      // imposta le opzioni di visualizzazione
      var options = {
            zoom: 16,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            panControl: false,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false
      };
           
      // crea l'oggetto mappa
      var map = new google.maps.Map(document.getElementById('map'), options);

      var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: marker, 
            title: mp_marker_title + " - Click for more informations"
      });

      var bew = [
            {
                  featureType: "all",
                  stylers: [
                         { saturation: -100 }
                  ]
            }
      ];

      map.setOptions({styles: bew});

      // Marker click event
      google.maps.event.addListener(marker, 'click', function() {
            $('.content-wrap').toggleClass('table , none');
      })

      // Content click event
      $('.content').click(function(){
            $('.content-wrap').toggleClass('none , table');
      })

}



    jQuery(document).ready(function($) {
      
      
      var position     = [-33.923598,18.419389];
      var marker_url   = "http://i.imgur.com/VpY8nm6.png";
      var marker_w     = 34;
      var marker_h     = 47;
      var marker_title = "Mapped WordPress Theme Demo";
      window.onload = mp_initialize_map(position, marker_url,marker_w,marker_h,marker_title);

    }); 



 