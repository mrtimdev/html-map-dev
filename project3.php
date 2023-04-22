<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Map Design</title>
    <link rel="stylesheet" href="css/project3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" >

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css">
</head>
<body>
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

    <div id="project_3">
        <div class="map_container">
            <div class="map_content">
                <div class="map_body">
                    <div class="box item1">
                        <div class="table_area">
                        <div class="table_content">
                            <table class="table table-bordered black-gb">
                                <tr>
                                    <th>Point</th>
                                    <th>Northing</th>
                                    <th>Easting</th>
                                    <th>Description</th>
                                </tr>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <div class="box item2">
                        2
                    </div>
                </div>

                <!-- properties lands -->
                <div class="property_container">
                    <div class="property_body d-grid">
                        <div class="property_box d-grid test1 content-end">
                            <div class="content-box">
                                <div class="top">
                                    <div class="ribbon ribbon-left"></div>
                                    <div class="ribbon ribbon-right"></div>
                                    <div class="ribbon ribbon-top"></div>
                                    <div class="item"></div>
                                    <div class="item"></div>
                                    <div class="item"></div>
                                    <div class="item"></div>
                                    <div class="item"></div>
                                </div>
                                <div class="center">
                                    <?php  
                                        for($i = 1; $i <= 9; $i++) { ?>
                                            <div class="item"></div>
                                    <?php } ?>
                                </div>
                                <div class="bottom">
                                    <div class="item"></div>
                                </div>
                            </div>
                        </div>
                        <div class="property_box d-grid test2 content-end">
                            <div class="content-box">
                                <div class="top">
                                    <div class="item-left">
                                        <?php  
                                            for($i = 1; $i <= 4; $i++) { ?>
                                                <div class="item"></div>
                                        <?php } ?>
                                    </div>
                                    <div class="item-right">
                                        <div class="item-right-top">
                                            <?php  
                                                for($i = 1; $i <= 4; $i++) { ?>
                                                    <div class="item"></div>
                                            <?php } ?>
                                        </div>
                                        <div class="item-right-bottom">
                                            <div class="item"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="center">
                                    <?php  
                                        for($i = 1; $i <= 18; $i++) { ?>
                                            <div class="item"></div>
                                    <?php } ?>
                                </div>
                                <div class="bottom">
                                    <?php  
                                        for($i = 1; $i <= 6; $i++) { ?>
                                            <div class="item"></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="property_box d-grid test3 content-end">
                            <div class="content-box">
                                <div class="top">
                                    <div class="item-left">
                                        <div class="item"></div>
                                        <div class="item"></div>
                                        <div class="item"></div>
                                        <div class="item"></div>
                                    </div>
                                    <div class="item-right">
                                        <div class="item-right-top">
                                            <?php  
                                                for($i = 1; $i <= 4; $i++) { ?>
                                                    <div class="item"></div>
                                            <?php } ?>
                                        </div>
                                        <div class="item-right-bottom">
                                            <div class="item"></div>
                                            <div class="item"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="center">
                                    <?php  
                                        for($i = 1; $i <= 26; $i++) { ?>
                                            <div class="item"></div>
                                    <?php } ?>
                                </div>
                                <div class="bottom">
                                    <?php  
                                        for($i = 1; $i <= 6; $i++) { ?>
                                            <div class="item"></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="property_box d-grid test4 content-end">
                            <div class="content-box">
                                <div class="top">
                                    <?php  
                                        for($i = 1; $i <= 6; $i++) { ?>
                                            <div class="item"></div>
                                    <?php } ?>
                                </div>
                                <div class="center">
                                    <?php  
                                        for($i = 1; $i <= 38; $i++) { ?>
                                            <div class="item"></div>
                                        <?php }
                                    ?>
                                </div>
                                <div class="bottom">
                                    <?php  
                                        for($i = 1; $i <= 6; $i++) { ?>
                                            <div class="item"></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="property_box d-grid test5 content-end">
                            <div class="content-box">
                                <div class="top">
                                    <?php  
                                        for($i = 1; $i <= 6; $i++) { ?>
                                            <div class="item"></div>
                                    <?php } ?>
                                </div>
                                <div class="center">
                                    <?php  
                                        for($i = 1; $i <= 46; $i++) { ?>
                                            <div class="item"></div>
                                        <?php }
                                    ?>
                                </div>
                                <div class="bottom">
                                    <?php  
                                        for($i = 1; $i <= 6; $i++) { ?>
                                            <div class="item"></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>


                        <div class="property_box d-grid test6 content-end">
                            <div class="content-box">
                                <div class="top">
                                    <div class="item-left">
                                        <?php  
                                            for($i = 1; $i <= 3; $i++) { ?>
                                                <div class="item"></div>
                                        <?php } ?>
                                    </div>
                                    <div class="item-right">
                                        <div class="item-right-top">
                                            <?php  
                                                for($i = 1; $i <= 4; $i++) { ?>
                                                    <div class="item"></div>
                                            <?php } ?>
                                        </div>
                                        <div class="item-right-bottom">
                                            <div class="item"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="center">
                                    <?php  
                                        for($i = 1; $i <= 52; $i++) { ?>
                                            <div class="item"></div>
                                        <?php }
                                    ?>
                                </div>
                                <div class="bottom">
                                    <?php  
                                        for($i = 1; $i <= 6; $i++) { ?>
                                            <div class="item"></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>


                        <div class="property_box d-grid test7 content-end">
                            <div class="content-box">
                                <div class="top">
                                    <div class="item-left">
                                        <?php  
                                            for($i = 1; $i <= 3; $i++) { ?>
                                                <div class="item"></div>
                                        <?php } ?>
                                    </div>
                                    <div class="item-right">
                                        <div class="item-right-top">
                                            <?php  
                                                for($i = 1; $i <= 4; $i++) { ?>
                                                    <div class="item"></div>
                                            <?php } ?>
                                        </div>
                                        <div class="item-right-bottom">
                                            <div class="item"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="center">
                                    <?php  
                                        for($i = 1; $i <= 58; $i++) { ?>
                                            <div class="item"></div>
                                    <?php } ?>
                                </div>
                                <div class="bottom">
                                <div class="item"></div>
                                    <?php  
                                        for($i = 1; $i <= 5; $i++) { ?>
                                            <div class="item"></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="property_box d-grid test8 content-end">
                            <div class="content-box">
                                <div class="top">
                                    <div class="item-left">
                                        <?php  
                                            for($i = 1; $i <= 3; $i++) { ?>
                                                <div class="item"></div>
                                        <?php } ?>
                                    </div>
                                    <div class="item-right">
                                        <div class="item-right-top">
                                            <?php  
                                                for($i = 1; $i <= 4; $i++) { ?>
                                                    <div class="item"></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="center">
                                    <?php  
                                        for($i = 1; $i <= 68; $i++) { ?>
                                            <div class="item"></div>
                                    <?php } ?>
                                </div>
                                <div class="bottom">
                                <div class="item"></div>
                                    <?php  
                                        for($i = 1; $i <= 5; $i++) { ?>
                                            <div class="item"></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="property_box d-grid test9 content-end">
                            <div class="content-box">
                                <div class="top">
                                    <?php  
                                        for($i = 1; $i <= 6; $i++) { ?>
                                            <div class="item"></div>
                                    <?php } ?>
                                </div>
                                <div class="center">
                                    <?php  
                                        for($i = 1; $i <= 78; $i++) { ?>
                                            <div class="item"></div>
                                        <?php }
                                    ?>
                                </div>
                                <div class="bottom">
                                    <?php  
                                        for($i = 1; $i <= 6; $i++) { ?>
                                            <div class="item"></div>
                                        <?php }
                                    ?>
                                </div>
                            </div>
                        </div>


                        <div class="property_box d-grid test10 content-end">
                            <div class="property_body_top">
                                <div class="content-box">
                                    <div class="top">
                                        <?php  
                                            for($i = 1; $i <= 8; $i++) { ?>
                                                <div class="item"></div>
                                        <?php } ?>
                                    </div>
                                    <div class="center">
                                        <?php  
                                            for($i = 1; $i <= 88; $i++) { ?>
                                                <div class="item"></div>
                                            <?php }
                                        ?>
                                    </div>
                                    <div class="bottom">
                                        <?php  
                                            for($i = 1; $i <= 8; $i++) { ?>
                                                <div class="item"></div>
                                            <?php }
                                        ?>
                                    </div>
                                </div>   
                            </div>
                            <div class="property_body_bottom">
                                <div class="content-box">
                                    <div class="top">
                                        <?php  
                                            for($i = 1; $i <= 8; $i++) { ?>
                                                <div class="item"></div>
                                        <?php } ?>
                                    </div>
                                    <div class="center">
                                        <?php  
                                            for($i = 1; $i <= 88; $i++) { ?>
                                                <div class="item"></div>
                                            <?php }
                                        ?>
                                    </div>
                                    <div class="bottom">
                                        <?php  
                                            for($i = 1; $i <= 6; $i++) { ?>
                                                <div class="item"></div>
                                            <?php }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="property_box d-grid test11 content-end">
                            <div class="property_body_top">
                                <div class="content-box">
                                    <div class="top">
                                        <?php  
                                            for($i = 1; $i <= 8; $i++) { ?>
                                                <div class="item"></div>
                                        <?php } ?>
                                    </div>
                                    <div class="center">
                                        <?php  
                                            for($i = 1; $i <= 70; $i++) { ?>
                                                <div class="item"></div>
                                            <?php }
                                        ?>
                                    </div>
                                    <div class="bottom_1">
                                        <?php  
                                            for($i = 1; $i <= 3; $i++) { ?>
                                                <div class="item"></div>
                                            <?php }
                                        ?>
                                    </div>
                                    <div class="bottom">
                                        <?php  
                                            for($i = 1; $i <= 5; $i++) { ?>
                                                <div class="item"></div>
                                            <?php }
                                        ?>
                                    </div>
                                </div>   
                            </div>
                            <div class="property_body_bottom">
                                <div class="content-box">
                                    <div class="top">
                                        <?php  
                                            for($i = 1; $i <= 4; $i++) { ?>
                                                <div class="item"></div>
                                        <?php } ?>
                                    </div>
                                    <div class="center">
                                        <?php  
                                            for($i = 1; $i <= 55; $i++) { ?>
                                                <div class="item"></div>
                                            <?php }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="property_container_2">
                    <div class="property_bottom_body">
                            <div class="property_box d-grid content-end">
                            <?php  
                                for($i = 1; $i <= 86; $i++) { ?>
                                    <div class="item"><?= $i ?></div>
                            <?php } ?>            
                            </div>                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script>

    </script>
</body>
</html>