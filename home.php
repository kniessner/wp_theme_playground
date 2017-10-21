<?php
/**
 * Page Template
 *
 *Template Name: Startseite
 */
get_header(); ?>
<div class="container">
		<div class="col-md-6 introText">

<!--
			<p>
			Lorem ipsum dolor sit amet, zu lesen gibts hier nichts. Maecenas rutrum elit nec ante condimentum gravida. Pellentesque augue risus, egestas eu condimentum in, congue non enim. Phasellus elementum sodales neque, in suscipit erat ultricies at. In non nulla ante. Nullam eu imperdiet nisl. Nam at elementum augue. Proin non pretium tellus. Proin blandit convallis lacinia. Sed porttitor tempus justo in venenatis. Etiam fringilla est nisl, ut condimentum sapien sollicitudin a. Cras dui lacus, scelerisque eget imperdiet at, feugiat nec lacus. Nunc id sem maximus, varius ante et, pretium leo. 
			</p>	 <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Suche </button>
      </span>
      <input type="text" class="form-control" placeholder="...">
    </div>
    -->
		</div>
		
		<div class="col-md-3 actionCall">
	<!--	<div class="panel panel-default">
  <div class="panel-heading">Panel heading without title</div>
  <div class="panel-body">
    Panel content
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">Panel heading without title</div>
  <div class="panel-body">
    Panel content
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">Panel heading without title</div>
  <div class="panel-body">
    Panel content
  </div>
</div>

		</div>-->
		
</div>

<div id="Orbit"></div>
<div class="background " >
<div class=" grad" >	
</div>
</div>
<script>
/*=================================================
	Main Settings - Camera etc.
=================================================*/			
				
				
				
var scene = new THREE.Scene();
var camera = new THREE.PerspectiveCamera( 60, (window.innerWidth-15) / window.innerHeight, 1, 1000 );
var renderer = new THREE.WebGLRenderer();
var raycaster;
		
			
renderer.setSize( window.innerWidth-15, (window.innerHeight) );
document.getElementById('Orbit').appendChild( renderer.domElement );
			



camera.position.z = 520;
camera.position.x = -0;


	

/*=================================================
	MAIN ELEMENTS
=================================================*/			
/*				
var geometry = new THREE.SphereGeometry( 105, 302, 302 );
//var geometry = new THREE.TorusGeometry( 122, 90 , 20, 300, 100);
var material = new THREE.MeshLambertMaterial( { color:  "rgba(35, 138, 190,0.1)", morphTargets:true, wireframe: false} );
var CenterCore = new THREE.Mesh( geometry, material );
CenterCore.position.z = -16;

scene.add( CenterCore );

var geometry = new THREE.TorusGeometry( 122, 102 , 15, 15, 20);
var material = new THREE.MeshLambertMaterial( { color:  "rgba(35, 138, 190,0.1)", morphTargets:true, wireframe: false} );
var CenterWire = new THREE.Mesh( geometry, material );
CenterWire.position.z = -16;

//scene.add( CenterWire )




var geometry = new THREE.SphereGeometry( 105, 302, 302 );
//var geometry = new THREE.TorusGeometry( 122, 90 , 20, 300, 100);
var material = new THREE.MeshLambertMaterial( { color:  0xF02622, morphTargets:true, wireframe: false} );
var redPlanet = new THREE.Mesh( geometry, material );
redPlanet.position.x = 506;

scene.add( redPlanet )

var sphere = new THREE.Mesh(
  new THREE.SphereGeometry( 15, 32, 302 ),
  new THREE.MeshBasicMaterial({
    map: THREE.ImageUtils.loadTexture('http://kniessner.com/comPlex/wp-content/themes/complex/_/img/logo.png')

  })
);
scene.add(sphere);



*/




var geometry = new THREE.TorusGeometry( 202, 15, 10, 150);
var material = new THREE.MeshLambertMaterial( { color:  "rgba(4, 4, 4,1)" , morphTargets:true, wireframe: false} );
var RingCore = new THREE.Mesh( geometry, material );
scene.add( RingCore )

var geometry = new THREE.TorusGeometry( 202,20, 10, 100);
var material = new THREE.MeshLambertMaterial( { color:  "rgba(94, 236, 255,0.4)" , morphTargets:true, wireframe: true} );
var RingWire = new THREE.Mesh( geometry, material );
scene.add( RingWire );
RingCore.position.z = 150;
RingWire.position.z = 150;
RingCore.position.y = 150;
RingWire.position.y = 150;
RingCore.position.x = -150;
RingWire.position.x = -150;



