const link=document.querySelector("#Next");
link.addEventListener('click',Check);
DotFlag=true;
Flag=true;
function Check()
{
    var P1=document.querySelector("#InEmail");
    Input_1=P1.value;
    if((Input_1===""))
    {
        return window.location.href="";
    }
    for (let i = 0; i < Input_1.length;i++){
        if (Input_1[i]==="@")  
        {
        Flag==false;
        }
        else if(Input_1[i]===".")
        {
            DotFlag==false;
        }
        }

        if(Flag===DotFlag===true)
        return window.location.href="Forgot_Pass_2.html";
        else
        return window.location.href="";
}
  