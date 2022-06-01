const deleteForms = document.querySelectorAll('.delete-form');

deleteForms.forEach(element => {
    const title = element.getAttribute('data-name');

    element.addEventListener('submit', (e) => {
        e.preventDefault();
        const accept = confirm(`Sei sicur* di voler eliminare il fumetto ${title} dalla lista?`);

        if (accept) e.target.submit();
    })
});