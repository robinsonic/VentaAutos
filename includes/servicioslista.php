  <script type="text/javascript">
function showmap()
{
  
  var map=document.getElementById('map');
  map.width="300px";
  map.height="300px";
  var video=document.getElementById('video');
  video.width="0px";
  video.height="0px";
  
}
function showvideo()
{
  
  var video=document.getElementById('video');
  video.width="300px";
  video.height="300px";
  var map=document.getElementById('map');
  map.width="0px";
  map.height="0px";
  
}
</script>
 <?php
 echo
 "
<h2>Encuentra tu Taller mas Cercano</h2>
<br>


			
				
				<a href=\"http://www.renault.es/posventa/?utm_source=google&utm_medium=cpc&utm_campaign=AfterSales+Renault+Brand\" target=_blank><h3>Renault Donostia</h3></a>
				<p>Dirección: Igeltegi Kalea 1 Bajo <br>Población: San sebastián <br>Distancia: 1.7 Km <br>Horario: Lunes a Viernes de 9h15 a 13h<a href=\"http://www.buscadordetalleres.com/search/workshop/address/donostia\" target=_blank>Ver más...</a></p>
			
			
		   <input type=\"button\" value=\"map\" onclick=showmap()  />
		   <input type=\"button\" value=\"video\" onclick=showvideo()  />
			
			<iframe id=\"map\" src=\"https://www.google.com/maps/d/embed?mid=zr7yC93aAn1g.kik4jT4_KVtw\"> </iframe>
			
			<iframe id=\"video\" src=\"https://www.youtube.com/embed/1DuXpDWnA7A\" frameborder=\"0\" ></iframe>
		
	<br>	
	<p>&nbsp;</p>
	<a href=\"http://talleresusurbil.com\" target=_blank><h3>TALLERES USURBIL</h3></a>
				<p>Dirección: Pº ZUMABURU, 18 <br>Población: Lasarte-oria <br>Distancia: 6.6 Km <br>Horario: De 9:00 a 13:00 De 15:00 a 19:00<a href=\"http://www.buscadordetalleres.com/search/workshop/address/donostia\" target=_blank>Ver más...</a></p>
			
			
		
			<iframe id=\"map\" src=\"https://www.google.com/maps/d/embed?mid=zr7yC93aAn1g.kik4jT4_KVtw\"> </iframe>
			
		
	<br>	
	";
	?>