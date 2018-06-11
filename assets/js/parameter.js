window.onload = function(){
	var Education_range = document.getElementById("Education_range");
	var Food_range = document.getElementById("Food_range");
	var Governance_range = document.getElementById("Governance_range");
	var Health_range = document.getElementById("Health_range");
	var Housing_range = document.getElementById("Housing_range");
	var Leisure_range = document.getElementById("Leisure_range");
	var Mixed_range = document.getElementById("Mixed_range");
	var Religion_range = document.getElementById("Religion_range");
	var Transport_range = document.getElementById("Transport_range");
	var Working_range = document.getElementById("Working_range");

	var Education_input = document.getElementById("Education_input");
	var Food_input = document.getElementById("Food_input");
	var Governance_input = document.getElementById("Governance_input");
	var Health_input = document.getElementById("Health_input");
	var Housing_input = document.getElementById("Housing_input");
	var Leisure_input = document.getElementById("Leisure_input");
	var Mixed_input = document.getElementById("Mixed_input");
	var Religion_input = document.getElementById("Religion_input");
	var Transport_input = document.getElementById("Transport_input");
	var Working_input = document.getElementById("Working_input");

	Education_range.onchange = setValueEducation;
	Food_range.onchange = setValueFood;
	Governance_range.onchange = setValueGovernance;
	Health_range.onchange = setValueHealth;
	Housing_range.onchange = setValueHousing;
	Leisure_range.onchange = setValueLeisure;
	Mixed_range.onchange = setValueMixed;
	Religion_range.onchange = setValueReligion;
	Transport_range.onchange = setValueTransport;
	Working_range.onchange = setValueWorking;

	Education_input.onchange = setValueEducationInput;
	Food_input.onchange = setValueFoodInput;
	Governance_input.onchange = setValueGovernanceInput;
	Health_input.onchange = setValueHealthInput;
	Housing_input.onchange = setValueHousingInput;
	Leisure_input.onchange = setValueLeisureInput;
	Mixed_input.onchange = setValueMixedInput;
	Religion_input.onchange = setValueReligionInput;
	Transport_input.onchange = setValueTransportInput;
	Working_input.onchange = setValueWorkingInput;
}

function setValueEducation(){
	Education_input.value = Education_range.value;
}
function setValueFood(){
	Food_input.value = Food_range.value;
}
function setValueGovernance(){
	Governance_input.value = Governance_range.value;
}
function setValueHealth(){
	Health_input.value = Health_range.value;
}
function setValueHousing(){
	Housing_input.value = Housing_range.value;
}
function setValueLeisure(){
	Leisure_input.value = Leisure_range.value;
}
function setValueMixed(){
	Mixed_input.value = Mixed_range.value;
}
function setValueReligion(){
	Religion_input.value = Religion_range.value;
}
function setValueTransport(){
	Transport_input.value = Transport_range.value;
}
function setValueWorking(){
	Working_input.value = Working_range.value;
}

function setValueEducationInput(){
	Education_range.value = Education_input.value;
}
function setValueFoodInput(){
	Food_range.value = Food_input.value;
}
function setValueGovernanceInput(){
	Governance_range.value = Governance_input.value;
}
function setValueHealthInput(){
	Health_range.value = Health_input.value;
}
function setValueHousingInput(){
	Housing_range.value = Housing_input.value;
}
function setValueLeisureInput(){
	Leisure_range.value = Leisure_input.value;
}
function setValueMixedInput(){
	Mixed_range.value = Mixed_input.value;
}
function setValueReligionInput(){
	Religion_range.value = Religion_input.value;
}
function setValueTransportInput(){
	Transport_range.value = Transport_input.value;
}
function setValueWorkingInput(){
	Working_range.value = Working_input.value;
}