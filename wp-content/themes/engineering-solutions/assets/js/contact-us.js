document.addEventListener('DOMContentLoaded', function () {
  const file = document.getElementsByClassName('file')[0];
  const upload = document.getElementsByClassName('upload-js')[0];

  if (file) {
    file.addEventListener('input', function () {
      upload.innerHTML = this.files[0].name;
    });
  }

  // "Select services of interest" set in localStorage for contact page
  const radioServicesInput = document.querySelectorAll('[name="radio-services"]');
  let isSelected = false;
  for (let i = 0; i < radioServicesInput.length; i++) {
    if (window.location.hash === `#${radioServicesInput[i].getAttribute('data-id')}`) {
      radioServicesInput[i].checked = true;
      isSelected = true;
    }
  }
  if (!isSelected) {
    radioServicesInput[radioServicesInput.length - 1].checked = true
  }
});