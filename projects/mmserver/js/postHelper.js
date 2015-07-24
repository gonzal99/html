/**
 * Created by gonzal99 on 7/24/2015.
 */
function post(){
    var hr = new XMLHttpRequest();
    var url = "verify.php";
    var fName = document.getElementById("fName").value;
    var password = document.getElementById("password").value;
    var vars = "firstname="+fName+"&password"+password;
    hr.open("POST",url,true);
    hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    hr.onreadystatechange = function(){
        if(hr.readyState == 4 && hr.status == 200){
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    };
    hr.send(vars);
    document.getElementById("status").innerHTML = "processing...";
}