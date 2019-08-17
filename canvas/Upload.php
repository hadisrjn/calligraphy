<?php
require_once 'upload_data.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Upload Canvas Data to PHP Server</title>
    </head>
    <body>

        <canvas width="80" height="80" id="canvas" type="hidden">canvas</canvas>
        <script type="text/javascript">
// window.onload = function() {
    // var canvas = document.getElementById("canvas");
    // var context = canvas.getContext("2d");
    // context.rect(0, 0, 80, 80);
    // context.fillStyle = 'yellow';
    // context.fill();
// }
        </script>

        <div>

        </div>

        <form method="post" accept-charset="utf-8" name="form1" >
            <input name="hidden_data" id='hidden_data' type="hidden"/>
        </form>

<!--        <script>-->
<!--            function uploadEx() {-->
<!--                var canvas = document.getElementById("canvas");-->
<!--                var dataURL = canvas.toDataURL("image/png");-->
<!--                document.getElementById('hidden_data').value = dataURL;-->
<!--                var fd = new FormData(document.forms["form1"]);-->
<!---->
<!--                var xhr = new XMLHttpRequest();-->
<!--                xhr.open('POST', 'upload_data.php', true);-->
<!---->
<!--                xhr.upload.onprogress = function(e) {-->
<!--                    if (e.lengthComputable) {-->
<!--                        var percentComplete = (e.loaded / e.total) * 100;-->
<!--                        console.log(percentComplete + '% uploaded');-->
<!--                        alert('Succesfully uploaded');-->
<!--                    }-->
<!--                };-->
<!---->
<!--                xhr.onload = function() {-->
<!---->
<!--                };-->
<!--                xhr.send(fd);-->
<!--            };-->
<!--        </script>-->
    </body>
</html>