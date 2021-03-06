<?php defined('BASEPATH') OR exit('No direct script access allowed');

$lang['text_title'] 		            = 'Locations';
$lang['text_heading'] 		            = 'Locations';
$lang['text_edit_heading'] 		        = 'Location: %s';
$lang['text_list'] 		                = 'Location List';
$lang['text_tab_general'] 		        = 'Location';
$lang['text_tab_opening_hours'] 		= 'Opening Hours';
$lang['text_tab_order'] 		        = 'Order';
$lang['text_tab_reservation'] 		    = 'Reservation';
$lang['text_tab_delivery'] 		        = 'Delivery';
$lang['text_tab_gallery'] 		        = 'Gallery';
$lang['text_tab_options'] 		        = 'Options';
$lang['text_tab_title_basic'] 		    = 'Basic';
$lang['text_tab_title_address'] 		= 'Address';
$lang['text_filter_search'] 		    = 'Search name, city, state or postcode.';
$lang['text_filter_status'] 		    = 'View all status';
$lang['text_empty'] 		            = 'There are no locations available.';
$lang['text_24_7'] 		                = '24/7';
$lang['text_daily'] 		            = 'Daily';
$lang['text_flexible'] 		            = 'Flexible';
$lang['text_open'] 		                = 'Open';
$lang['text_closed'] 		            = 'Closed';
$lang['text_minutes'] 		            = 'minutes';
$lang['text_circle'] 		            = 'Circle';
$lang['text_shape'] 		            = 'Shape';
$lang['text_delivery_area'] 		    = 'Delivery Areas';
$lang['text_area'] 		                = 'Area ';
$lang['text_leading_zeros'] 		    = '.00';
$lang['text_add_new_area'] 		        = 'Add new area';
$lang['text_options'] 		            = 'Options';
$lang['text_included'] 		            = 'Included';
$lang['text_excluded'] 		            = 'Excluded';

$lang['button_gallery_add_image'] 	    = 'Select';

$lang['column_name'] 		            = 'Name';
$lang['column_city'] 		            = 'City';
$lang['column_state'] 		            = 'State';
$lang['column_postcode'] 		        = 'Postcode';
$lang['column_telephone'] 		        = 'Telephone';
$lang['column_status'] 		            = 'Status';
$lang['column_id'] 		                = 'ID';
$lang['column_table_name'] 		        = 'Name';
$lang['column_table_minimum'] 		    = 'Minimum';
$lang['column_table_capacity'] 		    = 'Capacity';
$lang['column_table_remove'] 		    = 'Remove';
$lang['column_gallery_image_thumbnail'] = 'Thumbnail';
$lang['column_gallery_image_name'] 	    = 'Filename';
$lang['column_gallery_image_alt'] 	    = 'Alt Text';
$lang['column_gallery_image_status']    = 'Status';

$lang['label_name'] 		            = 'Name';
$lang['label_address_1'] 		        = 'Address 1';
$lang['label_address_2'] 		        = 'Address 2';
$lang['label_city'] 		            = 'City';
$lang['label_state'] 		            = 'State';
$lang['label_postcode'] 		        = 'Postcode';
$lang['label_country'] 		            = 'Country';
$lang['label_auto_lat_lng'] 		    = 'Automatically fetch lat/lng';
$lang['label_latitude'] 		        = 'Latitude';
$lang['label_longitude'] 		        = 'Longitude';
$lang['label_email'] 		            = 'Email';
$lang['label_telephone'] 		        = 'Telephone';
$lang['label_description'] 		        = 'Description';
$lang['label_permalink_id'] 		    = 'Permalink ID';
$lang['label_permalink_slug'] 		    = 'Permalink Slug';
$lang['label_image'] 		            = 'Image';
$lang['label_offer_delivery'] 		    = 'Offer Delivery';
$lang['label_offer_collection'] 		= 'Offer Pick-up';
$lang['label_delivery_time'] 		    = 'Delivery Time';
$lang['label_collection_time'] 		    = 'Pick-up Time';
$lang['label_last_order_time'] 		    = 'Last Order Time';
$lang['label_payments'] 		        = 'Payments';
$lang['label_tables'] 		            = 'Tables';
$lang['label_reservation_time_interval']= 'Time Interval';
$lang['label_reservation_stay_time'] 	= 'Stay Time';
$lang['label_status'] 		            = 'Status';
$lang['label_opening_type'] 		    = 'Type';
$lang['label_opening_days'] 		    = 'Days';
$lang['label_opening_hour'] 		    = 'Hours';
$lang['label_close_hour'] 		        = 'Close hour';
$lang['label_open_hour'] 		        = 'Open hour';
$lang['label_opening_status'] 		    = 'Status';
$lang['label_area_shape'] 		        = 'Area Shape';
$lang['label_area_circle'] 		        = 'Area Circle';
$lang['label_area_vertices'] 		    = 'Area Vertices';
$lang['label_area_type'] 		        = 'Area Type';
$lang['label_area_name'] 		        = 'Area Name';
$lang['label_area_charge'] 		        = 'Area Charge';
$lang['label_area_min_amount'] 		    = 'Area Min Amount';
$lang['label_gallery_title'] 		    = 'Title';
$lang['label_gallery_description'] 		= 'Description';
$lang['label_gallery_add_image'] 	    = 'Add Image';
$lang['label_gallery_image_thumbnail'] = 'Thumbnail';
$lang['label_gallery_image_name'] 	    = 'Filename';
$lang['label_gallery_image_alt'] 	    = 'Alt Text';
$lang['label_gallery_image_status']    = 'Status';

$lang['error_less_time'] 		        = 'The %s must be less than Close hour.';
$lang['alert_delivery_area'] 		    = 'Delivery area map will be visible after location has been added.';
$lang['alert_set_default'] 		        = 'Location set as default';

$lang['help_permalink'] 		        = 'Use ONLY alpha-numeric lowercase characters, underscores or dashes and make sure it is unique GLOBALLY.';
$lang['help_image'] 		            = 'Select an image to use as the location logo, this image is displayed in the restaurant list.';
$lang['help_delivery_time'] 		    = 'Set number of minutes an order will be delivered after being placed';
$lang['help_collection_time'] 		    = 'Set number of minutes an order will be ready for pick-up after being placed';
$lang['help_last_order_time'] 		    = 'Set number of minutes before closing time for last order. Leave blank to use closing hour.';
$lang['help_payments'] 		            = 'Select the payment(s) available at this location. Leave blank to use all enabled payments';
$lang['help_reservation_time_interval'] = 'Set the number of minutes between each reservation time, Leave as 0 to use system setting value';
$lang['help_reservation_stay_time'] 	= 'Set in minutes the average time a guest will stay at a table, Leave as 0 to use system setting value';

/* End of file locations_lang.php */
/* Location: ./admin/language/english/locations_lang.php */