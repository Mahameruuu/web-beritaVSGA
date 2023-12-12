<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<!-- Informasi Umum -->
		<title>BPSDMP Official Website</title>
		<meta name="description" content="Sistem Informasi BPSDMP" />
		<meta name="author" content="Noviyanto Rachmady ['me@novay.web.id']" />
		
		<!-- Koleksi CSS -->
		<link href="assets/paket/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="assets/paket/css/sticky-footer.css" media="all" />
		<link rel="stylesheet" type="text/css" href="assets/paket/css/icons.css" media="all" />
		<link rel="stylesheet" type="text/css" href="assets/paket/css/style.css" media="all" />
		<link rel="stylesheet" type="text/css" href="assets/paket/css/animate.css" media="all" />
		<link rel="stylesheet" type="text/css" href="assets/paket/css/onebyone.css" media="all" />
		<link href="assets/css/utama.css" rel="stylesheet" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="aset/img/favicon.ico" />
	</head>
	<body>
		<div class="kerangka-website">
			<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 kiri">
							<strong class="logo"><a href="index.php"><img src="assets/img/logo.png" alt="Logo"></a></strong>
						</div>
						<div class="col-sm-8 kanan">
							<section class="user-navigation">
								<div class="container">
									<div class="frame pull-right">
										<div class="form-search pull-right">
											<form action="#">
												<fieldset>
													<div class="field-search">
														<input type="text" class="form-control input-sm" placeholder="Search" />
														<button class="btn-search" type="submit"><span class="fa-icon-search"></span></button>
													</div>
												</fieldset>
											</form>
										</div>
										<div class="profiles-box pull-right active">
											<a href="#" class="link-profiles pull-left">Akun Resmi</a>
											<ul class="tools tools-middle pull-left">
												<li><a href="http://fb.me/novaymawbowo" target="_blank"><span class="fa-icon-facebook-sign"></span></a></li>
												<li><a href="http://twitter.com/NovayMawbowo" target="_blank"><span class="fa-icon-twitter"></span></a></li>
												<li><a href="http://google.com/+NovayMawbowo" target="_blank"><span class="fa-icon-google-plus"></span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</section>

							<section class="header-section">
								<div class="container">
									<div class="row">
										<div class="col-sm-12">
											<!--  navbar start -->
											<nav class="navbar navbar-default navbar-business" role="navigation">
												<div class="navbar-header">
													<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
														<span class="sr-only">Toggle navigation</span>
														Navigation Menu
														<span class="wrap-icon pull-left">
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
														</span>
													</button>
												</div>
												<div class="collapse navbar-collapse">
                                                    <span class="nook">&nbsp;</span>
													<ul class="nav navbar-nav">
														<li><a href="dashboard.php">Dashboard</a></li>
														<li><a href="about.php">About</a></li>
														<li><a href="view.php">Tambah Informasi</a></li>
														<li><a class="active" href="index.php">Log out</a></li>
														<li class="last">&nbsp;</li>
													</ul>
													<!--  frame pull-right start -->
													<div class="frame">
														<div class="form-search pull-right">
															<form action="#">
																<fieldset>
																	<div class="field-search">
																		<input type="text" class="form-control input-sm" placeholder="Search" />
																		<button class="btn-search" type="submit"><span class="fa-icon-search"></span></button>
																	</div>
																</fieldset>
															</form>
														</div>
														<div class="profiles-box pull-left active">
															<ul class="tools tools-middle pull-right">
																<li><a href="#"><span class="fa-icon-facebook-sign"></span></a></li>
															</ul>
														</div>
													</div>
													<!--  frame pull-right end -->
												</div>
											</nav>
											<!--  navbar end -->
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</header>

            <div class="container">
        <div class="row">
            <!--Start : isi -->
            <div class="card mt-3 w-100">
                <div class="card-body">
					<br><br><br>
					<h1>INPUT DATA</h1>
                    <form action="apps/proses.php?action=add" method="POST">
                        <div class="row g-3 align-items-center">
                            <div class="col-3">
                                <label for="judul" class="col-form-label fw-bold">Judul</label>
                            </div>
                            <div class="col-6">
                                <input type="input" name="nama" id="nama" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-3">
                                <label for="gambar" class="col-form-label fw-bold">Gambar</label>
                            </div>
                            <div class="col-6">
                                <input type="file" id="gambar" name="alamat" class="form-control row-3 mt-3" value="">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mt-2">
                            <div class="col-3">
                                <label for="deskripsi" class="col-form-label fw-bold">Deskripsi</label>
                            </div>
                            <div class="col-6">
                                <input type="text" id="deskripsi" name="deskripsi" class="form-control row-3 mt-3" value="">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mt-2">
                            <div class="col-3">
                                <label for="tanggal" class="col-form-label fw-bold">Tanggal</label>
                            </div>
                            <div class="col-6">
                                <input type="date" id="tanggal" name="tanggal" class="form-control row-3 mt-3" value="">
                            </div>
                        </div>
                        <br><br>
                        <div class="row g-3 align-items-center">
                            <div class="col-3">
                            </div>
                            <div class="col-9">
                                <button type="submit" name="submit" class="btn btn-primary w-25 mt-3">SIMPAN DATA</button><br><br><br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--End : isi -->
        </div>
    </div>
    <br><br><br><br><br><br><br><br>

    <div class="bawah">
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <p>&copy; 2014 Hak Cipta Dilindungi. Develop oleh <a href="http://novay.web.id/">Mahakam Team</a></p>
                    </div>
                    <div class="col-md-7 col-sm-6">
                        <ul class="list list-inline pull-right">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="dahsboard.php">Dashboard</a></li>
                            <li><a href="#top">Kembali Ke Atas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
  
    <!-- Penutup Bagian Bawah -->
    </div>
    <!-- Koleksi Javascript -->
    <script type="text/javascript" src="aset/paket/js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="aset/paket/js/bootstrap.min.js"></script>
    <script src="aset/paket/js/less.js" type="text/javascript"></script>
    <script type="text/javascript" src="aset/paket/js/jquery.main.js"></script>
    <!--[if lte IE 9 ]>
        <script type="text/javascript" src="aset/paket/js/modernizr-1.7.min.js"></script>
        <script type="text/javascript" src="aset/paket/js/placeholder.js"></script>
    <![endif]-->
    
	</body>
</html>