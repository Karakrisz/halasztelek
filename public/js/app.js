// ********************  Menu start **********************

class MenuManager {
    constructor(hamburgerId, menuId, navbarSelector) {
        this.hamburger = document.getElementById(hamburgerId);
        this.menu = document.getElementById(menuId);
        this.navbar = document.querySelector(navbarSelector);
        this.isOpen = false;

        this.hamburger.addEventListener('click', this.toggle.bind(this));
    }

    toggle = () => {

        if (this.isOpen) {
            // Zárás animáció
            this.menu.style.transform = "translateX(100%)";

            setTimeout(() => {
                this.menu.style.opacity = 0;
            }, 300);

        } else {
            // Nyitás animáció
            this.menu.style.opacity = 1;
            this.menu.style.transform = "translateX(0)";
        }

        this.menu.classList.toggle('active');
        this.navbar.classList.toggle('active');
        this.isOpen = !this.isOpen;
    };
}

// TODO ezt át kell írni szebben úgy, hogy css-bol jöjjenek az adatok 

const menuManager = new MenuManager('hamburger', 'menu', '.navbar');

// ********************  Menu end **********************

// ********************  Slider start **********************


class MatrixTextAnimation {
    constructor(selector) {
        this.matrixText = document.querySelectorAll(selector);
    }

    animateLetters() {
        this.matrixText.forEach((letter, index) => {
            setTimeout(() => {
                letter.style.opacity = "1";
                letter.style.transform = "translateY(0)";
            }, index * 50);
        });
    }
}


const matrixTextAnimation = new MatrixTextAnimation(".matrix-text__span");
matrixTextAnimation.animateLetters();

// ********************  Slider end **********************

// ********************  Gallery start **********************

class Gallery {
    constructor() {
        this.slideIndex = 1;
        this.slides = document.getElementsByClassName("gallery-content__sildes");
        this.dots = document.getElementsByClassName("gallery-content__row__column__demo");
        this.showSlide(this.slideIndex);
    }

    showSlide(n) {
        if (n > this.slides.length) { this.slideIndex = 1; }
        if (n < 1) { this.slideIndex = this.slides.length; }
        for (let i = 0; i < this.slides.length; i++) {
            this.slides[i].style.display = "none";
        }
        for (let i = 0; i < this.dots.length; i++) {
            this.dots[i].classList.remove("active");
        }
        this.slides[this.slideIndex - 1].style.display = "block";
        this.dots[this.slideIndex - 1].classList.add("active");
    }

    nextSlide() {
        this.showSlide(this.slideIndex += 1);
    }

    prevSlide() {
        this.showSlide(this.slideIndex -= 1);
    }

    currentSlide(n) {
        this.showSlide(this.slideIndex = n);
    }
}

const gallery = new Gallery();


document.getElementById("prevButton").addEventListener("click", () => {
    gallery.prevSlide();
});

document.getElementById("nextButton").addEventListener("click", () => {
    gallery.nextSlide();
});

document.getElementById("demo1").addEventListener("click", () => {
    gallery.currentSlide(1);
});

document.getElementById("demo2").addEventListener("click", () => {
    gallery.currentSlide(2);
});

document.getElementById("demo3").addEventListener("click", () => {
    gallery.currentSlide(3);
});

document.getElementById("demo4").addEventListener("click", () => {
    gallery.currentSlide(4);
});

document.getElementById("demo5").addEventListener("click", () => {
    gallery.currentSlide(5);
});

document.getElementById("demo6").addEventListener("click", () => {
    gallery.currentSlide(6);
});

// ********************  Gallery end **********************