var userData = [];
class newUser {
    constructor(email, password, firstName, lastName) {
        this.email = email;
        this.password = password;
        this.firstName = firstName;
        this.lastName = lastName;
    }
}

function registerUser() {
    let email = document.getElementById('email').value;
    let password = document.getElementById('Password').value;
    let firstName = document.getElementById('first-name').value;
    let lastName = document.getElementById('last-name').value;

    let newUserInstance = new newUser(email, password, firstName, lastName);
    console.log(newUserInstance);
    userData.push(newUserInstance);
    console.log(userData);
    
    clear();
}

function clear() {
    document.getElementById('email').value = '';
    document.getElementById('Password').value = '';
    document.getElementById('first-name').value = '';
    document.getElementById('last-name').value = '';
}








