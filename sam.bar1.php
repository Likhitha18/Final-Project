<?php
$con  = mysqli_connect("localhost","root","","datab");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT distinct loc FROM main_db1";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $locname[]  = $row['loc']  ;
			
			$data = mysqli_query($con,"select count(*) as num from main_db1 where  loc='".$row['loc']."' ") or die(mysql_error());

			$row = mysqli_fetch_assoc($data);

			$nn = $row['num'];
				$cc[] =$nn ;
        }
 
 
 }
 
 
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Graph</title> 
    </head>
    <body><center><br>
        <div style="width:60%;hieght:20%;text-align:center">
            <h2 class="page-header" >Analytics Reports </h2>
            <div>Statistics as per district wise  </div>
            <canvas  id="chartjs_bar"></canvas> 
        </div>    
    </body>              
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($locname); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($cc); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
</html>