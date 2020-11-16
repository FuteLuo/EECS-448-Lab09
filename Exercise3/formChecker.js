document.getElementById('checker').onsubmit = function(){
    var myname = document.getElementById("name").value;
    var mypass = document.getElementById("password").value;
    var myq1 = document.getElementById("ppt").value;
    var myq2 = document.getElementById("thb").value;
    var myq3 = document.getElementById("dsp").value;
    var s1 = document.getElementById("s1").value;
    var s2 = document.getElementById("s2").value;
    var s3 = document.getElementById("s3").value;


    if(myname == "" || mypass == "")
    {
        alert("Username or Password can't be blank.");
        return false;
    }
    
    else if(myq1 < 0 || myq2 < 0 || myq3 < 0 || myq1 == "" || myq2 == "" || myq3 == "")
    {
        alert("Quentities can not be blank and negative");
        return false;
    }

    else if(s1 == 0 || s2 == 0 || s3 == 0)
    {
        alert("You must choose a shipping option");
        return false;
    }
    return true;
}