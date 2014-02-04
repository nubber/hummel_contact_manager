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
					<h3>Edit Contact</h3>
					<?php echo validation_errors(); ?>
					<?php echo form_open('contacts/'.$contact->id.'/edit', $create_contact_form); ?>
  					  <div class="form-group">
  						  <div class="row">
  						    <div class="col-xs-6">
  						       <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" value="<?= $contact->first_name ?>"> 
  						    </div>
  						    <div class="col-xs-6">
  						      <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" value="<?= $contact->last_name ?>">
  						    </div>
  						</div>
  					  </div>
					  <div class="form-group">
						  <div class="row">
						    <div class="col-xs-4">
							    <input type="text" name="nick_name" class="form-control" id="nick_name" placeholder="Nickname" value="<?= $contact->nick_name ?>">
						    </div>
						    <div class="col-xs-8">
							    <input type="text" name="company" class="form-control" id="company" placeholder="Company" value="<?= $contact->company ?>" class="sm">
						    </div>
						</div>
					  </div>
					  <div class="form-group">
					    <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone" value="<?= $contact->phone ?>">
					  </div>
					  <div class="form-group">
					    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?= $contact->email ?>">
					  </div>
					  <div class="form-group">
					    <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="<?= $contact->address ?>">
					  </div>					  
					  <div class="form-group">
						<div class="row">
						    <div class="col-xs-5">
						       <input type="text" name="city" class="form-control" id="city" placeholder="City" value="<?= $contact->city ?>"> 
						    </div>
						    <div class="col-xs-4">
						      <input type="text" name="state" class="form-control" id="state" placeholder="State" value="<?= $contact->state ?>">
						    </div>
						    <div class="col-xs-3">
						      <input type="number" name="zip" class="form-control" id="zip" placeholder="Zip" value="<?= $contact->zip ?>">
						    </div>
						</div>
					  </div>
					  <div class="form-group">
					    <input type="text" name="country" class="form-control" id="country" placeholder="Country" value="<?= $contact->country ?>">
					  </div>
					  <div class="form-group">
  						<div class="row">
  						    <div class="col-xs-5">
							    <input type="datetime" name="birth_date" class="form-control datepicker" id="birth_date" placeholder="Birth Date" value="<?= $contact->birth_date ?>">
  						    </div>
  						</div>
					  </div>
					  <div class="row" style="margin:10px 40%;">
					  	<a href='#' class="btn btn-sm btn-default" id="contact_more_btn">More</a>
				  	  </div>
					  <!-- more -->
					  <div id="contact_more_fields" style="display:none;">
						  <div class="form-group">
						    <input type="url" name="website" class="form-control" id="website" placeholder="Website URL" value="<?= $contact->website ?>">
						  </div>
						  <div class="form-group">
							  <div class="row">
							    <div class="col-xs-6">
								    <input type="text" name="twitter_handle" class="form-control" id="twitter_handle" placeholder="Twitter Username" value="<?= $contact->twitter_handle ?>">
							    </div>
							    <div class="col-xs-6">
								    <input type="text" name="instagram_handle" class="form-control" id="instagram_handle" placeholder="Instagram Username" value="<?= $contact->instagram_handle ?>">
							    </div>
							</div>
						  </div>
				  	  </div>

					  <button type="submit" class="btn btn-default">Save</button>
	  				<?php echo form_close(); ?>
				</div><!--col-md-6-->
			</div><!--col-md-6-->
			
			
		</div><!--row-->
	</section>
</div>

