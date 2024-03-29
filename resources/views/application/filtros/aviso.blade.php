<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
<head>
<title>jQuery Win8 Notify Demos</title>

<link rel="stylesheet" type="text/css" href="css/win8-notify.css">


<style type="text/css">

body
{
margin: 0px 0px 0px 0px;
background-color: white;
color: black;
}

#demo-notif 
{
margin-top: 150px;
text-align: center;
}

#demo-notif button 
{
border: solid 2px white;
padding: 40px;
min-width: 10%;
margin-top: 2%;
margin-left: 1%;
text-align: center;
font-weight: bold;
margin-bottom: 2%;
cursor: pointer;
}

</style>

<style>


.notification{
    display: none;  /* To initially hide the notification .... can be commented if not required.  */
}

/* To dim the background Elements */

.dark-back{
	position: fixed;
	z-index: 2;
	top: 0px;
	opacity: 0.9;
	background-color: black;
	width: 100%;
	height: 100%;
}

/* The Notification body */

.win8-notif-body{
	position: fixed;
	z-index: 3;
	top:30%;
	margin: 0px 0px 0px 0px;
	text-align: left;
	min-height: 20%;
	padding: 40px 20% 40px 20%;
	font-family: sans-serif;

}



.win8-notif-body h3{
	font-size: 1.5em;
}


.win8-notifiy-body p{
	font-size: 1em;
}

.win8-notif-button{
	border: solid 2px white;
	padding: 10px;
	min-width: 10%;
	display: block;
	margin-top: 2%;
	margin-left: 2%;
	float: right;
	font-weight: bold;
	margin-bottom: 2%;
}



/*  Various Colors supported by Windows 8.x */

.black{

	background-color: rgb(39, 37, 37);
	color:white;
}

.black button{
	background-color: rgb(66, 60, 60);
	cursor: pointer;
	color: white;
}
.black .win8-notif-body{
	background-color: rgb(39, 37, 37);
	color:white;
}

.black button:hover{
	background-color: rgb(182, 44, 88);
}

.green{

	background-color: rgb(50, 179, 106);
	color:white;
}

.green button{
	background-color: rgb(50, 179, 106);
	cursor: pointer;
	color: white;
}
.green .win8-notif-body{
	background-color: rgb(50, 179, 106);
	color:white;
}

.green button:hover{
	background-color: rgb(29, 92, 56);
}


.teal{

	background-color: 008299;
	color:white;
}

.teal button{
	background-color: 008299;
	cursor: pointer;
	color: white;
}
.teal .win8-notif-body{
	background-color: 008299;
	color:white;
}

.teal button:hover{
	background-color: 00A0B1;
}

.blue{

	background-color: 	2672EC;
	color:white;
}

.blue button{
	background-color: 	2672EC;
	cursor: pointer;
	color: white;
}
.blue .win8-notif-body{
	background-color: 	2672EC;
	color:white;
}

.blue button:hover{
	background-color: 2E8DEF;
}

.purple{

	background-color: 		8C0095;
	color:white;
}

.purple button{
	background-color: 		8C0095;
	cursor: pointer;
	color: white;
}
.purple .win8-notif-body{
	background-color: 		8C0095;
	color:white;
}

.purple button:hover{
	background-color: A700AE;
}

.dark-purple{

	background-color: 		5133AB;
	color:white;
}

.dark-purple button{
	background-color: 		5133AB;
	cursor: pointer;
	color: white;
}
.dark-purple .win8-notif-body{
	background-color: 		5133AB;
	color:white;
}

.dark-purple button:hover{
	background-color: 643EBF;
}

.pink{

	background-color: 		rgb(244, 114, 208);
	color:white;
}

.pink button{
	background-color: 		rgb(244, 114, 208);
	cursor: pointer;
	color: white;
}
.pink .win8-notif-body{
	background-color: 		rgb(244, 114, 208);
	color:white;
}

.pink button:hover{
	background-color: BF1E4B;
}

.red{

	background-color: 		AC193D;
	color:white;
}

.red button{
	background-color: 		AC193D;
	cursor: pointer;
	color: white;
}
.red .win8-notif-body{
	background-color: 		AC193D;
	color:white;
}

.red button:hover{
	background-color: BF1E4B;
}

.orange{

	background-color: 		D24726;
	color:white;
}

.orange button{
	background-color: 		D24726;
	cursor: pointer;
	color: white;
}
.orange .win8-notif-body{
	background-color: 		D24726;
	color:white;
}

.orange button:hover{
	background-color: DC572E;
}

.amber{

	background-color: 		rgb(240, 163, 10);
	color:white;
}

.amber button{
	background-color: 		rgb(240, 163, 10);
	cursor: pointer;
	color: white;
}
.amber .win8-notif-body{
	background-color: 		rgb(240, 163, 10);
	color:white;
}

.amber button:hover{
	background-color: rgb(227, 200, 0);
}

.yellow{

	background-color: 		rgb(227, 200, 0);
	color:white;
}

.yellow button{
	background-color: 		rgb(227, 200, 0);
	cursor: pointer;
	color: white;
}
.yellow .win8-notif-body{
	background-color: 		rgb(227, 200, 0);
	color:white;
}

.yellow button:hover{
	background-color: rgb(240, 163, 10);
}

.brown{

	background-color: 		rgb(130, 90, 44);
	color:white;
}

.brown button{
	background-color: 		rgb(130, 90, 44);
	cursor: pointer;
	color: white;
}
.brown .win8-notif-body{
	background-color: 		rgb(130, 90, 44);
	color:white;
}

.brown button:hover{
	background-color: rgb(240, 163, 10);
}


</style>




</head>

<body onload="showNotification('blue')">



<div id="notification" class="notification">

<div class="win8-notif-body">
<div class="mid">
<h3>ANTENÇÃO</h3>
<p>Não encontramos nenhuma questão relacionada aos filtros que você usou.</p>
<p>Tente modificar os filtros e liste novamente.</p>
</div>
</div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<script type="text/javascript">
	var def="black";
	function showNotification(color){
				$( "#notification" ).removeClass(def);
				$( "#notification" ).addClass(color);
				def=color;
				$( "#notification" ).fadeIn( "slow" );
				//alert('hi');
				$(".win8-notif-button").click(function(){
		//alert('hi');
		$(".notification").fadeOut("slow");
	});
	
	}
	
</script>

</body>
</html>