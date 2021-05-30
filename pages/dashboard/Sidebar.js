let toggleNavStatus=false;
function Sidebar_Action(){

    let getSidebar=document.querySelector(".sidebar");
    let getSidebarUl=document.querySelector(".sidebar ul");
    let getSidebarTitle=document.querySelector(".sidebar span");
    let getSidebarLinks=document.querySelectorAll(".sidebar a");
    if (toggleNavStatus===false)
    {
        getSidebarUl.setAttribute("style","visibility: visible;");
        getSidebar.setAttribute("style","width: 301px;");
        if(getSidebarTitle!==null){
        getSidebarTitle.setAttribute("style","opacity: 0.5;");
        }
        let arrayLength = getSidebarLinks.length;
        for (let i = 0; i < arrayLength;i++){
            getSidebarLinks[i].setAttribute("style","opacity: 1;");
        }
        toggleNavStatus=true;
    }
    else
    {
        getSidebarUl.setAttribute("style","visibility: hidden;");
        getSidebar.setAttribute("style","width: 0px;");
        if(getSidebarTitle!==null){
        getSidebarTitle.setAttribute("style","opacity: 0;");
        }
        let arrayLength = getSidebarLinks.length;
        for (let i = 0; i < arrayLength;i++){
            getSidebarLinks[i].setAttribute("style","opacity: 0;");
        }
        toggleNavStatus=false; 
    }
}