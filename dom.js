function rumus_dom()
{
	var template = document.formku.template.value;

	if(template=="template1"){
		document.getElementById("tulisan").style.fontFamily="Helvetica";
		document.getElementById("tulisan").style.fontSize="12px";
		document.getElementById("tulisan").style.color="navy";
	}
	else if (template=="template2"){
		document.getElementById("tulisan").style.fontFamily="Helvetica";
		document.getElementById("tulisan").style.fontSize="16px";
		document.getElementById("tulisan").style.color="black";
	}
	else if (template=="template3"){
		document.getElementById("tulisan").style.fontFamily="Helvetica";
		document.getElementById("tulisan").style.fontSize="20px";
		document.getElementById("tulisan").style.color="Green";
	}
	else if (template=="template4"){
		document.getElementById("tulisan").style.fontFamily="Helvetica";
		document.getElementById("tulisan").style.fontSize="24px";
		document.getElementById("tulisan").style.color="magenta";
	}
	else if (template=="template5"){
		document.getElementById("tulisan").style.fontFamily="Helvetica";
		document.getElementById("tulisan").style.fontSize="28px";
		document.getElementById("tulisan").style.color="red";
	}
	}


	