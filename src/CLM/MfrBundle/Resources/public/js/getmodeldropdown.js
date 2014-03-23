function showModel(str)
{
if (str=="")
  {
  document.getElementById("model").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("model").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getModel.php?q="+str,true);
xmlhttp.send();
}

function image()
{
	if( $('#horriblegifs').is(':empty') )
	{
		var img = document.createElement("IMG");
		img.src = "images/horribleGIF1.gif";
		document.getElementById('horriblegifs').appendChild(img);
		var img = document.createElement("IMG");
		img.src = "images/horribleGIF2.gif";
		document.getElementById('horriblegifs').appendChild(img);
		var img = document.createElement("IMG");
		img.src = "images/horribleGIF3.gif";
		document.getElementById('horriblegifs').appendChild(img);
		document.getElementById("message").innerHTML = "We did tell you! Click again to make all the horrible-ness go away! No one wants to see this do they?";
	}
	else
	{
		$('#message').remove();
		$('#horriblegifs').remove();
		$('#horrible-button').remove();
	}
}