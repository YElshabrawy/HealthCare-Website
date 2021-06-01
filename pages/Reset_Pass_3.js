const link=document.querySelector("#Link");
link.addEventListener('click',Check);
function Check()
{
    var P1=document.querySelector("#P1");
    var P2=document.querySelector("#P2");
    Input_1=P1.value;
    Input_2=P2.value;
    if((Input_1==="")||(Input_2==="")||(Input_1!==Input_2))
    {
        window.location.href="";
    }
    else if(Input_1===Input_2)
    {
        
        window.location.href="#";
    }
}