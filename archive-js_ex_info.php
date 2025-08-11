<?php get_header();  ?>

 <div id="jsc_result">
	<div class="container">
		<h2>জে এস সি (JSC) ফলাফল, ২০০১ থেকে ২০১৬ পর্যন্ত</h2>
		
	    <div class="markshit table-responsive">
			<table class="table">
				<tr>
					<td> সন</td>
					<td colspan="2">মোট পরীক্ষার্থী</td>
					<td>মোট</td>
					<td colspan="2">পাশ মোট</td>
					<td>মোট </td>
					<td colspan="2">জিপিএ ৫.০০ </td>
					<td>মোট</td>
                                        <td>পাশের হাড় </td>
					
				</tr>
				<tr>
					
					<td></td>
					<td>ছাত্র</td>
					<td>ছাত্রী</td>
					<td></td>
					<td>ছাত্র</td>
					<td>ছাত্রী</td>
					<td></td>
					<td>ছাত্র</td>
					<td>ছাত্রী</td>
					<td></td>
                                        <td></td>
					
					
				</tr>
				
					<?php  
						$zia = new WP_Query(array(
							'post_type' => 'js_ex_info',
							'posts_per_page' => -1
						
						));
					
					?>
					<?php while($zia -> have_posts()) : $zia ->the_post(); ?>
				<tr>
					<td><?php echo get_post_meta(get_the_ID($zia->ID),'year', true); ?></td>
					<td><?php echo get_post_meta(get_the_ID($zia->ID),'total_b_s', true); ?></td>
					<td><?php echo get_post_meta(get_the_ID($zia->ID),'total_g_s', true); ?></td>
					<td><?php $to_result = get_post_meta(get_the_ID($zia->ID),'total_b_s', true) + get_post_meta(get_the_ID($zia->ID),'total_g_s', true); echo $to_result; ?></td>
					<td><?php echo get_post_meta(get_the_ID($zia->ID),'t_b_s', true); ?></td>
					<td><?php echo get_post_meta(get_the_ID($zia->ID),'t_g_s', true); ?></td>
					<td><?php $tp_result = get_post_meta(get_the_ID($zia->ID),'t_b_s', true) + get_post_meta(get_the_ID($zia->ID),'t_g_s', true); echo $tp_result; ?></td>
					<td><?php echo get_post_meta(get_the_ID($zia->ID),'gpa_b_s', true); ?></td>
					<td><?php echo get_post_meta(get_the_ID($zia->ID),'gpa_g_s', true); ?></td>
					<td><?php $CGPA= get_post_meta(get_the_ID($zia->ID),'gpa_b_s', true) + get_post_meta(get_the_ID($zia->ID),'gpa_g_s', true); echo $CGPA; ?></td>
                                        <td><?php $persent=$tp_result/$to_result; $percent_friendly = number_format( $persent * 100, 2 ) . '%'; echo $percent_friendly;?></td>
				</tr>
				
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</table>
		</div>
	</div>
 </div>
 
 
<?php get_footer(); ?>