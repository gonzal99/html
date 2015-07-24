/**
 * Created by gonzal99 on 7/24/2015.
 */
function post(){
    var hr = new XMLHttpRequest();
    var url = "verify.php";
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var vars = "username="+username+"&password="+password;
    var returnLink;
    hr.open("POST",url,true);
    hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    hr.onreadystatechange = function(){
        if(hr.readyState == 4 && hr.status == 200){
            returnLink = hr.responseText;
        }
    };
    hr.send(vars);
    document.getElementById("status").innerHTML = returnLink;
    /*if (parseInt(returnLink) == 0) {
        document.getElementById("status").innerHTML = "please try again";
    } else {
        window.location.replace("success.php");
    }*/
}