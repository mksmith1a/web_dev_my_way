function dofunc(){
	alert('clicked div one');
}

function doSpanfunc(msg,csmsg){
	//alert(msg);
	console.log(csmsg);
	document.getElementById('div1').style.border = "7px dashed green";
	document.getElementById('span1').style.border = "1px double blue";
	document.getElementById('span1').style.color = "white";
	document.getElementById('span1').style.background = "black";
	document.getElementById('span1').innerHTML = "this is a dynamic update";
}
