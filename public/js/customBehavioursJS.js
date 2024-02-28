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

// console.log(document)