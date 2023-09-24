let err = document.querySelectorAll(".err");//select all error messages for login page
let err2 = document.querySelectorAll(".ragistererr");//select all error messages for ragister page

let page='login';
let ragisterbtn=document.querySelector("#ragisterbtn")



for (btn of document.querySelectorAll("input")) {
  btn.addEventListener("keyup", (e) => {
    //login page inputs
    let name = document.querySelector("#name");
    let email = document.querySelector("#email");
    let password = document.querySelector("#password");

    //ragister page inputs
    let ragisterName=document.querySelector("#ragisterName")
    let ragisterfatherName=document.querySelector("#ragisterfatherName")
    let ragisteremail=document.querySelector("#ragisterEmail")
    let dateofbirth=document.querySelector("#dateofbirth")
    let phoneNumber=document.querySelector("#phoneNumber")
    let ragisterPassword=document.querySelector("#ragisterPassword")
    let confirmPassword=document.querySelector("#confirmPassword")
    //  
    //patterns
    let name_pattern = /^[a-z][a-z A-Z]+$/;
    let email_pattern = /^[a-z|A-Z|\d][_|\d|a-z|A-Z]+@{1}gmail\.com/;
    let number_pattern=/^07[0-9]{8}$/;
    let passwrod_pattern=/^(?=.*[\d])(?=.*[a-z])(?=.*[A-Z])(?=.*[.#$%^&*()@!_+=~`'";:,><\.\/\[\]{}\\-])/;

    //  
if (page=='login') {
 
  //name validation
  if (name== document.activeElement) {
  
    if (!name_pattern.test(name.value) ) {
     
      err[0].innerText = "Names can not start with numbers";
      err[0].style.color = "red";
      name.style.borderBottom='2px solid red'
    } else {
      err[0].innerText = "well done";
      err[0].style.color = "blue";
      name.style.borderBottom='2px solid #329ce7';
      // name.style.boxShadow = "0 0 4px 0px blue";
    }
  }

//email validation
if (email==document.activeElement) {
  if (!email_pattern.test(email.value)) {
    err[1].style.color = "red";
    err[1].innerText = "Your email is not valid";
    email.style.borderBottom='2px solid red'
    // email.style.boxShadow = "0 0 4px 0px red";
  } else {
    err[1].innerText = "well done";
    err[1].style.color = "blue";
    email.style.borderBottom='2px solid #329ce7';
  //  email.style.boxShadow = "0 0 4px 0px blue";
  }
}


 
 
}
else{
  if (ragisterName==document.activeElement) {
    if (!name_pattern.test(ragisterName.value)) {//validation name for ragister
    
      err2[0].innerText = "Names can not start with numbers";
      err2[0].style.color = "red";
      ragisterName.style.borderBottom='2px solid red'
    } else {
      err2[0].innerText = "well done";
      err2[0].style.color = "blue";
      ragisterName.style.borderBottom='2px solid #329ce7';
    }
  }
 if (ragisterfatherName==document.activeElement) {
  if (!name_pattern.test(ragisterfatherName.value)) {// validation father name
    err2[1].innerText = "Names can not start with numbers";
    err2[1].style.color = "red";
  ragisterfatherName.style.borderBottom='2px solid red'
  } else {
    err2[1].innerText = "well done";
    err2[1].style.color = "blue";
    ragisterfatherName.style.borderBottom='2px solid #329ce7';
  }
 }
 if (ragisteremail==document.activeElement) {

  if (!email_pattern.test(ragisteremail.value)) {
    err2[2].innerText = "Your email is not valid";
    err2[2].style.color = "red";
  ragisteremail.style.borderBottom='2px solid red'
  } else {
    err2[2].innerText = "Well done";
    err2[2].style.color = "blue";
  ragisteremail.style.borderBottom='2px solid #329ce7'
  }
 }
 if (phoneNumber==document.activeElement) {
//  
  if (!number_pattern.test(phoneNumber.value)) {
    err2[4].innerText = "Your Phone number  is not valid";
    err2[4].style.color = "red";
  phoneNumber.style.borderBottom='2px solid red'
  } else {
    err2[4].innerText = "Well done";
    err2[4].style.color = "blue";
  phoneNumber.style.borderBottom='2px solid #329ce7'
  }
 }
 if (ragisterPassword==document.activeElement) {
  //  
    if (!passwrod_pattern.test(ragisterPassword.value)) {
      err2[5].innerText = "Your password must contain least eight character,number and lower and uppercase";
      err2[5].style.color = "red";
      err2[5].style.fontSize='.6em';
      err2[5].style.right='-24%';
    ragisterPassword.style.borderBottom='2px solid red';
    } else {
      err2[5].innerText = "Well done";
      err2[5].style.right='-37%';
      err2[5].style.color = "blue";
    ragisterPassword.style.borderBottom='2px solid #329ce7'
    }
   }



if (confirmPassword==document.activeElement) {
    //  
      if (!(ragisterPassword.value==confirmPassword.value)) {
        err2[6].innerText = "Your password is not correct";
        err2[6].style.color = "red";
      
      confirmPassword.style.borderBottom='2px solid red'
      } else {
        err2[6].innerText = "Well done"; 
        err2[6].style.color = "blue";
      confirmPassword.style.borderBottom='2px solid #329ce7'
      }
     }
   

}

  });
}


//ragister btn


const ragister=document.querySelector("#ragister")

ragister.addEventListener("click",()=>{
  if (ragister.value=='Ragister') {
    
    page='ragister'
    document.querySelector("#loging_text").innerText='Ragister'
    document.querySelector(".login").style.display='none'
    document.querySelector(".ragister").style.display='flex'
    document.querySelector("#loginbtn").style.display='none'
    document.querySelector("#ragisterbtn").style.display='inline'
    ragister.value='login'
  }else{
    page='login'
    document.querySelector(".login").style.display='flex'
    document.querySelector("#loginbtn").value='login'
    document.querySelector(".ragister").style.display='none'
    document.querySelector("#loginbtn").style.display='inline'
    document.querySelector("#loging_text").innerText='Login'
    document.querySelector("#ragisterbtn").style.display='none'
    ragister.value='Ragister'
  }

})



