@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="map">
                    <h2><i>"Den hurtige"</i></h2>

                    <div style="position: relative; ">
                        <canvas id="myCanvas" width="350" height="200"
                          style="position: absolute; left: 0; top: 0; z-index: 0; border-bottom: 2px solid orange; border-top: 2px solid orange;"></canvas>
                        <canvas id="canvasTest" width="350" height="200" 
                          style="position: absolute; left: 0; top: 0; z-index: 1;"></canvas>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                <script>
                    //varerne
                    var canvas = document.getElementById("canvasTest");
                    var ctx1 = canvas.getContext("2d");
                    ctx1.fillStyle = "#000";

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
                        ctx1.fillRect(points[i].x, points[i].y, 5, 5);
                      }



                    //butikken
                    var canvas = document.getElementById("myCanvas");
                    var ctx = canvas.getContext("2d");
                    ctx.fillStyle = "orange";
                    ctx.fillRect(8,0,100,5); //top1
                    ctx.fillRect(125,0,100,5); //top2
                    ctx.fillRect(240,0,100,5); //top3

                    ctx.fillRect(0,150,5,50); //venstre bund
                    ctx.fillRect(0,80,5,60); //venstre middle
                    ctx.fillRect(0,10,5,60); //venstre top

                    ctx.fillRect(345,150,5,50); //højre bund
                    ctx.fillRect(345,80,5,60); //højre middle
                    ctx.fillRect(345,10,5,60); //højre top

                    ctx.fillRect(160,195,80,5); //bund middle
                    ctx.fillRect(255,195,90,5); //bund højre

                    ctx.fillRect(80,175,80,10); //betaling bund
                    ctx.fillRect(80,150,80,10); //betaling top

                    ctx.fillRect(60,130,100,5); //1 over betaling
                    ctx.fillRect(60,80,80,20); //2 over betaling
                    ctx.fillRect(60,35,50,20); //2 over betaling


                    ctx.fillRect(200,35,100,20); //midte højre 1
                    ctx.fillRect(200,80,100,20); //midte højre 2
                    ctx.fillRect(220,140,80,20); //midte højre 3

                </script>
                
@endsection
