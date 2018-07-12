<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Пост</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
            $('#splash').ready() 
            {
                $('#main').load('/home');
                setTimeout(function() {
                    $('#main').ready(function() {
                        $('#splash').remove();
                        window.location.href = "/home";
                    });
                }, 1000);
            }
    </script>
</head>
<body>
    <div id="splash" style="position: absolute; top: 0px; bottom: 0px; left: 0px; right: 0px; z-index: 10;">
        <img src="/images/Untitled.png" alt="" class="w-75 sml-12">
    </div>
    <div id="sp_main">

    </div>
</body>
</html>