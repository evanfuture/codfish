<?php
/**
 * Template Name: Resume Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<div class="sublime">
	<p class="php-tag line">&lsaquo;?php</p>
	<div class="newline line"></div>
	<div class="newline line"></div>

	<h1 class="name line"><?php the_field('name');?></h1>
	<p class="contact"><span class="tel"><a href="tel:<?php the_field('phone');?>" alt="phone"><?php the_field('phone');?></a></span> <span class="email"><a href="mailto:<?php the_field('email');?>" alt="email"><?php the_field('email');?></a></span></p>

	<h2 class="title line"><?php the_field('title');?></h2>
	<p class="online"><span class="website"><a href="<?php the_field('website');?>" alt="website"><?php the_field('website');?></a></span> <span class="linkedin"><a href="<?php the_field('linkedin');?>" alt="linkedin"><?php the_field('linkedin');?></a></span></p>

	<div class="newline line"></div>
	<div class="comment line"></div>
	<div class="bio line"><?php the_field('bio');?></div>
	<div class="comment line"></div>
	<div class="newline line"></div>

	<?php if( have_rows('jobs') ): ?>
		<h3 class="section line experience">Experience</h3>
		<div class="newline line"></div>
		<?php while ( have_rows('jobs') ) : the_row(); ?>
			<h4 class="job_title line"><?php the_sub_field('job_title');?></h4>
			<p class="job_details"><span class="job_company"><?php the_sub_field('job_company');?></span> <span class="job_years"><?php the_sub_field('job_years');?></span></p>
			<div class="job">
				<div class="newline line"></div>
				<div class="job_description line"><?php the_sub_field('job_description');?></div>
				<?php $portfolio_description = get_sub_field('portfolio_description');?>
				<?php if( have_rows('portfolio') ): ?>
					<p class="job_portfolio line"><?php echo $portfolio_description; ?> = <span class="yellow">array</span><span class="white">(</span></p>
					<div class="job_items">
						<?php while ( have_rows('portfolio') ) : the_row(); ?>
							<p class="<?php the_sub_field('item_type');?> line"><a href="<?php the_sub_field('item_url');?>" alt="item"><?php the_sub_field('item_name');?></a><span class="white">,</span></p>
						<?php endwhile;?>
					</div>
					<p class="white line">)</p>
				<?php else: ?>
					<div class="newline line"></div>
				<?php endif;?>
			</div>
		<?php endwhile; ?>
	<?php endif;?>

	<?php if( have_rows('degrees') ): ?>
		<h3 class="section line education">Education</h3>
		<div class="newline line"></div>
		<?php while ( have_rows('degrees') ) : the_row(); ?>
			<p class="line education_title"><?php the_sub_field('degree_title');?></p>
			<p class="line education_details"><?php the_sub_field('degree_location');?> <span class="education_years"><?php the_sub_field('degree_years');?></span></p>
			<div class="newline line"></div>
		<?php endwhile; ?>
	<?php endif;?>

	<?php if( have_rows('skills') ): ?>
		<h3 class="section line skills">Skills</h3>
		<?php $skilled = array(); $learning = array();?>
		<?php while ( have_rows('skills') ) : the_row(); ?>
			<?php if (get_sub_field('skill_level') == 'learning'){
				$learning[] = get_sub_field('skill_name');
			} else {
				$skilled[] = get_sub_field('skill_name');
			}?>
		<?php endwhile;?>
		<p class="line skills_details"><span class="yellow">array</span><span class="white">(</span> <?php echo implode('<span class="white">,</span> ', $skilled);?><span class="white">,</span> <span class="light-grey studying"><?php echo implode(', ', $learning);?></span><span class="white">)</span></p>
	<?php endif;?>
	<p class="php-tag line">?&rsaquo;</p>
</div>
<?php endwhile; ?>
