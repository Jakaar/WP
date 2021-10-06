import Axios from "axios";
import Swal from "../vendors/sweetalert2";


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
// $(document).ready(function(){
//     Axios.post('/lang/kr').then((resp)=> {
//         console.log(resp);
//     })
// })

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
