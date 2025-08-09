<?php 
	add_action( 'cmb2_admin_init', 'cummtiy' );
	function cummtiy(){
		$first_option =new_cmb2_box( array(
				'title' => 'first_exmple_metabox ',
				'id' => 'zi_cmmiti_id',
				'object_types' => array('cumuti')
			
			)
			);
			
			$first_option-> add_field(array(
				'name'   => 'কমিটির নাম',
				'id'     => 'cum_name',
				'type'   => 'text',
				
			
			
			)
);
		$first_option-> add_field(array(
				'name'   => 'কমিটির পদবি',
				'id'     => 'Sum_Surname',
				'type'   => 'text',
				
			
			
			)
);
			$first_option-> add_field(array(
				'name'   => 'কমিটির মোবাইল',
				'id'     => 'cum_mob',
				'type'   => 'text',
				
			
			
			));
			
		
	}



 ?>