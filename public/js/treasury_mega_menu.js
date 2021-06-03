(function ($, Drupal) {
  Drupal.behaviors.treasury_mega_menu = {
    attach: function (context, settings) {
      // Move the child menu items below the Quick Links menu.
      $(context).find('#block-megamenublock .sub-nav-group ul.quik').once('ReadyQuickLinks').each(function (outerIndex) {
        $outer = $(this);
        $outer.attr('id', 'quik-' + outerIndex);
        $outer.find(' > li', this).each(function (index) {
          $('ul', this).addClass('quick-sub-nav').attr('id', 'group-' + outerIndex + '-' + index).addClass('quik-' + outerIndex).detach().insertAfter('#quik-' + outerIndex);
          // Don't hide the first children and set the parent to active.
          if (index === 0) {
            $('a', this).addClass('active');
          }
          else {
            $('ul#group-' + outerIndex + '-' + index).hide();
          }
          $('> a', this).addClass('quick-link').attr('data-group', 'group-' + outerIndex + '-' + index);
        });
      });
	  //remove below since we list them all
      // Bind the Quick Links click event.
      /***
	  $('a.quick-link').bind('click', function(e){
        e.preventDefault();
        var group = $(this).data('group');
        var column = $(this).closest('ul').attr('id');
        $('a.quick-link.active').removeClass('active');
        $(this).addClass('active');
        $('.' + column + '.quick-sub-nav').hide();
        $('#' + group).show();
      });
	  ***/
	  // hide all sub category links
	  jQuery('a.quick-link').hide();
	  //show all detail links
	  jQuery("ul.menu.quick-sub-nav").show();
	  	  
	  
	  //removed these two lines since we only 30 sec ttl
	  //var now = new Date();
	  //var q = now.getUTCFullYear() + '-' + (now.getUTCMonth()+1) + '-' + now.getUTCDate() + '-' + now.getUTCHours() + '-' + Math.floor(now.getUTCMinutes()/3);
  	  //$.get("/api/twitterFeedHtml?q=" + q, function(data, status){
	  $.get("/api/twitterFeedHtml", function(data, status){
        //console.log("/api/twitterFeedHtml?q=" + q + " Twitter Status: " + status);
		$("#titterfeedDiv").html(data.data);
		$("#social-section").html(data.data2);
			  $('a.twitterlink, a.twitter-details-link, a.twitter-viewall-link').bind('click', function (e) {
				e.preventDefault();
				var url = $(this).attr('href');
				// Show only the domain in the dialog box.
				var domain = url.replace('http://', '').replace('https://', '').split(/[\/?#]/)[0];
				$('#external-dialog').dialog({
				  resizable: false,
				  height: 'auto',
				  width: 380,
				  modal: true,
				  draggable: false,
				  closeOnEscape: true,
				  buttons: [
					{
					  text: 'Click here to access ' + domain,
					  click: function () {
						window.location = url;
					  }
					}
				  ]
				});
				// Add the text after the button.
				if ($('#external-after').length === 0) {
				  $('.ui-dialog-buttonset').after('<div id="external-after">Please check the Privacy Policy of the site you are visiting.</div>');
				}
			  });
      });
    }
  };
})(jQuery, Drupal);


api_do_search = function() {
	
	//The code got broken due to CSS generates duplicates for the for element "keys" :
	//var frm_element = document.getElementById ('search-block-form');
	//var text = frm_element.elements["keys"].value;
	//window.location = 'https://search.treasury.gov/search?affiliate=treas&query=' + encodeURIComponent(text);
	
	var xinputs = document.getElementsByName("keys");
	for (var i=xinputs.length-1; i>=0; i--) {
		var ele = xinputs[i];		
		if (ele.type == 'search') {
			var text = ele.value.trim();
			if (text != '') window.location = 'https://search.treasury.gov/search?affiliate=treas&query=' + encodeURIComponent(text);
		}
	}
	return false;
	return false;
}