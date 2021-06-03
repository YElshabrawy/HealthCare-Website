const link=document.querySelector("#Code");
link.addEventListener('click',Check);
function Check()
{
    
    var P1=document.querySelector("#InCode");
    Input_1=P1.value;
    if((Input_1===""||(Input_1.length>11)||(Input_1.length<11)))
    {
    }
    else
    {    
        window.location.href="Forgot_Pass_3.html";
    }
}