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
        </nav>

	   <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="#" class="waves-effect waves-dark" onmouseover="GetValueForToolTip(this)"><i class="fa fa-sitemap"></i>Load<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a data-toggle="modal" data-target="#myModal_file" href="#">Load hazard map</a>
                            </li>
                            <li>
                                <a href="#">Load/update Building</a>
                            </li>
                            <li>
                                <a href="#">Load/update network<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Electricity network</a>
                                    </li>
                                    <li>
                                        <a href="#">Transportation network</a>
                                    </li>
                                    <li>
                                        <a href="#">Communication network</a>
                                    </li>
                                    <li>
                                        <a href="#">Water supply</a>
                                    </li>
                                    <li>
                                        <a href="#">Other network</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Load critical infrastructure & social event</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class=" waves-effect waves-dark" href="#" title = "Social and time component"><i class="fa fa-dashboard"></i>Social and time component</a>
                    </li>
                    <li>
                        <a href="parameter_menu.php" class="waves-effect waves-dark"  title = "Parameterize ORI computation"><i class="fa fa-qrcode"></i>Parameterize ORI computation</a>
                    </li> 
                    <li>
                        <a href="#" class="waves-effect waves-dark" title = "Compute ORI" onclick="computeORI()"><i class="fa fa-desktop" ></i>Compute ORI</a>
                    </li>
					<li>
                        <a href="#" class="waves-effect waves-dark"  title = "Export ORI"><i class="fa fa-bar-chart-o"></i>Export ORI</a>
                    </li>                   
                    <li>
                        <a href="#" class="waves-effect waves-dark"  title = "Scale ORI"><i class="fa fa-table"></i>Scale ORI</a>
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
            		<div class="line"><div id="light_yellow" class="rectangle"></div><div class="number_line">4-5</div></div>
            		<div class="line"><div id="green" class="rectangle"></div><div class="number_line">5-6</div></div> 
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
           var m_center = [8.9530046,44.401327];
      m_center = ol.proj.transform(m_center,'EPSG:4326','EPSG:3857');
      var projection = ol.proj.get('EPSG:3857');

      var vector = new ol.layer.Vector({
        source: new ol.source.Vector({
          url: 'data/kml/doc.kml',
          format: new ol.format.KML()
        })
      });

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


      <script type="text/javascript">
        //图片上传
        var xhr;
        //上传文件方法
        function UpladFile() {
            var fileObj = document.getElementById("file").files[0]; // js 获取文件对象
            //console.log(fileObj);
            var url =  "http://127.0.0.1/edsa-Project/git/project2-OSM/"; // 接收上传文件的后台地址

            var form = new FormData(); // FormData 对象
            form.append("file", fileObj); // 文件对象

            xhr = new XMLHttpRequest();  // XMLHttpRequest 对象
            xhr.open("post", url, true); //post方式，url为服务器请求地址，true 该参数规定请求是否异步处理。
            
            xhr.onload = uploadComplete; //请求完成
            xhr.onerror =  uploadFailed; //请求失败

            xhr.upload.onprogress = progressFunction;//【上传进度调用方法实现】
            xhr.upload.onloadstart = function(){//上传开始执行方法
                ot = new Date().getTime();   //设置上传开始时间
                oloaded = 0;//设置上传开始时，以上传的文件大小为0
            };

            xhr.send(form); //开始上传，发送form数据
        }

        //上传成功响应
        function uploadComplete(evt) {
            //服务断接收完文件返回的结果

            var data = JSON.parse(evt.target.responseText);
            if(data.success) {
                alert("上传成功！");
            }else{
                alert("上传失败1！");
            }

        }
        //上传失败
        function uploadFailed(evt) {
            alert("上传失败2！");
        }
        //取消上传
        function cancleUploadFile(){
            xhr.abort();
        }


        //上传进度实现方法，上传过程中会频繁调用该方法
        function progressFunction(evt) {
            var progressBar = document.getElementById("progressBar");
            var percentageDiv = document.getElementById("percentage");
            // event.total是需要传输的总字节，event.loaded是已经传输的字节。如果event.lengthComputable不为真，则event.total等于0
            if (evt.lengthComputable) {//
                progressBar.max = evt.total;
                progressBar.value = evt.loaded;
                percentageDiv.innerHTML = Math.round(evt.loaded / evt.total * 100) + "%";
            }
            var time = document.getElementById("time");
            var nt = new Date().getTime();//获取当前时间
            var pertime = (nt-ot)/1000; //计算出上次调用该方法时到现在的时间差，单位为s
            ot = new Date().getTime(); //重新赋值时间，用于下次计算
            var perload = evt.loaded - oloaded; //计算该分段上传的文件大小，单位b
            oloaded = evt.loaded;//重新赋值已上传文件大小，用以下次计算
            //上传速度计算
            var speed = perload/pertime;//单位b/s
            var bspeed = speed;
            var units = 'b/s';//单位名称
            if(speed/1024>1){
                speed = speed/1024;
                units = 'k/s';
            }
            if(speed/1024>1){
                speed = speed/1024;
                units = 'M/s';
            }
            speed = speed.toFixed(1);
            //剩余时间
            var resttime = ((evt.total-evt.loaded)/bspeed).toFixed(1);
            time.innerHTML = '，速度：'+speed+units+'，剩余时间：'+resttime+'s';
            if(bspeed==0) time.innerHTML = '上传已取消';
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
</body>

</html>