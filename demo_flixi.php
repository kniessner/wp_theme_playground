<?php
/**
 * Page Template
 *
 *Template Name: Flix Sound Wire
 *Template Post Type: post, snippets, projects, demos
 */
 
 
get_header(); ?>

	<div id="shuttle" style="display:none;">
	<div id="outz" style="width:33%;float:left;">aas</div>
	<div id="outx" style="width:33%;float:left;">aas</div>
	<div id="outy" style="width:33%;float:left;">aas</div>

	<div id="outRz" style="width:33%;float:left;">aas</div>
	<div id="outRx" style="width:33%;float:left;">aas</div>
	<div id="outRy" style="width:33%;float:left;">aas</div>
	</div>
	<div id="Orbit"></div>
	<script>
	


            var container, camera, scene, renderer;

            init();
            animate();

            function init() {

                container = document.createElement( 'div' );
                document.getElementById('Orbit').appendChild( container );

                // renderer

                renderer = new THREE.WebGLRenderer( { antialias: true } );
                renderer.setSize( window.innerWidth, window.innerHeight );
                container.appendChild( renderer.domElement );

			

                // scene

                scene = new THREE.Scene();

                // camera

                camera = new THREE.PerspectiveCamera( 35, window.innerWidth / window.innerHeight, 1, 10000 );
                camera.position.set( 1, 0.5, 3 );
                scene.add( camera ); // required, because we are adding a light as a child of the camera
				
				controls = new THREE.OrbitControls( camera, renderer.domElement );
				controls.enableDamping = true;
				controls.dampingFactor = 0.25;
				controls.enableZoom = true;

                // lights

                scene.add( new THREE.AmbientLight( 0x2f2f22 ) );

                var light = new THREE.PointLight( 0xffffff, 0.9 );
                camera.add( light );

                // object

                var loader = new THREE.STLLoader();
                loader.load( '<?php bloginfo('template_url');?>/_/flixound.stl', function ( geometry ) {

                    var material = new THREE.MeshPhongMaterial( { color: 'tomato' , wireframe:true} );

                    var mesh = new THREE.Mesh( geometry, material );

                    scene.add( mesh );
                   	
					mesh.rotation.z = 4;
                 //  mesh.rotation.y = -1.5;
				   	mesh.rotation.x = -1.55;
				   	mesh.position.y = -0.35;


                } );

                window.addEventListener( 'resize', onWindowResize, false );

            }
            

            function onWindowResize() {

                camera.aspect = window.innerWidth / window.innerHeight;

                camera.updateProjectionMatrix();

                renderer.setSize( window.innerWidth, window.innerHeight );

            }

            function animate() {
                requestAnimationFrame( animate );

                render();

            }

            function render() {
				 	
				   	
				   	
		
                var timer = Date.now() * 0.0005;

             //   camera.position.x = Math.cos( timer ) * 5;
           //     camera.position.z = Math.sin( timer ) * 5;

                camera.lookAt( scene.position );

                renderer.render( scene, camera );

            }


</script>

<!--
 <script src="<?php bloginfo('template_url');?>/_/js/orbit.js"></script>
-->

<?php get_footer(); ?>