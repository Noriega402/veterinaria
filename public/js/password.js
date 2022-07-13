let btn = document.getElementById('showPassword')
let input = document.getElementById('Password')
let icon = document.getElementById('icon_password')

btn.addEventListener('click', (e) => {
    // console.log(icon.classList.contains('fa-eye-slash'));
    if (icon.classList.contains('fa-eye')) {
        icon.classList.replace('fa-eye', 'fa-eye-slash')
        input.type = "text"
        console.log("show password")

    } else {
        icon.classList.replace('fa-eye-slash', 'fa-eye')
        input.type = "password"
        console.log("hidden password")
    }
})