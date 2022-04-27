let hamburger = document.getElementById("nav__burger");
hamburger.addEventListener("click", () => {
    let menu = document.getElementById("nav__box");
    menu.classList.toggle("nav__box_open");
    hamburger.classList.toggle("burger__bar_change");
})