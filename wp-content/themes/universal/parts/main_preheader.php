<link href="/wp-content/themes/universal/css/templatemo_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/wp-content/themes/universal/js/jquery-1-4-2.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/universal/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/universal/js/showhide.js"></script>
<script type="text/JavaScript" src="/wp-content/themes/universal/js/jquery.mousewheel.js"></script>

<link rel="stylesheet" type="text/css" href="/wp-content/themes/universal/css/ddsmoothmenu.css" />

<script type="text/javascript" src="/wp-content/themes/universal/js/jquery.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/universal/js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script> 

<!-- Load the CloudCarousel JavaScript file -->
<script type="text/JavaScript" src="/wp-content/themes/universal/js/cloud-carousel.1.0.5.js"></script>
 
<script type="text/javascript">
$(document).ready(function(){
						   
	// This initialises carousels on the container elements specified, in this case, carousel1.
	$("#carousel1").CloudCarousel(		
		{			
			reflHeight: 40,
			reflGap:2,
			titleBox: $('#da-vinci-title'),
			altBox: $('#da-vinci-alt'),
			buttonLeft: $('#slider-left-but'),
			buttonRight: $('#slider-right-but'),
			yRadius:30,
			xPos: 480,
			yPos: 32,
			speed:0.15,
            //autoRotate: 'yes',
            //autoRotateDelay: 3000,
		}
	);
});
 
</script>

</head>