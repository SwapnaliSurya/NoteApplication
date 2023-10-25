var username = document.getElementById("username");
var email = document.getElementById("email");
var password = document.getElementById("password");
var confirm_password = document.getElementById("confirm-password");
var messages = document.getElementById("messages");

const showPass = (idToChange, type = '') => {
  var elm = document.getElementById(idToChange)
  elm.setAttribute("onmouseleave", "showPass(this.id, 'revert')");
  if(type == ''){
      elm.type = 'text';
  } else {
      elm.type = 'password';
  }
}


const manageMessage = (message, type, show = '') => {
  if(show == ''){
      if(type == 'error'){
          messages.className = 'alert alert-danger mt-5';
          messages.style = '';
      } else {
          messages.className = 'alert alert-success mt-5';
          messages.style = '';
      }
      messages.innerHTML = message;
  } else {
      messages.style = 'display:none;';
  }
  
}

function registerUser(){
  if(username.value.length != 0 && email.value.length != 0 && password.value.length != 0 && confirm_password.value.length != 0){
      if(username.value.length >= 6){
          if(password.value == confirm_password.value){
              
              manageMessage('', '', 'rm');
              var userData = new FormData;
              userData.append("username", username.value);
              userData.append("email", email.value);
              userData.append("password", password.value);
              userData.append("action", "register-user");

              fetch('api.php', {
                  method: 'POST',
                  body: userData
              }).then(
                  rsp => rsp.json()
              ).then(
                  data => {
                      if(data.type == 'success'){
                         
                          manageMessage(data.message, data.type);
                          setTimeout(() => {
                              window.location.reload();
                          }, 2 * 1000);
                      } else {
                          manageMessage(data.message, data.type);
                         
                      }
                     
                  }
              );

          } else {
             
              manageMessage('Password doesn\'t Match', 'error');
          }
       
      } else {
          manageMessage('Username length should be greater >= 6', 'error');
         
      }
  } else {
      manageMessage('All fields are required', 'error');
    
  }
}

