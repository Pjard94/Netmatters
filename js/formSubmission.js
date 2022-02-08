const formName = document.getElementById('name-CF');
const email = document.getElementById('email-CF');
const phoneNo = document.getElementById('phone-CF');
const subject = document.getElementById('subject-CF');
const message = document.getElementById('message');
const submit = document.getElementById('submit-form');
const tickbox = document.getElementById('form-check');
const successBar = document.getElementById('submission-bar');
const closeBar = document.getElementById('success-close');
const emailREGEX = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+[.][a-zA-Z]{2,6}$/;
const phoneREGEX = /^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/ ;
let nameCheck = false;
let emailCheck = false;
let phoneCheck = false;
let subjectCheck = false;
let messageCheck = false;



// This checks the forms inputs are valid when the form is submitted
submit.addEventListener("click", function (e) {
    e.preventDefault();
    // console.log('this worked');
    if(emailREGEX.test(email.value) == true){
      emailCheck = true;
      // console.log('this worked');
      } else {
        email.classList.add('error');
        // console.log('failed check')
      }

      if(formName.value != '' && formName.value != ' ') {
        nameCheck = true;
        // console.log('this worked');
      }else {
        formName.classList.add('error');
        // console.log('failed check')
      }

      if(subject.value != '' && subject.value != ' ') {
        subjectCheck = true;
        // console.log('this worked');
      } else {
        subject.classList.add('error');
        // console.log('failed check')
      }

      if(message.value != '' && message.value != ' '){
        messageCheck = true;
        // console.log('this worked');
      } else {
        message.classList.add('error');
        // console.log('failed check')
      }

      if(phoneNo.value != '' && phoneNo.value != ' ' && phoneREGEX.test(phoneNo.value)){
        phoneCheck = true;
        // console.log('this worked'); 
      } else {
        phoneNo.classList.add('error');
        // console.log('failed check')
      }

      if(phoneCheck == true && messageCheck == true && subjectCheck == true && nameCheck == true && emailCheck == true){
        const XHR = new XMLHttpRequest();
        const XHRData = `name=${formName.value}&email=${email.value}&phone_number=${phoneNo.value}&subject=${subject.value}&message=${message.value}`;

        XHR.open('post', 'formSubmit.php');
        XHR.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        XHR.send(XHRData);


        XHR.onload = () => {
          let responseObject;

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

  // This deals with the response from the form submission on the server side
  function handleresponse (responseObject) {
    if (responseObject.sent) {
      // console.log('this worked')
      $('#contactForm').trigger("reset");
      nameCheck = false;
      emailCheck = false;
      phoneCheck = false;
      subjectCheck = false;
      messageCheck = false;
      successBar.classList.add("success-state");
    }
  
  }

})

// This closes the success bar when it is here.
closeBar.addEventListener('click', function(e){
    e.preventDefault();
    successBar.classList.remove("success-state")
  })

// this function actively validates the inputs as information is being filled in so will shwo when the error is resolved
function activeValid() {
  
  if(this == email){

    if(emailREGEX.test(email.value) == true && this.value != '' && this.value != ' '){
      email.classList.remove('error');
      // console.log('email fixed');
    } else {
      return false;
    }

  }

  if(this == phoneNo){
    if(phoneREGEX.test(phoneNo.value) == true && this.value != '' && this.value != ' '){
      phoneNo.classList.remove('error');
      // console.log('phone fixed');
    } else {
      return false;
    }
  }

  if (this.value != '' && this.value != ' ') {    
    this.classList.remove('error');
    // console.log('other error fixed');
  }

  // console.log('the form is activly validating');
}


// These activate the active validation method while the user is typing
  email.addEventListener('input', activeValid);
  phoneNo.addEventListener('input', activeValid);
  formName.addEventListener('input', activeValid);
  subject.addEventListener('input', activeValid);
  message.addEventListener('input', activeValid);
