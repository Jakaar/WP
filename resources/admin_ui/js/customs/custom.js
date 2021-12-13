
$(document).on('load', () => {
   console.log()
});
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})
$(document).ready(function(){
    if(localStorage.getItem('sideBarClass')){
        $('#sideBarMini').addClass(localStorage.getItem('sideBarClass'));
        $('.close-sidebar-btn').addClass('is-active')
    }

    // Sidebar Menu
    setTimeout(function () {
        $(".vertical-nav-menu").metisMenu();
        $(".vertical-nav-menu-content").metisMenu({
            preventDefault: false
        });
      }, 100);

      // Search wrapper trigger

      $(".search-icon").click(function () {
        $(this).parent().parent().addClass("active");
      });

      $(".search-wrapper .btn-close").click(function () {
        $(this).parent().removeClass("active");
      });

      // BS5 Popover

    const popoverTriggerList1 = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover-custom-content"]'));
    let popoverList = popoverTriggerList1.map(function (popoverTriggerEl1) {
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
    popoverList = $('[data-bs-toggle="popover-custom-bg"]').each(function (popoverTriggerEl2) {
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
    popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
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
$('.disabler_contactus').on('click', () => {
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
// $('.contactSubmit').on('click', () => {
//     const data = {
//         title: $('#title').val(),
//         email: $('#email').val(),
//         phone:$('#phone').val(),
//         short_content: $('#short_content').val(),
//         address:$('#address').val(),
//         facebook:$('#facebook').val(),
//         youtube:$('#youtube').val(),
//         twitter:$('#twitter').val(),
//         linkedin:$("#linkedin").val()
//     };
//     Axios.post('contact_us_save', data).then((resp)=>{
//         $('#contactSaveBtn').addClass('invisible');
//         Toast.fire({
//             icon: 'success',
//             title: 'Successfully save'
//         });
//     }).catch((err)=>{
//         console.log(err);
//     });
// });
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
        icon: resp.data.icon,
        title: resp.data.msg
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
// -- Refresh page
$('.refresh-page').click(function(){
  window.location.reload();
})
// -- Refresh page end
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
    Axios.post('/api/profile/updatePassword', password).then((resp) => {
      console.log(resp)
      Toast.fire({
        icon: resp.data.icon,
        title: resp.data.msg
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

$(document).ready(function(){
  $('#file-upload').change(function() {
    let files = this.files[0];

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
})

// -- Profile image upload  END --

// -- Layouts Option Save LocalStorage --
// ----- Layout Fixed Header ------//
$('#fixedHeaderLayout').change(function(){
  var fixed_header = $(this).prop('checked');
  localStorage.setItem('fixed_header',fixed_header)
})
$(document).ready(function(){
  if(localStorage.getItem('fixed_header') == 'true'){
    $('#fixedHeaderLayout').attr('checked','true');
    $('#sideBarMini').addClass('fixed-header');
  }
  else{
    $('#fixedHeaderLayout').removeAttr('checked');
    $('#sideBarMini').removeClass('fixed-header');
  }
})
// ----- Layout Fixed Header end ------//
//----- Layout Fixed Sidebar ----- //
$('#fixedSidebarLayout').change(function(){
  var fixed_sidebar = $(this).prop('checked');
  localStorage.setItem('fixed_sidebar',fixed_sidebar)
})
$(document).ready(function(){
  if(localStorage.getItem('fixed_sidebar') == 'true'){
    $('#fixedSidebarLayout').attr('checked','true');
    $('#sideBarMini').addClass('fixed-sidebar');
  }
  else{
    $('#fixedSidebarLayout').removeAttr('checked');
    $('#sideBarMini').removeClass('fixed-sidebar');
  }
})
//----- Layout Fixed Sidebar  end ----- //

//----- Layout Fixed Footer ----- //
$('#fixedFooterLayout').change(function(){
  var fixed_footer = $(this).prop('checked');
  localStorage.setItem('fixed_footer',fixed_footer)
})
$(document).ready(function(){
  if(localStorage.getItem('fixed_footer') == 'true'){
    $('#fixedFooterLayout').attr('checked','true');
    $('#sideBarMini').addClass('fixed-footer');
  }
  else{
    $('#fixedFooterLayout').removeAttr('checked');
    $('#sideBarMini').removeClass('fixed-footer');
  }
})
//----- Layout Fixed Footer  end ----- //

//----- Color switcher header ----

$('#headerColorSwitcher div').click(function(){
  localStorage.setItem('header-color',$(this).attr('data-class'))
})
$('#restoreHeaderColor').click(function(){
  $('.app-header').attr('class','app-header')
  $('.app-header').addClass('header-shadow header-text-light')
  localStorage.removeItem('header-color')
})
$(document).ready(function(){
  $('.app-header').addClass(localStorage.getItem('header-color'))
  $('#headerColorSwitcher div[data-class="'+localStorage.getItem('header-color')+'"]').addClass('active')
})
// ----- Color switcher header end -----
// ---- Color swticher sidebar ----
$('#sidebarColorSwitcher div').click(function(){
  localStorage.setItem('sidebar-color',$(this).attr('data-class'))
})
$('#restoreSidebarColor').click(function(){
  $('.app-sidebar').attr('class','app-sidebar')
  $('.app-sidebar').addClass('sidebar-shadow sidebar-text-dark')
  localStorage.removeItem('sidebar-color')
})
$(document).ready(function(){

  $('.app-sidebar').addClass(localStorage.getItem('sidebar-color'))
  $('#sidebarColorSwitcher div[data-class="'+localStorage.getItem('sidebar-color')+'"]').addClass('active')
})
// ---- Color switcher sidebar end ---

// ---- Main Content Option ----
$('#pageSectionTabSwticher button').click(function(){
  $('#sideBarMini').addClass($(this).attr('data-class'))
  localStorage.setItem('page-section',$(this).attr('data-class'))
})

$('#lightColorSwitcher button').click(function(){
  $('#sideBarMini').addClass($(this).attr('data-class'))
  localStorage.setItem('light-color',$(this).attr('data-class'))
})

$('#restoreMainContent').click(function(){
  $('#pageSectionTabSwticher button').removeClass('active')
  $('#pageSectionTabSwticher button[data-class="body-tabs-shadow"]').addClass('active')
  $('#lightColorSwitcher button').removeClass('active')
  $('#lightColorSwitcher button[data-class="app-theme-white"]').addClass('active')
  $('#sideBarMini').removeClass(localStorage.getItem('page-section'))
  $('#sideBarMini').removeClass(localStorage.getItem('light-color'))
  localStorage.setItem('page-section','body-tabs-shadow')
  localStorage.setItem('light-color','app-theme-white')
  $('#sideBarMini').addClass(localStorage.getItem('page-section'))
  $('#sideBarMini').addClass(localStorage.getItem('light-color'))
})

$(document).ready(function(){
  $('#sideBarMini').addClass(localStorage.getItem('page-section'))
  $('#sideBarMini').addClass(localStorage.getItem('light-color'))

  $('#pageSectionTabSwticher button[data-class="'+localStorage.getItem('page-section')+'"]').addClass('active')
  $('#lightColorSwitcher button[data-class="'+localStorage.getItem('light-color')+'"]').addClass('active')
})
// ---- Main Content Option ----
// -- Layouts Option Save LocalStorage end --

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
// -- Site info page validator Start --
$(document).ready(function(){

})
// -- Site info page validator End --
// -- Contact us page valitaor Start --
$(document).ready(function(){
    $("#ContactUsForm").validate({
        rules: {
            title: {
                required: true,
                maxlength: 90,
            },
            email: {
                required: true,
                email: true,
                maxlength: 90,
            },
            phone: {
                required: true,
                minlength: 6,
                maxlength: 90,
            },
            ContactUsEditor1: {
                required:true,
                minlength:20,
                maxlength:250
            },
            address:{
                required:true,
                minlength:6,
                maxlength:250
            },
            facebook:{
                minlength:6,
                maxlength:70
            },
            youtube:{
                minlength:6,
                maxlength:70
            },
            twitter:{
                minlength:6,
                maxlength:70
            },
            linkedin:{
                minlength:6,
                maxlength:70
            }
        },
        messages: {
            title: {
                required: "Please enter you contact us title",
                maxlength: "Your title must less than 70 characters long",
            },
            email: {
                required: "Please enter your contact us email",
                maxlength: "Your email must less than 70 characters long",
            },
            phone: {
                required: "Please enter your phone number",
                minlength: "Your phone must be at least 6 characters long",
            },
            ContactUsEditor1: {
                required: "Please enter short content",
                minlength: "Your short content must be at least 20 characters long",
                maxlength: "Your short content must less than 250 characters long"
            },
            address:{
                required: "Please enter address",
                minlength: "Your address must be at least 6 characters long",
                maxlength: "Your address must less than 250 characters long"
            },
            facebook:{
                minlength: "Your facebook must be at least 6 characters long",
                maxlength: "Your facebook must less than 50 characters long"
            },
            youtube:{
                minlength: "Your youtube must be at least 6 characters long",
                maxlength: "Your youtube must less than 50 characters long"
            },
            twitter:{
                minlength: "Your twitter must be at least 6 characters long",
                maxlength: "Your twitter must less than 50 characters long"
            },
            linkedin:{
                minlength: "Your linked in must be at least 6 characters long",
                maxlength: "Your linked in must less than 50 characters long"
            }

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
// -- Contact us page valitaor End --
// -- Manage page create Start --
$(document).ready(function(){
    $("#create_page_form").validate({
        rules:{
                PageName: {
                    required:true,
                    minlength:3,
                    maxlength:110
            },
                PageUrl:{
                    required:true,
                    maxlength:110
            },
                PageCode:{
                    required:true,
                    maxlength:110
            },
        },
        messages:{
                    PageName: {
                        required:"Please enter your page name",
                        minlength:"Your Page name must be at least 3 characters long",
                        maxlength:"Your Page name must less than 110 characters long "
                    },
                    PageUrl: {
                        required:"Please enter your page url",
                        maxlength:"Your Page url must less than 110 characters long "
                    },
                    PageCode:{
                        required:"Please enter your page code",
                        maxlength:"Your Page code must less than 110 characters long"
                    }
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
// -- Manage page create End --
// -- Manage page edit Start --
$(document).ready(function(){
    $("#edit_page_form").validate({
        rules:{
            PageName: {
                required:true,
                minlength:3,
                maxlength:110
            },
            PageUrl:{
                required:true,
                maxlength:110
            },
            PageCode:{
                required:true,
                maxlength:110
            },
        },
        messages:{
            PageName: {
                required:"Please enter your page name",
                minlength:"Your Page name must be at least 3 characters long",
                maxlength:"Your Page name must less than 110 characters long "
            },
            PageUrl: {
                required:"Please enter your page url",
                maxlength:"Your Page url must less than 110 characters long "
            },
            PageCode:{
                required:"Please enter your page code",
                maxlength:"Your Page code must less than 110 characters long"
            }
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
// -- Manage page edit End --

//DataTable Options
window.option1 = {
    "language": {
        paginate: {
            next: '&#8594;', // or '→'
            previous: '&#8592;' // or '←'
        }
    }
}
//End Datatable Options
window.DatatableOptionskr = {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Korean.json'
    }
}
window.DatatableOptionsmn = {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Mongolian.json'
    }
}
window.DatatableOptionsen= {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/English.json'
    }
}
