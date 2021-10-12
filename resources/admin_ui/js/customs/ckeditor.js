import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
window.ClassicEditor = ClassicEditor;

ClassicEditor.create( document.querySelector( '#SiteInfoeditor3' ) )
    .catch( error => {
        console.error( error );
    } );
