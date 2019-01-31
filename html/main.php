<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Charts</title>

<link href="content/bootstrap.min.css" rel="stylesheet">
<link href="content/datepicker3.css" rel="stylesheet">
<link href="content/styles.css" rel="stylesheet">

<!--Icons-->
<script src="scripts/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="scripts/html5shiv.js"></script>
<script src="scripts/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Phone</span>Reviews</a>
                <!--
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
                    -->
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Sony</a></li>
			<li><a href="widgets.html"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> One Plus</a></li>
			<li class="active"><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Samsung</a></li>
			<li><a href="tables.html"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Lenevo</a></li>
			<li><a href="forms.html"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Apple</a></li>
			<li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> HTC</a></li>
			<li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> MI</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Dropdown 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>
		<!-- <div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div> -->
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
        	
		<div class="row">
			<div class="col-lg-12">
                <form runat="server">
		<asp:ContentPlaceHolder ID="ContentPlaceHolder1" runat="server"></asp:ContentPlaceHolder></form>
                		<h1 class="page-header">Samsung C7 Pro Ratings</h1>
				
			</div>
		</div><!--/.row-->
		
		<?php
		// Create connection to Oracle
		$dbstr="(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=localhost)(PORT=1521))
		(CONNECT_DATA=
		(SERVER=DEDICATED)
		(SERVICE_NAME=xe)
		(INSTANCE_NAME=xe)))";
		global $conn;
		$conn=oci_connect('dhiren','Dbhjpt1',$dbstr);
		if(!$conn){
		$e=oci_error();
		trigger_error(htmlentities($e['message'],ENT_QUOTES),E_USER_ERROR);
		}
		global $conn;
		?>
		
		<?php
		//values for bar chart:
		$query = 'select one,two,three,four,five,overall from ratings where upper(site)=\'AMAZON\' and upper(phone)=\'C7PRO\'';
		$stid = oci_parse($conn, $query);
		oci_execute($stid);
		oci_fetch($stid);
		
		$d1 = (int)oci_result($stid, 'ONE');
		$d2 = (int)oci_result($stid, 'TWO');
		$d3 = (int)oci_result($stid, 'THREE');
		$d4 = (int)oci_result($stid, 'FOUR');
		$d5 = (int)oci_result($stid, 'FIVE');
		$oa = (int)oci_result($stid, 'OVERALL');?>
		<script type="text/javascript">
		var d1 = <?= $d1 ?>;
		var d2 = <?= $d2 ?>;
		var d3 = <?= $d3 ?>;
		var d4 = <?= $d4 ?>;
		var d5 = <?= $d5 ?>;
		</script>
		
		<?php
		$query = 'select one,two,three,four,five,overall from ratings where upper(site)=\'FLIPKART\' and upper(phone)=\'C7PRO\'';
		$stid = oci_parse($conn, $query);
		oci_execute($stid);
		oci_fetch($stid);
		
		$b1 = (int)oci_result($stid, 'ONE');
		$b2 = (int)oci_result($stid, 'TWO');
		$b3 = (int)oci_result($stid, 'THREE');
		$b4 = (int)oci_result($stid, 'FOUR');
		$b5 = (int)oci_result($stid, 'FIVE');
		$ob = (int)oci_result($stid, 'OVERALL');
		$oo = (int)($oa+$ob)/2;?>
		<script type="text/javascript">
		var b1 = <?= $b1 ?>;
		var b2 = <?= $b2 ?>;
		var b3 = <?= $b3 ?>;
		var b4 = <?= $b4 ?>;
		var b5 = <?= $b5 ?>;
		</script>
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Amazon Ratings</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="bar-chart">
								
							</canvas>
						</div>
					</div>
				</div>
			</div>
            <div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Flipkart Ratings</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="bar-chart1"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->		
		
		

        <div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Amazon:</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo $oa ?>" ><span class="percent"><?php echo $oa ?>%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Flipkart:</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="<?php echo $ob ?>" ><span class="percent"><?php echo $ob ?>%</span>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>ebay:</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span>
						</div>
					</div>
				</div>
			</div>-->
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Overall:</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="<?php echo $oo ?>" ><span class="percent"><?php echo $oo ?>%</span>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

        <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Samsung C7 Pro Reviews</h1>
				
			</div>
		</div><!--/.row-->

        <div class="row">
		
             <div class="panel panel-info">
					<div class="panel-heading">
						Amazon Reviews
					</div>
					<div class="panel-body">
                        
						<p>
						<?php
						$query = 'select title,review from reviews where upper(site)=\'AMAZON\' and upper(phone)=\'C7PRO\'';
						$stid = oci_parse($conn, $query);
						oci_execute($stid);

						while (oci_fetch($stid)) {
							$s = oci_result($stid, 'TITLE'); 
							print "<strong>".$s. ":</strong><br>";
							echo oci_result($stid, 'REVIEW') . "<br><br><br>";
						}

						oci_free_statement($stid);
						?>
						</p>
                           
                            
					</div>
				</div>
        </div><!--/.row-->
		
		<div class="row">
		
             <div class="panel panel-info">
					<div class="panel-heading">
						Flipkart Reviews
					</div>
					<div class="panel-body">
                        
						<p>
						<?php
						
						$query = 'select title,review from reviews where upper(site)=\'FLIPKART\' and upper(phone)=\'C7PRO\'';
						$stid = oci_parse($conn, $query);
						oci_execute($stid);

						while (oci_fetch($stid)) {
							$s = oci_result($stid, 'TITLE'); 
							print "<strong>".$s. ":</strong><br>";
							echo oci_result($stid, 'REVIEW') . "<br><br><br>";
						}

						oci_free_statement($stid);
						oci_close($conn);?>
						</p>
                           
                            
					</div>
				</div>
        </div>
		
		</div><!--/.row-->--%>
		
		
       
											
	
	  

	<script src="scripts/jquery-1.11.1.min.js"></script>
	<script src="scripts/bootstrap.min.js"></script>
	<script src="scripts/chart.min.js"></script>
	<script src="scripts/chart-data.js"></script>
	<script src="scripts/easypiechart.js"></script>
	<script src="scripts/easypiechart-data.js"></script>
	<script src="scripts/bootstrap-datepicker.js"></script>
	<script>
	    !function ($) {
	        $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
	            $(this).find('em:first').toggleClass("glyphicon-minus");
	        });
	        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
	    }(window.jQuery);

	    $(window).on('resize', function () {
	        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
	    })
	    $(window).on('resize', function () {
	        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
	    })
	</script>	
</body>

</html>
