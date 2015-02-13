var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
context.strokeStyle = '#000000';
context.strokeRect(400,30,100,50);

var myVideo=document.getElementById("video1"); 

function playPause()
{ 
if (myVideo.paused) 
  myVideo.play(); 
else 
  myVideo.pause(); 
} 