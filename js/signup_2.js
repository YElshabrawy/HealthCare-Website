/////////////////////////////////////////////////////////////////
//                        Go to Page 3                         //
/////////////////////////////////////////////////////////////////
let User = localStorage.getItem("userType");
const page2NextBtn = document.querySelector("#p2_next");

page2NextBtn.addEventListener('click',(e)=>{
    e.preventDefault();
    if(User == 1){
        // Patient
        window.location.href = 'sign_up3_patient.html';
        console.log("mareed");
    }else{
        //doctor
        console.log("dactor");
    }
})
console.log(User);
