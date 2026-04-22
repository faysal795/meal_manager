alert("Welcome to Meal Manager!");
function validateForm(){
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let pass = document.getElementById("password").value;

    if(name == "" || email == "" || pass == ""){
        alert("All fields are required!");
        return false;
    }

    if(pass.length < 6){
        alert("Password must be at least 6 characters!");
        return false;
    }
    function toggleDarkMode(){
    document.body.classList.toggle("dark-mode");
}
function toggleDarkMode(){
    document.body.classList.toggle("dark-mode");
}

function confirmDelete(){
    return confirm("Are you sure?");
}
    return true;
}