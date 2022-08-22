<?php 
    require_once 'templates/header.php';

?>
<textarea name="texto_" id="my-editor" rows="10" cols="80"> </textarea>
<div>
    <br/>
    <input id="send" type="button" value="Obtenga el valor de CKEDITOR">
</div>
<script>
     var editor = CKEDITOR.editor.replace('my-editor'); 

    $('#send').click(function() { 
        var value = editor.getData(); 
        // send your ajax request with value 
        // profit! 
        alert (value);
    });

</script>
            



 <script src="ckfinder/ckfinder.js"></script>
 <script type="text/javascript" src="/js_plan/ck_.js"></script>
