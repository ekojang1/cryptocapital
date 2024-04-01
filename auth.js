// register
document.addEventListener("DOMContentLoaded", function() {
  const registerform = document.querySelector("register-form");
  registerform.addEventListener("submit", (e) => {
    e.preventDefault();

    // get info
    const email = registerform["email"].value;
    const password = registerform["password"].value;

    console.log(email, password);
  });
});
