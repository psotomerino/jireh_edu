$(document).ready(function (){
    
    editor_A = CKEDITOR.replace( 'editor' );
    //CKFinder.setupCKEditor(editor_A,'https://jireh.edu.ec/ckeditor.php/ckfinder');

    $(document).on('click','#mi_texto', function(){
        var data = editor_A.getData(); 
        alert(data);            
        
    });
    
    const textu = "Hola mundo";
    
    $('#editor').text(textu);
   
    
    
})
