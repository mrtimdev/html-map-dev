<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Map Design</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style>
        .map_body {
            display: block;
        }
        #box-1 {
            display: grid;
            grid-template-columns: repeat(8, 12.5%);
            grid-gap: 1px;
        }
        /* #box-2 {
            display: grid;
            grid-template-rows: 1fr;
            grid-template-columns: 1fr 1fr;
            grid-gap: 1px;
        } */
        #box-1 > div,
        #box-2 > div {
            background-color: limegreen;
            color: white;
            font-size: 4vw;
            padding: 8px;
        }

    </style>
</head>
<body>
    <h1>Map</h1>

    <?php
    $top_body = "";
    $bottom_body = "";
    $middle_body = "";
    $no_top = 8;
    $no_center = 18;
    $no_bottom = 8;
    for($i = 0; $i < $no_top; $i++) {
        $top_body .= '<div class="box h-top"></div>';
    }
    for($i = 0; $i < $no_center; $i++) {
        $middle_body .= '<div class="box h-middle"></div>';
    }
    for($i = 0; $i < $no_bottom; $i++) {
        $bottom_body .= '<div class="box h-bottom"></div>';
    }


    ?>


    <div class="map_container">
        <div class="map_content">
            <div class="map_body">
                <div id="box-1">
                    <div>1</div>
                    <div>2</div>
                    <div>3</div>  
                    <div>4</div>
                    <div>5</dv>  
                    <div>5</dv>  
                    <div>5</dv>  
                </div>
                <!-- <div id="box-2">
                    <div>01</div>
                    <div>02</div>
                    <div>03</div>  
                    <div>04</div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        (function() {
            var beforePrint = () =>  {
                console.log({event});

            };
            var afterPrint = () => {
                console.log('Functionality to run after printing');
            };
            window.onbeforeprint = beforePrint;
            window.onafterprint = afterPrint;
        }());
    </script>
</body>
</html>