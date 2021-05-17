/////////////////////////////////////////////////////////////////
//                        Go to Page 3                         //
/////////////////////////////////////////////////////////////////
let User = window.localStorage.getItem("userType");
const page2NextBtn = document.querySelector("#p2_next");

page2NextBtn.addEventListener('click',(e)=>{
    e.preventDefault();
    if(User == 1){
        // Patient
        window.location.href = 'sign_up3_patient.html';
    }else{
        //doctor
        window.location.href = 'sign_up3_physician.html';
    }
})
console.log(User);
