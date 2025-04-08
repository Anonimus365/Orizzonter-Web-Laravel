const container = document.getElementById('container'); // Obtiene el elemento con el ID 'container'
const registerBtn = document.getElementById('register'); // Obtiene el botón de registro por su ID
const loginBtn = document.getElementById('login'); // Obtiene el botón de inicio de sesión por su ID

// Agrega un evento al botón de registro para activar la clase "active" en el contenedor
registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

// Agrega un evento al botón de inicio de sesión para remover la clase "active" del contenedor
loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});



// Simulación de una base de datos con un array
let users = JSON.parse(localStorage.getItem("users")) || [];

// Capturar formularios y botones
const signUpForm = document.querySelector(".sign-up form");
const signInForm = document.querySelector(".sign-in form");

// Registro de usuario
signUpForm.addEventListener("submit", function (e) {
    e.preventDefault();
    
    const name = signUpForm.querySelector("input[placeholder='Name']").value;
    const email = signUpForm.querySelector("input[placeholder='Email']").value;
    const password = signUpForm.querySelector("input[placeholder='Password']").value;

    // Verificar si el email ya está registrado
    const existingUser = users.find(user => user.email === email);
    if (existingUser) {
        alert("El email ya está registrado.");
        return;
    }

    // Agregar usuario al array
    users.push({ name, email, password });
    localStorage.setItem("users", JSON.stringify(users)); // Guardar en localStorage
    alert("Registro exitoso, ahora inicia sesión.");
    signUpForm.reset();
});

// Inicio de sesión
signInForm.addEventListener("submit", function (e) {
    e.preventDefault();

    const email = signInForm.querySelector("input[placeholder='Email']").value;
    const password = signInForm.querySelector("input[placeholder='Password']").value;

    // Buscar el usuario en el array
    const user = users.find(user => user.email === email && user.password === password);
    
    if (user) {
        alert(`Bienvenido, ${user.name}!`);
        window.location.href = "../dist/home/home.html"; // Redirigir a la página principal (debes crearla)
    } else {
        alert("Email o contraseña incorrectos. Si no tienes cuenta, regístrate.");
    }
});