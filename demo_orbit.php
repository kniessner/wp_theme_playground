<?php
/**
 * Page Template
 *
 *Template Name: Orbit
 *Template Post Type: post, snippets, projects, demos
 */
get_header(); ?>



	<div id="shuttle" style="display:none;">asd
	<div id="outz" style="width:33%;float:left;">aas</div>
	<div id="outx" style="width:33%;float:left;">aas</div>
	<div id="outy" style="width:33%;float:left;">aas</div>

	<div id="outRz" style="width:33%;float:left;">aas</div>
	<div id="outRx" style="width:33%;float:left;">aas</div>
	<div id="outRy" style="width:33%;float:left;">aas</div>
	</div>
	<div id="Orbit"></div>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/_/js/vendor/ColladaLoader.js"></script>
		<script src="http://threejs.org/examples/js/loaders/STLLoader.js"></script>
    	<script src="http://threejs.org/examples/js/controls/PointerLockControls.js"></script>
    	<script src="http://threejs.org/examples/js/controls/OrbitControls.js"></script>

	<script>
	

</script>


 <script src="<?php bloginfo('template_url');?>/_/js/orbit.js"></script>

<?php get_footer(); ?>