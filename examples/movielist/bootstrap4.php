<!DOCTYPE html>
<?php 
$moviesArray[] = array('Kumfu Panda',90,'01/20/2016');
$moviesArray[] = array('Matrix',86,'02/20/2016');
$moviesArray[] = array('Meet the Parents',96,'03/20/2016');
$moviesArray[] = array('Independence Day',100,'04/20/2016');
$moviesArray[] = array('Mask',98,'05/20/2016');
$moviesArray[] = array('Cable Guy',93,'01/25/2016');
$moviesArray[] = array('Minions',87,'01/10/2016');
$moviesArray[] = array('Forest Gump',86,'02/10/2016');
$moviesArray[] = array('Terminator',95,'06/20/2016');


?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
	<title>Movie Listing</title>
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="../resources/syntax/shCore.css">
	<link rel="stylesheet" type="text/css" href="../resources/demo.css">
	<style type="text/css" class="init">
	
	</style>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="../../media/js/jquery.dataTables.js">
	</script>
	<script type="text/javascript" language="javascript" src="../../media/js/dataTables.bootstrap4.js">
	</script>
	<script type="text/javascript" language="javascript" src="../resources/syntax/shCore.js">
	</script>
	<script type="text/javascript" language="javascript" src="../resources/demo.js">
	</script>
	<script type="text/javascript" language="javascript" class="init">
	
$(document).ready(function() {
	$('#example').dataTable( {
      "pageLength": 5,
       "bLengthChange": false,
    } );

} );

	</script>
</head>
<body class="dt-example dt-example-bootstrap4">
	<div class="container">
	<br>
	<br>

		<section>
			<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Movie Name</th>
						<th>Run Time</th>
						<th>Release Date</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Movie Name</th>
						<th>Run Time</th>
						<th>Release Date</th>
					</tr>
				</tfoot>
				<tbody>
				<?php
				 for ($x=0;$x < 9;$x++) {?>
					<tr>
						<td><a href="openDetail.php?movie_id=<?php echo $x ?>"><?php echo  $moviesArray[$x][0];?></a></td>
						<?php $date_val = new DateTime($moviesArray[$x][2]); 
						$run_time = explode(":", date('H:i', mktime(0, $moviesArray[$x][1])));
						?>
						<td><?php echo $run_time[0]." hr  ".$run_time[1]."mins" ;?></td>
						<td><?php echo date_format($date_val, 'M jS, Y');?></td>
					</tr>
				  <?php
		          }
				  ?>
				</tbody>
			</table>
		</section>
	</div>
</body>
</html>