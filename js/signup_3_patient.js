// 1) First get all yes radio buttons and also the no
const radioBtnsYes = document.querySelectorAll(".yes-radio");
const radioBtnsNo = document.querySelectorAll(".no-radio");

// Add the show class to all
document.querySelectorAll("form").forEach(q=>{
    q.addEventListener('click', (e)=>{
        //  e.preventDefault();
         if(e.target && e.target.matches(".yes-radio")){
             let selectedRow = e.target.parentElement.parentElement.nextElementSibling;
             selectedRow.firstElementChild.classList.add("show");
            //  e.target.checked = true;
            //  e.target.nextElementSibling.nextElementSibling.checked = false;
         }
    })
})


// remove the show class to all
document.querySelectorAll("form").forEach(q=>{
    q.addEventListener('click', (e)=>{
        //  e.preventDefault();
         if(e.target && e.target.matches(".no-radio")){
             let selectedRow = e.target.parentElement.parentElement.nextElementSibling;
             selectedRow.firstElementChild.classList.remove("show");
            //  e.target.checked = true;
            //  e.target.nextElementSibling.nextElementSibling.checked = false;
         }
    })
})

//2) Manage the + and - Buttons
const addButtons = document.querySelectorAll(".add-btn");
const removeButtons = document.querySelectorAll(".remove-btn");


// Add btn action
document.querySelectorAll("form").forEach((q)=>{
     q.addEventListener('click', (e)=>{
         if(e.target && e.target.parentElement.matches(".add-btn")){
        e.preventDefault();
        let addBtn = e.target.parentElement;

        let parent = addBtn.parentElement.id[1];
        let location = addBtn.parentElement.parentElement;
        // Create a new row according to the parent
         let row;
        switch(parent){
            case '1':
                row = `<div id = "c1" class="row show">
                                <div class="upload-btn">
                                    <label for="file">
                                        <img class="logo" src="/images/i_upload.svg" alt="">
                                    </label>
                                    <input class="disp-none" accept=".pdf" type="file" name="ray_file[]" id="file">
                                </div>
                                <input type="text" placeholder="Ray Name" name="ray_name[]"/>
                                <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                        </div>`;
                break;
            case '2':
                row = `<div id = "c2" class="row show">
                                <div class="upload-btn">
                                    <label for="file">
                                        <img class="logo" src="/images/i_upload.svg" alt="">
                                    </label>
                                    <input class="disp-none" accept=".pdf" type="file" name="medical_test_file[]" id="file">
                                </div>
                                <input type="text" placeholder="Test Name" name="medical_test_name[]"/>
                                <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                        </div>`;
                break;
            case '3':
                row = `<div id = "c3" class="row show">
                                <input type="text" placeholder="Surgery Type" name="surgery_type[]"/>
                                <input type="text" placeholder="Surgery Location" name="surgery_location[]"/>
                                <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                        </div>`;
                break;
            case '4':
                row = `<div id = "c4" class="row show">
                                <input type="text" placeholder="Disease Name" name="disease_name[]"/>
                                <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                        </div>`;
                break; 
            case '5':
                row = `<div id = "c5" class="row show">
                                <input type="text" placeholder="Allergy Name" name="allergy_name[]"/>
                                <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                        </div>`;
                break; 
            case '6':
                row = `<div id = "c6" class="row show">
                                <input type="text"  placeholder="Medicine Name" name="medicine_name[]"/>
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
document.querySelectorAll("form").forEach(q=>{
    
    q.addEventListener('click', (e)=>{
        if(e.target && e.target.parentElement.matches(".remove-btn")){
        e.preventDefault();
        let btn = e.target.parentElement;
        let parent = btn.parentElement;
        // If it was the top node:
        if(parent.id[0] == 'n'){
            // Lw fyh children shel dah w badel awl wa7ed byhom lw mafesh just hide
            if(parent.parentElement.childElementCount == 1){
                // Only one
                parent.classList.remove("show");
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
            }
        }else{
            // Not the top
            parent.parentElement.removeChild(parent);
        }
    }
})
})

