<!DOCTYPE html>
<?php
if ($this->session->userdata('v4lid') == "TU") {
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

	<title>Arsip Surat SMK 10 November </title>

	<?php $this->load->view('templates/tem_header'); ?>
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
							<h3>Admin</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Admin ><small>Edit Kepala Sekolah</small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="<?= base_url('admin/update_tu') ?>" method="post" enctype="multipart/form-data" id="demo-form2" name="formupdate" data-parsley-validate class="form-horizontal form-label-left">
										<?php
										$id			= $this->db->escape_str($_GET['id_tu']);
										$sql  		= $this->db->query("SELECT * FROM tb_tu where id_tu='" . $id . "'");
										$data 		= $sql->row_array();
										?>
										<input type=hidden name="id_tu" value="<?php echo $id; ?>">
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Kepala Sekolah <span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 col-xs-12">
												<input value="<?php echo $data['nama_tu']; ?>" type="text" id="nama_tu" name="nama_tu" required="required" placeholder="Masukkan Nama TU" class="form-control col-md-7 col-xs-12">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
												<a href="<?= base_url('admin/tu') ?>" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Batal</a>
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

	<?php $this->load->view('templates/tem_footer'); ?>
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
