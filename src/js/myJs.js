function enableCard()
{
	if(document.getElementById("payOnline").checked)
	{
		document.getElementById("cardholderName").disabled = false;
		document.getElementById("cardNumber").disabled = false;
		document.getElementById("expDate").disabled = false;
		document.getElementById("CVC").disabled = false;
	}
	
	else
	{
		document.getElementById("cardholderName").disabled = true;
		document.getElementById("cardNumber").disabled = true;
		document.getElementById("expDate").disabled = true;
		document.getElementById("CVC").disabled = true;
	}
}