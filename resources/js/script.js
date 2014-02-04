jQuery(document).ready(function() {
	
	jQuery('.datepicker').datepicker();
	
	$("#contact_more_btn").click(function(e) {
		e.preventDefault();
	  $('#contact_more_fields').slideToggle('fast');
	  var text = $(this).text();
	  $(this).text(text == "More" ? "Less" : "More");
	});
	
	$("#show_contact_on_map_btn").click(function(e) {
		e.preventDefault();
	  $('#contact_on_map').slideToggle('fast');
	  var text = $(this).text();
	  $(this).text(text == "Show Map" ? "Hide Map" : "Show Map");
	});
	
	
	$("#filter").keyup(function(){

	    // Retrieve the input field text and reset the count to zero
	    var filter = $(this).val(), count = 0;
		console.log(filter);
	    if(!filter){
	        $(".contact_list li").show('fast');
	        return;
	    }

	    var regex = new RegExp(filter, "i");
	    // Loop through the contact list
	    $(".contact_list  li").each(function(){

	        // If the list item does not contain the text phrase fade it out
	        if ($(this).text().search(regex) < 0) {
	            $(this).hide('fast');

	        // Show the list item if the phrase matches and increase the count by 1
	        } else {
	            $(this).show('fast');
	            count++;
	        }
	    });

	    // Update the count
	    var numberItems = count;
	    $("#filter-count").text("Number of Comments = "+count);
	});
	
	$("#contact_delete_btn").click(function(e) {
	    if (!confirm('Are you sure want to delete this contact?')) {
		    e.preventDefault();
	    }
	});
	
	

});