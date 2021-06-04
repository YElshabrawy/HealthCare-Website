let familyMembers = 0;
const addFamilyBtn = document.querySelector(".add-family");
const countInput = document.querySelector("#count");

if(addFamilyBtn){
addFamilyBtn.addEventListener('click', (e)=>{
    e.preventDefault(); 
    if(familyMembers === 0){
        familyMembers++;
        document.querySelector("#m1").classList.remove("hide")
    }else{
        // add new member
        familyMembers++;
        let code = `<div id="m${familyMembers}" class="memb grid-container2_fam">
                    <div class="gt2-weight" style="grid-column-end: 3;">
                        <input type="text" placeholder="Name" name="m${familyMembers}-name" />
                    </div>
                    <div class="gt2-relation">
                        <select id="relation" name="m${familyMembers}-relation" class="tmp-dropdown">
                            <option value="">Relationship</option>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Son">Son</option>
                            <option value="Daughter">Daughter</option>
                            <option value="Brother">Brother</option>
                            <option value="Sister">Sister</option>
                            <option value="Husband">Husband</option>
                            <option value="Wife">Wife</option>
                            <option value="Grandfather">Grandfather</option>
                            <option value="Grandmother">Grandmother</option>
                            <option value="Grandson">Grandson</option>
                            <option value="Granddaughter">Granddaughter</option>
                        </select>
                    </div>
                    <a class="gt2-delete delete-btn">
                        <img class="logo" src="/images/i_delete.svg" alt="">
                    </a>
                    <div class="gt2-history">
                        <div class="gt2-h-chronic">
                            <p>
                                Do he/she has any psychological diseases?
                            </p>
                        </div>
                        <div class="gt2-h-chronic-a">
                            <fieldset class="radio-container">
                                <label>Yes</label>
                                <input class="yes-radio" type="radio" name="radio1-${familyMembers}" />
                                <label>No</label>
                                <input class="no-radio" type="radio" name="radio1-${familyMembers}" checked="checked" />
                            </fieldset>
                        </div>
                        <div id="rows-4" class="multi-g multi-g-chronic">
                            <div id="n4" class="row">
                                <input type="text" placeholder="Disease Name" name="m${familyMembers}-psychological[]"/>
                                <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                                <button class="add-btn"><img class="logo" src="/images/i_add.svg" alt=""></button>
                            </div>
                        </div>
                        <div class="gt2-h-chronic">
                            <p>
                                Do he/she has any ulcers?
                            </p>
                        </div>
                        <div class="gt2-h-chronic-a">
                            <fieldset class="radio-container">
                                <label>Yes</label>
                                <input class="yes-radio" type="radio" name="radio2-${familyMembers}" />
                                <label>No</label>
                                <input class="no-radio" type="radio" name="radio2-${familyMembers}" checked="checked" />
                            </fieldset>
                        </div>
                        <div id="rows-4" class="multi-g multi-g-chronic">
                            <div id="n4" class="row">
                                <input type="text" placeholder="Ulcer Name" name="m${familyMembers}-ulcher[]"/>
                                <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                                <button class="add-btn"><img class="logo" src="/images/i_add.svg" alt=""></button>
                            </div>
                        </div>
                        <div class="gt2-h-chronic">
                            <p>
                                Do he/she has any allergy?
                            </p>
                        </div>
                        <div class="gt2-h-chronic-a">
                            <fieldset class="radio-container">
                                <label>Yes</label>
                                <input class="yes-radio" type="radio" name="radio3-${familyMembers}" />
                                <label>No</label>
                                <input class="no-radio" type="radio" name="radio3-${familyMembers}" checked="checked" />
                            </fieldset>
                        </div>
                        <div id="rows-4" class="multi-g multi-g-chronic">
                            <div id="n4" class="row">
                                <input type="text" placeholder="Allergy Name" name="m${familyMembers}-allergy[]"/>
                                <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                                <button class="add-btn"><img class="logo" src="/images/i_add.svg" alt=""></button>
                            </div>
                        </div>
                        <div class="gt2-h-chronic">
                            <p>
                                Do he/she has any genatic abnormality?
                            </p>
                        </div>
                        <div class="gt2-h-chronic-a">
                            <fieldset class="radio-container">
                                <label>Yes</label>
                                <input class="yes-radio" type="radio" name="radio4-${familyMembers}" />
                                <label>No</label>
                                <input class="no-radio" type="radio" name="radio4-${familyMembers}" checked="checked" />
                            </fieldset>
                        </div>
                        <div id="rows-4" class="multi-g multi-g-chronic">
                            <div id="n4" class="row">
                                <input type="text" placeholder="Abnormality Name" name="m${familyMembers}-abnormal[]"/>
                                <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                                <button class="add-btn"><img class="logo" src="/images/i_add.svg" alt=""></button>
                            </div>
                        </div>
                        
                    </div>
                    </div>`
        let lastBlock = document.querySelector(`#m${familyMembers-1}`);
        lastBlock.insertAdjacentHTML("afterend", code);
    }
    console.log(familyMembers);
    countInput.value = familyMembers;
})
}


document.querySelectorAll("form").forEach(q=>{
    q.addEventListener('click', (e)=>{
        if(e.target && e.target.parentElement.matches(".delete-btn")){
            e.preventDefault();
            // Get the whole block
            let block = e.target.parentElement.parentElement;
            if(familyMembers === 1){
                // Just hide it
                block.classList.add("hide")
                familyMembers--;
            }else{
                //If it was the first replace it with the second
                let currentIndex = parseInt(block.id[1]);
                let p = block.parentElement.childNodes;
                p.forEach(child=>{
                    if(child.nodeName != "#text" && parseInt(child.id[1]) > currentIndex)
                        {
                            child.id = `m${child.id[1]-1}`;
                        }
                })
                // remove the whole block
                block.parentElement.removeChild(block);
                familyMembers--;
            }
            console.log(familyMembers);
            countInput.value = familyMembers;
        }
    })
})

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
                                <input type="text" placeholder="Disease Name" name="m1-psychological[]"/>
                                <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                        </div>`;
                break;
            case '2':
                row = `<div id = "c2" class="row show">
                                <input type="text" placeholder="Ulcer Name" name="m1-ulcher[]"/>
                                <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                        </div>`;
                break;
            case '3':
                row = `<div id = "c3" class="row show">
                                <input type="text" placeholder="Allergy Name" name="m1-allergy[]"/>
                                <button class="remove-btn"><img class="logo" src="/images/i_remove.svg" alt=""></button>
                        </div>`;
                break;
            case '4':
                row = `<div id = "c4" class="row show">
                                <input type="text" placeholder="Abnormality Name" name="m1-abnormal[]"/>
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

