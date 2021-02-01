(function(){
    document.querySelectorAll('.js-arrows')
        .forEach(element => {
            element.addEventListener('click', function (e) {
                e.preventDefault()
                const { direction } = element.dataset
                fetch(`http://localhost:8000/question/10/vote/${direction}`, {method: 'POST'})
                    .then((result) => {
                        result.json()
                            .then(({ vote }) => {
                                document.querySelectorAll('.vote-total')
                                .forEach(el => {
                                    el.innerHTML = vote
                                })
                            })
                    })
            })
        });
})();
