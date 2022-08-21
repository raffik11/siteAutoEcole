<link rel="icon" type="image/gif" href="image/icone.gif" >
<link rel="stylesheet" type="text/css" href="style_accueil.css" >
<!--menu admin-->
    <script src="menu_admin/jquery-1.2.1.min.js" type="text/javascript"></script>
	<script src="menu_admin/menu.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="menu_admin/style.css" />
	<!--[if lt IE 8]>
   <style type="text/css">
   li a {display:inline-block;}
   li a {display:block;}
   </style>
   <![endif]-->

<!--fin menu admin-->



<script type="text/javascript"> 
 
</script>

<SCRIPT>
function clock() {
    var days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
    var months = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];
    localTime     = new Date();
    date      = localTime.getDate();
    day       = localTime.getDay();
    full_year = localTime.getFullYear();
    hours     = localTime.getHours();
    minutes   = localTime.getMinutes();
    month     = localTime.getMonth();
    seconds   = localTime.getSeconds();
    value     = "";
    if (hours < 10) {
        hours = "0" + hours;
    }
    if (minutes < 10) {
        minutes = "0" + minutes;
    }
    if (seconds < 10) {
        seconds = "0" + seconds;
    }
    value =     days[day] + " " + date + " " + months[month] + " " + full_year;
   
    document.clock.date.value = value ;
   
    setTimeout(clock,1000);
}
</SCRIPT>

<STYLE TYPE="text/css">
form{
    display:inline;
}
.styledate {border-width: 0;background-color:black; font-size:18px;color: white;}

</STYLE>


</head>
<body onLoad="clock(); runSlideShow();"> 
 


 <div class="div" ><!-- Ici on mettra la bannière -->
 
<table  border="0" cellpadding="0" cellspacing="0"> 
 
<tr>
 
<td id="VU" >
 
<a href="admin_accueil.php" title="Accueil administrateur"><img src="Image/images.jpg" width="982" height="322"></a></td>
 
</tr>
 
</table> </div> 
 
 <div id="menu1">
 
<center>
 <form name="clock" onSubmit="0">
<input type="text" name="date"  readonly="true" class="styledate">
</form>
</center>
   
 </div>
