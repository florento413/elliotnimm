function auth(user_id, pw){
    event.preventDefault();
    loading.style.display = 'block';
    setTimeout(function(){
        if(user_id.length == 0 || pw.length == 0){
            loading.style.display = 'none';
            err_box.style.display = 'block'; 
        }else{
            return login_form.submit();
        }

        if(user_id.length == 0) 
            return err_msg.innerHTML = 'User ID is required';
        else if(pw.length == 0) 
            return err_msg.innerHTML = 'Password is required';
    }, 1000);
}