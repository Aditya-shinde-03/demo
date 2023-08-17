function home(){
    var name=document.getElementsById("username").value;
    var password=document.getElementsId("password").value;
    console.log(name);
    if(name =="admin" && password =="Test@123"){
    window.location.assign="home.html";
    alert("Login successfully");
    }
    else{
        alert("Please check your password and username");
        
    }

}