// Demo Theme Options

$(document).ready(() => {
    if(localStorage.getItem('sideBarClass')){
        $('#sideBarMini').addClass(localStorage.getItem('sideBarClass'));
        $('.close-sidebar-btn').addClass('is-active')
    }

    $(".close-sidebar-btn").click(function () {
        const closeBtn = $(this);

        if (closeBtn.hasClass("is-active")) {
            closeBtn.removeClass("is-active");
            localStorage.removeItem('sideBarClass');
            $('#sideBarMini').removeClass('closed-sidebar');

        } else {
            closeBtn.addClass("is-active");
            localStorage.setItem('sideBarClass','closed-sidebar')
            $('#sideBarMini').addClass('closed-sidebar');
        }
    });

  $(".btn-open-options").click(function () {
    $(".ui-theme-settings").toggleClass("settings-open");
  });

  $(".switch-container-class").on("click", function () {
      const classToSwitch = $(this).attr("data-class");
      const containerElement = ".app-container";
      $(containerElement).toggleClass(classToSwitch);

    $(this).parent().find(".switch-container-class").removeClass("active");
    $(this).addClass("active");
  });

  $(".switch-theme-class").on("click", function () {
      const classToSwitch = $(this).attr("data-class");
      const containerElement = ".app-container";

      if (classToSwitch == "app-theme-white") {
      $(containerElement).removeClass("app-theme-gray");
      $(containerElement).addClass(classToSwitch);
    }

    if (classToSwitch == "app-theme-gray") {
      $(containerElement).removeClass("app-theme-white");
      $(containerElement).addClass(classToSwitch);
    }

    if (classToSwitch == "body-tabs-line") {
      $(containerElement).removeClass("body-tabs-shadow");
      $(containerElement).addClass(classToSwitch);
    }

    if (classToSwitch == "body-tabs-shadow") {
      $(containerElement).removeClass("body-tabs-line");
      $(containerElement).addClass(classToSwitch);
    }

    $(this).parent().find(".switch-theme-class").removeClass("active");
    $(this).addClass("active");
  });

  $(".switch-header-cs-class").on("click", function () {
    var classToSwitch = $(this).attr("data-class");
    var containerElement = ".app-header";

    $(".switch-header-cs-class").removeClass("active");
    $(this).addClass("active");

    $(containerElement).attr("class", "app-header");
    $(containerElement).addClass("header-shadow " + classToSwitch);
  });

  $(".switch-sidebar-cs-class").on("click", function () {
    var classToSwitch = $(this).attr("data-class");
    var containerElement = ".app-sidebar";

    $(".switch-sidebar-cs-class").removeClass("active");
    $(this).addClass("active");

    $(containerElement).attr("class", "app-sidebar");
    $(containerElement).addClass("sidebar-shadow " + classToSwitch);
  });
});
