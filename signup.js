const form = document.querySelector("signup form"),
continueBtn = form.querySelector(".button input");

form.onsubmit = (e)=>{
	e-preventDefault();// preventing form from submitting

}


continueBtn.onclick = ()=>{
	let xhr= new XMLHttpsRequest();
	xhr.open("POST" ,"php/signup.php", true);
	xhr.onload = ()=>{
		if(xhr.readyState === XMLHttpsRequest.DONE){
			if(xhr.status === 200){
				let data=xhr.response;
				console.log(data);
			}
		}
	}
	// we have to send form data through ajax to php
	let formData = new FormData(form); //creating new formData object
	xhr.send("formData");//sending form data to php 
}  
	