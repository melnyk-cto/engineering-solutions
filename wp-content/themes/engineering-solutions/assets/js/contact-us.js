document.addEventListener('DOMContentLoaded', function () {
    const file = document.getElementsByClassName('wpcf7-file')[0];
    const upload = document.getElementsByClassName('upload-js')[0];

    file.addEventListener('input', function () {
        upload.innerHTML = this.files[0].name;
    });

    // "Select services of interest" set in localStorage for contact page
    const interestServices = localStorage.getItem('interest_services');
    const radioServicesInput = document.querySelectorAll('[name="radio-services"]');
    if (interestServices) {
        radioServicesInput[interestServices].checked = true
    } else {
        radioServicesInput[4].checked = true
    }

});

