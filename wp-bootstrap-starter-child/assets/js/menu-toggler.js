(function($){
	$( '.js-btn-toggler' ).on( 'click', function() {
		$(this).toggleClass('active')
		$( '.js-navbar' ).toggleClass( 'active' )
		$( '.js-social-media' ).toggleClass( 'active' )
		$( '.js-widget-language' ).toggleClass( 'is-move' )
		$( 'body' ).toggleClass( 'overflow-hidden' )
	})

	$( '.nav-item' ).on( 'click', function() {
		$( '.js-btn-toggler' ).removeClass( 'active' )
		$( '.js-navbar' ).removeClass( 'active' )
		$( '.js-social-media' ).removeClass( 'active' )
		$( '.js-widget-language' ).removeClass( 'is-move' )
		$( 'body' ).removeClass( 'overflow-hidden' )
	})

	$( '.js-navbar-hide' ).on( 'click', function() {
		$( '.js-btn-toggler' ).removeClass( 'active' )
		$( '.js-navbar' ).removeClass( 'active' )
		$( '.js-social-media' ).removeClass( 'active' )
		$( '.js-widget-language' ).removeClass( 'is-move' )
		$( 'body' ).removeClass( 'overflow-hidden' )
	})
})(jQuery)