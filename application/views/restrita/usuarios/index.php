<?php $this->load->view('restrita/layout/navbar'); ?>

<?php $this->load->view('restrita/layout/sidebar'); ?>






<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-body">
			<!-- add content here -->
			<?php
				echo '<pre>';
				print_r($usuarios);
				echo '<pre>';
			?>




		</div>
	</section>

	<?php $this->load->view('restrita/layout/sidebar_settings'); ?>
	
	
</div>