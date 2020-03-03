/* globals $ */

jQuery(function($) {
  $('button.navigation-toggle').click(function () {
    if ($('div.menu-header').hasClass('expanded')) {
      $('div.expanded').removeClass('expanded').slideUp(250)
      $(this).removeClass('open')
      $(this).text('Menu')
    } else {
      $('div.menu-header').addClass('expanded').slideDown(250)
      $(this).addClass('open')
      $(this).text('Close')
    }
  })
});
