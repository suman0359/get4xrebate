function cureency_calculator(){
	var brokerRate = document.getElementById("brokerRate").value;
	var CurrencyRate = document.getElementById("CurrencyRate").value;
	var volume = document.getElementById("volume").value;
	//document.getElementById("cureency_calculator").options[document.getElementById("cureency_calculator").selectedIndex].value
	document.getElementById("rebates_count").innerHTML=brokerRate*CurrencyRate*volume+"$";

}