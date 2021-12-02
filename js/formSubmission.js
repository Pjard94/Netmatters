const formName = document.getElementById('name-CF');
const email = document.getElementById('email-CF');
const phoneNo = document.getElementById('phone-CF');
const subject = document.getElementById('subject-CF');
const message = document.getElementById('message');
const submit = document.getElementById('submit-form');
const tickbox = document.getElementById('m-y');
const emailREGEX = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+[.][a-zA-Z]{2,6}$/;
let nameCheck = false;
let emailCheck = false;
let phoneCheck = false;
let subjectCheck = false;
let messageCheck = false;

tickbox.addEventListener("click", function (e) {
  e.preventDefault();
});

submit.addEventListener("click", function (e) {
    e.preventDefault();
    // console.log('this worked');
    if(emailREGEX.test(email.value) == true){
      emailCheck = true;
      console.log('this worked');
      } else {
        email.classList.add('error');
        console.log('failed check')
      }

      if(formName.value != '' && formName.value != ' ') {
        nameCheck = true;
        console.log('this worked');
      }else {
        formName.classList.add('error');
        console.log('failed check')
      }

      if(subject.value != '' && subject.value != ' ') {
        subjectCheck = true;
        console.log('this worked');
      } else {
        subject.classList.add('error');
        console.log('failed check')
      }

      if(message.value != '' && message.value != ' '){
        messageCheck = true;
        console.log('this worked');
      } else {
        message.classList.add('error');
        console.log('failed check')
      }

      if(phoneNo.value != '' && phoneNo.value != ' '){
        phoneCheck = true;
        console.log('this worked'); 
      } else {
        phoneNo.classList.add('error');
        console.log('failed check')
      }

      if(phoneCheck == true && messageCheck == true && subjectCheck == true && nameCheck == true && emailCheck == true){
        const XHR = new XMLHttpRequest();
        const XHRData = `name=${formName.value}&email=${email.value}&phone_number=${phoneNo.value}&subject=${subject.value}&message=${message.value}`;

        XHR.open('post', 'formSubmit.php');
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
        }
      
  })
    


  
  function handleresponse (responseObject) {
    if (responseObject.sent) {
      console.log('this worked')
      formName.value = "";
      email.value = "";
      phoneNo.value = "";
      subject.value = "";
      message.value = "";
      nameCheck = false;
      emailCheck = false;
      phoneCheck = false;
      subjectCheck = false;
      messageCheck = false;
      successBar.classList.add("success-bar");
      setTimeout(function () {successBar.classList.remove("success-bar")}, 5000);
    } else {
      failedBar.classList.add("failed-bar");
      setTimeout(function () {failedBar.classList.remove("failed-bar")}, 5000);
    }
  
  }