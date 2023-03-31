// bottom to top button
var toTopButton = document.getElementById("to-top-button");
console.log(window.getComputedStyle(toTopButton).display);

window.onscroll = function () {
    if (
        document.body.scrollTop > 200 ||
        document.documentElement.scrollTop > 200
    ) {
        toTopButton.classList.remove("hidden");
    } else {
        toTopButton.classList.add("hidden");
    }
};

function goToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
}

const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");
var myNav = document.getElementById("mynav");

btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
    // console.log(window.getComputedStyle(menu).display);
    if (window.getComputedStyle(menu).display === "block") {
        myNav.classList.remove("bg-transparent");
        myNav.classList.add("bg-zinc-900");
    } else {
        if (window.pageYOffset <= 50) {
            myNav.classList.remove("bg-zinc-900");
            myNav.classList.add("bg-transparent");
        }
    }
});

window.onscroll = function () {
    if (window.pageYOffset > 50) {
        myNav.classList.add("bg-zinc-900");
        myNav.classList.remove("bg-transparent");
    } else {
        myNav.classList.add("bg-transparent");
        myNav.classList.remove("bg-zinc-900");
    }
};
