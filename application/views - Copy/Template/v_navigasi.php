<nav class="mb-1 navbar navbar-expand-lg bg-dark">
	<i class="fa fa-home mr-2 text-white"></i> 
	<a class="navbar-brand text-white" href="<?= base_url(); ?>">Home</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link text-white" href="<?= base_url('home/karir'); ?>">
					<i class="fa fa-list mr-2"></i>Lowongan Karir
					<span class="sr-only">(current)</span>
				</a>
			</li>


			<?php if($this->session->userdata('email')): ?>
			<li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('pelamar/pengumuman'); ?>">
					<i class="fa fa-info mr-2"></i>Pengumuman
				</a>
			</li>
			<?php endif; ?>


			<?php if(!$this->session->userdata('email')): ?>
			<li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('home/login'); ?>">
					<i class="fa fa-user mr-2"></i>Login
				</a>
			</li>
			<?php endif; ?>


			<?php if($this->session->userdata('email')): ?>
			<li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('auth/logout'); ?>">
					<i class="fa fa-user mr-2"></i>Logout
				</a>
			</li>
			<?php endif; ?>

			<!-- 
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-user"></i> Profile
				</a>

				<div class="dropdown-menu dropdown-menu-right dropdown-info mt-2" aria-labelledby="navbarDropdownMenuLink-4">
					<a class="dropdown-item" href="#">My account</a>
					<a class="dropdown-item" href="#">Log out</a>
				</div>
			</li> -->
		</ul>
	</div>
</nav>