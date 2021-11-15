/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
    // Define changes to default configuration here.
    // For complete reference see:
    // https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html

    // The toolbar groups arrangement, optimized for two toolbar rows.
    // config.toolbarGroups = [
    //     { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
    //     { name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
    //     { name: 'links' },
    //     { name: 'insert' },
    //     { name: 'forms' },
    //     { name: 'tools' },
    //     { name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
    //     { name: 'others' },
    //     '/',
    //     { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
    //     { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
    //     { name: 'styles' },
    //     { name: 'colors' },
    //     { name: 'about' }
    // ];
    config.allowedContent = true;
    CKEDITOR.dtd.$removeEmpty.i = false;
    config.extraAllowedContent = 'span(*)';

    // config.uiColor = '#F7B42C';
    config.removeButtons = 'Underline,Subscript,Superscript';
    config.enterMode =		CKEDITOR.ENTER_BR;		//ì—”í„°í‚¤ ìž…ë ¥ì‹œ br íƒœê·¸ ë³€ê²½
    // Set the most common block elements.
    config.removeDialogTabs = 'image:advanced;link:advanced';

    //-- ì�´ë¯¸ì§€ ì—…ë¡œë“œ ê´€ë ¨ ì„¤ì •
    // config.language = 'en';
    config.filebrowserImageUploadUrl = '/api/ck/file-upload';
    // config.allowedContent = true;
    // config.toolbar = [['Source', '-', 'NewPage', '-', 'Templates','fontawesome5']];
    config.extraPlugins = ['ckawesome','wenzgmap'];
    config.fillEmptyBlocks = false;
    config.FormatOutput = false;
    // config.ProcessHTMLTags = false ;
    //dialogDefinition.removeContents('Link');
    //dialogDefinition.removeContents('advanced');

    //-- í™ˆíŽ˜ì�´ì§€  CSS include
    config.contentsCss = [
        '/client/static/css/8dcfab18-ba4d-4fff-b9ff-dcc3c1118581.css',
        '/client/static/css/17d9acd2-0544-4e83-bc5b-281bcf97b1ff.css',
        'https://use.fontawesome.com/releases/v5.0.6/css/all.css',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap',
        'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'
    ];
// console.log(config)
};
CKEDITOR.on('dialogDefinition', function(ev) {
    const dialogName = ev.data.name;
    const dialogDefinition = ev.data.definition;
    switch (dialogName) {
        case 'image': //Image Properties dialog
            //dialogDefinition.removeContents('info');
            dialogDefinition.removeContents('Link');
            dialogDefinition.removeContents('advanced');
            break;
    }
});
