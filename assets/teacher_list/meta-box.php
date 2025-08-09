<?php 
	add_action( 'cmb2_admin_init', 'zi_teacher' );
	function zi_teacher(){
		$first_option =new_cmb2_box( array(
				'title' => 'first_exmple_metabox ',
				'id' => 'zia_teacher_id',
				'object_types' => array('teacher_l')
			
			)
			);
			
			$first_option-> add_field(array(
				'name'   => 'শিক্ষকের নাম',
				'id'     => 'name',
				'type'   => 'text',
				
			
			
			)
                        

);
 $first_option-> add_field(array(
				'name'   => 'মোবাই নাম্বার ',
				'id'     => 't_mob',
				'type'   => 'text',
				
			
			
			));

			$first_option-> add_field(array(
				'name'   => 'শিক্ষকের পদবি ',
				'id'     => 'Surname',
				'type'   => 'text',
				
			
			
			));
                   
			
		
	}



 ?>