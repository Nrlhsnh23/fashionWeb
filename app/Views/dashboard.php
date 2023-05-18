<?= $this->extend('base/baseAdmin') ?>
<?= $this->section('content') ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<div class="col-lg-12">
	<div class="card shadow mb-4">
		<!-- Card Header - Dropdown -->
		<div
		class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-primary">Grafik Pengunjung</h6>
	</div>
	<!-- Card Body -->
	<div class="card-body">
		<!-- <div class="chart-area"> -->
			<canvas id="myChart" style="width: 100%;"></canvas>
		<!-- </div> -->
	</div>
</div>
</div>

<script>

     var ctx = document.getElementById("myChart").getContext('2d');
     var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [<?php 
                foreach ($visitors as $data) {
                 $hasil = $data['category'];
                 // $hasil[] = $data['jumlahdata'];
                 echo "'" . $hasil . "',";
             } ?>],
             datasets: [{
                label: '',
                data: [ <?php 
                    foreach ($visitors as $data) {
                     // $hasil[] = $data['date'];
                     $hasil = $data['jumlahdata'];
                     echo "'" . $hasil . "',";
                 }

                 ?>],
                 // backgroundColor: [
                 // 'rgba(255, 99, 132, 0.2)',
                 // 'rgba(54, 162, 235, 0.2)',
                 // 'rgba(255, 206, 86, 0.2)',
                 // 'rgba(75, 192, 192, 0.2)'
                 // ],
                 // borderColor: [
                 // 'rgba(255,99,132,1)',
                 // 'rgba(54, 162, 235, 1)',
                 // 'rgba(255, 206, 86, 1)',
                 // 'rgba(75, 192, 192, 1)'
                 // ],
                 borderWidth: 1
             }]
         },
         options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>

<?= $this->endSection() ?>