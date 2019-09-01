<div class="card-header mt-5 text-center font-weight-bold offset-3 col-6 mb-5">
	SILAHKAN KIRIM SARAN MASUKAN DAN KELUHAN ANDA
</div>
<hr style="border: 1px solid grey;">

<?php if($this->session->flashdata('alert')): ?>
<div class="alert-warning p-5 col-12 text-center">
  <strong><?= $this->session->flashdata('alert'); ?></strong>
</div>
<?php endif; ?>

<div class="container" id="contain-kontak">
	<div class="row">
		<div class="col-12 mt-5">
			<div class="card border border-info">
				<form class="p-5" method="post" action="<?php echo base_url('welcome/kontak') ?>">
					<div class="row">
						<div class="col-md-12">
							<h3 class="text-center">Hubungi Kami</h3>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-user mr-3 mt-3"></i>
									</span>
									<input type="text" name="nama" class="form-control" placeholder="Nama" required="required">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope mr-3 mt-3"></i>
									</span>
									<input type="email" name="email" class="form-control" placeholder="Email" required="required">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fas fa-phone mr-3 mt-3"></i>
									</span>
									<input type="text" name="kontak" class="form-control" placeholder="Nomor Telepon" required="required">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea name="pesan" id="message" class="form-control" rows="9" cols="26" required="required" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" class="btn btn-raised btn-info" id="btnContactUs">
								<i class="fa fa-paper-plane"></i>
								Send Message
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	</div>
</div>
