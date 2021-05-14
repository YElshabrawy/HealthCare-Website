// 1) First get all yes radio buttons and also the no
const radioBtnsYes = document.querySelectorAll(".yes-radio");
const radioBtnsNo = document.querySelectorAll(".no-radio");

// Add the show class to all
for(const [i, btn] of radioBtnsYes.entries()){
    btn.onclick = function(){
        document.getElementById(`rows-${i+1}`).firstElementChild.classList.add("show");
    }
}

// remove the show class to all
for(const [i, btn] of radioBtnsNo.entries()){
    btn.onclick = function(){
        (document.getElementById(`rows-${i+1}`).childNodes).forEach(child => {
            if(child.nodeName != "#text")
                child.classList.remove("show");
        });
    }
}

//2) Manage the + and - Buttons
const addButtons = document.querySelectorAll(".add-btn");
const removeButtons = document.querySelectorAll(".remove-btn");

// Add btn action
document.querySelectorAll(".multi-g").forEach((q)=>{
     q.addEventListener('click', (e)=>{
         e.preventDefault();
    if(e.target && e.target.parentElement.matches(".add-btn")){
        let addBtn = e.target.parentElement;

        let parent = addBtn.parentElement.id[1];
        let location = addBtn.parentElement.parentElement;
        // Create a new row according to the parent
         let row;
        switch(parent){
            case '1':
                row = `<div id = "c1" class="row show">
                                <a href="#"><img class="logo" src="/images/i_upload.svg" alt=""></a>
                                <input type="text" placeholder="Ray Name" />
                                <input type="date" placeholder="Date" />
                                <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                        </div>`;
                break;
            case '2':
                row = `<div id = "c2" class="row show">
                                <a href="#"><img class="logo" src="/images/i_upload.svg" alt=""></a>
                                <input type="text" placeholder="Test Name" />
                                <input type="date" placeholder="Date" />
                                <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                        </div>`;
                break;
            case '3':
                row = `<div id = "c3" class="row show">
                                <input type="text" placeholder="Surgery Type" />
                                    <input type="text" placeholder="Surgery Location" />
                                    <input type="date" placeholder="Date" />
                                    <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                        </div>`;
                break;
            case '4':
                row = `<div id = "c4" class="row show">
                                <input type="text" placeholder="Disease Name" />
                                <input type="date" placeholder="Date" />
                                <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                        </div>`;
                break; 
            case '5':
                row = `<div id = "c5" class="row show">
                                <input type="text" placeholder="Allergy Name" />
                                <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                        </div>`;
                break; 
            case '6':
                row = `<div id = "c6" class="row show">
                                <input type="text" placeholder="Medicine Name" />
                                <input type="number" placeholder="Dose (/day)" />
                                <input type="number" placeholder="Duration (hrs)" />
                                <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                        </div>`;
                break; 

        }

        // Add the row
        location.insertAdjacentHTML("beforeend", row);

    }
})
})

// remove btn action
document.querySelectorAll(".multi-g").forEach(q=>{
    
    q.addEventListener('click', (e)=>{
        e.preventDefault();
    if(e.target && e.target.parentElement.matches(".remove-btn")){
        let btn = e.target.parentElement;
        let parent = btn.parentElement;
        // If it was the top node:
        if(parent.id[0] == 'n'){
            // Lw fyh children shel dah w badel awl wa7ed byhom lw mafesh just hide
            if(parent.parentElement.childElementCount == 1){
                // Only one
                parent.classList.remove("show");
                console.log(parent)
            }else{
                // Remove the first and replace the second with it
                let newNode = parent.parentElement.children[1];
                // Add the add btn
                let newBtn = document.createElement('button');
                newBtn.classList.add("add-btn");
                newBtn.innerHTML = `<img class="logo" src="/images/i_add.svg" alt="">`;
                newNode.appendChild(newBtn);
                let num = newNode.id[1];
                newNode.id = `n${num}`;
                parent.parentElement.removeChild(parent);
                console.log(newNode)
            }
        }else{
            // Not the top
            parent.parentElement.removeChild(parent);
        }
    }
})
})

/////////////////////////////////////////////////////////////////
//                        Go to Page 4                         //
/////////////////////////////////////////////////////////////////