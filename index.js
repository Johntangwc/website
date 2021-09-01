var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

alertBox = () =>{

	var input = document.getElementById("text").value;
	
	if(input == "")
	{
		alert("NULL??");
	}
	else if(input.match(mailFormat)){
		alert("Thank you! We will notify you as soon as possible!");
	}
	else{
		alert("Error! Please enter valid email address");
	}

}