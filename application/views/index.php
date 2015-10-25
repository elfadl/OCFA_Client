<?php include 'header.php'; ?>
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		
		
		<div class="main-content">
					
			
			<div class="page-title">
				
				<div class="title-env">
					<h1 class="title">OCFA API Access</h1>
					<p class="description">Olah data identitas melalui NIK</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-heading">
						<h3 class="panel-title">OCFA System</h3>
						</div>
						<div class="row">
							<div class="col-md-12">
								<ul class="nav nav-tabs nav-tabs-justified">
									<li class="active">
										<a href="#retreive" id="retreive_data" data-toggle="tab">
											<span class="visible-xs">
												<i class="fa-home"></i>
											</span>
											<span class="hidden-xs">Retreive</span>
										</a>
									</li>
									<li>
										<a href="#update" id="update_data" data-toggle="tab">
											<span class="visible-xs">
												<i class="fa-home"></i>
											</span>
											<span class="hidden-xs">Update</span>
										</a>
									</li>
									<li>
										<a href="#input" id="input_data" data-toggle="tab">
											<span class="visible-xs">
												<i class="fa-home"></i>
											</span>
											<span class="hidden-xs">Input</span>
										</a>
									</li>
									<li>
										<a href="#nik_checker" id="nik_checker" data-toggle="tab">
											<span class="visible-xs">
												<i class="fa-home"></i>
											</span>
											<span class="hidden-xs">NIK Checker</span>
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane" id="retreive">
										<div>
											<div class="panel-body">
												<div id="form_retreive" class="form-horizontal" role="form">
													<div class="form-group">
														<label class="col-sm-2 control-label" for="field-1">NIK</label>
														<div class="col-sm-10">
															<input class="form-control" name="nik" id="r_nik" type="text" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label" for="field-1">Token</label>
														<div class="col-sm-10">
															<input class="form-control" name="token" id="r_token" type="text" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label" for="field-1">Field</label>
														<div class="col-sm-10">
															<div class="checkbox">
																<label>
																	<input type="checkbox" id="nama" name="nama" value="nama">Nama
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="checkbox" id="t_lahir" name="t_lahir" value="t_lahir">Tempat Lahir
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="checkbox" id="tgl_lahir" name="tgl_lahir" value="tgl_lahir">Tanggal Lahir
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="checkbox" id="jk" name="jk" value="jk">Jenis Kelamin
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="checkbox" id="goldar" name="goldar" value="goldar">Golongan Darah
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="checkbox" id="tgl_terbit" name="tgl_terbit" value="tgl_terbit">Tanggal Diterbitkan
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="checkbox" id="nip_pencatat" name="nip_pencatat" value="nip_pencatat">NIP Pencatat
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="checkbox" id="kewarganegaraan" name="kewarganegaraan" value="kewarganegaraan">Kewarganegaraan
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="checkbox" id="agama" name="agama" value="agama">Agama
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="checkbox" id="pend_terakhir" name="pendidikan_terakhir" value="pendidikan_terakhir">Pendidikan Terakhir
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="checkbox" id="pekerjaan" name="pekerjaan" value="pekerjaan">Pekerjaan
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="checkbox" id="status_kawin" name="status_kawin" value="status_kawin">Status Perkawinan
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="checkbox" id="alamat" name="alamat" value="alamat">Alamat
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="checkbox" id="alamat_advanced" name="alamat_advanced" value="alamat_advanced">Alamat Advanced
																</label>
															</div>
														</div>
													</div>
													<div class="form-group">
														<button class="btn btn-single pull-right" style="color:#ffffff; background-color:#ff0000; border-color:#ff0000;" id="submit_retreive" name="submit" >Submit</button>
													</div>
												</div>
												<div id="hasil_retreive" class="form-horizontal hidden" role="form">
													<div class="form-group">
														<button class="btn btn-single pull-right" style="color:#ffffff; background-color:#ff0000; border-color:#ff0000;" id="back" name="submit" >Back</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="update">
										<div class="panel-body">
											<div class="form-horizontal" role="form">
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Token</label>
													<div class="col-sm-10">
														<input class="form-control" name="token" id="u_token" type="text" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">NIK</label>
													<div class="col-sm-10">
														<input class="form-control" name="nik" id="u_nik" type="text" required>
													</div>
												</div>
												<div class="form-group" id="btn_nik">
													<button class="btn btn-single pull-right" style="color:#ffffff; background-color:#ff0000; border-color:#ff0000;" id="search_nik" name="submit" >Cari NIK</button>
												</div>
											</div>
											<div id="u_afnik" class="form-horizontal hidden" role="form">
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Nama</label>
													<div class="col-sm-10">
														<input class="form-control" name="nama" id="u_nama" type="text" disabled>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Tempat Lahir</label>
													<div class="col-sm-10">
														<input class="form-control" name="t_lahir" id="u_t_lahir" type="text" disabled>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Tanggal Lahir</label>
													<div class="col-sm-10">
														<input class="form-control" name="tgl_lahir" id="u_tgl_lahir" type="text" disabled>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Jenis Kelamin</label>
													<div class="col-sm-10">
														<input class="form-control" name="jk" id="u_jk" type="text" disabled>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">NIP Pencatat</label>
													<div class="col-sm-10">
														<input class="form-control" name="nip_pencatat" id="u_nip_pencatat" type="text" disabled>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Kewarganegaraan</label>
													<div class="col-sm-10">
														<input class="form-control" name="kewarganegaraan" id="u_kewarganegaraan" type="text" disabled>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Agama</label>
													<div class="col-sm-10">
														<select class="form-control" name="agama" id="u_agama">
															<option disabled selected></option>
															<option id="islam" value="islam">Islam</option>
															<option id="kristen" value="kristen">Kristen</option>
															<option id="katholik" value="katholik">Katholik</option>
															<option id="hindu" value="hindu">Hindu</option>
															<option id="budha" value="budha">Budha</option>
															<option id="konghucu" value="konghucu">Konghucu</option>
															<option id="lainnya" value="lainnya">Lainnya</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Pendidikan Terakhir</label>
													<div class="col-sm-10">
														<input class="form-control" name="pend_terakhir" id="u_pend_terakhir" type="text">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Pekerjaan</label>
													<div class="col-sm-10">
														<input class="form-control" name="pekerjaan" id="u_pekerjaan" type="text">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Status Perkawinan</label>
													<div class="col-sm-10">
														<select class="form-control" id="u_status_kawin">
															<option selected disabled></option>
															<option id="u_tdk_kawin" value="0">Tidak Kawin</option>
															<option id="u_kawin" value="1">Kawin</option>
															<option id="u_cerai" value="2">Cerai</option>
															<option id="u_cerai_mati" value="3">Cerai Mati</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Alamat</label>
													<div class="col-sm-10">
														<textarea class="form-control" name="alamat" id="u_alamat"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">RT</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="rt" id="u_rt">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">RW</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="rw" id="u_rw">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Kelurahan</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="kelurahan" id="u_kelurahan">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Kecamatan</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="kecamatan" id="u_kecamatan">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Kabupaten</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="kabupaten" id="u_kabupaten">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Provinsi</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="provinsi" id="u_provinsi">
													</div>
												</div>
												<div class="form-group">
													<button class="btn btn-single pull-right" style="color:#ffffff; background-color:#ff0000; border-color:#ff0000;" id="submit_update" name="submit" >Submit</button>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="input">
										<div class="panel-body">
											<div class="form-horizontal" role="form">
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">NIK</label>
													<div class="col-sm-10">
														<input class="form-control" name="nik" id="i_nik" type="text" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Token</label>
													<div class="col-sm-10">
														<input class="form-control" name="token" id="i_token" type="text" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">NIP Pencatat</label>
													<div class="col-sm-10">
														<input class="form-control" name="nip_pencatat" id="i_nip_pencatat" type="text" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Nama</label>
													<div class="col-sm-10">
														<input class="form-control" name="nama" id="i_nama" type="text" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Tempat Lahir</label>
													<div class="col-sm-10">
														<input class="form-control" name="t_lahir" id="i_t_lahir" type="text" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Tanggal Lahir</label>
													<div class="col-sm-10">
														<input class="form-control" name="tgl_lahir" id="i_tgl_lahir" type="text" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Jenis Kelamin</label>
													<div class="col-sm-10">
														<input class="form-control" name="jk" id="i_jk" type="text" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Golongan Darah</label>
													<div class="col-sm-10">
														<p>
															<label class="radio-inline">
																<input name="goldar" id="i_goldar_a" type="radio" value="A" required>A
															</label>
															<label class="radio-inline">
																<input name="goldar" id="i_goldar_b" type="radio" value="B" required>B
															</label>
															<label class="radio-inline">
																<input name="goldar" id="i_goldar_ab" type="radio" value="AB" required>AB
															</label>
															<label class="radio-inline">
																<input name="goldar" id="i_goldar_o" type="radio" value="O" required>O
															</label>
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Tanggal Diterbitkan</label>
													<div class="col-sm-10">
														<input class="form-control" name="tgl_terbit" id="i_tgl_terbit" type="text" value="<?= date("D, d M Y");?>" disabled>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Kewarganegaraan</label>
													<div class="col-sm-10">
														<input class="form-control" name="kewarganegaraan" id="i_kewarganegaraan" type="text" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Agama</label>
													<div class="col-sm-10">
														<select class="form-control" name="agama" id="i_agama">
															<option disabled selected></option>
															<option value="1">Islam</option>
															<option value="2">Kristen</option>
															<option value="3">Katholik</option>
															<option value="4">Hindu</option>
															<option value="5">Budha</option>
															<option value="6">Konghucu</option>
															<option value="7">Lainnya</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Pendidikan Terakhir</label>
													<div class="col-sm-10">
														<input class="form-control" name="pend_terakhir" id="i_pend_terakhir" type="text" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Pekerjaan</label>
													<div class="col-sm-10">
														<input class="form-control" name="pekerjaan" id="i_pekerjaan" type="text" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Status Perkawinan</label>
													<div class="col-sm-10">
														<input class="form-control" name="status_kawin" id="i_status_kawin" type="text" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Alamat</label>
													<div class="col-sm-10">
														<textarea class="form-control" name="alamat" id="i_alamat"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">RT</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="rt" id="i_rt">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">RW</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="rw" id="i_rw">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Kelurahan</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="kelurahan" id="i_kelurahan">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Kecamatan</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="kecamatan" id="i_kecamatan">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Kabupaten</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="kabupaten" id="i_kabupaten">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Provinsi</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="provinsi" id="i_provinsi">
													</div>
												</div>
												<div class="form-group">
													<button class="btn btn-single pull-right" style="color:#ffffff; background-color:#ff0000; border-color:#ff0000;" id="submit_input" name="submit" >Submit</button>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="check">
										<div class="panel-body">
											<div id="form_cek" class="form-horizontal" role="form">
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">NIK</label>
													<div class="col-sm-10">
														<input class="form-control" name="nik" id="c_nik" type="text" required>
													</div>
												</div>
												<div class="form-group" id="btn_nik">
													<button class="btn btn-single pull-right" style="color:#ffffff; background-color:#ff0000; border-color:#ff0000;" id="nik_cek" name="submit" >Cari NIK</button>
												</div>
											</div>
											<div id="hasil_cek" class="form-horizontal hidden" role="form">
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Nama</label>
													<div class="col-sm-10">
														<input class="form-control" name="nama" id="c_nama" type="text" disabled>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Jenis Kelamin</label>
													<div class="col-sm-10">
														<input class="form-control" name="jk" id="c_jk" type="text" disabled>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Tempat Lahir</label>
													<div class="col-sm-10">
														<input class="form-control" name="t_lahir" id="c_t_lahir" type="text" disabled>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Tanggal Lahir</label>
													<div class="col-sm-10">
														<input class="form-control" name="tgl_lahir" id="c_tgl_lahir" type="text" disabled>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-2 control-label" for="field-1">Alamat Lengkap</label>
													<div class="col-sm-10">
														<textarea class="form-control" name="alamat" id="c_alamat" type="text" disabled></textarea>
													</div>
												</div>
												<div class="form-group">
													<button class="btn btn-single pull-right" style="color:#ffffff; background-color:#ff0000; border-color:#ff0000;" id="btn_back" name="submit" >Back</button>
												</div>
											</div>
										</div>
									</div>
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
	<script>
		function post(path, params, method) {
			method = method || "post"; // Set method to post by default if not specified.

			// The rest of this code assumes you are not using a library.
			// It can be made less wordy if you use one.
			var form = document.createElement("form");
			form.setAttribute("method", method);
			form.setAttribute("action", path);

			for(var key in params) {
				if(params.hasOwnProperty(key)) {
					var hiddenField = document.createElement("input");
					hiddenField.setAttribute("type", "hidden");
					hiddenField.setAttribute("name", key);
					hiddenField.setAttribute("value", params[key]);

					form.appendChild(hiddenField);
				 }
			}

			document.body.appendChild(form);
			form.submit();
		}
		
		$(document).ready(function(){
			$("#submit_retreive").click(function(){
				var temp;
				if($("#nama").is(":checked")){
					if(temp == null){
						temp = "nama";
					}else{
						temp += "-nama";
					}
				}
				if($("#t_lahir").is(":checked")){
					if(temp == null){
						temp = "tempat_lahir";
					}else{
						temp += "-tempat_lahir";
					}
				}
				if($("#tgl_lahir").is(":checked")){
					if(temp == null){
						temp = "tanggal_lahir";
					}else{
						temp += "-tanggal_lahir";
					}
				}
				if($("#jk").is(":checked")){
					if(temp == null){
						temp = "jenis_kelamin";
					}else{
						temp += "-jenis_kelamin";
					}
				}
				if($("#goldar").is(":checked")){
					if(temp == null){
						temp = "golongan_darah";
					}else{
						temp += "-golongan_darah";
					}
				}
				if($("#tgl_terbit").is(":checked")){
					if(temp == null){
						temp = "tanggal_diterbitkan";
					}else{
						temp += "-tanggal_diterbitkan";
					}
				}
				if($("#nip_pencatat").is(":checked")){
					if(temp == null){
						temp = "nip_pencatat";
					}else{
						temp += "-nip_pencatat";
					}
				}
				if($("#kewarganegaraan").is(":checked")){
					if(temp == null){
						temp = "kewarganegaraan";
					}else{
						temp += "-kewarganegaraan";
					}
				}
				if($("#agama").is(":checked")){
					if(temp == null){
						temp = "agama";
					}else{
						temp += "-agama";
					}
				}
				if($("#pekerjaan").is(":checked")){
					if(temp == null){
						temp = "pekerjaan";
					}else{
						temp += "-pekerjaan";
					}
				}
				if($("#status_kawin").is(":checked")){
					if(temp == null){
						temp = "status_perkawinan";
					}else{
						temp += "-status_perkawinan";
					}
				}
				if($("#alamat").is(":checked")){
					if(temp == null){
						temp = "alamat";
					}else{
						temp += "-alamat";
					}
				}
				if($("#alamat_advanced").is(":checked")){
					if(temp == null){
						temp = "alamat_advanced";
					}else{
						temp += "-alamat_advanced";
					}
				}
				if($("#pend_terakhir").is(":checked")){
					if(temp == null){
						temp = "pendidikan_terakhir";
					}else{
						temp += "-pendidikan_terakhir";
					}
				}
				
				$.ajax({
					type		:"GET",
					url			:"http://localhost/hansip-penduduk/hansip/data?token="+$("#r_token").val()+"&nik="+$("#r_nik").val()+"&field="+temp+"&format=html",
					dataType	:"text",
					success		:function(response){
						//var getObj = jQuery.parseJSON(response);
						//alert(getObj.nama);
						$("#form_retreive").hide();
						$("#hasil_retreive").attr("class","form-horizontal");
						$(response).insertAfter("#hasil_retreive");
						$("table").attr("class","table responsive");
					},
					error:function (xhr, ajaxOptions, thrownError){
						if(xhr.status==404) {
							alertify.alert("Data tidak ada");
						}else if(xhr.status==406){
							alertify.alert("Token salah.");
						}
					}
				});
				
			});
			
			$("#submit_update").click(function(){
				$.ajax({
					type		:"GET",
					url			:"http://localhost/hansip-penduduk/hansip/update?token="+$("#u_token").val()+"&nik="+$("#u_nik").val()+"&agama="+$("#u_agama").val()+"&pendidikan_terakhir="+$("#u_pend_terakhir").val()+"&pekerjaan="+$("#u_pekerjaan").val()+"&status_perkawinan="+$("#u_status_kawin").val()+"&alamat="+$("#u_alamat").val()+"&rt="+$("#u_rt").val()+"&rw="+$("#u_rw").val()+"&kelurahan="+$("#u_kelurahan").val()+"&kecamatan="+$("#u_kecamatan").val()+"&kabupaten="+$("#u_kabupaten").val()+"&provinsi="+$("#u_provinsi").val(),
					dataType	:"text",
					success		:function(response){
						//alert(response);
						var hasil = jQuery.parseJSON(response);
						
						if(hasil.status == "success"){
							alertify.alert("Data dengan NIK "+$("#u_nik").val()+" berhasil diupdate.");
						}else{
							alertify.alert("Data dengan NIK "+$("#u_nik").val()+" gagal diupdate.");
						}
					},
					error:function (xhr, ajaxOptions, thrownError){
						if(xhr.status==404) {
							alertify.alert("Data tidak ada");
						}else if(xhr.status==406){
							alertify.alert("Token salah.");
						}else if(xhr.status==400){
							alertify.alert("Input salah.");
						}
					}
				});
			});
			
			$("#retreive").show();
			$("#input").hide();
			$("#update").hide();
			$("#check").hide();
			
			$("#retreive_data").click(function(){
				$("#retreive").show();
				$("#input").hide();
				$("#update").hide();
				$("#check").hide();
			});
			$("#input_data").click(function(){
				$("#input").show();
				$("#retreive").hide();
				$("#update").hide();
				$("#check").hide();
			});
			$("#update_data").click(function(){
				$("#update").show();
				$("#retreive").hide();
				$("#input").hide();
				$("#check").hide();
			});
			$("#nik_checker").click(function(){
				$("#check").show();
				$("#retreive").hide();
				$("#input").hide();
				$("#update").hide();
			});
			
			$("#search_nik").click(function(){
				if($("#u_token").val()==""){
					alertify.alert("Tolong isikan token terlebih dahulu");
				}else{
					$("#search_nik").attr("class","btn btn-single pull-right disabled");
					$.ajax({
						type		:"GET",
						url			:"http://localhost/hansip-penduduk/hansip/data?token="+$("#u_token").val()+"&nik="+$("#u_nik").val()+"&field=nama-tempat_lahir-tanggal_lahir-jenis_kelamin-golongan_darah-tanggal_diterbitkan-nip_pencatat-kewarganegaraan-agama-pekerjaan-status_perkawinan-alamat-alamat_advanced-pendidikan_terakhir",
						dataType	:"text",
						error:function (xhr, ajaxOptions, thrownError){
							if(xhr.status==404) {
								alertify.alert("Data tidak ada");
								$("#search_nik").attr("class","btn btn-single pull-right");
							}else if(xhr.status==406){
								alertify.alert("Token salah.");
							}
						},
						success		:function(response){
							var hasil = jQuery.parseJSON(response);
							$("#btn_nik").hide();
							$("#u_afnik").attr("class","form-horizontal");
							$("#u_nama").val(hasil.nama);
							$("#u_t_lahir").val(hasil.tempat_lahir);
							$("#u_tgl_lahir").val(hasil.tanggal_lahir);
							if(hasil.jenis_kelamin == "1"){
								$("#u_jk").val("Laki-laki");
							}else{
								$("#u_jk").val("Perempuan");
							}
							$("#u_goldar").val(hasil.golongan_darah);
							$("#u_tgl_terbit").val(hasil.tanggal_diterbitkan);
							$("#u_nip_pencatat").val(hasil.nip_pencatat);
							if(hasil.kewarganegaraan == '1'){
								$("#u_kewarganegaraan").val("WNI");
							}else{
								$("#u_kewarganegaraan").val("WNA");
							}
							$("#u_agama").val(hasil.agama);
							$("#u_pend_terakhir").val(hasil.pendidikan_terakhir);
							$("#u_pekerjaan").val(hasil.pekerjaan);
							
							$("#u_alamat").val(hasil.alamat);
							$("#u_rt").val(hasil.rt);
							$("#u_rw").val(hasil.rw);
							$("#u_kelurahan").val(hasil.kelurahan);
							$("#u_kecamatan").val(hasil.kecamatan);
							$("#u_kabupaten").val(hasil.kabupaten);
							$("#u_provinsi").val(hasil.provinsi);
							
							switch(hasil.agama){
								case "1":
									$("#islam").attr("selected", true);
									break;
								case "2":
									$("#kristen").attr("selected", true);
									break;
								case "3":
									$("#katholik").attr("selected", true);
									break;
								case "4":
									$("#hindu").attr("selected", true);
									break;
								case "5":
									$("#budha").attr("selected", true);
									break;
								case "6":
									$("#konghucu").attr("selected", true);
									break;
								case "7":
									$("#lainnya").attr("selected", true);
									break;
								default:
									break;
							}
							switch(hasil.status_perkawinan){
								case "0":
									$("#u_tdk_kawin").attr("selected", true);
									break;
								case "1":
									$("#u_kawin").attr("selected", true);
									break;
								case "2":
									$("#u_cerai").attr("selected", true);
									break;
								case "3":
									$("#u_cerai_mati").attr("selected", true);
									break;
								default :
									break;
							}
							
						}
					});
				}
			});
			
			$("#nik_cek").click(function(){
				$.ajax({
					type		:"GET",
					url			:"http://localhost/hansip-penduduk/hansip/data?nik="+$("#c_nik").val(),
					dataType	:"text",
					success		:function(response){
						var cek = jQuery.parseJSON(response);
						$("#form_cek").hide();
						$("#hasil_cek").attr("class","form-horizontal");
						$("#c_nama").val(cek.nama);
						$("#c_t_lahir").val(cek.tempat_lahir);
						$("#c_tgl_lahir").val(cek.tanggal_lahir);
						$("#c_jk").val(cek.jenis_kelamin);
						$("#c_alamat").val(cek.alamat+" RT "+cek.rt+" RW "+cek.rw+", Kelurahan "+cek.kelurahan+", Kecamatan "+cek.kecamatan+", Kabupaten "+cek.kabupaten+", Provinsi "+cek.provinsi);
					},
					error:function (xhr, ajaxOptions, thrownError){
						if(xhr.status==404) {
							alertify.alert("Data tidak ada");
						}else if(xhr.status==406){
							alertify.alert("Token salah.");
						}
					}
				});
			});
			
			$("#back").click(function(){
				location.reload();
			});
			$("#btn_back").click(function(){
				location.reload();
			});
			
		});
		
	</script>
<?php include'footer.php'; ?>