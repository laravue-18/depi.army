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
    const qrScanner = document.querySelector(".qr-scanner-box");

    if (window.innerWidth > 450) {
        const qr = gsap.to(".qr-scanner", {
            y: 300,
            repeat: -1,
            duration: 1,
            yoyo: true,
        });

        const qrImg = qrScanner.parentElement.querySelector(".qr-img");

        if (qrScanner) {
            qrImg.addEventListener("mouseover", () => {
                qr.pause();
            });

            qrImg.addEventListener("mouseleave", () => {
                qr.play();
            });
        }
    } else {
        const qr = gsap.to(".qr-scanner", {
            y: 200,
            repeat: -1,
            duration: 1,
            yoyo: true,
        });

        if (qrScanner) {
            qrScanner.addEventListener("mouseover", () => {
                qr.pause();
            });

            qrScanner.addEventListener("mouseleave", () => {
                qr.play();
            });
        }
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
        "background-position": "150px 0",
        duration: 18,
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

const circle = document.querySelectorAll(".rm-circle");
if (circle.length !== 0) {
    circle[0].style.background =
        "linear-gradient(276.23deg, #00DEFC -45.14%, #BAFFD1 89.24%)";
    circle[1].style.background =
        "linear-gradient(276.23deg, #00DEFC -45.14%, #BAFFD1 89.24%)";
}

let hamburgerMenu = document.querySelector(".hamburger-menu");
let mobileMenu = document.querySelector(".mobile-menu-box");

hamburgerMenu.addEventListener("click", (e) => {
    hamburgerMenu.classList.toggle("active");
    mobileMenu.classList.toggle("active");
});
