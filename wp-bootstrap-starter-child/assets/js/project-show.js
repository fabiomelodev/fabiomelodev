(function() {
    const items = document.getElementsByClassName( 'js-project-items' )
    const projects = document.getElementsByClassName( 'js-projects' )

    for(const i of items) {
        i.addEventListener( 'click', function() {
            console.log(this)

            for(const j of items) {
                j.classList.remove( 'active' )
            }
            
            for(const k of projects) {
                if(k.dataset.value == this.dataset.value) {
                    k.classList.add( 'active' )
                } else if(this.dataset.value == 'all-categories') {
                    k.classList.add( 'active' ) 
                } else {
                    k.classList.remove( 'active' )
                }
            }

            this.classList.add( 'active' )
        })
    }
})()