<HTML>
<head>

<SCRIPT language=JavaScript>
<!--
function MM_swapImgRestore() {
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() {
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) {
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document); return x;
}

function MM_swapImage() {
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</SCRIPT>

<title><?php echo 'Venta Autos';?> Administración</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../estilo/style.css" rel="stylesheet" type="text/css">
</head>

<LINK href="../estilo/style_add.css" rel=stylesheet>
<BODY onLoad="MM_preloadImages('../images/home_on.gif','../images/logout_on.gif')">

<TABLE borderColor=#d4d9db cellSpacing=2 cellPadding=0 width=95%  bgColor=#ffffff align=center border=1><!--start of main table-->

<TR vAlign=top>
<TD>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0><!--start of nav table-->

<TR>
<TD colSpan=3 height=2>
<TABLE cellSpacing=0 cellPadding=0 width="100%" background="../images/top_01_bg.gif" border=0><!--start of nav links-->

<TR>
<TD><IMG height=41 src="../images/top_01_1.gif" width=637></TD>
<TD align=right width=44><A onMouseOver="MM_swapImage('image01','','../images/home_on.gif',1)" onmouseout=MM_swapImgRestore() href="../index.php"><IMG height=41 src="../images/home_off.gif" width=44 border=0 name=image01></A></TD>
<TD align=right width=44><A onMouseOver="MM_swapImage('image02','','../images/logout_on.gif',1)" onmouseout=MM_swapImgRestore()
href="index.php?option=logout"><IMG height=41 src="../images/logout_off.gif" width=44 border=0 name=image02></A></TD></TR>
</TABLE><!--end of nav links-->
</TD></TR>

<TR>
<TD colSpan=3 height=47>
<TABLE cellSpacing=0 cellPadding=0 width="100%" background="../images/top_bg.gif" border=0><!--start of collage-->
<TR>
<TD noWrap align="left"><IMG src="../images/top1.gif"></TD>
<TD noWrap align="left"><IMG src="../images/top2.gif"></TD>
<TD noWrap align="left"><IMG src="../images/top3.gif"></TD>
<TD noWrap align="left"><IMG src="../images/top4.gif"></TD>
<TD noWrap width="100%"><IMG src="../images/blank.gif"></TD>
<TD noWrap align="right"><IMG src="../images/top5.gif"></TD>
</tr>
</TABLE><!--end of collage-->
</TD></TR>

<TR>
<TD colSpan=3 height=2>
<TABLE cellSpacing=0 cellPadding=0 width="100%" background="../images/top_03_bg.gif" border=0><!--start of cpanel-->
<TR>
<!-- <TD noWrap align=left width=135><IMG height=26 src="images/top_03_1.gif" width=125></TD> -->
<TD align=right><IMG height=26 src="../images/top_03_2.gif" width=600></TD></TR>
</TABLE><!--end of cpanel-->
</TD></TR>

<!---------------------------------------TOP ENDS HERE--------------------------------->

<TR vAlign=top>
<TD colSpan=3>
<TABLE cellSpacing=10 cellPadding=0 width="100%" border=0><!--start of body table-->


<TR vAlign=top>
<TD align=left>
<TABLE width="50%" align=center border=0><!--start of login table-->
<form name="form1" method="post" action="index.php">
<input name="adminloginok" type="hidden" id="adminloginok" value="Login">

<TR><TD colspan=2 align=center><STRONG><?php /*if($mesg!=""){echo $mesg;}else{*/echo "PLEASE LOGIN TO THE ADMIN AREA";/*}*/ ?></STRONG></TD></TR><br>

<TR><TD >&nbsp;</td></TR>

<TR>
<TD width=40%><DIV align=center>Login ID</DIV></TD>
<TD><input name="usern" type="text" id="usern" size="20"></TD>
</TR>

<TR>
<TD><DIV align=center>Password</DIV></TD>
<TD><input name="pass" type="password" id="pass" size="20"></TD>
</TR>

<TR><TD >&nbsp;</td></TR>

<TR>
<TD>&nbsp;</TD>
<TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT type=submit value=Login name=Submit></TD>
</TR>

<TR><TD >&nbsp;</td></TR>

</FORM>
</TABLE><!--end of login table-->
</TD></TR>


</TABLE><!--end of body table-->
</TD></TR>



<!--------------------------bottom STARTS HERE---------------------------------------->
<TR align=middle>
<TD colSpan=3 height=2>
<TABLE cellSpacing=0 cellPadding=0 width="100%" background="../images/bottom_bg.gif" border=0><!--start of bottom table-->
<TR align=middle>
<TD align=center height=23><B></B>
Copyright © 2014 <a href="http://www.robixon.com" target=_blank>robixon.com</a> 

</td></tR>
</TABLE><!--end of bottom table-->
</TD></TR>


</TABLE><!--end of nav table-->
</TD></TR>


</table><!--end of main table-->
</BODY>
</HTML>
