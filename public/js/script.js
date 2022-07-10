
const arrtogglePassword_reset = document.querySelectorAll("#togglePassword");
arrtogglePassword_reset.forEach(element => {
    element.addEventListener('click', function () {
        const type = document.querySelector('#' + element.dataset.idinputpass).getAttribute("type") === "password" ? "text" : "password";
        if (type !== "password") {
            this.classList.add('fa-eye');
            this.classList.remove('fa-eye-slash');
        } else {
            this.classList.add('fa-eye-slash');
            this.classList.remove('fa-eye');
        }
        document.querySelector('#' + element.dataset.idinputpass).setAttribute("type", type);
    })
});


function onChange() {
    const password = document.querySelector('input[name=password]');
    const confirm = document.querySelector('input[name=confirm_password]');
    if (confirm.value === password.value) {
        confirm.setCustomValidity('');
    } else {
        confirm.setCustomValidity('Passwords do not match');
    }
}