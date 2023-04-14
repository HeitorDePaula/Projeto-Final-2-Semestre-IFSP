const form = document.querySelector('#register-form');
const inputs = document.querySelectorAll('input');


const email = document.querySelector('#email');


const patterns = {
    phone1: /^(\d{11})$/ ,
    password: /^[a-z\d]{5,12}$/i,
    email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/
};



let validate = ((field, regex) => {
    if(regex.test(field.value)) {
        field.className = 'valid'

    } else {
        field.className = 'invalid'
    }

});

inputs.forEach(input => {
    input.addEventListener('keyup', (e) => {

       // validate(e.target, patterns[e.target.attributes.name.value]);
        validate(e.target, patterns[e.target.attributes.name.value])
    });
});

// email.addEventListener('keyup', (e) => {
//     console.log(e.target.value)
    
// });

