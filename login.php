<!-- Página donde se realiza el inicio de sesión -->
<html>

<head>
    <title>TecnoPlanet-Login</title>
    <link rel="stylesheet" href="formStyle.css">
    <script src="https://kit.fontawesome.com/62ea397d3a.js"></script>
    <script src="funciones.js"></script>
</head>

<body>
    <div class="form-container">
        <h2><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/index.php" class="fas fa-arrow-left" id="back"></a>Log-in</h2>
        <form id="login-form">
            <div class="user-form">
                <div class="user-data">
                    <div class="form-input">
                        Email
                        <input id="login-Email" type="email" placeholder="Email" required>
                    </div>
                    <div class="form-input">
                        Contraseña
                        <input id="login-Pass" type="password" placeholder="Contraseña" required>
                    </div>
                    <div class="form-checkbox">
                        <input type="checkbox" style="font-size: 10px;" required>He leído y acepto los términos y condiciones de uso de <b>TecnoPlanet</b>
                    </div>
                    <h6>¿Aún no tienes un usuario?<a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/signup.php">Regístrate</a></h6>
                    <div class="form-submit">
                        <button type="button" id="loginButton" name="loginButton" style="border-radius: 5px;width:100px;border-style:solid;font-size:15px">Log-in</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- FIREBASE CONFIGURATION -->
    <script type="module">
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/9.8.2/firebase-app.js";
        import {
            getAnalytics
        } from "https://www.gstatic.com/firebasejs/9.8.2/firebase-analytics.js";
        import {
            getAuth,
            createUserWithEmailAndPassword,
            signInWithEmailAndPassword
        } from "https://www.gstatic.com/firebasejs/9.8.2/firebase-auth.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyAreCWPKJRS7vdmxKXUol217OW9NYWx5o0",
            authDomain: "ivan-c5dcc.firebaseapp.com",
            projectId: "ivan-c5dcc",
            storageBucket: "ivan-c5dcc.appspot.com",
            messagingSenderId: "730805522250",
            appId: "1:730805522250:web:b90ade1fb98ea585d9fbb3",
            measurementId: "G-Q51Z50J8Z1"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
        const auth = getAuth(app);

        loginButton.addEventListener('click', (e) => {

            var email = document.getElementById('login-Email').value;
            var password = document.getElementById('login-Pass').value;

            signInWithEmailAndPassword(auth, email, password)
                .then((userCredential) => {
                    // Signed in
                    const user = userCredential.user;
                    // ...
                    alert('Se ha iniciado sesión correctamente');
                    location.replace('http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/page.php');
                })
                .catch((error) => {
                    const errorCode = error.code;
                    const errorMessage = error.message;
                    // ..
                    alert(errorMessage);
                });
        });
    </script>
</body>

</html>