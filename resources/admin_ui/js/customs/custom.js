
$(document).on('load', () => {
   console.log()
});
$(document).ready(function(){
    if(localStorage.getItem('sideBarClass')){
        $('#sideBarMini').addClass(localStorage.getItem('sideBarClass'));
        $('.close-sidebar-btn').addClass('is-active')
    }

    // Sidebar Menu
    setTimeout(function () {
        $(".vertical-nav-menu").metisMenu();
      }, 100);

      // Search wrapper trigger

      $(".search-icon").click(function () {
        $(this).parent().parent().addClass("active");
      });

      $(".search-wrapper .btn-close").click(function () {
        $(this).parent().removeClass("active");
      });

      // BS5 Popover

      var popoverTriggerList1 = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover-custom-content"]'));
      var popoverList = popoverTriggerList1.map(function (popoverTriggerEl1) {
        return new bootstrap.Popover(popoverTriggerEl1,
          {
            html: true,
          placement: "auto",
          template:
            '<div class="popover popover-custom" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
          content: function () {
            var id = $(this).attr("popover-id");
            return $("#popover-content-" + id).html();
          },
          });
      });

      // Stop Bootstrap 5 Dropdown for closing on click inside

      $(".dropdown-menu").on("click", function (event) {
        var events = $._data(document, "events") || {};
        events = events.click || [];
        for (var i = 0; i < events.length; i++) {
          if (events[i].selector) {
            if ($(event.target).is(events[i].selector)) {
              events[i].handler.call(event.target, event);
            }

            $(event.target)
              .parents(events[i].selector)
              .each(function () {
                events[i].handler.call(this, event);
              });
          }
        }
        event.stopPropagation(); //Always stop propagation
      });

      var popoverTriggerList2 = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover-custom-bg"]'));
      var popoverList = $('[data-bs-toggle="popover-custom-bg"]').each(function (popoverTriggerEl2) {
        var popClass = $(this).attr('data-bg-class');
        return new bootstrap.Popover($(this), {
          trigger: "focus",
          placement: "top",
          template:
            '<div class="popover popover-bg ' +
            popClass +
            '" role="tooltip"><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
        });
      });

      // BS5 Popover

      var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
      var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
      });

      $('[data-bs-toggle="popover-custom"]').each(function (i, obj) {
        return new bootstrap.Popover($(this), {
          html: true,
          container: $(this).parent().find(".rm-max-width"),
          content: function () {
            return $(this)
              .next(".rm-max-width")
              .find(".popover-custom-content")
              .html();
          },
        });
      });


      // BS5 Tooltips
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
      });

      var tooltipTriggerList1 = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip-light"]'));
      var tooltipList = tooltipTriggerList1.map(function (tooltipTriggerEl1) {
        return new bootstrap.Tooltip(tooltipTriggerEl1, {
          template:
          '<div class="tooltip tooltip-light"><div class="tooltip-inner"></div></div>'
        }
          );
      });

      // Drawer

      $(".open-right-drawer").click(function () {
        $(this).addClass("is-active");
        $(".app-drawer-wrapper").addClass("drawer-open");
        $(".app-drawer-overlay").removeClass("d-none");
      });

      $(".drawer-nav-btn").click(function () {
        $(".app-drawer-wrapper").removeClass("drawer-open");
        $(".app-drawer-overlay").addClass("d-none");
        $(".open-right-drawer").removeClass("is-active");
      });

      $(".app-drawer-overlay").click(function () {
        $(this).addClass("d-none");
        $(".app-drawer-wrapper").removeClass("drawer-open");
        $(".open-right-drawer").removeClass("is-active");
      });

      $(".mobile-toggle-nav").click(function () {
        $(this).toggleClass("is-active");
        $(".app-container").toggleClass("sidebar-mobile-open");
      });

      $(".mobile-toggle-header-nav").click(function () {
        $(this).toggleClass("active");
        $(".app-header__content").toggleClass("header-mobile-open");
      });

      $(".mobile-app-menu-btn").click(function () {
        $(".hamburger", this).toggleClass("is-active");
        $(".app-inner-layout").toggleClass("open-mobile-menu");
      });

      // Responsive

      var resizeClass = function () {
        var win = document.body.clientWidth;
        if (win < 1250) {
          $(".app-container").addClass("closed-sidebar-mobile closed-sidebar");
        } else {
          $(".app-container").removeClass("closed-sidebar-mobile");
        }
      };

      $(window).on("resize", function () {
        resizeClass();
      });

      resizeClass();
})

// contact us submit START

// Form disabler Start
$('.disabler').on('click', () => {
    if ($('#ContactUsForm fieldset').attr('disabled') === 'disabled'){
        $('#ContactUsForm fieldset').removeAttr('disabled');
        $('#contactSaveBtn').removeClass('invisible');
        // $('#contactEditBtn').html('Cancel');
    }else {
        $('#ContactUsForm fieldset').attr('disabled','disabled');
        $('#contactSaveBtn').addClass('invisible');
        // $('#contactEditBtn').html('Edit');
    }
});
// Form disabler End
// send data
//
$('.contactSubmit').on('click', () => {
    const data = {
        title: $('#title').val(),
        email: $('#email').val(),
        phone:$('#phone').val(),
        short_content: $('#short_content').val(),
        address:$('#address').val(),
        facebook:$('#facebook').val(),
        youtube:$('#youtube').val(),
        twitter:$('#twitter').val(),
        linkedin:$("#linkedin").val()
    };
    Axios.post('contact_us_save', data).then((resp)=>{
        $('#contactSaveBtn').addClass('invisible');
        Toast.fire({
            icon: 'success',
            title: 'Successfully save'
        });
    }).catch((err)=>{
        console.log(err);
    });
});
// contact us submit END
// $('.dltUser').on('click', ()=>{
//     $(this).closest('tr').attr('key')
//
// })

