<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */
?>

<section class="blog-page">
<aside class="right-aside">
<!--	<div class="container wrap"> this is not supposed to be in sidebar -->

		<div class="widget"><?php if (is_active_sidebar('sidebar-1')): ?>



<ul>
				<?php dynamic_sidebar('sidebar-1'); ?>
</ul>

<!-- look at this for how to class a special nav menu -->

<!-- commenting out social media widget
<div class="menu-social-links-container">

<div class="widget">

			<h2 class="widget-title">Follow Me</h2>
			<?php wp_nav_menu(array('theme_location' => 'social-menu')); ?>

</div>
</div>
-->

		</div>

<!--		</div> -->  <!-- #primary-sidebar -->
	<?php endif; ?>

</aside>
</section>
