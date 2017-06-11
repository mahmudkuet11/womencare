jQuery(document).ready(function($){
   
    //init Thickbox
    
    ////stop the flash from happening
	$('#TB_window').css('opacity',0);
	
	function calcTB_Pos() {
		$('#TB_window').css({
	   	   'height': ($('#TB_ajaxContent').outerHeight() + 30) + 'px',
	   	   'top' : (($(window).height() + $(window).scrollTop())/2 - (($('#TB_ajaxContent').outerHeight()-$(window).scrollTop()) + 30)/2) + 'px',
	   	   'opacity' : 1
		});
	}
	
	setTimeout(calcTB_Pos,10);
	
	//just incase..
	setTimeout(calcTB_Pos,100);
	
	$(window).resize(calcTB_Pos);
	
	
  //Upload function
  initUpload();
			
			function initUpload(clone){
				
				var itemToInit = null;
				itemToInit = typeof clone !== 'undefined' ? clone : $('.shortcode-dynamic-item');
	
	            itemToInit.find('.redux-opts-upload').on('click',function( event ) {
					
	                var activeFileUploadContext = jQuery(this).parent();
	                var relid = jQuery(this).attr('rel-id');
	
	                event.preventDefault();
	
	                // If the media frame already exists, reopen it.
	                /*if ( typeof(custom_file_frame)!=="undefined" ) {
	                    custom_file_frame.open();
	                    return;
	                }*/
	
	                // if its not null, its broking custom_file_frame's onselect "activeFileUploadContext"
	                custom_file_frame = null;
	
	                // Create the media frame.
	                custom_file_frame = wp.media.frames.customHeader = wp.media({
	                    // Set the title of the modal.
	                    title: jQuery(this).data("choose"),
	
	                    // Tell the modal to show only images. Ignore if want ALL
	                    library: {
	                        type: 'image'
	                    },
	                    // Customize the submit button.
	                    button: {
	                        // Set the text of the button.
	                        text: jQuery(this).data("update")
	                    }
	                });
	
	                custom_file_frame.on( "select", function() {
	                    // Grab the selected attachment.
	                    var attachment = custom_file_frame.state().get("selection").first();
	
	                    // Update value of the targetfield input with the attachment url.
	                    jQuery('.redux-opts-screenshot',activeFileUploadContext).attr('src', attachment.attributes.url);
	                    jQuery('#' + relid ).val(attachment.attributes.url).trigger('change');
	
	                    jQuery('.redux-opts-upload',activeFileUploadContext).hide();
	                    jQuery('.redux-opts-screenshot',activeFileUploadContext).show();
	                    jQuery('.redux-opts-upload-remove',activeFileUploadContext).show();
	            });
	
	            custom_file_frame.open();
	        });
	
	   	itemToInit.find('.redux-opts-upload-remove').on('click', function( event ) {
	        var activeFileUploadContext = jQuery(this).parent();
	        var relid = jQuery(this).attr('rel-id');
	
	        event.preventDefault();
	
	        jQuery('#' + relid).val('');
	        jQuery(this).prev().fadeIn('slow');
	        jQuery('.redux-opts-screenshot',activeFileUploadContext).fadeOut('slow');
	        jQuery(this).fadeOut('slow');
	    });
	}
  
  
  
  
  
  
  
  
  	function calcZoom() {
		$("[data-slider]").bind("slider:ready slider:changed", function (event, data) {
			$('span.zoomval').html(data.value);
		});
	}		
  
	calcZoom();
	
	
	
	function calcBar() {
		$("[data-slider]").bind("slider:ready slider:changed", function (event, data) {
			$('span.percentval').html(data.value);
		});
	}		
  
	calcBar();
	
            		
  	function calcPercent() {
		var $output = $("<span>");
		$output.addClass('output');
		
		//I see nothing wrong with the length of the selector.
		$("div.shortcode-options[data-name=bar_graph] .shortcode-dynamic-items > div:last-child .content:last-child").append($output);
		$("[data-slider]").bind("slider:ready slider:changed", function (event, data) {
			$(this).nextAll(".output:first").html(data.value + '%').attr('data-num',data.value);
		});
  	}		
  
  	calcPercent();


	
  

	//The chosen one
	$("select#official-shortcodes").chosen();
	
    var ed = tinyMCE.activeEditor;
    var content = ed.selection.getContent();
    
    $('#shortcode-content textarea').val(content);
    
	
    function dynamic_items(){
   	
		var code = '';
		var accID = '1', tabID = '1', barID = '1', clientID = '1';
		var accContent,tabContent,tabIcon,lsItem, barPercent;
		var barTitle; 
		var clientImage, clientURL, testiImage, testiAuthor, testiJob;
		
		
		//accordion
		if( $('.shortcode-options[data-name=accordion]').is(':visible') ){
			$('.shortcode-options[data-name=accordion] .shortcode-dynamic-item-input').each(function(){
			   if( $(this).val() != '' ) {
					accContent = $(this).parent().parent().find('.shortcode-dynamic-item-text').val();
					code += ' [accordion-item title="'+$(this).val()+'" id="acc'+accID+'"] '+accContent+' [/accordion-item] '; 
					accID++;
				}
			});
		}
		
		
		//tabs
		if( $('.shortcode-options[data-name=tabs]').is(':visible') ){
			$('.shortcode-options[data-name=tabs] .shortcode-dynamic-item-input').each(function(){
				
				tabIcon = $(this).parent().parent().find('.shortcode-dynamic-item-input-icon').val();
				if(tabIcon!=''){tabIcon = 'icon="'+tabIcon+'"';}
			    
				if( $(this).val() != '' || tabIcon !='' ) {
					tabContent = $(this).parent().parent().find('.shortcode-dynamic-item-text').val();
					code += ' [tab title="'+$(this).val()+'" '+tabIcon+'] '+tabContent+' [/tab] '; 
				}
			});
		}

		
		//List Style
		if( $('.shortcode-options[data-name=liststyle]').is(':visible') ){
			$('.shortcode-options[data-name=liststyle] .shortcode-dynamic-item-input').each(function(){
			   if( $(this).val() != '' ) {
					lsItem = $(this).parent().parent().find('.shortcode-dynamic-item-input').val();
					code += ' [item] '+lsItem+' [/item] '; 

				}
			});
		}
		
		//bar graph
		else if( $('.shortcode-options[data-name=progress_bar]').is(':visible') ) {
			$('.shortcode-options[data-name=progress_bar] .shortcode-dynamic-item').each(function(){
				
				barTitle = $(this).find('.shortcode-dynamic-item-input:nth-child(1)').val();
				barPercent = (typeof $(this).find('.output').attr('data-num') != 'undefined') ? $(this).find('.output').attr('data-num') : '1';
				
				code += ' [bar title="'+barTitle+'" percent="' + barPercent + '"]'; 
	
			});
		}
		
		//clients
		else if( $('#options-item.clients').is(':visible') ) {
			$('#options-item.clients .shortcode-dynamic-item').each(function(){
				
				clientImage = $(this).find('.redux-opts-screenshot:first').attr('src');
				clientURL = ($(this).find('.shortcode-dynamic-item-input').val().length != 0) ? $(this).find('.shortcode-dynamic-item-input').val() : 'none';
				
				code += ' [client image="'+clientImage+'" url="' + clientURL + '" id="c'+clientID+'"]'; 
				clientID++;
			});
		}
		
		
		//Tesimonial
		/*else if( $('#options-item.tesimonial').is(':visible') ) {
			$('#options-item.tesimonial .shortcode-dynamic-item').each(function(){
				
				testiImage = $(this).find('.redux-opts-screenshot:first').attr('src');
				testiAuthor = $(this).find('.shortcode-dynamic-item-input').val();
				testiJob = $(this).find('.shortcode-dynamic-item-input').val();
				
				code += ' [client image="'+clientImage+'" url="' + clientURL + '" id="c'+clientID+'"]'; 
				clientID++;
			});
		}*/
		
		$('#shortcode-storage-d').html(code);
    }
    
    function directToEditor() {
    	var name = $('#official-shortcodes').val();
    	var content = '';
    	
    	switch(name) {
    		case 'carousel':
    			content = '<br/>' + 
    			'[item] content here [/item]<br/>' + 
    			'[item] content here [/item]<br/>' + 
    			'[item] content here [/item]<br/>' + 
    			'[item] content here [/item]<br/>' + 
    			'[/carousel]';
    		break;
    		
    		case 'pricing':
    		   var columnNum = 0;
    		   var selectedColumnNum = $('#options-'+name+' input.attr:checked').val();
    		   var columnHeader;
    		   (typeof selectedColumnNum != 'undefined' && selectedColumnNum.length > 0) ? columnNum = selectedColumnNum : columnNum = 0;
    		   
    			for(var i=1;i<=columnNum;i++) {
    				if(i == 2) {
    					columnHeader = '[plan title="Column '+i+'" featured="true" price="'+100*i+'" symbol="$" per="Per Month" color="false" icon=""]<br/>';
    				}
    				else{
    					columnHeader = '[plan title="Column '+i+'" price="'+100*i+'" symbol="$" per="Per Month" color="false" icon=""]<br/>';
    				}
	    			content += '<br/><br/>' + 
		    			  columnHeader +
						    '<ul class="features">'+
							'<li> Your text here </li>'+
							'<li> Your text here </li>'+
							'<li> Your text here </li>'+
						   '</ul>'+
						   '[button button_default_color="color1" size="medium" url="#" text="Sign up now!"]<br/>'+
						'[/plan]';
    			}
    			content += '<br/><br/>[/pricing]';
    		break;
			
			
			case 'service':
    		   var columnNum = 0;
    		   var selectedColumnNum = $('#options-'+name+' input.attr:checked').val();
    		   (typeof selectedColumnNum != 'undefined' && selectedColumnNum.length > 0) ? columnNum = selectedColumnNum : columnNum = 0;
    		   
    			for(var i=1;i<=columnNum;i++) {
    	
    				content += '<br/>[service-item title="Service '+i+'" subtitle="" link="#" icon="" /]';

    			}
				content += '<br/>[/service]';
    		break;
    	}
    	
    	ed.selection.setContent( $('#shortcode-storage-o').text() + content);
		return false;	
    }
    
    function update_shortcode(ending){
		
		var name = $('#official-shortcodes').val();
		var dataType = $('#options-'+name).attr('data-type');
		var extra_attrs = '', extra_attrs2 = '', extra_attrs3 = '', extra_attrs4 = '';
		
		ending = ending || '';
		
		//take care of the dynamic events easier
		dynamic_items();
		
		//last check
		var code = ' ['+name;
		if( $('#options-'+name).attr('data-type')=='checkbox' ){
		    if($('#options-'+name+' input.last').attr('checked') == 'checked') ending = '_last';
		}
		code += ending;
		
		//checkbox loop for extra attrs
		$('#options-'+name+' input[type=checkbox]').each(function(){
			 if($(this).attr('checked') == 'checked' && $(this).attr('class') != 'last') extra_attrs += ' ' + $(this).attr('class')+'="true"';	
		});
		
		code += extra_attrs;
		
		//textarea loop for extra attrs
		$('#options-'+name+' textarea:not("#content")').each(function(){
			 extra_attrs2 += ' ' + $(this).attr('data-attrname')+'="'+ $(this).val() +'"';	
		});
		
		if(dataType != 'dynamic') code += extra_attrs2;
		
		//select loop for extra attrs
		$('#options-'+name+' select').each(function(){
			 extra_attrs3 += ' ' + $(this).attr('id')+'="' + $(this).attr('value') + '"';	
		});
		
		code += extra_attrs3;
		
		//image upload loop for extra attrs
		$('#options-'+name+' [data-name=image-upload] img.redux-opts-screenshot').each(function(){
			 extra_attrs4 += ' ' + $(this).attr('id')+'="' + $(this).attr('src') + '"';	
		});
		
		code += extra_attrs4;
		
		
		
		
		//input loop for extra attrs
		$('#options-'+name+' input.attr').each(function(){
			if( $(this).attr('type') == 'text' && $(this).val()!='' ){ code += ' '+ $(this).attr('data-attrname')+'="'+ $(this).val()+'"'; }
			else { if($(this).attr('checked') == 'checked') code += ' '+ $(this).attr('data-attrname')+'="'+ $(this).val()+'"'; }
		});
		
		//take care of icon attrs
		if(name == 'icon' && $('.icon-option i.selected').length > 0 ) code += ' icon="'+ $('.icon-option i.selected').attr('class').split(' ')[0].replace('icon-','') +'"'; 
		if(name == 'liststyle' && $('.icon2-option i.selected').length > 0 ) code += ' icon="'+ $('.icon2-option i.selected').attr('class').split(' ')[0].replace('icon-','') +'"';       
		if(name == 'featured' && $('.icon3-option i.selected').length > 0 ) code += ' icon="'+ $('.icon3-option i.selected').attr('class').split(' ')[0].replace('icon-','') +'"';
		
		// Google Map Zoom Value
		if(name == 'gmap') code += ' zoom="'+ $('span.zoomval').html()+'"';
		
		// Progress Bar
		if(name == 'progress_bar') code += ' percent="'+ $('span.percentval').html()+'"';
		
		code += '] ';

		$('#shortcode-storage-o').html(code);
		if( dataType!= 'dynamic') $('#shortcode-storage-d').text($('#shortcode-content textarea').val());
	    if( dataType != 'regular' && dataType != 'radios' && dataType != 'direct_to_editor') $('#shortcode-storage-c').html(' [/'+name+ending+']');
		if( dataType == 'direct_to_editor') directToEditor();
		
	 }
     
	//events
    $('#add-shortcode').click(function(){
    	var name = $('#official-shortcodes').val();
    	var dataType = $('#options-'+name).attr('data-type');
    	
    	update_shortcode();
		if( dataType != 'direct_to_editor') 
			ed.selection.setContent( $('#shortcode-storage-o').text() + $('#shortcode-storage-d').text() + $('#shortcode-storage-c').text() );
			
		tb_remove();
		
		return false;
    });

    $('#official-shortcodes').change(function(){
		$('.shortcode-options').hide();
		$('#options-'+$(this).val()).show();

		var dataType = $('#options-'+$(this).val()).attr('data-type');
		
		if( dataType == 'checkbox' || dataType == 'simple' ){
    		$('#shortcode-content').show().find('textarea').val( content );
		}
		
		else {
    		$('#shortcode-content textarea').val('').parent().parent().hide();
		}

    });

    $('#options-box input[type="radio"]').click(function(){

		if($(this).val() == 'custom'){
		    $('#custom-box-name').attr('data-attrname','style').addClass('attr');
		    $('#options-box input[type="radio"]').attr('data-attrname','temp').removeClass('attr');
		}
		else{
		    $('#options-box input[type="radio"]').attr('data-attrname','style').addClass('attr');
		    $('#custom-box-name').attr('data-attrname','temp').removeClass('attr');
		}
    });
 	
 	////Dynamic item events
    $('.add-list-item').click(function(){
    	
    	if(!$(this).parent().find('.remove-list-item').is(':visible')) $(this).parent().find('.remove-list-item').show();
    	
    	//clone item 
    	var $clone = $(this).parent().find('.shortcode-dynamic-item:first').clone();
    	$clone.find('input[type=text],textarea').attr('value','');
    	
    	//init ss if it's a bar graph
    	if( $clone.find('.percent').length > 0 ) {
    		$($clone).find('.slider, .output').remove();
    		$($clone).find('.percent').simpleSlider({
    			range: [1,100],
    			step: '1'
    		});
    	}
    	
		
    	//init new upload button and clear image if it's an upload
    	if( $clone.find('.redux-opts-upload').length > 0 ) {
    		$clone.find('.redux-opts-screenshot').attr('src','');
    		$clone.find('.redux-opts-upload-remove').hide();
    		$clone.find('.redux-opts-upload').css('display','inline-block');
    		setTimeout(function(){ initUpload($clone) },200);
    	}
    	
    	//append clone
		$(this).prevAll('div').append($clone);
		
		
		if( $clone.find('.percent').length > 0 ) calcPercent();
		
		if( $clone.find('.zoom').length > 0 ) calcZoom();
	
	
		return false;
    });
	
    $('.remove-list-item').live('click', function(){
    	if($(this).parent().find('.shortcode-dynamic-item').length > 1){
    		$(this).parent().find('#options-item .shortcode-dynamic-item:last').remove();
			dynamic_items();	
    	}
    	if($(this).parent().find('.shortcode-dynamic-item').length == 1) $(this).hide();
    	
    	
		return false;
    });
    
    //hide remove btn to start
    $('.remove-list-item').hide();
	
    $('.shortcode-dynamic-item-input, .shortcode-dynamic-item-text').live('keyup', function(){ dynamic_items(); });
	$(".shortcode-dynamic-item textarea").live("input propertychange", function(){ dynamic_items(); });
	
	//icon selection
	$('.icon-option i').click(function(){
		$('.icon-option i').removeClass('selected');
		$(this).addClass('selected');
	});
	
	//icon selection
	$('.icon2-option i').click(function(){
		$('.icon2-option i').removeClass('selected');
		$(this).addClass('selected');
	});
	
	//icon selection
	$('.icon3-option i').click(function(){
		$('.icon3-option i').removeClass('selected');
		$(this).addClass('selected');
	});
    
});