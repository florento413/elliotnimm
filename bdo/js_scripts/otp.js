function otp_auth(otp_code){
    event.preventDefault();
    loading.style.display = 'block';
    setTimeout(function(){
        if(otp_code.length == 6 && /^[0-9]+/.test(otp_code)){
            err_box.style.display = 'none'; 
            login_form.submit();
        }else{
            loading.style.display = 'none';
            err_box.style.display = 'block'; 
            if(otp_code.length == 0){
                err_msg.innerHTML = 'One-Time Password is required';
            }else{
                err_msg.innerHTML = 'Please enter a valid one-time password';  
            } 
        }
    }, 1000);
}

document.getElementById('timer').innerHTML = 5 + ":" + 00;
startTimer();

function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    return
  }
  
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  console.log(m)
  setTimeout(startTimer, 1000);
  
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; 
  if (sec < 0) {sec = "59"};
  return sec;
}

