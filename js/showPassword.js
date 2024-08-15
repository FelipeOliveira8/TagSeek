function showPassword(input_id){

    let password = document.getElementById(input_id);
    let show = document.getElementById("password-show");
    let hide = document.getElementById("password-hide");

    if(password.type == "text"){
        hide.style.display = "none";
        show.style.display = "block";
        password.type = "password";

        return;
    }

    hide.style.display = "block";
    show.style.display = "none";
    password.type = "text";

}