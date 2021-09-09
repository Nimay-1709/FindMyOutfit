function validate(){
    if(document.getElementById("pass").value==document.getElementById("rpass").value){
        alert("Success!!!!!")
        return true;
    }else{
        alert("Password not matching !!!!");
    }
}

function passcheck(){
    if(document.getElementById("pass").value==document.getElementById("rpass").value){
        document.getElementById("rpass").style.borderColor="green";
    }else{
        document.getElementById("rpass").style.borderColor="red";
    }

}