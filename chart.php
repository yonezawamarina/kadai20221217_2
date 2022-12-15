
<?php 
include('funcs.php');

//2. DB接続します
$pdo = db_connect();

$type = '';
$price = '';


//2．データ登録SQL作成
//prepare("")の中にはmysqlのSQLで入力したINSERT文を入れて修正すれば良いイメージ
$stmt = $pdo->prepare("SELECT `type`,sum(price) FROM `gs_bm_table` GROUP BY `type` ;");
$status = $stmt->execute();
// echo '<pre>';
// var_dump($stmt);
// echo'</pre>';

while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {

$type = $type . '"'. $result['type'].'",';
$price = $price . '"'. $result['sum(price)'].'",';


// echo '<pre>';
// var_dump($type);
// echo'</pre>';

}

// $type = trim($type,",");
// $price = trim($price,",");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 

<link rel="stylesheet" href="chart.css">
</head>
<body>

    <canvas id="myChart" width="400" height="400"></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    <!-- <script src="./js/chartjs-plugin-labels.js"></script> -->

    <button class="btnall"  onclick="location.href='index.php'">top</button>

    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [<?php echo $type ?>],//
            datasets: [{
                label: '# of Votes',
                data: [<?php echo $price ?>],

                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>
        <!-- <script src="./js/chartjs-plugin-labels.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script> -->
</body>
</html>