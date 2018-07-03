<?php
$username = "user1";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ORI Demo</title> 
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

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
        <img id = "logo" src="assets/img/LogoPolytechLab.png"  alt="logo" />
		    <div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
        <h1 id = "title_name">Operational Resilience Index computing tool</h1>
        </nav>

	   <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="#" class="waves-effect waves-dark" onmouseover="GetValueForToolTip(this)"><i class="fa fa-sitemap"></i><span class = "name_menu">Load</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?php
                                    if(file_exists("./data/userdata/$username/hazardMap.txt")){?>
                                    <div id="circle"></div>
                                    <?php } else{?>
                                    <div id="circle_green"></div>
                                    <?php } ?>
                            <a data-toggle="modal" data-target="#myModal_file" href="#"><span class = "name_menu">Load hazard map</span></a>
                            </li>
                            <li>
                                 <?php
                                    if(file_exists("./data/userdata/$username/building.txt")){?>
                                    <div id="circle"></div>
                                    <?php } else{?>
                                    <div id="circle_green"></div>
                                    <?php } ?>
                                <a data-toggle="modal" data-target="#myModal_file2" href="#"><span class = "name_menu">Load/update Building</span></a>
                            </li>
                            <li>
                                <a href="#"><span class = "name_menu">Load/update network</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                       <?php
                                       if(file_exists("./data/userdata/$username/electricity.txt")){?>
                                       <div id="circle"></div>
                                       <?php } else{?>
                                       <div id="circle_green"></div>
                                       <?php } ?>
                                       <a data-toggle="modal" data-target="#myModal_file3" href="#"><span class = "name_menu">Electricity network</span></a>
                                    </li>
                                    <li>
                                       <?php
                                       if(file_exists("./data/userdata/$username/transportation.txt")){?>
                                       <div id="circle"></div>
                                       <?php } else{?>
                                       <div id="circle_green"></div>
                                       <?php } ?>
                                       <a data-toggle="modal" data-target="#myModal_file4" href="#"><span class = "name_menu">Transportation network</span></a>
                                    </li>
                                    <li>
                                       <?php
                                       if(file_exists("./data/userdata/$username/communication.txt")){?>
                                       <div id="circle"></div>
                                       <?php } else{?>
                                       <div id="circle_green"></div>
                                       <?php } ?>
                                       <a data-toggle="modal" data-target="#myModal_file5" href="#"><span class = "name_menu">Communication network</span></a>
                                    </li>
                                    <li>
                                       <?php
                                       if(file_exists("./data/userdata/$username/water.txt")){?>
                                       <div id="circle"></div>
                                       <?php } else{?>
                                       <div id="circle_green"></div>
                                       <?php } ?>
                                       <a data-toggle="modal" data-target="#myModal_file6" href="#"><span class = "name_menu">Water supply</span></a>
                                    </li>
                                    <li>
                                       <?php
                                       if(file_exists("./data/userdata/$username/other.txt")){?>
                                       <div id="circle"></div>
                                       <?php } else{?>
                                       <div id="circle_green"></div>
                                       <?php } ?>
                                       <a data-toggle="modal" data-target="#myModal_file7" href="#"><span class = "name_menu">Other network</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                       <?php
                                       if(file_exists("./data/userdata/$username/critical.txt")){?>
                                       <div id="circle"></div>
                                       <?php } else{?>
                                       <div id="circle_green"></div>
                                       <?php } ?>
                                       <a data-toggle="modal" data-target="#myModal_file8" href="#"><span class = "name_menu">Load critical infrastructure & social event</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class=" waves-effect waves-dark" href="#" title = "Social and time component"><i class="fa fa-dashboard"></i><span class = "name_menu">Social and time component</span></a>
                    </li>
                    <li>
                        <a href="parameter_menu.php" class="waves-effect waves-dark"  title = "Parameterize ORI computation"><i class="fa fa-qrcode"></i><span class = "name_menu">Parameterize ORI computation</span></a>
                    </li> 
                    <li>
                        <a href="#" class="waves-effect waves-dark" title = "Compute ORI" onclick="computeORI()"><i class="fa fa-desktop" ></i><span class = "name_menu">Compute ORI</span></a>
                    </li>
					<li>
                        <a href="#" class="waves-effect waves-dark"  title = "Export ORI"><i class="fa fa-bar-chart-o"></i><span class = "name_menu">Export ORI</span></a>
                    </li>                   
                    <li>
                        <a href="#" class="waves-effect waves-dark"  title = "Scale ORI"><i class="fa fa-table"></i><span class = "name_menu">Scale ORI</span></a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
            <div id="map" class="map">
            	<div id="legend">
                    <div id="line_box">
            		<div class="line">
            			<div id="red" class="rectangle"></div>
            			<div class="number_line">1-2</div>
            		</div>
            		<div class="line"><div id="orange" class="rectangle"></div><div class="number_line">2-3</div></div>
            		<div class="line"><div id="yellow" class="rectangle"></div><div class="number_line">3-4</div></div>
            		<div class="line"><div id="green" class="rectangle"></div><div class="number_line">4-5</div></div>
                    </div>        		
            	</div>
            </div>
            <div id="info">&nbsp;</div>
		</div>
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
        <script type="text/javascript">
          //to set the center position
           var m_center = [8.9530046,44.401327];
           //to transform the center position form standard EPSG:4326 to standard EPSG:3857
      m_center = ol.proj.transform(m_center,'EPSG:4326','EPSG:3857');
      //to set the projection standard as EPSG:3857
      var projection = ol.proj.get('EPSG:3857');

      var vector = new ol.layer.Vector({
        source: new ol.source.Vector({
          url: 'data/kml/doc.kml',
          format: new ol.format.KML()
        })
      });
      //to display the map in the div “map” and set the zoom level as 16.
      var map = new ol.Map({
        layers: [new ol.layer.Tile({
            source: new ol.source.OSM()
          })],
        target: document.getElementById('map'),
        view: new ol.View({
          center:m_center,
          projection: projection,
          zoom: 16
        })
});
        function computeORI(){
        	map.addLayer(vector);
      	}
      
