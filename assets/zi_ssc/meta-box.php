<?php 
	add_action( 'cmb2_admin_init', 'ssc_option' );
	function ssc_option(){
	$first_option =new_cmb2_box( array(
				'title' => 'first_exmple_metabox ',
				'id' => 'zi_ssc_r_sheet',
				'object_types' => array('ssc_info')
			
			)
			);
			
			$first_option-> add_field(array(
				'name'   => 'সন',
				'id'     => 'year',
				'type'   => 'text',
				
			
			
			)
);
			$first_option-> add_field(array(
				'name'   => 'মোট পরীক্ষার্থী ছাত্র ',
				'id'     => 'total_b_s',
				'type'   => 'text',
				
			
			
			));
			$first_option-> add_field(array(
				'name'   => 'মোট পরীক্ষার্থী ছাত্রী ',
				'id'     => 'total_g_s',
				'type'   => 'text',
				
			
			
			));
			$first_option-> add_field(array(
				'name'   => 'মোট পাশ ছাত্র',
				'id'     => 't_b_s',
				'type'   => 'text',
				
			
			
			));
			$first_option-> add_field(array(
				'name'   => 'মোট পাশ ছাত্রী ',
				'id'     => 't_g_s',
				'type'   => 'text',
				
			
			
			));
			$first_option-> add_field(array(
				'name'   => 'জিপিএ ৫.০০ ছাত্র',
				'id'     => 'gpa_b_s',
				'type'   => 'text',
				
			
			
			));
			$first_option-> add_field(array(
				'name'   => 'জিপিএ ৫.০০ ছাত্র ',
				'id'     => 'gpa_g_s',
				'type'   => 'text',
				
			
			
			));
			
			
		
	}



 ?>