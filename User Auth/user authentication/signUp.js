
let submitButton = document.getElementById("submitButton")
let form = document.getElementById("form")
let email = document.getElementById("email")
let password = document.getElementById("password").value

form.addEventListener("submit",function(e){
    let password = document.getElementById("password").value
        console.log("123")
        if(password.length < 5){
            check(e)  
        }
    
    

    
})



    function check(e){
        e.preventDefault()
        alert("please make password longer than 5 characters")
        
        
    }