/*=================================================
	LIGHTS
=================================================*/



		 scene.add( new THREE.AmbientLight( 0x222222 ) );
                      
                      
                      
    	light = new THREE.DirectionalLight( 0x222222 );
				light.position.set( 1, 1, 1 );
				scene.add( light );
				light = new THREE.DirectionalLight( 'tomato' );
				light.position.set( -200, -200, -200 );
				scene.add( light );
				light = new THREE.AmbientLight( 0x222222 );
				scene.add( light );
				
	    var hemisphereLight = new THREE.HemisphereLight(0xaaaaaa,0x000000, .9);
	    scene.add(hemisphereLight);
		
	
/*=================================================
	RANDOM ELEMENTS
=================================================*/			
				

	var geometry = new THREE.SphereGeometry( 1, 32, 32 );
//var geometry = new THREE.TorusGeometry( 122, 90 , 20, 300, 100)
var material = new THREE.MeshLambertMaterial( { color:  0xFDFDFDF, morphTargets:true, wireframe: false} );


    	for ( var i = 0; i < 200; i ++ ) {
	  		   
				
					
					var cube = new THREE.Mesh( geometry, material );
					cube.position.x = ( Math.random() - 0.5 ) * 1200;
					cube.position.y = ( Math.random() - 0.5 ) * 1200;
					cube.position.z = ( Math.random() - 0.5 ) * 1200;
					cube.updateMatrix();
					cube.matrixAutoUpdate = false;
					scene.add( cube );
		}
		


		this.light = new THREE.PointLight();
        this.light.position.set(0, 0,0);
        this.scene.add(this.light);
/*        
        
        jQuery(document).keydown(function(e) {
		  if(e.which == 87) {
		    camera.position.z -= 100;

		  }
		});
		
		  jQuery(document).keydown(function(e) {
		  if(e.which ==  83) {
		    camera.position.z += 100;

		  }
		});
		
			  jQuery(document).keydown(function(e) {
		  if(e.which ==  65) {
		    camera.position.y += 100;

		  }
		});
		
   
var material = new THREE.MeshBasicMaterial({ wireframe: true });
var geometry = new THREE.PlaneGeometry();
var planeMesh= new THREE.Mesh( geometry, material );
// add it to the WebGL scene
scene.add(planeMesh);
*/
/*=================================================
	Floor Example 
=================================================*/
        
        	/*
        		geometry = new THREE.PlaneGeometry( 2000, 2000, 100, 100 );
				geometry.rotateX( - Math.PI / 2 );
				for ( var i = 0, l = geometry.vertices.length; i < l; i ++ ) {
					var vertex = geometry.vertices[ i ];
					vertex.x += Math.random() * 20 - 10;
					vertex.y += Math.random() * 2;
					vertex.z += Math.random() * 20 - 10;
				}
				
				
				for ( var i = 0, l = geometry.faces.length; i < l; i ++ ) {
					var face = geometry.faces[ i ];
					face.vertexColors[ 0 ] = new THREE.Color().setHSL( Math.random() * 0.3 + 0.5, 0.75, Math.random() * 0.25 + 0.75 );
					face.vertexColors[ 1 ] = new THREE.Color().setHSL( Math.random() * 0.3 + 0.5, 0.75, Math.random() * 0.25 + 0.75 );
					face.vertexColors[ 2 ] = new THREE.Color().setHSL( Math.random() * 0.3 + 0.5, 0.75, Math.random() * 0.25 + 0.75 );
				}
				material = new THREE.MeshBasicMaterial( { vertexColors: THREE.VertexColors } );
				mesh = new THREE.Mesh( geometry, material );
				scene.add( mesh );*/
/*=================================================
	RENDER 
=================================================*/

var render = function () { 
	
		
		
		RingWire.rotation.x += 0.006;
 		RingCore.rotation.x += 0.006;
 		
 		//RingWire.scale.set( 1, 1, 1)
 		
 		RingWire.rotation.y += 0.003;
 		RingCore.rotation.y += 0.003;
 		RingWire.rotation.z += 0.0006;
 		RingCore.rotation.z += 0.0006;
 		
 		
 	//	CenterCore.rotation.z -= 0.008;
 	//	CenterWire.rotation.z -= 0.008;
 		
 		//camera.rotation.y -= 0.001;
 		camera.rotation.z -= 0.0006;
 		
        requestAnimationFrame(render); 
        renderer.render(scene, camera); 
        
        
      
}; 
      
render();  



		</script>


<?php get_footer(); ?>