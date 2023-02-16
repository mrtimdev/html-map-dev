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

    
</head>
<body> 
    <?php
    $top_body = "";
    $bottom_body = "";
    $middle_body = "";
    $table_area_data = "";
    $no_top = 8;
    $no_center = 18;
    $no_bottom = 8;
    $no_area = 10;
    for($i = 0; $i < $no_top; $i++) {
        $top_body .= '<div class="box h-top"></div>';
    }
    for($i = 0; $i < $no_center; $i++) {
        $middle_body .= '<div class="box h-middle"></div>';
    }
    for($i = 0; $i < $no_bottom; $i++) {
        $bottom_body .= '<div class="box h-bottom"></div>';
    }
    for($i = 1; $i < $no_area; $i++) {
        $table_area_data .= '
                <tr>
                    <td>'.$i.'</td>
                    <td>8999.99900</td>
                    <td>1999.99900</td>
                    <td>A '.$i.'</td>
                </tr>
        ';
    }


    ?>


    <div class="map_container">
        <div class="map_content">
            <div class="map_wrapper">
                <div>
                    <div class="map_body">
                        <div class="map_listing">
                            <div class="area b8" data-value="8">
                                <span>8</span>                                
                                <span>b</span>
                            </div>
                            <div class="area b9" data-value="9">
                                <span>9</span>                                
                                <span>b</span>
                            </div>
                            <div class="area b10" data-value="10">
                                <span>10</span>                                
                                <span>b</span>
                            </div>
                            <div class="area b11" data-value="11">
                                <span>11</span>                                
                                <span>b</span>
                            </div>
                            <div class="area b12" data-value="12">
                                <span>12</span>                                
                                <span>b</span>
                            </div>
                            <div class="area b13" data-value="13">
                                <span>13</span>                                
                                <span>b</span>
                            </div>
                            <div class="area b14" data-value="14">
                                <span>14</span>                                
                                <span>b</span>
                            </div>
                            

                            <div class="pond">ស្រះ</div>
                            <div class="land_content">
                                <div class="row land_body">
                                    <div class="col-md-4 col-ms-4 col-xs-4">
                                        <div class="land_box">
                                            <div class="wrapper_content">
                                                <div class="wrapper wrapper_top">
                                                    <?= $top_body ?>
                                                </div>
                                                <div class="wrapper wrapper_middle">
                                                    <?= $middle_body ?>
                                                </div>
                                                <div class="wrapper wrapper_bottom">
                                                    <?= $bottom_body ?>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-ms-4 col-xs-4">
                                        <div class="land_box">
                                            <div class="wrapper_content">
                                                <div class="wrapper wrapper_top">
                                                    <?= $top_body ?>
                                                </div>
                                                <div class="wrapper wrapper_middle">
                                                    <?= $middle_body ?>
                                                </div>
                                                <div class="wrapper wrapper_bottom">
                                                    <?= $bottom_body ?>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-ms-4 col-xs-4">
                                        <div class="land_box">
                                            <div class="wrapper_content">
                                                <div class="wrapper wrapper_top">
                                                    <?= $top_body ?>
                                                </div>
                                                <div class="wrapper wrapper_middle">
                                                    <?= $middle_body ?>
                                                </div>
                                                <div class="wrapper wrapper_bottom">
                                                    <?= $bottom_body ?>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div> 
                                <div class="row land_body">
                                    <div class="col-md-4 col-ms-4 col-xs-4">
                                        <div class="land_box">
                                            <div class="wrapper_content">
                                                <div class="wrapper wrapper_top">
                                                    <?= $top_body ?>
                                                </div>
                                                <div class="wrapper wrapper_middle">
                                                    <?= $middle_body ?>
                                                </div>
                                                <div class="wrapper wrapper_bottom">
                                                    <?= $bottom_body ?>
                                                </div>
                                                <div class="wrapper single_land">
                                                    <div class="box h-bottom-new"></div>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-ms-4 col-xs-4">
                                        <div class="land_box">
                                            <div class="wrapper_content">
                                                <div class="wrapper wrapper_top">
                                                    <?= $top_body ?>
                                                </div>
                                                <div class="wrapper wrapper_middle">
                                                    <?= $middle_body ?>
                                                </div>
                                                <div class="wrapper wrapper_bottom">
                                                    <?= $bottom_body ?>
                                                </div>
                                                <div class="wrapper single_land">
                                                    <div class="box h-bottom-new"></div>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-ms-4 col-xs-4">
                                    <div class="land_box">
                                            <div class="wrapper_content">
                                                <div class="wrapper wrapper_top">
                                                    <?= $top_body ?>
                                                </div>
                                                <div class="wrapper wrapper_middle">
                                                    <?= $middle_body ?>
                                                </div>
                                                <div class="wrapper wrapper_bottom">
                                                    <?= $bottom_body ?>
                                                </div>
                                                <div class="wrapper single_land">
                                                    <div class="box h-bottom-new"></div>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table_area">
                            <div class="table_content">
                                <div class="compass_content">
                                    <div class="compass_body">
                                        <img src="./images/icons/compass-icon.png" class="img-fluid" alt="compass">
                                    </div>
                                </div>
                                <table class="table table-bordered black-gb">
                                    <tr>
                                        <th>Point</th>
                                        <th>Northing</th>
                                        <th>Easting</th>
                                        <th>Description</th>
                                    </tr>
                                    <tbody>
                                        <?= $table_area_data ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- area content overlay -->
                        <div class="area_averlay fade-out">
                            <div class="area_averlay_content">
                                <h3 class="area_overlay_title">AutoCAD SHX Text</h3>
                                <h1 class="area_overlay_text text-capitalize">B</h1>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="road_content">
                    <div class="road_border">
                        <span class="text">ផ្លូវ៤០ម៉ែត្រ</span>
                        <div class="area b15" data-value="15">
                            <span>15</span>
                            <span>r</span>
                        </div>
                        <div class="area b16" data-value="16">
                            <span>16</span> 
                            <span>r</span> 
                        </div>
                    </div>

                    <div class="line bottom_left"></div>
                    <div class="line bottom_right"></div>
                    <div class="ribbon_left"></div>
                    <div class="ribbon_right"></div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $(() => {
            $('.area').each(function(e) {
                const area = $(this)
                let get_value = $(this).data('value')
                let get_number = area.find('span').eq(0).text()
                let get_text = area.find('span').eq(1).text()
                $(this).on('mouseenter',function(e) {
                    let $this = $(this)
                    console.log('Mouse Enter',{get_value, get_number, get_text})
                    $('.area_averlay').removeClass('fade-out').addClass('fade-in');
                    $('.area_averlay .area_overlay_text').text(`${get_text} ${get_number}`);
                    // let overlay_container = $('.area_averlay').html()
                    // area.append(`<div class="area_averlay fade-in">
                    //         <div class="area_averlay_content">
                    //             <h3 class="area_overlay_title">AutoCAD SHX Text</h3>
                    //             <h1 class="area_overlay_text text-capitalize">${get_text} ${get_number}</h1>
                    //         </div>
                    //     </div>`
                    // )
                }).on('mouseleave',function(e) {
                    console.log('Mouse Leave',{e})
                    $('.area_averlay').removeClass('fade-in').addClass('fade-out');
                    // area.find('.area_averlay').remove()
                })

            })
        })
    </script>
</body>
</html>