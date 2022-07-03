//LogIn
/* const loginForm = document.querySelector("#login-form");

loginForm.addEventListener('submit', (e) => {
    e.preventDefault();

    console.log(email, password);

    const email = document.getElementById('#login-Email').value;
    const password = document.getElementById('#login-Pass').value;




    auth.createUserWithEmailAndPassword(email, password)
        .then((userCredential) => {
            // Signed in
            const user = userCredential.user;
            // ...
        })
        .catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;
            // ..
        });

}); */

//SignUp
const singupForm = document.querySelector('#signup-form');

singupForm.addEventListener('submit', (e) => {
    e.preventDefault();

    console.log(email, password);

    const email = document.getElementById('#signupEmail').value;
    const password = document.getElementById('#signupPass').value;

    createUserWithEmailAndPassword(auth, email, password)
        .then((userCredential) => {
            // Signed in
            const user = userCredential.user;
            // ...
        })
        .catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;
            // ..
        });

});


function check_user() {

}

function sign_user() {
    //SignUp
    createUserWithEmailAndPassword(auth, email, password)
        .then((userCredential) => {
            // Signed in
            const user = userCredential.user;
            // ...
        })
        .catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;
            // ..
        });

}