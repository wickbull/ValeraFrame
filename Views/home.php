<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>A Simple Page with CKEditor</title>
        <!-- Make sure the path to CKEditor is correct. -->
        <script src="/Public/Js/ckeditor/ckeditor.js"></script>

    </head>
    <body>
        <form method='post'>
            <textarea name="text" id="textarea">
                www/sss/zzz
            </textarea>
    
            <hr>
            <center><button name="ok" value="1">Вивести на екран</button></center>

        </form>
<!--         <?php 
            if( !empty( $_POST['ok'] ) )
            {

                echo $_POST['text'];

            }
        ?> -->
    </body>
</html>

<?php ckeditor( 'textarea' ) ?>