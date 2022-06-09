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
  const contactTitleH1 = $('.contact-title h1');
  const contactTitleH3 = $('.contact-title h3');
  const radioServices = $('.radio-services');
  const contactFormInput = $('.contact-form .input');
  const contactFormButtons = $('.contact-form .wrapper-buttons');

  // "Blog" страница
  const blogItem = $('.blog-item');

  // "Clients" страница
  const work = $('.work');

  // "Power System Studies" страница
  const studiesDescription = $('.studies-description');
  const studiesStudyH2 = $('.studies .study h2');
  const studiesStudy = $('.studies .study-description');
  const studiesStudyImage = $('.studies .study-image');
  const studiesCalculationH2 = $('.studies .calculation h2');
  const studiesCalculationDescription = $('.studies .calculation-description');
  const studiesCalculationImage = $('.studies .calculation-image');
  const studiesCoordination = $('.studies .coordination-study');
  const studiesAnalysis = $('.studies .analysis');
  const studiesWarning = $('.studies .warning-inner');
  const studiesWarningBtn = $('.studies .warning .btn');

  // "Lighting Design & Rendering Services" страница
  const renderingsContent = $('.renderings .renderings-content');
  const renderingsIndustrial = $('.renderings .industrial-lighting');
  const renderingsCommercial = $('.renderings .commercial-lighting');
  const renderingsSports = $('.renderings .sports-lighting');
  const renderingsPhotorealistic = $('.renderings .photorealistic-renderings');

  // "Electrical Design & CAD/BIM Services" страница
  const electricalContent = $('.electrical .electrical-content-inner');
  const electricalSlider = $('.electrical .electrical-slider');

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

    // "Lighting Design & Rendering Services" страница
    isVisible(renderingsContent);
    isVisible(renderingsIndustrial);
    isVisible(renderingsCommercial);
    isVisible(renderingsSports);
    isVisible(renderingsPhotorealistic);

    // "Electrical Design & CAD/BIM Services" страница
    isVisible(electricalContent);
    isVisible(electricalSlider);

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

    // "Power System Studies" страница
    isVisible(studiesDescription);
    isVisible(studiesStudyH2);
    isVisible(studiesStudy);
    isVisible(studiesStudyImage.eq(0));
    isVisible(studiesStudyImage.eq(1));
    isVisible(studiesCalculationH2);
    isVisible(studiesCalculationDescription);
    isVisible(studiesCalculationImage.eq(0));
    isVisible(studiesCalculationImage.eq(1));
    isVisible(studiesCoordination);
    isVisible(studiesAnalysis);
    isVisible(studiesWarning);
    isVisible(studiesWarningBtn);

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