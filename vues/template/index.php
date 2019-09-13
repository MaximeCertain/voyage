<!doctype html>
<html class="boxed header-fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Boxed Layout Fixed Header | Porto Admin - Responsive HTML5 Template 2.1.1</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="vendor/animate/animate.css">

		<link rel="stylesheet" href="vendor/font-awesome/css/fontawesome-all.min.css" />
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>

	</head>
	<body >
		<section class="body">

			

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside style="opacity: 1;" id="sidebar-left" class="sidebar-left">
				
				
				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">
				            
				                <ul class="nav nav-main">
				                    <li>
				                        <a class="nav-link" href="layouts-default.html">
				                            <i class="fas fa-home" aria-hidden="true"></i>
				                            <span>Dashboard</span>
				                        </a>                        
				                    </li>
				                </ul>
				            </nav>
				        
				        </div>
				
				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
				                    
				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>
				        
				
				    </div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Trouvez votre voyage !</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span>Layouts</span></li>
								<li><span>Boxed</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col-md-12">
							<div class="row mb-3">
								<div class="col-xl-6">
									<section class="card card-featured-left">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div style="background-color: #7BBAEE;" class="summary-icon ">
														<i class="fas fa-thermometer-full"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Température</h4>
														<div   class="mt-3 mb-3 slider-primary" data-plugin-slider data-plugin-options='{ "values": [ 0, 50 ], "range": true, "max": 50 }' data-plugin-slider-output="#listenSlider2">
															<input  id="listenSlider2" type="hidden" value="10, 20" />
														</div>
														<p class="output2">The min is: <b class="min">0</b> and the max is: <b class="max">50</b></p>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-xl-6">
									<section class="card card-featured-left ">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														<i class="fas fa-euro-sign"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Budget</h4>
														<div  class="mt-3 mb-3 slider-primary" data-plugin-slider data-plugin-options='{ "values": [ 10, 10000 ], "range": true, "max": 10000 }' data-plugin-slider-output="#listenSlider2">
															<input  id="listenSlider2" type="hidden" value="10, 500" />
														</div>
														<p class="output2">The min is: <b class="min">10</b> and the max is: <b class="max">500</b></p>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-6">
                                    <section class="card card-featured-left ">
                                        <div class="card-body">
                                            <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                    <div class="summary-icon bg-secondary">
                                                        <i class="fas fa-euro-sign"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                    <div class="summary">
                                                        <h4 class="title">Durée</h4>
                                                        <div  class="mt-3 mb-3 slider-primary" data-plugin-slider data-plugin-options='{ "values": [ 1, 25 ], "range": true, "max": 30 }' data-plugin-slider-output="#listenSlider2">
                                                            <input  id="listenSlider2" type="hidden" value="1, 25" />
                                                        </div>
                                                        <p class="output2">The min is: <b class="min">1</b> and the max is: <b class="max">25</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
								</div>
								<div class="col-xl-6">
									<section class="card card-featured-left">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-quaternary">
														<i class="fas fa-table"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Pour quelle période ?</h4>
														<div class="info">
															<div class="btn-group flex-wrap">
												        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Mois <span class="caret"></span> </button>
														<div class="dropdown-menu" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
															<a class="dropdown-item text-1" href="#">Janvier</a>
															<a class="dropdown-item text-1" href="#">Fevrier</a>
															<a class="dropdown-item text-1" href="#">Mars</a>
															<a class="dropdown-item text-1" href="#">Avril</a>
															<a class="dropdown-item text-1" href="#">Mai</a>
															<a class="dropdown-item text-1" href="#">Juin</a>
															<a class="dropdown-item text-1" href="#">Juillet</a>
															<a class="dropdown-item text-1" href="#">Aout</a>
															<a class="dropdown-item text-1" href="#">Septembre</a>
															<a class="dropdown-item text-1" href="#">Octobre</a>
															<a class="dropdown-item text-1" href="#">Novembre</a>
															<a class="dropdown-item text-1" href="#">Decembre</a>
														</div>
												    </div>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="#">(report)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>

							</div>
						</div>
					</div>

						<section class="card">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
									</div>

									<h2 class="card-title">Quel type de voyage recherchez-vous ?</h2>
								<div class="card-body">
									<div class="btn-group d-flex" role="group">
										<a class="btn btn-default w-100" role="button">Montagne</a>
										<a class="btn btn-default w-100" role="button">Mer</a>
										<a class="btn btn-default w-100" role="button">Ville</a>
									</div>
								</div>
							</section>


							<br>

							<button type="submit" onclic="hideshow" class="mb-1 mt-1 mr-1 btn btn-default btn-lg btn-block recherche">Je recherche mes voyages</button>
					
							<br>

							<div class="col-3 filtre" onclick="showfilter('liste1')">
									Théme<br>
					        <i class="fas fa-list"></i>

					        <div id ="liste1" class="liste">
									<form>
									<ul>
					          <li><input type="radio" name="filtre1" value="Mer" checked> Mer</li>
					          <li><input type="radio" name="filtre1" value="Montagne"> Montagne</li>
					          <li><input type="radio" name="filtre1" value="Ville"> Ville</li>
					        </ul>
									</form>
					      </div>
								</div> 

								<script>
									function showfilter(id){
										element = document.getElementById(id);
										document.getElementById("liste1").style.display = "none";
										document.getElementById("liste2").style.display = "none";
										document.getElementById("liste3").style.display = "none";
										document.getElementById("liste4").style.display = "none";
										element.style.display = "block";		
									}

									function hidefilter(id){
										element = document.getElementById(id);
										element.style.display = "none";
									}
								</script>

						




					<div class="row pt-4 mt-1">
						<div class="col-xl-12 order-2">
							<section class="card card-transparent mb-3">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>
					
									<h2 class="card-title">Ou souhaitez-vous aller ?</h2>
								</header>
								<div class="card-body">
									<div id="vectorMapWorld" style="height: 350px; width: 100%;"></div>
								</div>
							</section>
						</div>
							</section>
						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>

		

		</section>



		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.js"></script>
		<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="vendor/common/common.js"></script>
		<script src="vendor/nanoscroller/nanoscroller.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="vendor/jquery-ui/jquery-ui.js"></script>
		<script src="vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
		<script src="vendor/jquery-appear/jquery-appear.js"></script>
		<script src="vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="vendor/flot/jquery.flot.js"></script>
		<script src="vendor/flot.tooltip/flot.tooltip.js"></script>
		<script src="vendor/flot/jquery.flot.pie.js"></script>
		<script src="vendor/flot/jquery.flot.categories.js"></script>
		<script src="vendor/flot/jquery.flot.resize.js"></script>
		<script src="vendor/jquery-sparkline/jquery-sparkline.js"></script>
		<script src="vendor/raphael/raphael.js"></script>
		<script src="vendor/morris/morris.js"></script>
		<script src="vendor/gauge/gauge.js"></script>
		<script src="vendor/snap.svg/snap.svg.js"></script>
		<script src="vendor/liquid-meter/liquid.meter.js"></script>
		<script src="vendor/jqvmap/jquery.vmap.js"></script>
		<script src="vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<!-- Examples -->
		<script src="js/examples/examples.dashboard.js"></script>

	</body>
</html>