</script>

    </script>
    <script src="assets/js/jquery-1.10.2.js"></script>
	
	<!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/materialize/js/materialize.min.js"></script>
	
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
	<script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 

    <div class="modal fade" id="myModal_file" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Load hazard map</h4>
        </div>
        <div class="modal-body">
          <form action="saveHazardMap.php"
          method="post" enctype="multipart/form-data">
          <input type="file" name="avatar" />
          <input type="submit" value="Upload"/>
         </form>
        </div>

    </div>

    <div class="modal fade" id="myModal_file2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Load/update Building</h4>
        </div>
        <div class="modal-body">
          <form action="saveBuilding.php"
          method="post" enctype="multipart/form-data">
          <input type="file" name="avatar" />
          <input type="submit" value="Upload"/>
         </form>
        </div>
    </div>

    <div class="modal fade" id="myModal_file3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Load Electricity network</h4>
        </div>
        <div class="modal-body">
          <form action="saveElectricity.php"
          method="post" enctype="multipart/form-data">
          <input type="file" name="avatar" />
          <input type="submit" value="Upload"/>
         </form>
        </div>
    </div>

    <div class="modal fade" id="myModal_file4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Load Transportation network</h4>
        </div>
        <div class="modal-body">
          <form action="saveTransportation.php"
          method="post" enctype="multipart/form-data">
          <input type="file" name="avatar" />
          <input type="submit" value="Upload"/>
         </form>
        </div>
    </div>

    <div class="modal fade" id="myModal_file5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Load Communication network</h4>
        </div>
        <div class="modal-body">
          <form action="saveCommunication.php"
          method="post" enctype="multipart/form-data">
          <input type="file" name="avatar" />
          <input type="submit" value="Upload"/>
         </form>
        </div>
    </div>

    <div class="modal fade" id="myModal_file6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Load Water supply</h4>
        </div>
        <div class="modal-body">
          <form action="saveWater.php"
          method="post" enctype="multipart/form-data">
          <input type="file" name="avatar" />
          <input type="submit" value="Upload"/>
         </form>
        </div>
    </div>

    <div class="modal fade" id="myModal_file7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Load Other network</h4>
        </div>
        <div class="modal-body">
          <form action="saveOthernetwork.php"
          method="post" enctype="multipart/form-data">
          <input type="file" name="avatar" />
          <input type="submit" value="Upload"/>
         </form>
        </div>
    </div>

    <div class="modal fade" id="myModal_file8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Load critical infrastructure & social event</h4>
        </div>
        <div class="modal-body">
          <form action="savecritical.php"
          method="post" enctype="multipart/form-data">
          <input type="file" name="avatar" />
          <input type="submit" value="Upload"/>
         </form>
        </div>
    </div>
</body>

</html>