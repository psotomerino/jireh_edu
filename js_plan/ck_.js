$(document).ready(function (){
    
    $("#silabo").hide();
    
    editor_Z = CKEDITOR.replace( 'editor_p' );
    CKFinder.setupCKEditor(editor_Z,'https://jireh.edu.ec/ckeditor.php/ckfinder');
    
    $(document).on('click','#btn_silabo', function(){
        
        $('#pag_inicio').hide();
        $('#silabo').show();
        $('.admin').hide();
    
    });
   
 /*    editor_Y = CKEDITOR.replace( 'texto_9A' );
    CKFinder.setupCKEditor(editor_Y,'https://jireh.edu.ec/ckeditor.php/ckfinder');
   
    editor_X = CKEDITOR.replace( 'texto_9' );
    CKFinder.setupCKEditor(editor_X,'https://jireh.edu.ec/ckeditor.php/ckfinder');*/
    
 
    
})