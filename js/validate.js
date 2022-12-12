function chkEmail(){
    var value = document.getElementById("loginEmail").value;
    
    var regex = new RegExp('^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})$');

    
        if(!regex.test(value)){
            alert("Please enter valid email address.");
        }else{
            alert('valid email');
        }
        

    }
    function getInfo(){
        var value = document.getElementById("loginEmail").value;

        if(value){
            chkEmail();
        }
        else
            alert("Enter valid Email.");
    }