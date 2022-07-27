(function($) {
    $(window).on('scroll', function () {
	    if ($(window).scrollTop()) {
	      $( '.js-widget-social-media' ).addClass( 'is-show' )
	    } else {
	      $( '.js-widget-social-media' ).removeClass( 'is-show active')
          $( '.js-list-social-media').removeClass( 'active' ) 
	    }
	});

    if(document.querySelector( '.js-widget-social-media' )) {
        const widget = document.querySelector( '.js-widget-social-media' )
        const list = document.querySelector( '.js-list-social-media' )

        widget.addEventListener( 'click', function() {
            this.classList.toggle( 'active' )

            if(this.classList.contains( 'active' )) {
                setTimeout(function() {
                    list.classList.add( 'active' )
                }, 500)
            } else {
                list.classList.remove( 'active' )
            }
        })
    }
})(jQuery)