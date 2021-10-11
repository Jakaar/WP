import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
window.ClassicEditor = ClassicEditor;

ClassicEditor.create( document.querySelector( '#editor' ) )
    .catch( error => {
        console.error( error );
    } );
