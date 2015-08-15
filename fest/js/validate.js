function checkPass(x)
{
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('password_confirm');
    var message = document.getElementById('pass_match');
    var match_color = "#66cc66";
    var error_color = "#ff6666";
    if(pass1.value == pass2.value && pass1.value.length != 0){
        pass2.style.borderColor = match_color;
        message.style.color = match_color;
        message.innerHTML = "Passwords Match!"
    }else if(pass1.value != pass2.value && pass1.value!='' && x==2){
        pass2.style.borderColor = error_color;
        message.style.color = error_color;
        message.innerHTML = "Passwords Do Not Match!";
    }
    else if(pass1.value != pass2.value && pass2.value!='' && x==1){
        pass2.style.borderColor = error_color;
        message.style.color = error_color;
        message.innerHTML = "Passwords Do Not Match!";
    }
    else
    {
        message.innerHTML = "";
    }
}

function checkFile(fieldObj, x)
{
    var FileName  = fieldObj.value;
    var FileExt = FileName.substr(FileName.lastIndexOf('.')+1);
    var FileSize = fieldObj.files[0].size;
    var FileSizeMB = (FileSize/1024*1024).toFixed(2);

    if ( (FileExt != "jpeg" && FileExt != "jpg" && FileExt != "png") || FileSize>x*1024*1024)
    {
        var error = "File type : "+ FileExt+"<br/>";
        error += "Size: " + FileSizeMB + " KB <br/>";
        error += "Please make sure your file is in png or jpeg format and less than "+x+" MB.<br/>";
        var msg=document.getElementById('error_file');
        msg.style.display = 'block';
        msg.style.animationIterationCount=1;
        msg.style.color="red";
        msg.style.border="1px solid #fb0303";
        msg.style.backgroundColor="#fceaee";
        msg.innerHTML=error;

        return false;
    }

    return true;
}