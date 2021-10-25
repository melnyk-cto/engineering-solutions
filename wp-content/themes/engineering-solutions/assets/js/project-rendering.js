document.addEventListener('DOMContentLoaded', function () {

    const more = document.getElementsByClassName('link-more');

    for (let i = 0; i < more.length; i++) {
        more[i].addEventListener('click', function (e) {
            e.preventDefault();
            this.parentElement.classList.toggle('show');
            if (this.querySelector('.text-more') === 'Less') {
                this.querySelector('.text-more').innerHTML = 'More'
            } else {
                this.querySelector('.text-more').innerHTML = 'Less'
            }
        });
    }
});

