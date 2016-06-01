<link href="/wp-content/themes/universal/css/templatemo_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/wp-content/themes/universal/js/jquery-1-4-2.min.js"></script> 
<script type="text/javascript" src="/wp-content/themes/universal/js/jquery-ui.min.js"></script> 
<script type="text/javascript" src="/wp-content/themes/universal/js/showhide.js"></script> 
<link rel="stylesheet" href="/wp-content/themes/universal/css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="/wp-content/themes/universal/js/jquery.mousewheel.js"></script> 
<script type="text/JavaScript" src="/wp-content/themes/universal/js/slimbox2.js"></script> 

<link rel="stylesheet" type="text/css" href="/wp-content/themes/universal/css/ddsmoothmenu.css" />

<script type="text/javascript" src="/wp-content/themes/universal/js/jquery.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/universal/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="/wp-content/themes/universal/js/jquery-1.7.1.min.js" ></script>
<script type="text/javascript" src="/wp-content/themes/universal/js/script.js"></script>



<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script> 
<script type="text/javascript">
var id_menu = new Array('sub_menu_1','sub_menu_2','sub_menu_3');
startList = function allclose() {
	for (i=0; i < id_menu.length; i++){
		document.getElementById(id_menu[i]).style.display = "none";
	}
}
function openMenu(id){
	for (i=0; i < id_menu.length; i++){
		if (id != id_menu[i]){
			document.getElementById(id_menu[i]).style.display = "none";
		}
	}
	if (document.getElementById(id).style.display == "block"){
		document.getElementById(id).style.display = "none";
	}else{
		document.getElementById(id).style.display = "block";
	}
}
window.onload=startList;
</script>
</head>