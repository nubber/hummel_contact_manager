<header id="header" class="navbar navbar-fixed-top">
	<div class="container">
		<div class="navbar">
			<a class="navbar-brand" href="<?php echo  base_url('')?>">Hummel Contact Manager</a>
			<?php echo $nav?>
		</div>
	</div>
</header>

<? if ($this->session->flashdata('status')): ?>
<div class="container">
	<div class="flash_messages">
		<p class="alert"><?php echo $this->session->flashdata('status'); ?></p>
	</div>
</div>
<? endif; ?>