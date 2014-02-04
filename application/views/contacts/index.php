<div class="container">
	<section id="contacts">
		
		<div class="row">
			
			<div class="col-md-6">
				<h3>All Contacts</h3>
				<div class="form-group">
				    <input type="text" class="form-control" placeholder="Search" id="filter">
				  </div>
				<?= sort_links($sort); ?>
				<div class="contact_list">
					<ul>
						<?php foreach ($contacts as $contact): ?>
							<li><a href='<?= base_url('contacts') ?>/<?=$contact->id ?>'><?= $contact->first_name ?> <strong><?= $contact->last_name ?></strong></a></li>
						<?php endforeach; ?>
					</ul>
				</div><!--contact_list-->
				<a href='<?= base_url('contacts/create') ?>' class="btn btn-sm btn-primary">Add Contact</a>
			</div><!--col-md-6-->
	

			
			
		</div><!--row-->
	</section>
</div>

