function toggle(id)
		{
		
		var x=document.getElementsByClassName('mid');
		for(i=0;i<x.length;i++)
		{
		x[i].style.display='none';
		}
		document.getElementById(id).style.display='block';
		
		return;
		}