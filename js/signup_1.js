/////////////////////////////////////////////////////////////////
//                        Get User type                        //
/////////////////////////////////////////////////////////////////
const USER_TYPE = Object.freeze({
    "PATIENT":1, 
    "PHYSICIAN":3,
    "ADMIN":2
});

let User = USER_TYPE.PATIENT; //1
const userInput = document.querySelector("#userInput");

// Get to change the User
const patient_btn = document.querySelector("#patient");
const physician_btn = document.querySelector("#physician");
const admin_btn= document.querySelector("#admin");
patient_btn.addEventListener('click',(e)=>{
    e.preventDefault();
    patient_btn.classList.remove("not-active");
    physician_btn.classList.add("not-active");
    admin_btn.classList.add("not-active");
    User = USER_TYPE.PATIENT;
    userInput.value = 2;
    console.log(User);
})

physician_btn.addEventListener('click',(e)=>{
    e.preventDefault();
    patient_btn.classList.add("not-active");
    admin_btn.classList.add("not-active");
    physician_btn.classList.remove("not-active");
    User = USER_TYPE.PHYSICIAN;
    userInput.value = 3;
    console.log(User);
});
admin_btn.addEventListener('click',(e)=>{
    e.preventDefault();
    patient_btn.classList.add("not-active");
    physician_btn.classList.add("not-active");
    admin_btn.classList.remove("not-active");
    User = USER_TYPE.ADMIN;
    userInput.value = 1;
    console.log(User);
});

// Store
window.localStorage.setItem("userType", User);