<!DOCTYPE html>
<?php 
$moviesArray[] = array('Kumfu Panda',90,'01/20/2016','PH-13');
$moviesArray[] = array('Matrix',86,'02/20/2016','PH-13');
$moviesArray[] = array('Meet the Parents',96,'03/20/2016','PH-13');
$moviesArray[] = array('Independence Day',100,'04/20/2016','PH-13');
$moviesArray[] = array('Mask',98,'05/20/2016','PH-13');
$moviesArray[] = array('Cable Guy',93,'01/25/2016','PH-13');
$moviesArray[] = array('Minions',87,'01/10/2016','PH-13');
$moviesArray[] = array('Forest Gump',86,'02/10/2016','PH-13');
$moviesArray[] = array('Terminator',95,'06/20/2016','PH-13');

$movie_id = $_GET['movie_id'];
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
		"bSearchable":false,
		"bInfo":false,
	    "bPaginate": false,
		"bFilter":false,
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
						<th><?php echo $moviesArray[$movie_id][0]?></th>
					</tr>
				</thead>
				<tbody>

					<tr><td>
					    <table width="70%" border = "1">
						   <tr>
						       <td width="25%" rowspan="2"><div style="border-style:dashed;height:100px"></div></td>
							   <td width="25%"><?php echo $moviesArray[$movie_id][0]?></td>
							   <td width="25%"><div style="border-style:solid;height:20px; width:50px"><?php echo $moviesArray[$movie_id][3]?></div> </td>
						   </tr>
						   <tr>
							   <td width="25%">Release Date  : <?php echo $moviesArray[$movie_id][2]?></td>
							   <td width="25%">Run Time : <?php echo date('H : i', mktime(0, $moviesArray[$movie_id][1]));?> </td>
						   </tr>
						</table>
					</td></tr>
				</tbody>
			</table>
		</section>
	<input type="button" value="back" onclick="location.href='./bootstrap4.php'">
	</div>
</body>
</html>