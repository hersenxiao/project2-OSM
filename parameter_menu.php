
<!DOCTYPE HTML>

<html>

<head>

<meta charset="utf-8">
<script type="text/javascript" src="assets/js/parameter.js"></script>
<title>Parameter Menu</title>

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
                <div><p>Education</p><button>Parametrize dependencies</button><input type="input" id="Education_input" name="education_input"><div class ="range"><input type="range" id="Education_range" min = "1" max = "5" step="0.1" value= "1"></div></div>
                <div><p>Food</p><button>Parametrize dependencies</button><input type="input" id="Food_input" name="food_input"><div class ="range"><input type="range" id="Food_range" min = "1" max = "5" step="0.1" value= ""></div></div>
                <div><p>Governance</p><button>Parametrize dependencies</button><input type="input" id="Governance_input" name="goverance_input"><div class ="range"><input type="range" id="Governance_range" min = "1" max = "5" step="0.1" value= ""></div></div>
                <div><p>Health</p><button>Parametrize dependencies</button><input type="input" id="Health_input" name="health_input"><div class ="range"><input type="range" id="Health_range" min = "1" max = "5" step="0.1" value= ""></div></div>
                <div><p>Housing</p><button>Parametrize dependencies</button><input type="input" id="Housing_input" name="housing_input"><div class ="range"><input type="range" id="Housing_range" min = "1" max = "5" step="0.1" value= ""></div></div>
                <div><p>Leisure</p><button>Parametrize dependencies</button><input type="input" id="Leisure_input" name="leisure_input"><div class ="range"><input type="range" id="Leisure_range" min = "1" max = "5" step="0.1" value= ""></div></div>
                <div><p>Mixed</p><button>Parametrize dependencies</button><input type="input" id="Mixed_input" name="mixed_input"><div class ="range"><input type="range" id="Mixed_range" min = "1" max = "5" step="0.1" value= ""></div></div>
                <div><p>Religion</p><button>Parametrize dependencies</button><input type="input" id="Religion_input" name="religion_input"><div class ="range"><input type="range" id="Religion_range" min = "1" max = "5" step="0.1" value= ""></div></div>
                <div><p>Transport</p><button>Parametrize dependencies</button><input type="input" id="Transport_input" name="transport_input"><div class ="range"><input type="range" id="Transport_range" min = "1" max = "5" step="0.1" value= ""></div></div>
                <div><p>Working</p><button>Parametrize dependencies</button><input type="input" id="Working_input" name="working_input"><div class ="range"><input type="range" id="Working_range" min = "1" max = "5" step="0.1" value= ""></div></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close
                </button>
                <button type="submit" class="btn btn-primary">
                    Save
                </button>
            </div>
        </form>
        </div><!-- /.modal-content -->
</body>

</html>