import Axios from "axios"

// $(document).ready(function(){
//     Axios.post('/lang/kr').then((resp)=> {
//         console.log(resp);
//     })
// })

// Form disabler Start
    $('.disabler').on('click', ()=>{
        if ($('#ContactUsForm fieldset').attr('disabled') === 'disabled'){
            $('#ContactUsForm fieldset').removeAttr('disabled')
            $('#btns').append('<button type="button" class="mt-2 btn btn-success contactSubmit contactSave">Save</button>')
        }else {
            $('#ContactUsForm fieldset').attr('disabled','disabled')
            $('.contactSubmit').remove()
        }
    })
// Form disabler End

// contact us submit START
$(document).on('click',()=>{
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
        }
        Axios.post('contact_us', data).then((resp)=>{
            console.log(resp);
        }).catch((err)=>{
            alert('error')
        })
    })
});
// contact us submit END
