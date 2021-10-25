document.addEventListener('DOMContentLoaded', function () {
    const file = document.getElementsByClassName('wpcf7-file')[0];
    const upload = document.getElementsByClassName('upload-js')[0];

    file.addEventListener('input', function () {
        upload.innerHTML = this.files[0].name;
    });
});

