window.onload = function(){
	var inputs = document.getElementsByTagName("input");
	for(var i = 0; i < inputs.length; i++ ){
		if(inputs[i].type == "range"){
			inputs[i].onchange = setInput;
		}
	}

	var input_input = document.querySelectorAll(".input");
	for(var i = 0; i < input_input.length; i++ ){
			input_input[i].onchange = setRange;
	}

	var closeButtons = document.querySelectorAll(".close");
	for(var i = 0; i < closeButtons.length; i++ ){
		closeButtons[i].onclick = saveDependencies;
	}
}

function setInput(){
		var range = document.getElementById(this.id);
		var input_id = this.id.substr(0,this.id.length-5) + "input";
		var input = document.getElementById(input_id);
		input.value = range.value;
}

function setRange(){
		var input = document.getElementById(this.id);
		var range_id = this.id.substr(0,this.id.length-5) + "range";
		var range = document.getElementById(range_id);
		range.value = input.value;
		console.log(range_id);
}

function saveDependencies(){
	var id = this.id;
	var head = this.id.substr(0,this.id.length-6);
	var Energy = document.getElementById(head+"_Energy_range").value;
	var Water = document.getElementById(head+"_Water_range").value;
	var Communication = document.getElementById(head+"_Communication_range").value;
	var Transport = document.getElementById(head+"_Transport_range").value;
	var Special = document.getElementById(head+"_Special_range").value;
	var result = "," + Energy + "," + Water + "," + Communication + "," + Transport + "," + Special;
	var hidden = document.getElementById(head+"_hidden") ;
	hidden.value = result;
	console.log(hidden.value);
}