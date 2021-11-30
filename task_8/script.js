const username=document.getElementById('username')
const password=document.getElementById('password')
const logform=document.getElementById('logform')

form.addEventListener('submit',(e)=>){
	let message=[]
	if(username.value===''||username.value==null){
		messages.push('Name is required')
	}

	if(password.value==='password'){
		messages.push('Password cannot be " Password "')
	}
	if(message.length>0){
		e.preventDefault();
		errorElement.innerText=messages.join(', ')
	}
}