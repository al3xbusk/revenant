<div class="right-sidebar" id="right-sidebar">

	<?php
		if ( is_active_sidebar(1) ) 
		{
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : endif; 
		} 
		else 
		{ ?>
			<script>
			var sidebar = document.getElementById('right-sidebar');
			sidebar.style.display = "none";
			</script>		<?php
		};
	?>

</div>
