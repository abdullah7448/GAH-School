<?php 
	add_action( 'cmb2_admin_init', 'zia_cl_9' );
	function zia_cl_9(){
		$first_option =new_cmb2_box( array(
				'title' => 'first_exmple_metabox ',
				'id' => 'zi_show_9',
				'object_types' => array('nine')
			
			)
			);
			
			$first_option-> add_field(array(
				'name'   => 'ছাত্র ছাত্রীর নাম',
				'id'     => 'name',
				'type'   => 'text',
				
			
			
			)
);
			$first_option-> add_field(array(
				'name'   => 'ছত্র ছাত্রীর রোল ',
				'id'     => 'roll',
				'type'   => 'text',
				
			
			
			));
			$first_option-> add_field(array(
				'name'   => 'সেশন ',
				'id'     => 'year',
				'type'   => 'text',
				
			
			
			));
			$first_option-> add_field(array(
				'name'   => 'শ্রেণী ',
				'id'     => 'class',
				'type'   => 'text',
				
			
			
			));
			
			
		
	}



 ?>