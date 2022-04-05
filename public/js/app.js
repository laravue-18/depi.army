"use strict";

gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(CSSRulePlugin);

const init = () => {
    const headerTimgline = gsap.timeline();

    // header content animation
    headerTimgline
        .from(".banner-content h2", {
            y: 30,
            opacity: 0,
            duration: 1,
            dealy: 0.4,
        })
        .from(".banner-content > p", {
            y: 30,
            opacity: 0,
            duration: 1,
            dealy: 0.4,
        });

    // qr scanner animation
    const qr = gsap.to(".qr-scanner", {
        y: 300,
        repeat: -1,
        duration: 1,
        yoyo: true,
    });

    const qrScanner = document.querySelector(".qr-right");
    if (qrScanner) {
        qrScanner.addEventListener("mouseover", () => {
            qr.pause();
        });

        qrScanner.addEventListener("mouseleave", () => {
            qr.play();
        });
    }

    const dotTimeline = gsap.timeline();
    dotTimeline
        .to(".join-overlay", {
            rotation: 150,
            duration: 60,
            scrollTrigger: {
                trigger: ".join-overlay",
                start: "top 80%",
                end: "botom 50%",
                yoyo: true,
                scrub: 1,
            },
        })
        .to(".art-dot", {
            rotation: 150,
            duration: 60,
            scrollTrigger: {
                trigger: ".art-dot",
                start: "top 80%",
                end: "botom 50%",
                yoyo: true,
                scrub: 1,
            },
        })
        .to(".info-card-dot", {
            rotation: 150,
            duration: 60,
            scrollTrigger: {
                trigger: ".info-card-dot",
                start: "top 80%",
                end: "botom 50%",
                yoyo: true,
                scrub: 1,
            },
        });

    // banner background animation

    const bannerTimeline = gsap.timeline();

    bannerTimeline.from(".banner-section", {
        "background-position": "150px -150px",
        duration: 10,
        yoyo: true,
        repeat: -1,
    });

    // art section
    const artTimeLine = gsap.timeline();
    artTimeLine
        .to(".art-section h2", {
            opacity: 1,
            duration: 1,
            scrollTrigger: {
                trigger: ".art-section h2",
                start: "top 80%",
                end: "bottom center",
                scrub: 1,
                yoyo: true,
            },
        })
        .to(".art-section p", {
            opacity: 1,
            duration: 1,
            scrollTrigger: {
                trigger: ".art-section p",
                start: "top 80%",
                end: "bottom center",
                scrub: 1,
                yoyo: true,
            },
        });
};

// sticky menu
const navBarSelector = document.querySelector(".header-section");
const navBar = navBarSelector.offsetTop;

window.onscroll = () => {
    if (window.pageYOffset > 0) {
        navBarSelector.classList.add("sticky");
    } else {
        navBarSelector.classList.remove("sticky");
    }
};

window.onload = () => {
    init();
};

// input dropdown
const formSelectBtn = document.querySelector(".form-select-btn");
const selectOption = document.querySelector(".select-option");
const inputOption = document.querySelectorAll(".select-option a");
const inputBox = document.querySelector(".select-input");

formSelectBtn.addEventListener("click", () => {
    if (selectOption.classList.contains("active")) {
        selectOption.classList.remove("active");
    } else {
        selectOption.classList.add("active");
    }
});

inputOption[0].classList.add("selected");

inputOption.forEach((e) => {
    e.addEventListener("click", () => {
        if (!e.classList.contains("selected")) {
            inputOption.forEach((elem) => {
                elem.classList.remove("selected");
            });
            e.classList.add("selected");
            formSelectBtn
                .querySelector("i")
                .setAttribute("class", e.getAttribute("data-icon"));
            inputBox.setAttribute("placeholder", e.getAttribute("data-info"));
        }
    });
});

window.onclick = (e) => {
    if (!e.target.classList.contains("form-select-btn")) {
        selectOption.classList.remove("active");
    }
};

const circle = document.querySelectorAll(".rm-circle");

circle[0].style.background =
    "linear-gradient(276.23deg, #00DEFC -45.14%, #BAFFD1 89.24%)";
circle[1].style.background =
    "linear-gradient(276.23deg, #00DEFC -45.14%, #BAFFD1 89.24%)";