// -- Update Profile --

$(document).ready(function(){
  $("#UpdateProfile").validate({
    rules: {
      firstname: "required",
      lastname: "required",
      confirm_password: {
        required: true,
        minlength: 6,
      },
      email: {
        required: true,
        email: true,
      },
      avatar: {
        required: false,
        extension: "png|jpg|svg",
    },
    },
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      confirm_password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 6 characters long",
      },
      avatar:{
        extension: "Please upload only image file",
      },
      email: "Please enter a valid email address",
    },
    errorElement: "em",
    errorPlacement: function (error, element) {
      // Add the `invalid-feedback` class to the error element
      error.addClass("invalid-feedback");
      if (element.prop("type") === "checkbox") {
        error.insertAfter(element.next("label"));
      } else {
        error.insertAfter(element);
      }
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass("is-invalid").removeClass("is-valid");
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).addClass("is-valid").removeClass("is-invalid");
    },
  });
})


$('#update_profile').click(function(){

  const data = new FormData();
  data.append('avatar',$('#file-upload').prop('files')[0]);
  data.append('firstname',$('#firstname').val());
  data.append('lastname',$('#lastname').val());
  data.append('confirm_password',$('#confirm_password').val());

  $("#UpdateProfile").valid();
  const check =  $("#UpdateProfile").valid();
  const headers = {
    'Content-Type': 'multipart/form-data'
  }
  if(check == true){
    Axios.post('/api/profile/update', data, {headers : headers}).then((resp) => {

      Toast.fire({
        icon: resp.data.msg,
        title: resp.data.title
      });
    }).catch((err) => {
      Toast.fire({
        icon: 'error',
        title: err
      });
    });
  }
})
// -- Update profile --
// -- Refresh tab show --

$(document).ready(function(){
  const activeTab = window.location.hash;
  if(activeTab){
      $('#v-pills-tab a[href="' + activeTab + '"]').tab('show');
  }
});

// -- Refresh tab show end --

// -- Change Password --


$(document).ready(function(){
  $("#changePasswordValidation").validate({
    rules: {
      current_password: {
        required: true,
        minlength: 6,
      },
      new_password: {
        required: true,
        minlength: 6,

      },
      new_password_confirm: {
        required: true,
        minlength: 6,
        equalTo: "#new_password",
      },
    },
    messages: {
      current_password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 6 characters long",
      },
      new_password: {
        required: "Please enter your new a password",
        minlength: "Your password must be at least 6 characters long",
      },
      new_password_confirm: {
        required: "Please enter your new a password confirm",
        minlength: "Your password must be at least 6 characters long",
        equalTo: "Please enter the same password as above",
      },

    },
    errorElement: "em",
    errorPlacement: function (error, element) {
      // Add the `invalid-feedback` class to the error element
      error.addClass("invalid-feedback");
      if (element.prop("type") === "checkbox") {
        error.insertAfter(element.next("label"));
      } else {
        error.insertAfter(element);
      }
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass("is-invalid").removeClass("is-valid");
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).addClass("is-valid").removeClass("is-invalid");
    },
  });
})

$('#change_password').click(function(){
  const current_password = $('#current_password').val();
  const new_password = $('#new_password').val();
  const new_password_confirm = $('#new_password_confirm').val();

  const password = new FormData();
  password.append('current_password',current_password)
  password.append('new_password',new_password)
  password.append('new_password_confirm',new_password_confirm)

  const check =  $("#changePasswordValidation").valid();
  if(check == true){
    Axios.post('/api/profile/update', password).then((resp) => {
      console.log(resp)
      Toast.fire({
        icon: resp.data.msg,
        title: resp.data.title
      });
    }).catch((err) => {
      Toast.fire({
        icon: 'error',
        title: err
      });
    });
  }

})

// -- Change Password End --


// -- Profile image upload --

$('#file-upload').change(function() {
    const files = this.files[0];
    $('#loading').circleProgress({
      value: 1,
      size: 50,
      lineCap: "round",
      fill: {
          color: "#3ac47d"
      },
  });

  $('#loading').attr('style','display:flex')

  setInterval(() => {
      $('#loading').removeAttr('style')
  }, 2000);

  $("#changeImage").attr("src", URL.createObjectURL(files))

});

// -- Profile image upload  END --

// -- Site info page edit Start --
$('.disabler').on('click', () => {
    if ($('#siteInfoForm fieldset').attr('disabled') === 'disabled'){
        $('#siteInfoForm fieldset').removeAttr('disabled');
        $('#siteInfoSaveBtn').removeClass('invisible');
        // $('#contactEditBtn').html('Cancel');
    }else {
        $('#siteInfoForm fieldset').attr('disabled','disabled');
        $('#siteInfoSaveBtn').addClass('invisible');
        // $('#contactEditBtn').html('Edit');
    }
});
// -- Site info page edit End --
