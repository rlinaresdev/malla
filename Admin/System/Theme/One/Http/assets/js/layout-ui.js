var mainbox = jQuery("[role=one]"),
    mainbar = jQuery("[role=one] .one-body .one-navbar");


if( mainbox.hasClass("dashboard") ) {
   jQuery(window).scroll(function() {

      if( jQuery(this).scrollTop() >= 60 && !mainbar.hasClass("flow") ) {
         mainbar.addClass("flow");
      }

      if( jQuery(this).scrollTop() < 60 && mainbar.hasClass("flow") ) {
         mainbar.removeClass("flow");
      }

   });
}

/*
* ASIDE TOGGLER */
jQuery("[role=one].dashboard .one-aside .toggle").bind("click", function() {
   jQuery("[role=one].dashboard .one-aside").toggleClass("show");
});
jQuery("[role=one] .one-aside .one-aside-header .bt.bt-close").bind("click", function() {
   jQuery("[role=one].dashboard .one-aside").toggleClass("show");
});
