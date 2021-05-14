/////////////////////////////////////////////////////////////////
//                        Get User type                        //
/////////////////////////////////////////////////////////////////
const USER_TYPE = Object.freeze({
    "PATIENT":1, 
    "PHYSICIAN":2
});

let User = USER_TYPE.PATIENT; //1

// Get to change the User
const patient_btn = document.querySelector("#patient");
const physician_btn = document.querySelector("#physician");
patient_btn.addEventListener('click',(e)=>{
    e.preventDefault();
    patient_btn.classList.remove("not-active");
    physician_btn.classList.add("not-active");
    User = USER_TYPE.PATIENT;
    console.log(User);
})

physician_btn.addEventListener('click',(e)=>{
    e.preventDefault();
    patient_btn.classList.add("not-active");
    physician_btn.classList.remove("not-active");
    User = USER_TYPE.PHYSICIAN;
    console.log(User);
});

// Store
localStorage.setItem("userType", User);