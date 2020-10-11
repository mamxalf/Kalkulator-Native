<div class="jumbotron">
	<h1 class="display-4">Selamat Datang di</h1>
	<p class="lead"><?php echo $title ?></p>
	<hr class="my-4">

	<!-- chart -->
	<?php
		//chart
		$segitiga 		 = mysqli_query($koneksi, "SELECT * FROM segitiga_luas");
		$count_segitiga  = mysqli_num_rows($segitiga);

		$persegi  		 = mysqli_query($koneksi, "SELECT * FROM persegi_luas");
		$count_persegi   = mysqli_num_rows($persegi);

		$lingkaran  	 = mysqli_query($koneksi, "SELECT * FROM lingkaran_luas");
		$count_lingkaran = mysqli_num_rows($lingkaran);

		$total = $count_segitiga + $count_persegi + $count_lingkaran;
		$segitiga_persen = $count_segitiga / $total * 100;
		$persegi_persen = $count_persegi / $total * 100;
		$lingkaran_persen = $count_lingkaran / $total * 100;
	?>

<div class="mx-auto" style="height: 400px; width: 400px">
    <canvas id="myChart" width="200" height="200"></canvas>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>


	<script>
	    var ctx = document.getElementById('myChart');
	    var myChart = new Chart(ctx, {
	        type: 'pie',
	        data: {
	            labels: ['Segitiga : <?php echo $count_segitiga; ?>', 'Persegi : <?php echo $count_persegi; ?>', 'Lingkaran : <?php echo $count_lingkaran; ?>'],
	            datasets: [{
	                label: '# of Votes',
	                data: [<?php echo $segitiga_persen; ?>, <?php echo $persegi_persen; ?>, <?php echo $lingkaran_persen; ?>],
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
</div>