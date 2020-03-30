<?php
	include("sess_check.php");
	
	// deskripsi halaman
	$pagedesc = "Data Karyawan";
	$menuparent = "master";
	include("layout_top.php");
?>
<script type="text/javascript">
	function checkNppAvailability() {
	$("#loaderIcon").show();
	jQuery.ajax({
		url: "check_nppavailability.php",
		data:'npp='+$("#npp").val(),
		type: "POST",
		success:function(data){
			$("#user-availability-status").html(data);
			$("#loaderIcon").hide();
		},
		error:function (){}
	});
	}
</script>
<!-- top of file -->
		<!-- Page Content -->
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Mahasiswa</h1>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->

				<div class="row">
					<div class="col-lg-12"><?php include("layout_alert.php"); ?></div>
				</div>
				
				<div class="row">
					<div class="col-lg-12">
						<form class="form-horizontal" action="mahasiswa_insert.php" method="POST" enctype="multipart/form-data">
							<div class="panel panel-default">
								<div class="panel-heading"><h3>Tambah Data</h3></div>
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-sm-3">NIM</label>
										<div class="col-sm-4">
											<input type="text" name="npp" onBlur="checkNppAvailability()" class="form-control" placeholder="NIM" required>
											
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Nama Lengkap</label>
										<div class="col-sm-4">
											<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Jenis Kelamin</label>
										<div class="col-sm-3">
											<select name="jk" id="jk" class="form-control" required>
												<option value="" selected>--- Pilih Jenis Kelamin ---</option>
												<option value="Laki-Laki">Laki-Laki</option>
												<option value="Perempuan">Perempuan</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Semester</label>
										<div class="col-sm-4">
										<select name="telp" id="telp" class="form-control" required>
												<option value="" selected>--- Semester ---</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9+">9+</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Fakultas</label>
										<div class="col-sm-4">
											<select name="divisi" id="divisi" class="form-control" required>
												<option value="" selected>--- Fakultas ---</option>
												<option value="USHULUDIN">USHULUDIN</option>
												<option value="TARBIYAH">TARBIYAH</option>
												<option value="SYARIAH">SYARIAH</option>
												<option value="EKONOMI DAN MANAJEMENT">EKONOMI DAN MANAJEMENT</option>
												<option value="HUMANIORA">HUMANIORA</option>
												<option value="SAINTEK">SAINTEK</option>
												<option value="KESEHATAN">KESEHATAN</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Progam Studi</label>
										<div class="col-sm-4">
											<select name="jabatan" id="jabatan" class="form-control" required>
												<option value="" selected>--- Progam Studi ---</option>
												<option value="IQT">Ilmu Qur'an Tafsir</option>
												<option value="SAA">Studi Agama-Agama</option>
												<option value="AFI">Aqidah Filsafat Islam</option>
												<option value="PAI">Pendidikan Agama Islam</option>
												<option value="PBA">Pendidikan Bahasa Arab</option>
												<option value="HES">Hukum Ekonomi Syariah</option>
												<option value="PM">Perbandingan Mazhab</option>
												<option value="EI">Ekonomi Islam</option>
												<option value="MJ">Manajement</option>
												<option value="HI">Hubungan International</option>
												<option value="ILKOM">Ilmu Komunikasi</option>
												<option value="TI">Teknik Informatika</option>
												<option value="AGRO">Agroteknologi</option>
												<option value="TIP">Teknologi Industri Pertanian</option>
												<option value="K3">Kesehatan Keslamatan Kerja</option>
												<option value="GIZI">Ilmu Gizi</option>
												<option value="Farmasi">Farmasi</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Alamat</label>
										<div class="col-sm-4">
											<textarea name="alamat" class="form-control" placeholder="Alamat" rows="3" required></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Jumlah Perizinan</label>
										<div class="col-sm-3">
											<input type="number" name="jml" min="0" class="form-control" placeholder="Jumlah Cuti" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Hak Akses</label>
										<div class="col-sm-3">
											<select name="akses" id="akses" class="form-control" required>
												<option value="" selected>--- Pilih Hak Akses ---</option>
												
												<option value="Mahasiswa">Mahasiswa</option>
												
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Foto</label>
										<div class="col-sm-3">
											<input type="file" name="foto" class="form-control" accept="image/*" required>
										</div>
									</div>
								</div>
								<div class="panel-footer">
									<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
								</div>
							</div><!-- /.panel -->
						</form>
					</div><!-- /.col-lg-12 -->
				</div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /#page-wrapper -->
<!-- bottom of file -->
<?php
	include("layout_bottom.php");
?>