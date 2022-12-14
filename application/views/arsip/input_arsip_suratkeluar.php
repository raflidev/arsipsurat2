<!DOCTYPE html>
<?php
if ($this->session->userdata('v4lid') == "bagian") {
	$this->session->set_flashdata('failed', 'Anda tidak punya hak akses');
	redirect('admin');
}
?>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Arsip Surat SMK AL-MUNIR </title>
	<?php
	$this->load->view('templates/tem_header');
	?>
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<!-- Profile and Sidebarmenu -->
			<?php
			$this->load->view('admin/admin_sidebar');
			?>
			<!-- /Profile and Sidebarmenu -->

			<!-- top navigation -->
			<?php
			$this->load->view('admin/admin_header');
			?>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Surat Masuk</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Surat Masuk ><small>Tambah Arsip Surat Keluar</small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<?php
									$id = $_GET['id_suratkeluar'];
									$query = $this->db->query("SELECT * FROM tb_suratkeluar where id_suratkeluar = $id");
									$data = $query->row_array();
									?>
									<form action="<?= base_url('admin/add_arsip_suratkeluar') ?>" name="formsuratkeluar" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
										<input type="hidden" id="id_suratkeluar" name="id_suratkeluar" value="<?= $data['id_suratkeluar'] ?>" />
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor Surat <span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 col-xs-12">
												<input type="text" id="nomor_suratkeluar" name="nomor_suratkeluar" required="required" maxlength="35" placeholder="Masukkan Nomor Surat" class="form-control col-md-7 col-xs-12" value="<?= $data['nomor_suratkeluar'] ?>" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No Box <span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 col-xs-12">
												<input type="text" id="no_box" name="no_box" required="required" placeholder="Masukkan No Box Surat" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No Rak <span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 col-xs-12">
												<input type="text" id="no_rak" name="no_rak" required="required" placeholder="Masukkan No Rak Surat" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
												<a href="<?= base_url('admin/suratkeluar') ?>" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Batal</a>
												<button type="submit" name="input" value="Simpan" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Simpan</button>
											</div>
										</div>

									</form>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>
	<?php
	$this->load->view('templates/tem_footer');
	?>
	<script>
		$('#myDatepicker').datetimepicker();

		$('#myDatepicker2').datetimepicker({
			format: 'DD.MM.YYYY'
		});

		$('#myDatepicker3').datetimepicker({
			format: 'hh:mm A'
		});

		$('#myDatepicker4').datetimepicker({
			ignoreReadonly: true,
			allowInputToggle: true
		});

		$('#datetimepicker6').datetimepicker();

		$('#datetimepicker7').datetimepicker({
			useCurrent: false
		});

		$("#datetimepicker6").on("dp.change", function(e) {
			$('#datetimepicker7').data("DateTimePicker").minDate(e.date);
		});

		$("#datetimepicker7").on("dp.change", function(e) {
			$('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
		});
	</script>
	<script language='javascript'>
		function validAngka(a) {
			if (!/^[0-9.]+$/.test(a.value)) {
				a.value = a.value.substring(0, a.value.length - 1000);
			}
		}
	</script>
</body>

</html>
