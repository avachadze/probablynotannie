<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('../css/estilos/jeje.css')}}">
    <script src="https://releases.jquery.com/git/jquery-3.x-git.min.js"></script>
    <style>
        body {
            background-color: black;
            display: flex;
            justify-content: center;
            width: 100vw;
            height: 100vh;
        }


        .container {
            width: 100%;
        }
        .eyes{
            margin-top: 5vh;
        }
        .eye {
            position: relative;
            display: inline-block;
            border-radius: 50%;
            height: 30px;
            width: 30px;
            background: #CCC;
        }

        .eye:after {
            /*pupil*/
            position: absolute;
            bottom: 17px;
            right: 10px;
            width: 10px;
            height: 10px;
            background: red;
            border-radius: 50%;
            content: " ";
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="move-area">

    <div class='.container eyes'>
        <div class='eye'></div>
        <div class='eye'></div>
    </div>

    <script>
        $(".move-area").mousemove(function(event) {
            var eye = $(".eye");
            console.log('eye', eye)
            var x = (eye.offset().left) + (eye.width() / 2);
            var y = (eye.offset().top) + (eye.height() / 2);
            var rad = Math.atan2(event.pageX - x, event.pageY - y);
            var rot = (rad * (180 / Math.PI) * -1) + 180;
            eye.css({
                '-webkit-transform': 'rotate(' + rot + 'deg)',
                '-moz-transform': 'rotate(' + rot + 'deg)',
                '-ms-transform': 'rotate(' + rot + 'deg)',
                'transform': 'rotate(' + rot + 'deg)'
            });
        });
    </script>
</body>

</html>