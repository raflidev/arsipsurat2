<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Arsip Surat SMK AL-MUNIR </title>

	<?php $this->load->view('templates/tem_header'); ?>
</head>

<body class="nav-md">
	<div class="container body" style="background-color:#5F9DF7;background:#5F9DF7">
		<div class="main_container" style="background-color:#5F9DF7;background:#5F9DF7">
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
						<div class="title_right">
							<?php
							if (isset($_SESSION['success'])) { ?>
								<div class="alert alert-success alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<?= $_SESSION['success']; ?>
								</div>
							<?php } else if (isset($_SESSION['failed'])) {
							?>
								<div class="alert alert-danger alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<?= $_SESSION['failed']; ?>
								</div>
							<?php } ?>
							<h2>Surat Masuk > <small>Data Surat Masuk</small></h2>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Data<small>Surat Masuk</small></h2>
									<div class="clearfix"></div>
								</div>
								<?php if ($this->session->userdata('v4lid') == "admin") { ?>
									<a href="<?= base_url('admin/input_suratmasuk') ?>"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Surat Masuk</button></a>
								<?php } ?>
								<div class="x_content">
									<div class="x_content">
										<?php
										if ($this->session->userdata('v4lid') == "admin") {
											$sql1  		= $this->db->query("SELECT * FROM tb_suratmasuk order by id_suratmasuk asc");
										} else {
											$sql1  		= $this->db->query("SELECT * FROM tb_suratmasuk  where disposisi1 = '" . $this->session->userdata('nama') . "' or disposisi2 = '" . $this->session->userdata('nama') . "' or disposisi3 =  '" . $this->session->userdata('nama') . "'  order by id_suratmasuk asc");
										}
										$total		= $sql1->num_rows();
										if ($total == 0) {
											echo "<center><h2>Belum Ada Data Surat Masuk</h2></center>";
										} else { ?>
											<table id="datatable" class="table table-striped table-bordered">
												<thead>
													<tr>
														<th width="3%">No Urut</th>
														<th width="10%">Tanggal Masuk</th>
														<th width="3%">Kode Surat</th>
														<th width="10%">Tanggal Surat</th>
														<th width="14%">Pengirim</th>
														<th width="15%">Nomor Surat</th>
														<th width="10%">Kepada</th>
														<th width="25%">Perihal</th>
														<th width="15%">Aksi</th>
													</tr>
												</thead>


												<tbody>
													<?php

													foreach ($sql1->result_array() as $data) { ?>
														<tr>
															<td> <?= $data['nomorurut_suratmasuk'] ?> </td>
															<td> <?= $data['tanggalmasuk_suratmasuk'] ?> </td>
															<td> <?= $data['kode_suratmasuk'] ?> </td>
															<td> <?= $data['tanggalsurat_suratmasuk'] ?> </td>
															<td> <?= $data['pengirim'] ?> </td>
															<td> <?= $data['nomor_suratmasuk'] ?> </td>
															<td> <?= $data['kepada_suratmasuk'] ?> </td>
															<td> <?= $data['perihal_suratmasuk'] ?> </td>
															<?php if ($this->session->userdata('v4lid') == "admin") { ?>
																<td style="text-align:center;">
																	<a href=<?= base_url('public/surat_masuk/') . $data['file_suratmasuk'] ?>><button type="button" title="Unduh File" class="btn btn-success btn-xs"><i class="fa fa-download"></i></button></a>
																	<a href=<?= base_url('admin/detail_disposisi') ?>?id_suratmasuk=<?= $data['id_suratmasuk'] ?>><button type="button" title="Unduh Disposisi" class="btn btn-warning btn-xs"><i class="fa fa-file-image-o"></i></button></a>
																	<a href=<?= base_url('admin/detail_suratmasuk') ?>?id_suratmasuk=<?= $data['id_suratmasuk'] ?>><button type="button" title="Detail" class="btn btn-info btn-xs"><i class="fa fa-file-image-o"></i></button></a>
																	<a href=<?= base_url('admin/edit_suratmasuk') ?>?id_suratmasuk=<?= $data['id_suratmasuk'] ?>><button type="button" title="Edit" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></button></a>
																	<a href=<?= base_url('admin/input_arsip_suratmasuk') ?>?id_suratmasuk=<?= $data['id_suratmasuk'] ?>><button type="button" title="Arsipkan" class="btn btn-default btn-xs"><i class="fa fa-archive"></i></button></a>
																	<a onclick="return konfirmasi()" href="<?= base_url('admin/delete_suratmasuk') ?>?id_suratmasuk=<?= $data['id_suratmasuk'] ?>"><button type="button" title="Hapus" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
																</td>
															<?php } else { ?>
																<td style="text-align:center;">
																	<a href=<?= base_url('public/surat_masuk/') . $data['file_suratmasuk'] ?>><button type="button" title="Unduh File" class="btn btn-success btn-xs"><i class="fa fa-download"></i></button></a>
																	<a href=<?= base_url('admin/detail_suratmasuk') ?>?id_suratmasuk=<?= $data['id_suratmasuk'] ?>><button type="button" title="Detail" class="btn btn-info btn-xs"><i class="fa fa-file-image-o"></i></button></a>
																	<a href=<?= base_url('admin/input_disposisi_suratmasuk') ?>?id_suratmasuk=<?= $data['id_suratmasuk'] ?>><button type="button" title="Beri Pesan" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></button></a>
																</td>
															<?php } ?>
														</tr>

													<?php
													}
													?>
												</tbody>
											</table>
										<?php } ?>
									</div>
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

	<script type="text/javascript" language="JavaScript">
		function konfirmasi() {
			tanya = confirm("Anda Yakin Akan Menghapus Data ?");
			if (tanya == true) return true;
			else return false;
		}
	</script>

</body>

</html>
