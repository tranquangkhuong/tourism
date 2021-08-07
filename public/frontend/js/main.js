
//header page.
const translate = document.querySelectorAll(".translate");
const big_title = document.querySelector(".slider-text");
const header = document.querySelector("header");
const section = document.querySelector("section");
const opacity = document.querySelectorAll(".opacity");
let header_height = header.offsetHeight;
let section_height = section.offsetHeight;

window.addEventListener('scroll', () => {
    let scroll = window.pageYOffset;

    translate.forEach(element => {
        let speed = element.dataset.speed;
        element.style.transform = `translateY(${scroll * speed}px)`;
    });
    big_title.style.opacity = - scroll / (header_height / 2) + 1;

});
