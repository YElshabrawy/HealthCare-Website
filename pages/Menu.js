let toggleNavStatus=false;
function Menu_Action(){

    let getSidebar=document.querySelector(".Menu");
    let getSidebarUl=document.querySelector(".Menu ul");
    let getSidebarTitle=document.querySelector(".Menu span");
    let getSidebarLinks=document.querySelectorAll(".Menu a");
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
        getSidebar.setAttribute("style","width: 95px;");
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