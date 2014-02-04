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
						<?php foreach ($contacts as $c): ?>
							<li><a href='<?= base_url('contacts') ?>/<?=$c->id ?>'><?= $c->first_name ?> <strong><?= $c->last_name ?></strong></a></li>
						<?php endforeach; ?>
					</ul>
				</div><!--contact_list-->
				<a href='<?= base_url('contacts/create') ?>' class="btn btn-sm btn-primary">Add Contact</a>
			</div><!--col-md-6-->
	
			<div class="col-md-6">
				
				<div class="contact_card_container">
  						<div class="form-group">
  						       <h3><?= $contact->first_name ?> <?= $contact->last_name ?></h3>
							   <p><strong>Nick Name:</strong> <?= $contact->nick_name ?></p>
  						 </div>
							<p><strong>Company:</strong> <?= $contact->company ?></p>
					    <p><strong>Phone:</strong> <?= $contact->phone ?></p>
					   <p><strong>Email:</strong> <a href="mailto:<?= $contact->email ?>"><?= $contact->email ?></a></p>
					    <p><strong>Address:</strong> <?= $contact->address ?> <?= $contact->city ?>, <?= $contact->state ?> <?= $contact->zip ?> <?= $contact->country ?></p>
		   	  		<div class="form-group" style="margin: 10px 40%;">
					  	<a href='#' class="btn btn-sm btn-default" id="show_contact_on_map_btn">Hide Map</a>
				  	  </div>
			  		<div id="contact_on_map">
			  			<?php echo $map['html']; ?>
			  		</div>
					  
							<p><strong>Birth Date:</strong> <?= $contact->birth_date ?></p>
					  
	  				<div class="form-group" style="margin: 10px 40%;">
					  	<a href='#' class="btn btn-sm btn-default" id="contact_more_btn">More</a>
				  </div>
					  
					  <!-- more -->
					  <div id="contact_more_fields" style="display:none;">
						    <p><strong>Website URL:</strong> <?= $contact->website ?></p>
							 
							  <h3>Latest From Twitter <a href='https://twitter.com/<?= $contact->twitter_handle ?>'>@<?= $contact->twitter_handle ?></a></h3>
							  
								  
								  <h3>Latest from Instagram <a href='https://instagram.com/<?= $contact->instagram_handle ?>'>@<?= $contact->instagram_handle ?></h3>
							  <iframe src="http://widget.stagram.com/in/<?= $contact->instagram_handle ?>/?s=100&w=3&h=3&b=1&p=5" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:100%; height: 345px" ></iframe> <!-- Webstagram - web.stagram.com -->

				  	  </div>
					  <div class="page-header">
					  </div>
					  <a href="<?= base_url('contacts') ?>/<?= $contact->id ?>/edit" class="btn btn-default">Edit</a>
					  <a href="<?= base_url('contacts') ?>/<?= $contact->id ?>/delete" class="btn btn-danger" id="contact_delete_btn">Delete</a>
				</div><!--col-md-6-->
			</div><!--contact_card_container-->
			
			
		</div><!--row-->
	</section>
</div>

