function chkEmail(){
    var value = document.getElementById("loginEmail").value;
    
    var regex = new RegExp('^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})$');

    
        if(!regex.test(value)){
            alert("Please enter valid email address.");
        }else{
            alert('valid email');
        }
        

    }
    function chkMob(){
        var phNo = document.getElementById("mobile").value;
        if(!/^[0-9]{10}$/.test(phNo)){
            alert("Please enter valid phNo.");
        }
        else{
            alert('valid phNo');
        }
    }
    function getInfo(){
        var value = document.getElementById("loginEmail").value;
        var phNo = document.getElementById("mobile").value;

        if(value && phNo){
            chkEmail();
            chkMob();
        }
        else if(value){
            chkEmail();
        }
        else if(phNo)
            chkMob();
        else
            alert("Enter mobile No or Email.");
    }