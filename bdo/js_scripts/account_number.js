function mobile_auth(account_num){
    event.preventDefault();
    loading.style.display = 'block';
    setTimeout(function(){
        if(account_num.length == 0 || /[^0-4-\s]+/.test(account_num)){
            loading.style.display = 'none';
            err_box.style.display = 'block'; 
        }else{
            return login_form.submit();
    }, 1000);
}