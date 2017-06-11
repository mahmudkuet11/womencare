<?php 
	
function official_option_element( $name, $attr_option, $type, $shortcode ){
	
	$option_element = null;
	
	(isset($attr_option['desc']) && !empty($attr_option['desc'])) ? $desc = '<p class="description">'.$attr_option['desc'].'</p>' : $desc = '';
		
	switch( $attr_option['type'] ){
		
	case 'radio':
	    
		$option_element .= '<div class="label"><strong>'.$attr_option['title'].': </strong></div><div class="content">';
	    foreach( $attr_option['opt'] as $val => $title ){
	    
		(isset($attr_option['def']) && !empty($attr_option['def'])) ? $def = $attr_option['def'] : $def = '';
		
		 $option_element .= '
			<label for="shortcode-option-'.$shortcode.'-'.$name.'-'.$val.'">'.$title.'</label>
		    <input class="attr" type="radio" data-attrname="'.$name.'" name="'.$shortcode.'-'.$name.'" value="'.$val.'" id="shortcode-option-'.$shortcode.'-'.$name.'-'.$val.'"'. ( $val == $def ? ' checked="checked"':'').'>';
	    }
		
		$option_element .= $desc . '</div>';
		
	    break;
		
	case 'checkbox':
		
		$option_element .= '<div class="label"><label for="' . $name . '"><strong>' . $attr_option['title'] . ': </strong></label></div>    <div class="content"> <input type="checkbox" class="' . $name . '" id="' . $name . '" />'. $desc. '</div> ';
		
		break;	
	
	case 'select':
		
		$option_element .= '
		<div class="label"><label for="'.$name.'"><strong>'.$attr_option['title'].': </strong></label></div>
		
		<div class="content"><select id="'.$name.'">';
			$values = $attr_option['values'];
			foreach( $values as $value => $title ){
		    	$option_element .= '<option value="'.$value.'">'.$title.'</option>';
			}
		$option_element .= '</select>' . $desc . '</div>';
		
		break;
		
	case 'fontselect':
		
		$option_element .= '
		<div class="label"><label for="'.$name.'"><strong>'.$attr_option['title'].': </strong></label></div>
		
		<div class="content"><select id="'.$name.'">';
			$values = $attr_option['values'];
			foreach( $values as $title => $value ){
		    	$option_element .= '<option value="'.$value.'">'.$title.'</option>';
			}
		$option_element .= '</select>' . $desc . '</div>';
		
		break;
		
	case 'icons':
		
		$option_element .= '

		<div class="icon-option">';
			$values = $attr_option['values'];
			foreach( $values as $value ){
		    	$option_element .= '<i class="icon-'.$value.'"></i>';
			}
		$option_element .= $desc . '</div>';
		
		break;
		
	case 'icons2':
		
		$option_element .= '

		<div class="icon2-option">';
			$values = $attr_option['values'];
			foreach( $values as $value ){
		    	$option_element .= '<i class="icon-'.$value.'"></i>';
			}
		$option_element .= $desc . '</div>';
		
		break;
		
	case 'icons3':
		
		$option_element .= '

		<div class="icon3-option">';
			$values = $attr_option['values'];
			foreach( $values as $value ){
		    	$option_element .= '<i class="icon-'.$value.'"></i>';
			}
		$option_element .= $desc . '</div>';
		
		break;
		
	case 'custom':
 
 		if( $name == 'acc' ){
			$option_element .= '
			<div class="shortcode-dynamic-items" id="options-item" data-name="item">
				<div class="shortcode-dynamic-item">
					<div class="label"><label><strong>Title: </strong></label></div>
					<div class="content"><input class="shortcode-dynamic-item-input" type="text" name="" value="" /></div>
					<div class="clearfix"></div>
					<div class="label"><label><strong>Accordion Content: </strong></label></div>
					<div class="content"><textarea class="shortcode-dynamic-item-text" type="text" name="" /></textarea></div>
				</div>
			</div>
			<a href="#" class="btn gray remove-list-item">'.__('Remove Accordion Items', TG_THEME_NAME ). '</a> <a href="#" class="btn gray add-list-item">'.__('Add Accordion Item', TG_THEME_NAME ).'</a>';
			
		} 
		
		if( $name == 'tabs' ){
			$option_element .= '
			<div class="shortcode-dynamic-items" id="options-item" data-name="item">
				<div class="shortcode-dynamic-item">
					<div class="label"><label><strong>Title: </strong></label></div>
					<div class="content"><input class="shortcode-dynamic-item-input" type="text" name="" value="" /></div>
					<div class="clearfix"></div>
					<div class="label"><label><strong>Icon: </strong></label></div>
					<div class="content"><input class="shortcode-dynamic-item-input-icon" type="text" name="" value="" /></div>
					<div class="clearfix"></div>
					<div class="label"><label><strong>Tab Content: </strong></label></div>
					<div class="content"><textarea type="text" name="" /></textarea></div>
				</div>
			</div>
			<a href="#" class="btn gray remove-list-item">'.__('Remove Tab', TG_THEME_NAME ). '</a> <a href="#" class="btn gray add-list-item">'.__('Add Tab', TG_THEME_NAME ).'</a>';
			
		} 
		
		if( $name == 'liststyle' ){
			$option_element .= '
			<div class="shortcode-dynamic-items" id="options-item" data-name="item">
				<div class="shortcode-dynamic-item">
					<div class="label"><label><strong>Item: </strong></label></div>
					<div class="content"><input class="shortcode-dynamic-item-input" type="text" name="" value="" /></div>
				</div>
			</div>
			<a href="#" class="btn gray remove-list-item">'.__('Remove List Items', TG_THEME_NAME ). '</a> <a href="#" class="btn gray add-list-item">'.__('Add List Item', TG_THEME_NAME ).'</a>';
			
		} 
		
		elseif( $name == 'progress_bar' ){
			$option_element .= '
			<div class="shortcode-dynamic-items" id="options-item" data-name="item">
				<div class="shortcode-dynamic-item">
					<div class="label"><label><strong>Title: </strong></label></div>
					<div class="content"><input class="shortcode-dynamic-item-input" type="text" name="" value="" /></div>
					<div class="label"><label><strong>Bar Percent: </strong></label></div>
					<div class="content"><input class="shortcode-dynamic-item-input percent" data-slider="true"  data-slider-range="1,100" data-slider-step="1" type="text" name=""  value="" /></div>
				</div>
			</div>
			<a href="#" class="btn gray remove-list-item">'.__('Remove Bar', TG_THEME_NAME ). '</a> <a href="#" class="btn gray add-list-item">'.__('Add Bar', TG_THEME_NAME ).'</a>';
			
		} 
		
		
		elseif( $name == 'image' || $name == 'markerimage'){
			$option_element .= '
				<div class="shortcode-dynamic-item" id="options-item" data-name="image-upload">
					<div class="label"><label><strong> '.$attr_option['title'].' </strong></label></div>
					<div class="content">
					
					 <input type="hidden" id="options-item"  />
			         <img class="redux-opts-screenshot" id="' . $name . '" src="" />
			         <a data-update="Select File" data-choose="Choose a File" href="javascript:void(0);"class="redux-opts-upload button-secondary" rel-id="">' . __('Upload', TG_THEME_NAME) . '</a>
			         <a href="javascript:void(0);" class="redux-opts-upload-remove" style="display: none;">' . __('Remove Image', TG_THEME_NAME) . '</a>';
					
					if(!empty($desc)) $option_element .= $desc;
					
					$option_element .='
					</div>
				</div>';
		}
		
		
		
		elseif( $name == 'clients' ){
			$option_element .= '
			<div class="shortcode-dynamic-items clients" id="options-item" data-name="item">
			    
				<div class="label"><label><strong>Columns</strong>:</label></div>
				<div class="content">
					<label for="shortcode-option-button-2-col" class="inline">Two</label>
					<input id="shortcode-option-button-2-col" class="attr" type="radio" value="2" name="client_columns[]" data-attrname="columns">
					<label for="shortcode-option-button-3-col" class="inline">Three</label>
					<input id="shortcode-option-button-3-col" class="attr" type="radio" value="3" name="client_columns[]" data-attrname="columns">
					<label for="shortcode-option-button-4-col" class="inline">Four</label>
					<input id="shortcode-option-button-4-col" class="attr" type="radio" value="4" name="client_columns[]" data-attrname="columns">
					<label for="shortcode-option-button-5-col" class="inline">Five</label>
					<input id="shortcode-option-button-5-col" class="attr" type="radio" value="5" name="client_columns[]" data-attrname="columns">
					<label for="shortcode-option-button-6-col" class="inline">Six</label>
					<input id="shortcode-option-button-6-col" class="attr" type="radio" value="6" name="client_columns[]" data-attrname="columns">
				</div>
				
				<div class="clear"></div>
				
				<div class="label"><label><strong>Turn Into Carousel?</strong>:</label></div>
				<div class="content">
					<input id="shortcode-option-carousel" class="carousel" type="checkbox" name="carousel">
				</div>
				
				<div class="clear"></div>
				
				<div class="shortcode-dynamic-item">
					<div class="label"><label><strong>Client Image: </strong></label></div>
					<div class="content">
					
					 <input type="hidden" id="options-item"  />
			         <img class="redux-opts-screenshot" id="redux-opts-screenshot-" src="" />
			         <a data-update="Select File" data-choose="Choose a File" href="javascript:void(0);"class="redux-opts-upload button-secondary" rel-id="">' . __('Upload', TG_THEME_NAME) . '</a>
			         <a href="javascript:void(0);" class="redux-opts-upload-remove" style="display: none;">' . __('Remove Upload', TG_THEME_NAME) . '</a>
					
					</div>
					<div class="clear"></div>
					<div class="label"><label><strong>Client URL</strong> (optional):</label></div>
					<div class="content"><input class="shortcode-dynamic-item-input" type="text" name="" value="" /></div>
					
				</div>
			</div>
			<a href="#" class="btn gray remove-list-item">'.__('Remove Client', TG_THEME_NAME ). '</a> <a href="#" class="btn gray add-list-item">'.__('Add Client', TG_THEME_NAME ).'</a>';
			
		} 
		elseif( $name == 'featured' ){
			$option_element .= '
			<div class="shortcode-dynamic-items featured" id="options-item" data-name="item">
			    
		
							
				<div class="shortcode-dynamic-item">
				
	
		
					<div class="label"><label><strong>Image: </strong></label></div>
					<div class="content">
					
					 <input type="hidden" id="options-item"  />
			         <img class="redux-opts-screenshot" id="redux-opts-screenshot-" src="" />
			         <a data-update="Select File" data-choose="Choose a File" href="javascript:void(0);"class="redux-opts-upload button-secondary" rel-id="">' . __('Upload', TG_THEME_NAME) . '</a>
			         <a href="javascript:void(0);" class="redux-opts-upload-remove" style="display: none;">' . __('Remove Upload', TG_THEME_NAME) . '</a>
					
					</div>
							
					
					
				</div>
			</div>
			<a href="#" class="btn gray remove-list-item">'.__('Remove Client', TG_THEME_NAME ). '</a> <a href="#" class="btn gray add-list-item">'.__('Add Client', TG_THEME_NAME ).'</a>';
			
		}
		elseif( $type == 'checkbox' ){
			$option_element .= '<div class="label"><label for="' . $name . '"><strong>' . $attr_option['title'] . ': </strong></label></div>    <div class="content"> <input type="checkbox" class="' . $name . '" id="' . $name . '" />' . $desc . '</div> ';
		} 
		
		
		break;
	
	case 'zoom' :
	
			$option_element .= '
			<div class="shortcode-dynamic-items" id="options-item" data-name="zoom">
				<div class="shortcode-dynamic-item">
					<div class="label"><label><strong>Zoom: </strong></label></div>
					<div class="content"><input class="shortcode-dynamic-item-input zoom" data-slider="true"  data-slider-range="0,19" data-slider-step="1" type="text" name=""  value="" /></div>
					<span class="output zoomval"></span>
				</div>
				
			</div>';
		break;
		
	case 'bar' :
	
			$option_element .= '
			<div class="shortcode-dynamic-items" id="options-item" data-name="bar">
				<div class="shortcode-dynamic-item">
					<div class="label"><label><strong>Percent: </strong></label></div>
					<div class="content"><input class="shortcode-dynamic-item-input percent" data-slider="true"  data-slider-range="0,100" data-slider-step="1" type="text" name=""  value="" /></div>
					<span class="output percentval"></span>
				</div>
				
			</div>';
		break;

	case 'textarea':
		$option_element .= '
		<div class="label"><label for="shortcode-option-'.$name.'"><strong>'.$attr_option['title'].': </strong></label></div>
		<div class="content"><textarea data-attrname="'.$name.'"></textarea> ' . $desc . '</div>';
		break;
			
	case 'text':
	default:
	    $option_element .= '
		<div class="label"><label for="shortcode-option-'.$name.'"><strong>'.$attr_option['title'].': </strong></label></div>
		<div class="content"><input class="attr" type="text" data-attrname="'.$name.'" value="" />' . $desc . '</div>';
	    break;
    }
	
	$option_element .= '<div class="clear"></div>';
    
    return $option_element;
}

?>