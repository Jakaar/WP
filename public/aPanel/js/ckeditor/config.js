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


    //config.uiColor = '#F7B42C';
    config.removeButtons = 'Underline,Subscript,Superscript';
    config.enterMode =		CKEDITOR.ENTER_BR;		//ì—”í„°í‚¤ ìž…ë ¥ì‹œ br íƒœê·¸ ë³€ê²½
    // Set the most common block elements.
    config.removeDialogTabs = 'image:advanced;link:advanced';

    //-- ì�´ë¯¸ì§€ ì—…ë¡œë“œ ê´€ë ¨ ì„¤ì •
    // config.language = 'en';
    config.filebrowserImageUploadUrl = '/common/ckeditor_upload';


    //dialogDefinition.removeContents('Link');
    //dialogDefinition.removeContents('advanced');

    //-- í™ˆíŽ˜ì�´ì§€  CSS include
    config.contentsCss = ['/client/static/css/8dcfab18-ba4d-4fff-b9ff-dcc3c1118581.css','/client/static/css/17d9acd2-0544-4e83-bc5b-281bcf97b1ff.css'];
};

//ì�´ë¯¸ì§€ íŒŒì�¼ ì—…ë¡œë“œ ë‹¤ì�´ì–¼ë¡œê·¸ ë‚´ ë§�í�¬, ê³ ê¸‰ íƒ­ ì œê±°
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
