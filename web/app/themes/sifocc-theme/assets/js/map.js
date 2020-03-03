'use strict'

jQuery(function($) {

  function showDetails(theRegion) {
    var regionId = theRegion.attr('id');
    var regionData = mapData[regionId];
    $("#interactive-map g.active").removeClass('active');
    theRegion.addClass('active');
    $("#interactive-map aside h4").text(theRegion.data("info"));
    if (theRegion.data("info") == regionData.region) {
      var regionCountries = regionData.countries;
      var regionCourts = $.map(regionCountries, function(val) {
        return "<dd>" + val + "</dd>";
      });
      $("#results").html(regionCourts.join("").replace(/,/g, ''));
      $("dd").each( function() {
        var $this =  $(this);
        if ( $this.html().replace( /\s|&nbsp;/g, '' ).length === 0 ) {
          $this.remove();
        }
      });
    }
  }

  $("#interactive-map g").hover(function () {
   showDetails($(this));
  });

  $("#interactive-map g").click(function () {
    showDetails($(this));
  });

});
