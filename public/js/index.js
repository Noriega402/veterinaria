const toggle = document.getElementById('toggle')
const menu = document.getElementById('menu')

toggle.addEventListener('click', e => {
    // console.log(e.target)
    menu.classList.toggle('show')
});