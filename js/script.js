( function() {

  "use strict";

  var $trombiSpan;

  var fAnimateTrombino = function() {
    var $next = $( this ).fadeOut().next();
    if( $next.size() === 0 ) {
      $next = $trombiSpan.first();
    }
    $next
      .fadeIn()
      .animate( { 'opacity': 1 }, 1500, fAnimateTrombino );
  };

  $( function() {
    ( $trombiSpan = $( "#trombino span" ) )
      .fadeOut()
      .first()
        .fadeIn()
        .animate( { "opacity": 1 }, 1500, fAnimateTrombino );
  } );

} )();
