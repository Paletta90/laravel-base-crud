const deleteForms = document.querySelectorAll('.deleteForms');

deleteForms.forEach( ( elem ) => {

    const title = elem.getAttribute('data-name');

    elem.addEventListener('submit', (e) => {

        e.preventDefault();

        const accept = confirm(`Sei sicuro di voler eliminare il fumetto ${title}:  `);
        
        if(accept){
            e.target.submit();
        }
    })

});