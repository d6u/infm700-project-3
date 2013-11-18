// Avoid `console` errors in browsers that lack a console.
//
(function() {
  var method;
  var noop = function () {};
  var methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeStamp', 'trace', 'warn'
  ];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
        console[method] = noop;
    }
  }
}());



(function(window, $, undefined) {

  // show/hide menu
  $('#js-show-menu').on('click', function(event) {
    $('.ly-inner-wrap').toggleClass('pushed');
    if (!$('.ly-inner-wrap').hasClass('pushed')) {
      $('.ly-inner-wrap').removeClass('pushed-two-level');
      $('.se-navbar-menu-top .sub-menu').removeClass('selected');
    }
  });

  // show sub menu
  $('.se-navbar-menus').on('click', '.se-navbar-menu-top > li > a', function() {
    if ($('.se-navbar-menus').height() != 88) {
      // on mobile device
      if (!$('.ly-inner-wrap').hasClass('pushed-two-level')) {
        // no sub menu showed
        if ($(this).next('ul.sub-menu').length) {
          $(this).next('ul.sub-menu').addClass('selected');
          $('.ly-inner-wrap').addClass('pushed-two-level');
          return false;
        }
      } else {
        // has sub menu showed
        if ($(this).next('ul.sub-menu').length) {
          // has sub menu element
          if ($(this).next('ul.sub-menu').hasClass('selected')) {
            // clicked current showed sub menu's parent
            $(this).next('ul.sub-menu').removeClass('selected');
            $('.ly-inner-wrap').removeClass('pushed-two-level');
            return false;
          } else {
            // clicked other element
            $('.se-navbar-menu-top .sub-menu').removeClass('selected');
            $(this).next('ul.sub-menu').addClass('selected');
            return false;
          }
        }
      }
    }
  })

  // hide sub menu
  $('.se-navbar-menus').on('click', '.sub-menu-back-btn > a', function() {
    $(this).parents('.sub-menu.selected').removeClass('selected');
    $('.ly-inner-wrap').removeClass('pushed-two-level');
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
