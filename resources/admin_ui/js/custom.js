import Axios from "axios";
import Swal from "../vendors/sweetalert2";

// $(document).ready(function(){
//     Axios.post('/lang/kr').then((resp)=> {
//         console.log(resp);
//     })
// })

// contact us submit START

// Form disabler Start
$('.disabler').on('click', ()=>{
    if ($('#ContactUsForm fieldset').attr('disabled') === 'disabled'){
        $('#ContactUsForm fieldset').removeAttr('disabled');
        $('#contactSaveBtn').removeClass('invisible');
    }else {
        $('#ContactUsForm fieldset').attr('disabled','disabled');
        $('#contactSaveBtn').addClass('invisible');
    }
});
// Form disabler End
// send data
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
        toastr.options = {
            closeButton: true,
            debug: false,
            newestOnTop: true,
            progressBar: true,
            positionClass: "toast-bottom-center",
            preventDuplicates: false,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            timeOut: "5000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
        };
        toastr["info"](
            "You don't have any new items in your calendar today!",
            "Example Toastr"
        );
    }).catch((err)=>{
        console.log(err);
    });
});
// contact us submit END
