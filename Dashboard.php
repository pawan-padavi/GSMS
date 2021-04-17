<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <style>
    #content div
    {
        display:inline-flex;
        padding:10px;
    }
    #right li
    {
        display:flex;
        background-color:pink;
        padding:20px;
        margin:10px;
        align: left 0px;
        width:200px;
    }
    
    
    
    </style>
</head>
<body>
<?php
include('header.php');
?>
<div class="container-fluid"><div class="row"><div class="mt-5 col-md-12 col-lg-12 col-sm-6 mb-5">
<div id="content">
<div id="right">
<ul>
<li><button id="add-product" class="btn btn-success w-100">Add Products</button></li>
<li>Update Products</li>
<li>Add Discount</li>
<li>Setting</li>
<li>Remain Products</li>
<li>About Company</li>
</ul>
</div>
<div id="mainContent">

</div>
</div>
<!-- <canvas id="myChart" width="400" height="400"></canvas> -->
</div></div></div>
<?php
include('footer.php');
?>
<script src="Assets/js/chart.js"></script>
<script src="Assets/js/jquery.js"></script>
//<script src="Assets/js/bootstrap.js"></script>
<script src="Assets/js/all.js"></script>
<script>
$(document).ready(function(){
viewdata();
function viewdata()
{
    $.ajax({
            url:"view-product.php",
            type:"POST",
            success:function(data)
            {
                $('#mainContent').html(data);
            }
        });
}
$('#add-product').on("click",function(){
    $.ajax({
            url:"add-products.php",
            type:"POST",
            success:function(data)
            {
                $('#mainContent').html(data);
            }
        });
})
});
</script>
<!-- <script src="CHeader.js"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var num1 =20;
var num =50;
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Sold out', 'in stock'],
        datasets: [{
            label: 'Stocks',
            data: [num1, num],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive:false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script> -->
</body>
</html>