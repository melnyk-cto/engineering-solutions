jQuery(document).ready(function ($) {
  $('body').css('opacity', '1');

  $.fn.isInViewport = function () {
    const elementTop = $(this).offset().top;
    const elementBottom = elementTop + $(this).outerHeight();
    const viewportTop = $(window).scrollTop();
    const viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
  };

  const isVisible = (selector) => {
    if (selector.length >= 1) {
      if (selector.isInViewport()) {
        selector.addClass('animation');
      } else {
        selector.removeClass('animation');
      }
    }
  }

  // Header
  const header = $('.header');

  // Footer
  const footer = $('.footer');

  // Общие секции
  const banner = $('.banner');
  const benefits = $('.benefits');
  const services = $('.services');
  const requirements = $('.requirements');
  const solutions = $('.solutions');
  const outcome = $('.outcome');
  const testimonial = $('.testimonial');

  // "Team" страница
  const teamDescription = $('.team-content-description');
  const teamImages = $('.team-content-images');

  // "Contact us" страница
  const contactImage = $('.contact-image');
  const contactTitleH1 = $('.contacts h1');
  const contactTitleH3 = $('.contacts h3');
  const radioServices = $('.radio-services');
  const contactFormInput = $('.contact-form .input');
  const contactFormButtons = $('.contact-form .wrapper-buttons');

  // "Blog" страница
  const blogItem = $('.blog-item');

  // "Clients" страница
  const work = $('.work');

  // "Lighting Design & Rendering Services" страница
  const renderingsContent = $('.renderings .renderings-content');
  const renderingsIndustrial = $('.renderings .industrial-lighting');
  const renderingsCommercial = $('.renderings .commercial-lighting');
  const renderingsSports = $('.renderings .sports-lighting');
  const renderingsPhotorealistic = $('.renderings .photorealistic-renderings');
  const studiesDescription = $('.studies-description');
  const studiesStudyH2 = $('.renderings .studies-description h2');
  const studiesStudy = $('.renderings .study-description');
  const studiesStudyImage = $('.renderings .study-image');
  const electricalContent = $('.renderings .electrical-content-inner');
  const electricalSlider = $('.renderings .electrical-slider');

  // "Unity 3D/C# software development" страница
  const softwareContent = $('.software .software-description-content');
  const softwareImage = $('.software .software-video-image');
  const softwareBtn = $('.software .software-video .btn');

  // "Photorealistic renderings for busSTRUT" страница
  const photorealisticRenderings = $('.project-renderings .photorealistic-renderings');

  const runAnimations = () => {
    // Header
    isVisible(header);

    // Footer
    isVisible(footer);

    // Общие секции
    isVisible(banner);
    isVisible(benefits);
    isVisible(services);
    isVisible(requirements);
    isVisible(solutions);
    isVisible(outcome);
    isVisible(testimonial);

    // "Services, Project" страница
    isVisible(renderingsContent);
    for (let i = 0; i < renderingsIndustrial.length; i++) {
      isVisible(renderingsIndustrial.eq(i));
    }
    for (let i = 0; i < renderingsCommercial.length; i++) {
      isVisible(renderingsCommercial.eq(i));
    }
    for (let i = 0; i < renderingsSports.length; i++) {
      isVisible(renderingsSports.eq(i));
    }
    for (let i = 0; i < renderingsPhotorealistic.length; i++) {
      isVisible(renderingsPhotorealistic.eq(i));
    }
    for (let i = 0; i < electricalContent.length; i++) {
      isVisible(electricalContent.eq(i));
    }
    isVisible(electricalSlider);
    for (let i = 0; i < studiesDescription.length; i++) {
      isVisible(studiesDescription.eq(i));
    }
    for (let i = 0; i < studiesStudyH2.length; i++) {
      isVisible(studiesStudyH2.eq(i));
    }
    for (let i = 0; i < studiesStudy.length; i++) {
      isVisible(studiesStudy.eq(i));
    }
    for (let i = 0; i < studiesStudyImage.length; i++) {
      isVisible(studiesStudyImage.eq(i));
    }

    // "Team" страница
    isVisible(teamDescription);
    isVisible(teamImages);

    // "Contact us" страница
    isVisible(contactImage);
    isVisible(contactTitleH1);
    isVisible(contactTitleH3);
    isVisible(radioServices);
    for (let i = 0; i < contactFormInput.length; i++) {
      isVisible(contactFormInput.eq(i));
      isVisible(blogItem.eq(i));
    }
    isVisible(contactFormButtons);

    // "Clients" страница
    isVisible(work);

    // "Unity 3D/C# software development" страница
    isVisible(softwareContent);
    isVisible(softwareImage);
    isVisible(softwareBtn);

    // "Photorealistic renderings for busSTRUT" страница
    isVisible(photorealisticRenderings);

    // "Blog" страница
    for (let i = 0; i < blogItem.length; i++) {
      isVisible(blogItem.eq(i));
    }

  }
  runAnimations();

  // animations on scroll
  $(window).on('scroll', function () {
    runAnimations();
  });

});