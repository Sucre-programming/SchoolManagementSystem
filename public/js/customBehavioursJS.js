// control behavior for the user input field transitions

document.addEventListener('DOMContentLoaded', () => {

    const userInputFields = document.querySelectorAll('input[class*="userInput"]');

    const hoverlabel = (id)=>{

        document.querySelector(`label[for="${id}"]`).classList.add('hover');
    }

    userInputFields.forEach(field => {

        if(field.value != null || field.value != ""){
            hoverlabel(field.id);
        }

        field.onfocus = ()=>{

            document.querySelector(`label[for="${field.id}"]`).classList.add('hover');
        }

        field.onblur = ()=>{

            if(field.value === ""){
                document.querySelector(`label[for="${field.id}"]`).classList.remove('hover');
            }
            
        }
            
    });

});

//  console.log(document)

const activateTab = (tab) =>{

    var selectedTab = document.querySelector(`a[tab*="${tab}"]`);

    if(selectedTab != null){
        selectedTab.classList.add("activeTab");
    }else{
        console.log("no tab identified")
    }
}

 document.addEventListener('DOMContentLoaded', () => {
    
    var firstPart = currentRoute.split('.')[0];
    activateTab(firstPart)

});
