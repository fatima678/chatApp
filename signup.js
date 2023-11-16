const form = document.querySelector("signup form"),
continueBtn = form.querySelector(".button input");

form.onsubmit = (e)=>{
	e-preventDefault();// preventing form from submitting

}


continueBtn.onclick = ()=>{
	let xhr= new XMLHttpsRequest();
	xhr.open("POST" ,"php/signup.php", true);
	xhr.onload = ()=>
}  
	xhr.send("");