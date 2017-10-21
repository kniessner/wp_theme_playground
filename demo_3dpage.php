<?php
/**
 * Page Template
 *
 *Template Name: 3D Demo
 *Template Post Type: post, snippets, projects, demos
 */
get_header(); ?>



	<div id="shuttle" style="display:none;">
		Test
	<div id="outz" style="width:33%;float:left;">aas</div>
	<div id="outx" style="width:33%;float:left;">aas</div>
	<div id="outy" style="width:33%;float:left;">aas</div>

	<div id="outRz" style="width:33%;float:left;">aas</div>
	<div id="outRx" style="width:33%;float:left;">aas</div>
	<div id="outRy" style="width:33%;float:left;">aas</div>
	</div>

	<div id="Orbit"></div>
	
	

		    	<script src="http://threejs.org/examples/js/renderers/CanvasRenderer.js"></script>
		    	<script src="http://threejs.org/examples/js/renderers/Projector.js"></script>
		    	<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
		    	<script src="http://threejs.org/examples/js/libs/tween.min.js"></script>
		
		
<script>


		
</script>
			


		
		
		<script>
			var container, stats;
			var camera, scene, renderer;
			
			
			var raycaster;
			var mouse;
			init();
			animate();
			function init() {
			}
			function onWindowResize() {
			}
			
			function onDocumentTouchStart( event ) {
				
			}	
			function onDocumentMouseDown( event ) {
			}
			//
			function animate() {

			}
			function render() {
			}
		</script>



<?php get_footer(); ?>