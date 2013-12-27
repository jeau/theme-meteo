</div><!-- end content -->

<footer>
	<?php if ( $footerText = get_theme_option('Footer Text') ): ?>
        	<div id="custom-footer-text">
           		<p><?php echo $footerText; ?></p>
        	</div>
        <?php endif; ?>
	<?php if ( $footerCol1 = get_theme_option('Footer Col1') ): ?>
        	<div class="col1">
           		<?php echo $footerCol1; ?>
        	</div>
        <?php endif; ?>
	<?php if ( $footerCol2 = get_theme_option('Footer Col2') ): ?>
        	<div class="col2">
           		<?php echo $footerCol2; ?>
        	</div>
        <?php endif; ?>
	<?php if ( $footerCol3 = get_theme_option('Footer Col3') ): ?>
        	<div class="col3">
           		<?php echo $footerCol3; ?>
        	</div>
        <?php endif; ?>

	<p><?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')) echo $copyright . ". " ; echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p>
        
    <?php fire_plugin_hook('public_footer'); ?>
    
</footer>

</div><!--end wrap-->

<script type="text/javascript">
jQuery(document).ready(function () {
    Seasons.showAdvancedForm();
    Seasons.mobileSelectNav();
});
</script>

</body>

</html>
