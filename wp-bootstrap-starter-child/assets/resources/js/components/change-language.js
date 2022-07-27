(function() {
    if( document.querySelector( '.js-language-change' ) ) {
        const languageChange = document.querySelector( '.js-language-change' )
        let languageCurrent = ''
    
        if( localStorage.getItem( 'language_current' ) == 'PT' ) {
            languageChange.classList.remove( 'active' ) 
            languageChange.innerHTML = localStorage.getItem( 'language_current' )
        } else {
            languageChange.classList.add( 'active' ) 
            languageChange.innerHTML = localStorage.getItem( 'language_current' )
        }
    
        languageChange.addEventListener( 'click', function() {
            this.classList.toggle( 'active' )
            
            if( this.innerText == 'PT' ) {
                this.innerHTML = 'ENG'
                languageCurrent = this.innerHTML = 'ENG'
                localStorage.setItem( 'language_current',  languageCurrent)
            } else {
                this.innerHTML = 'PT'
                languageCurrent = this.innerHTML = 'PT'
                localStorage.setItem( 'language_current',  languageCurrent)
            }
        })
    }
})()