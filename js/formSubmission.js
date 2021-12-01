const formName = document.getElementById('name-CF');
const email = document.getElementById('email-CF');
const phoneNo = document.getElementById('phone-CF');
const subject = document.getElementById('subject-CF');
const message = document.getElementById('message');
const submit = document.getElementById('submit-form');
const tickbox = document.getElementById('m-y');
const emailREGEX = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+[.][a-zA-Z]{2,6}$/;

tickbox.addEventListener("click", function (e) {
  e.preventDefault();
});

submit.addEventListener("click", function (e) {
    e.preventDefault();
    console.log('this worked');
    if(emailREGEX(email.value) == true){

      } else {
        
      }

      if(formName != '' && formName != ' ') {

      }else {

      }

      if(subject != '' && subject != ' ') {

      } else {

      }

      if(message != '' && message != ' '){

      } else {

      }

      if(phoneNo != '' && phoneNo != ' '){
               
      } else {
        
      }

      const XHR = new XMLHttpRequest();
      const XHRData = `first=${firstName.value}&last=${lastName.value}&email=${email.value}&subject=${subject.value}&message=${message.value}`;

      XHR.open('post', 'contactSubmit.php');
      XHR.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      XHR.send(XHRData);


      XHR.onload = () => {
        let responseObject= null;

        try{
          responseObject = JSON.parse(XHR.responseText);
        }catch (e){
          console.error("Could not parse JSON!");
        }

        if (responseObject){
          handleresponse(responseObject);
        }
      }
  })
    


  
  function handleresponse (responseObject) {
    if (responseObject.sent) {
      console.log('this worked')
      firstName.value = "";
      firstName.classList.remove("Form-valid");
      lastName.value = "";
      lastName.classList.remove("Form-valid");
      email.value = "";
      email.classList.remove("Form-valid");
      subject.value = "";
      subject.classList.remove("Form-valid");
      message.value = "";
      message.classList.remove("Form-valid");
      successBar.classList.add("success-bar");
      setTimeout(function () {successBar.classList.remove("success-bar")}, 5000);
    } else {
      failedBar.classList.add("failed-bar");
      setTimeout(function () {failedBar.classList.remove("failed-bar")}, 5000);
    }
  
  }