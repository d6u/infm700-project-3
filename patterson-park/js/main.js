(function(window, $, undefined) {

  // --- Navbar Mobile Menu ---
  var screenSm;

  // adjust navbar menu behavior based on window resize
  function resizeCallback() {
    screenSm = $(window).width() >= 992 ? false : true;
    // clean css classes
    $('#js-navbar').removeClass('se-navbar-expanded');
    $('.se-navbar-top-menus-item').removeClass('se-navbar-top-menus-item-open');
    $('#se-navbar-menus').removeClass('se-navbar-menus-dropdown-open');
  };
  resizeCallback();

  var resizeTimer;
  $(window).resize(function() {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(resizeCallback, 100);
  });

  // mobile navbar menu behavior
  $('#js-navbar-toggle-menu').on('click', function() {
    $('#js-navbar').toggleClass('se-navbar-expanded');
    return false;
  });

  $('.js-navbar-menus-item').on('click', function() {
    if (screenSm) {
      $(this).parent().addClass('se-navbar-top-menus-item-open');
      $('#se-navbar-menus').scrollTop(0)
        .addClass('se-navbar-menus-dropdown-open');
      return false;
    }
  });

  $('.js-navbar-menus-item-back').on('click', function() {
    $(this).parents('.se-navbar-top-menus-item')
      .removeClass('se-navbar-top-menus-item-open');
    $('#se-navbar-menus').removeClass('se-navbar-menus-dropdown-open');
    return false;
  });



  var mapOptions = {
    center: new google.maps.LatLng(39.290734,-76.550681),
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    disableDefaultUI: true,
    disableDoubleClickZoom: true,
    draggable: false,
    keyboardShortcuts: false,
    scrollwheel: false
  };

  // Bottom Map
  var seMapBlockCanvas = document.getElementById('se-map-block-canvas');
  if (seMapBlockCanvas) {
    var map = new google.maps.Map(seMapBlockCanvas, mapOptions);

    var pattersonMarker = new google.maps.Marker({
      map: map,
      position: new google.maps.LatLng(39.289339, -76.579563),
    });
  }


  // Post with Location
  var postMap1Element = document.getElementById('md-post-item-b-cb-location');
  if (postMap1Element) {
    var postMap1 = new google.maps.Map(postMap1Element, mapOptions);
    var postMap1Marker = new google.maps.Marker({
      map: postMap1,
      position: new google.maps.LatLng(39.290734,-76.550681),
    });
  }


  // Post with Date and Location
  var postMap2Element = document.getElementById('md-post-item-b-cb-ed-map');
  if (postMap2Element) {
    var postMap2 = new google.maps.Map(postMap2Element, mapOptions);
    var postMap2Marker = new google.maps.Marker({
      map: postMap2,
      position: new google.maps.LatLng(39.290734,-76.550681),
    });
  }


  // Calendar Mouseover Popover
  $('#calendar-mouseover-popover').popover({
    animation: false,
    placement: 'top',
    trigger: 'hover',
    title: 'This is a event popover window',
    content: 'It shows a brief detail of the events'
  })


  // Navbar Scroll Hide
  // $(document).on('scroll', function() {
  //   if ( $(document).scrollTop() > 200 ) {
  //     $('#se-navbar').addClass('se-navbar-short');
  //   } else {
  //     $('#se-navbar').removeClass('se-navbar-short se-navbar-short-show');
  //   }
  // })

  // $('#se-navbar-show-menu').on('click', function() {
  //   $('#se-navbar').toggleClass('se-navbar-short-show');
  //   return false;
  // })

})(window, window.jQuery);
