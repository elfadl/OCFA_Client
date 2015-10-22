<?php include 'header.php'; ?>
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		
		
		<div class="main-content">
					
			
			<div class="page-title">
				
				<div class="title-env">
					<h1 class="title">Retrive Data</h1>
					<p class="description">Mengambil data identitas melalui NIK</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-heading">
						<h3 class="panel-title">OCFA System</h3>
						</div>
						<div class="panel-body">
							<div class="form-horizontal" role="form">
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">NIK</label>
									<div class="col-sm-10">
										<input class="form-control" name="nik" id="field-1" type="text" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Token</label>
									<div class="col-sm-10">
										<input class="form-control" name="token" id="field-1" type="text" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Field</label>
									<div class="col-sm-10">
										<div class="checkbox">
											<label>
												<input type="checkbox" name="nama" value="nama">Nama
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="t_lahir" value="t_lahir">Tempat Lahir
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="tgl_lahir" value="tgl_lahir">Tanggal Lahir
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="jk" value="jk">Jenis Kelamin
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="agama" value="agama">Agama
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="pendidikan_terakhir" value="pendidikan_terakhir">Pendidikan Terakhir
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="pekerjaan" value="pekerjaan">Pekerjaan
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="status_kawin" value="status_kawin">Status Perkawinan
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="alamat" value="alamat">Alamat
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="alamat_advanced" value="alamat_advanced">Alamat Advanced
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<button class="btn btn-single pull-right" style="color:#ffffff; background-color:#ff0000; border-color:#ff0000;" name="submit">Submit</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<footer class="main-footer sticky footer-type-1">
				
				<div class="footer-inner">
				
					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy; 2015 
						<strong>OCFA System</strong> 
					</div>
					
					
					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up">
					
						<a href="#" rel="go-top">
							<i class="fa-angle-up"></i>
						</a>
						
					</div>
					
				</div>
				
			</footer>
		</div>
	</div>
<?php include'footer.php'; ?>