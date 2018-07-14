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
                $('#main').load('/stats');
                setTimeout(function() {
                    $('#main').ready(function() {
                        $('#splash').remove();
                        window.location.href = "/stats";
                    });
                }, 3000);
            }
    </script>
</head>
<body>
    <div id="splash" style="position: absolute;width:100%;height:100%; background-size:100%;top: 0px; bottom: 0px; left: 0px; right: 0px; z-index: 10;background-image: url('/images/Крутая версия/input.png')">
        
    </div>
    <div id="sp_main">

    </div>
</body>
</html>