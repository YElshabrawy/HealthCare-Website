const link=document.querySelector("#Next");
link.addEventListener('click',Check);
DotFlag=false;
Flag=false;
function Check()
{
    var P1=document.querySelector("#InEmail");
    Input_1=P1.value;
    if((Input_1===""))
    {
    }
    for (let i = 0; i < Input_1.length;i++){
        if (Input_1[i]==="@")  
        {
        Flag==true;
        }
        else if(Input_1[i]===".")
        {
            DotFlag==true;
        }
        }

        if(Flag&&DotFlag){
        DotFlag=false;
        Flag=false;  
        return window.location.href="Forgot_Pass_2.html";
        }
}
  