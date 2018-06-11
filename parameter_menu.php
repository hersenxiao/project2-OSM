<?php
$user = "user1";
$data = file("data/userdata/$user/parameterValue.csv");
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
                <div><p>Education</p><button>Parametrize dependencies</button><input type="input" id="Education_input" value=<?=$data[0]?> name="education_input"><div class ="range"><input type="range" id="Education_range" min = "1" max = "5" step="0.1"  value=<?=$data[0]?>></div></div>
                <div><p>Food</p><button>Parametrize dependencies</button><input type="input" id="Food_input" value=<?=$data[1]?> name="food_input"><div class ="range"><input type="range" id="Food_range" min = "1" max = "5" step="0.1"value=<?=$data[1]?> ></div></div>
                <div><p>Governance</p><button>Parametrize dependencies</button><input type="input" id="Governance_input" value=<?=$data[2]?> name="goverance_input"><div class ="range"><input type="range" id="Governance_range" min = "1" max = "5" step="0.1" value=<?=$data[2]?> ></div></div>
                <div><p>Health</p><button>Parametrize dependencies</button><input type="input" id="Health_input" value=<?=$data[3]?> name="health_input"><div class ="range"><input type="range" id="Health_range" min = "1" max = "5" step="0.1" value=<?=$data[3]?> ></div></div>
                <div><p>Housing</p><button>Parametrize dependencies</button><input type="input" id="Housing_input" value=<?=$data[4]?> name="housing_input"><div class ="range"><input type="range" id="Housing_range" min = "1" max = "5" step="0.1" value=<?=$data[4]?> ></div></div>
                <div><p>Leisure</p><button>Parametrize dependencies</button><input type="input" id="Leisure_input" value=<?=$data[5]?> name="leisure_input"><div class ="range"><input type="range" id="Leisure_range" min = "1" max = "5" step="0.1" value=<?=$data[5]?>></div></div>
                <div><p>Mixed</p><button>Parametrize dependencies</button><input type="input" id="Mixed_input" value=<?=$data[6]?> name="mixed_input"><div class ="range"><input type="range" id="Mixed_range" min = "1" max = "5" step="0.1" value=<?=$data[6]?> ></div></div>
                <div><p>Religion</p><button>Parametrize dependencies</button><input type="input" id="Religion_input" value=<?=$data[7]?> name="religion_input"><div class ="range"><input type="range" id="Religion_range" min = "1" max = "5" step="0.1" value=<?=$data[7]?> ></div></div>
                <div><p>Transport</p><button>Parametrize dependencies</button><input type="input" id="Transport_input" value=<?=$data[8]?> name="transport_input"><div class ="range"><input type="range" id="Transport_range" min = "1" max = "5" step="0.1" value=<?=$data[8]?> ></div></div>
                <div><p>Working</p><button>Parametrize dependencies</button><input type="input" id="Working_input" value=<?=$data[9]?> name="working_input"><div class ="range"><input type="range" id="Working_range" min = "1" max = "5" step="0.1" value=<?=$data[9]?> ></div></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Back
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Load
                </button>
                <button type="submit" class="btn btn-primary">
                    Save
                </button>
            </div>
        </form>
        </div><!-- /.modal-content -->
</body>

</html>