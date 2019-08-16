function doFirst(){
	tcolorpic = document.getElementById('tcolorpic');
	tcolorpic.addEventListener("dragstart",startDrag,false);
	leftbox = document.getElementById('leftbox');
	leftbox.addEventListener("dragenter",function(e){e.preventDefault();},false);
	leftbox.addEventListener("dragover", function(e){e.preventDefault();},false);
	leftbox.addEventListener("drop",dropped ,false);
}
}
function startDrag(e)
{
	var codex = '<img src="images/color/Bluee.png">';
	e.dataTransfer.setData('Text', codex);
}
function dropped(e){
	e.preventDefault();
	leftbox.innerHTML = e.dataTransfer.getData('Text');

window.addEventListener("load", doFirst, false);
