<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>JIREH</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <script src="https://cdn.jsdelivr.net/npm/node-forge@1.0.0/dist/forge.min.js"></script>
</head>    
<body>
    <form id="formFirma">
        Firma electrónica en formato PKCS12 (archivo .p12):
        <input type="file" id="archivo_p12" accept="data:application/x-pkcs12">
        <!--textarea rows="10" cols="50" id="p12info"></textarea-->
        <hr>
        Contraseña:
        <input type="text" id="p12password">
        <hr>
        Comprobante electrónico a ser firmado:
        <input type="file" id="archivo_comprobante" xxxaccept="image/*">
        <hr>
        <input type="submit" value="Firmar comprobante electrónico">
        <hr>
        Comprobante electrónico firmado:
        <br>
        <textarea rows="10" cols="50" id="comprobanteFirmado"></textarea>
        </form>   
</body>
<script src="/openjs.js"></script>
<script src="/forge.js"></script>

</html>

