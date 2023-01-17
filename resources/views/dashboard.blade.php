<!DOCTYPE html>
<html lang="en">
{{-- <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script> --}}
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	{{-- <meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web"> --}}

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icon.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>DASHBOARD ADMIN</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
	<script src="https://unpkg.com/feather-icons"></script>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <center><span class="align-middle">PENJADWALAN KONSULTASI</span></center>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Halaman
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="index.html">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
              {{-- <i class="align-middle" data-feather="calender"></i> --}}
			  		<i class="bi bi-calendar4"></i>
			  		<span class="align-middle">Kelola Jadwal</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.html">
					<i class="bi bi-clock"></i>
			  		<span class="align-middle">Kelola Sesi</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-up.html">
							<i class="bi bi-person-fill-gear"></i>
						</i> <span class="align-middle">Kelola Layanan</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-blank.html">
							<i class="bi bi-people-fill"></i><span class="align-middle">Kelola Petugas</span>
            </a>
            <li class="sidebar-item">
						<a class="sidebar-link" href="pages-blank.html">
							<i class="bi bi-file-earmark-text"></i><span class="align-middle">Kelola Laporan</span>
            </a>
					</li>
			<li class="sidebar-item">
						<a class="sidebar-link" href="pages-blank.html">
							<i class="bi bi-clipboard2-data-fill"></i></i><span class="align-middle">Kelola Pendaftaran Konsultasi</span>
            </a>
					</li>
			<li class="sidebar-item">
						<a class="sidebar-link" href="pages-blank.html">
							<i class="bi bi-folder-fill"></i></i><span class="align-middle">Kelola Berkas</span>
            </a>
					</li>		
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                {{-- <img src="img/avatars/pp.png" class="avatar img-fluid rounded me-1" alt="Charles Hall" />  --}}
				<span class="text-dark">Kelurahan xyz</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								{{-- <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a> --}}
								{{-- <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a> --}}
								{{-- <div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div> --}}
								<a class="dropdown-item" href="#">Keluar</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Update</strong> Penjadwalan Konsultasi</h1>
					<div class="row">
									<div class="col-sm-4">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title"><strong>Petugas Konsultasi</strong></h5>
													</div>

													<div class="col-auto">
														<div class="stat text-dark">
															<i class="bi bi-people-fill"></i>
															{{-- <i class="align-middle" data-feather="truck"></i> --}}
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><strong>11</strong></h1>
												<div class="mb-0">
													{{-- <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span> --}}
													<span class="text-muted">Jumlah petugas konsultasi</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title"><strong>Permohonan</strong></h5>
													</div>

													<div class="col-auto">
														<div class="stat text-dark">
															<i class="bi bi-book"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><strong>21</strong></h1>
												<div class="mb-0">
													{{-- <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span> --}}
													<span class="text-muted">Jumlah permohonan diterima</span>
												</div>
											</div>
										</div>
									</div>
						<div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title"><strong>Permohonan Selesai</strong></h5>
                                        </div>
                                        <div class="col-auto">
                                            <div class="stat text-dark">
                                                <i class="bi bi-check2-square"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3"><strong>50</strong></h1>
                                    <div class="mb-0">
                                        {{-- <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span> --}}
                                        <span class="text-muted">Jumlah permohonan selesai</span>
                                    </div>
                                </div>
                            </div>
					</div>                    
					<div class="row">
                        <h1 class="h3 mb-3"><strong>Kelola</strong> Data</h1>
					<div class="row">
						<div class="col-sm-4">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title"><strong>Kelola Jadwal</strong></h5>
										</div>

										<div class="col-auto">
											<div class="stat text-dark">
												<i class="bi bi-calendar4"></i>
											</div>
										</div>
									</div>
									<div class="mt-2 mb-1">
										<span class="text-muted">Kelola jadwal kunjungan konsultasi yang tersedia dapat dilakukan disini</span>
									</div>
									<div class="mt-3 mb-3">
										<button class="w-100 btn btn-lg btn-success" type="submit">Kelola</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Kelola Sesi</h5>
										</div>

										<div class="col-auto">
											<div class="stat text-dark">
												<i class="bi bi-clock"></i>
											</div>
										</div>
									</div>
									<div class="mt-2 mb-1">
										<span class="text-muted">Kelola sesi kunjungan konsultasi  dapat dilakukan  disini</span>
									</div>
									<div class="mt-3 mb-3">
										<button class="w-100 btn btn-lg btn-success" type="submit">Kelola</button>
									</div>
								</div>
							</div>
						</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col mt-0">
								<h5 class="card-title">Kelola Layanan</h5>
							</div>
							<div class="col-auto">
								<div class="stat text-dark">
									<i class="bi bi-person-fill-gear"></i>
								</div>
							</div>
						</div>
						<div class="mb-1 mt-2">
							<span class="text-muted">Kelola layanan yang tersedia pada kelurahan dapat dilakukan  disini</span>
						</div>
						<div class="mt-3 mb-3">
							<button class="w-100 btn btn-lg btn-success" type="submit">Kelola</button>
						</div>
					</div>
				</div>
		</div>
			<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Kelola Petugas</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-dark">
															<i class="bi bi-people-fill"></i>
														</div>
													</div>
												</div>
												<div class="mb-1 mt-2">
													<span class="text-muted">Kelola petugas seperti menambahkan dan mengedit data petugas dapat dilakukan disini</span>
												</div>
												<div class="mt-3 mb-3">
													<button class="w-100 btn btn-lg btn-success" type="submit">Kelola</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Kelola Laporan</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-dark">
															<i class="bi bi-file-earmark-text"></i>
														</div>
													</div>
												</div>
												<div class="mb-1 mt-2">
													<span class="text-muted">Kelola laporan meliputi status dari pendaftaran hingga selesai kunjungan konsultasi dapat dilakukan disini.</span>
												</div>
												<div class="mt-3 mb-3">
													<button class="w-100 btn btn-lg btn-success" type="submit">Kelola</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Kelola Pendaftaran Konsultasi</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-dark">
															<i class="bi bi-clipboard2-data-fill"></i>
														</div>
													</div>
												</div>
												<div class="mb-1 mt-2">
													<span class="text-muted">Kelola pendaftaran konsultasi terkait data yang diinputkan oleh pendaftar dapat dilakukan disini</span>
												</div>
												<div class="mt-3 mb-3">
													<button class="w-100 btn btn-lg btn-success" type="submit">Kelola</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Kelola Berkas</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-dark">
															<i class="bi bi-folder-fill"></i>
														</div>
													</div>
												</div>
												<div class="mb-1 mt-2">
													<span class="text-muted">Kelola berkas seperti menambahkan nama-nama persyaratan permohonan dapat dilakukan disini.</span>
												</div>
												<div class="mt-3 mb-3">
													<button class="w-100 btn btn-lg btn-success" type="submit">Kelola</button>
												</div>
											</div>
										</div>
									</div>
					
                    {{-- <div class="col-sm-14">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Kalender</h5>
                                    </div>
                                    <div class="card-body d-flex">
                                        <div class="align-self-center w-100">
                                            <div class="chart">
                                                <div id="datetimepicker-dashboard"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
					</div>
				</div>
					</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="" target="_blank"><strong>2023</strong></a> &copy; <a class="text-muted" href="" target="_blank"><strong>Penjadwalan Konsultasi</strong></a>
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="" target="_blank"><strong>Pemerintah Kota Surabaya</strong></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>
	<script>feather.replace()</script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>

</body>

</html>