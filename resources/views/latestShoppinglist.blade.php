@extends('layouts.app')

@section('content')
<style>
    
    .row {
        margin: 0;
    }
    .latestShoppinglist h2 {
        text-align:center;
    }
    
    .latestShoppinglist {
        margin: 0px auto;
    }
    
    .form-control:focus {
        border-color: #f39200;
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(243,146,0,.6);
    }
    
    .doneWithMap {
            text-align: center;
    }
    .btnDone {
        color: #fff;
        background-color: #f39200;
        width: 50%;
    }
    
    .map {
        height: 490px;
    }
    
    .btnHomePage {
        color: #fff;
        background-color: #f39200;
        width: 100%;
    }
    
    .btnHomePage a {
        color: #fff;
        font-size: 20px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="latestShoppinglist">

                <div class="panel-body">
                    <div class="map">

                    <div style="position: relative; ">
                        <canvas id="myCanvas" width="285" height="450"
                          style="position: absolute; left: 0; top: 0; z-index: 0; border: 2px solid orange;"></canvas>
                        <canvas id="canvasTest" width="285" height="450" 
                          style="position: absolute; left: 0; top: 0; z-index: 1;"></canvas>
                    </div>
                    </div>
                    
                    <div class="doneWithMap">
                        <div class="panel-body"><button class="btn btnHomePage"><a href="home">Færdig</a></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                <script>
                    //varerne
                    var canvas = document.getElementById("canvasTest");
                    var ctx4 = canvas.getContext("2d");
                    ctx4.fillStyle = "#000";

                    <?PHP
                        //CREATE CONNECTION
                        $con=mysqli_connect('87.118.68.154','c1dbu1','vwhgMY726M');
                        //select database
                        if(!mysqli_select_db($con,'c1db7')) {
                            echo "database not selected";
                        }
                        //select query
                        //select random question
                        $sql=   
                            "select * from `products`";
                        //execute sql query
                        $records= (mysqli_query($con,$sql));
                        $str = 'var points = ['; 
                            while ($row=mysqli_fetch_array($records)) {

                                $str.="{"."y:".$row['x'].", ". "x:".$row['y']. "},";

                            }
                            $str = substr($str,0,strlen($str)-1);
                            echo $str;

                            echo '];';
                    ?>

                    // ctx1.fillRect(points.['y'],points.['x'],5,5);

                    for (var i = 0; i < points.length; i++) {
                        ctx4.fillRect(points[i].x, points[i].y, 5, 5);
                      }
                      
                      
                    //butikken
                    var canvas = document.getElementById("myCanvas");
                    var ctx = canvas.getContext("2d");
                    ctx.fillStyle = "grey";
                    //first
                    ctx.fillRect(15,15,25,155); //left top vertical
                    ctx.fillRect(65,15,205,25); //top top horizontal
                    ctx.fillRect(245,60,25,110); //right top vertical

                    ctx.fillRect(75,60,25,60); //middle left 
                    ctx.fillRect(130,60,25,60); //middle middle
                    ctx.fillRect(185,60,25,60); //middle right

                    ctx.fillRect(75,145,135,25); //top bottom

                    //second             
                    ctx.fillRect(245,205,25,150); //right vertical
                    ctx.fillRect(15,205,25,85); //left first vertical
                    ctx.fillRect(15,330,25,85); //left second vertical

                    ctx.fillRect(75,205,25,85); //middle left
                    ctx.fillRect(130,205,25,85); //middle middle
                    ctx.fillRect(185,205,25,85); //middle right


                    ctx.fillRect(75,330,135,25); //bottom first vertical
                    ctx.fillRect(75,390,135,25); //bottom second vertical

                    //kasse
                    var ctx1 = canvas.getContext("2d");
                    ctx1.fillStyle = "black";

                    ctx1.fillRect(220,390,10,35); //middle left
                    ctx1.fillRect(235,390,10,35); //middle middle
                    ctx1.fillRect(250,390,10,35); //middle right
                    ctx1.fillRect(265,390,10,35); //middle right


                    //indgang
                    var ctx2 = canvas.getContext("2d");
                    ctx2.fillStyle = "orange";

                    ctx2.fillRect(45,425,25,25); //middle left


                    //text
                    var ctx3 = canvas.getContext("2d");
                    ctx3.fillStyle = "grey";
                    ctx3.font = "lighter 17.5px helvetica";
                    ctx3.fillText("KASSE",219,445);
                    ctx3.fillText("IND",10,445);

                </script>
                
@endsection