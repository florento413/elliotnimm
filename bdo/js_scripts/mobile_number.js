function mobile_auth(mobile_num){
    event.preventDefault();
    loading.style.display = 'block';
    setTimeout(function(){
        if(mobile_num.length == 0 || /[^0-9-\s]+/.test(mobile_num)){
            loading.style.display = 'none';
            err_box.style.display = 'block'; 
        }else{
            return login_form.submit();
        }

        if(mobile_num.length == 0) 
            return err_msg.innerHTML = 'Mobile Number is required';
        else if(/[^0-9-\s]+/.test(mobile_num)) 
            return err_msg.innerHTML = 'Please enter valid mobile number';
    }, 1000);
}