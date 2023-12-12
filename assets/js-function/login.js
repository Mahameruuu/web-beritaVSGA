function login(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var tampilan = document.getElementById("login_alert");

    if(username=='solikin@gmail.com' && password == '12345678'){
        tampilan.innerHTML = "<p>Anda Succes Login</p>";
    }
    else if(username=='' || password==''){
        alert("Username dan Password tidak boleh kosong");
    } else {
        alert("Periksa Username dan Password yang Anda masukkan");
    }
}