<?php
//To get the username, here just for testing, we set it as “user1”, in the future we should get the username for the session.
$user = "user1";
$datas = file("data/userdata/$user/parameterValue.csv",FILE_IGNORE_NEW_LINES);
//The initial data are saved in the two-dimension array $data. $data[$i][0] is the value of the (i+1)th title, $data[$i][$j] is the value of the (i+1)th title’s jth subtitle.
$data;
//hiddens is used to save the values in the “Parametrize Dependencies” Modal dialog.
$hiddens;
//The array $titles is used to save the titles
$titles = array('Education','Food','Governance','Health','Housing','Leisure','Mixed','Religion','Transport','Working');
//The array $subTitles is used to save the subtitles
$subTitles = array('Energy','Water','Communication','Transport','Special');

$title_num = count($titles);
$subTitle_num = count($subTitles);

for($i= 0; $i < $title_num; $i++){
    $data[$i] = explode(",", $datas[$i]);
    $hidden= "";
    for( $j = 1; $j <= $subTitle_num; $j++ ){
        $hidden = $hidden.",".$data[$i][$j];
    }
    $hiddens[$i] = $hidden;
}

?>
<!DOCTYPE HTML>

<html>

<head>

    <meta charset="utf-8">
    <script type="text/javascript" src="assets/js/parameter.js"></script>
    <title>Parameter Menu</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 

    <link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
    <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
    <script src="https://openlayers.org/en/v4.6.5/build/ol.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link href="assets/css/parameter.css" rel="stylesheet" />
</head>

<body>   
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <img id = "logo" src="assets/img/LogoPolytechLab.png"  alt="logo" />
    </nav>

    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">
                Parameterize ORI computation
            </h4>
        </div>

        <form action="saveParameter.php" method="post">

            <div class="modal-body">
                <?php
                for($i = 0; $i < $title_num; $i++){
                ?>
                <div>
                    <p><?=$titles[$i]?></p>
                    <button type="button" data-toggle="modal" data-target="#myModal_<?=$titles[$i]?>">Parametrize dependencies</button>
                    <input class="input" type="input" id="<?=$titles[$i]?>_input" value="<?=trim($data[$i][0])?>" name="<?=$titles[$i]?>_input">
                    <input type="hidden" id="<?=$titles[$i]?>_hidden" value="<?=$hiddens[$i]?>" name="<?=$titles[$i]?>_hidden">
                    <div class ="range">
                        <input type="range" id="<?=$titles[$i]?>_range" min = "1" max = "5" step="0.01"  value="<?=trim($data[$i][0])?>">
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="modal-footer">
                <a href="index.php"><button type="button" class="btn btn-default">Back</button></a>
                <button data-toggle="modal" data-target="#myModal_file" type="button" class="btn btn-default" id="load">Load
                </button>
                <button type="submit" class="btn btn-primary">
                    Save
                </button>
            </div>
        </form>
    </div><!-- /.modal-content -->

    <?php
        for($i = 0; $i < $title_num; $i++){
    ?>

    <div class="modal fade" id="myModal_<?=$titles[$i]?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button  id="<?=$titles[$i]?>_close" type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
                Parameterize dependencies (<?=$titles[$i]?>)
            </h4>
        </div>
        <div class="modal-body">
            <?php
                for($j = 1; $j <= $subTitle_num; $j++){
                    $subTitles_index = $j - 1;
            ?>
            <div>
                <p><?=$subTitles[$subTitles_index]?></p>
                <input class="input" type="input" id="<?=$titles[$i]?>_<?=$subTitles[$subTitles_index]?>_input" value="<?=trim($data[$i][$j])?>" name="">
                <div class ="range">
                    <input type="range" id="<?=$titles[$i]?>_<?=$subTitles[$subTitles_index]?>_range" min = "1" max = "5" step="0.01"  value="<?=trim($data[$i][$j])?>">
                </div>
            </div>
            <?php
                }
            ?>
        </div>
         <div class="modal-footer">
               <div id = "dependencies_ok"><button type="button" id="<?=$titles[$i]?>_ok_button" class="btn btn-primary dependencies_ok" data-dismiss="modal">ok</button></div> 
        </div>
    </div>

    <?php
        }
    ?>

    <!-- Bootstrap Modal Dialog for the load button -->
    <div class="modal fade" id="myModal_file" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Load parameters</h4>
        </div>
        <div class="modal-body">
          <form action="saveLoad.php"
          method="post" enctype="multipart/form-data">
          <input type="file" name="avatar" />
          <input type="submit" value="Confirm"/>
         </form>
        </div>
    </div>

</body>

</html>