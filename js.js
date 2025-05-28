// Typewriter js.
document.addEventListener("DOMContentLoaded", function() {
    let i = 0;
    let txt = 'Hvis jeg får tildelt Julehjælp, så kan jeg holde en klassisk jul ' +
        'hvor der måske er flæskesteg og lidt ekstra lækre ting. Måske noget chokolade.' ;
    let speed = 50;

    function typeWriter() {
        if (i < txt.length) {
            document.getElementById("typewriter").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }

    // Opret Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                typeWriter();
                observer.unobserve(entry.target); // Stop observer, så den ikke kører flere gange
            }
        });
    });

    // Start observer
    const typewriterElement = document.getElementById("typewriter");
    observer.observe(typewriterElement);
});
document.addEventListener("DOMContentLoaded", function() {
    let i = 0;
    let txt = 'Jeres hjælp betyder, at mine tre sønner og jeg kan få en rigtig julemiddag, et lille juletræ og en gave til hver af mine drenge. Uden julehjælpen kunne vi ikke holde jul.'
    let speed = 50;
    function typeWriter2() {
        if (i < txt.length) {
            document.getElementById("typewriter2").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter2, speed);
        }
    }

    // Opret Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                typeWriter2();
                observer.unobserve(entry.target); // Stop observer, så den ikke kører flere gange
            }
        });
    });

    // Start observer
    const typewriterElement = document.getElementById("typewriter2");
    observer.observe(typewriterElement);
});

//ToTop button: https://www.w3schools.com/howto/howto_js_scroll_to_top.asp//
let mybutton = document.getElementById("ToTop");

//when user scrolls down 20px from the top of the document, show the button//
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

//when user clicks on the button, scroll to the top of the document//
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

//counter for money donated//
function animateCountUp(elementId, target, duration) {
    const element = document.getElementById(elementId);
    const startTime = performance.now();

    function update(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const currentValue = Math.floor(progress * target);
        element.textContent = currentValue.toLocaleString('da-DK');

        if (progress < 1) {
            requestAnimationFrame(update);
        } else {
            element.textContent = target.toLocaleString('da-DK');
        }
    }

    requestAnimationFrame(update);
}

//starter animation 1: tæller op til 23.405.313 på 5 sekunder, starter efter et halvt sekund//
setTimeout(() => {
animateCountUp("counter", 23405313, 5000);
}, 500);


//starter animation 2: tæller op til 23.590 på 5 sekunder, starter efter et halvt sekundt//
setTimeout(() => {
animateCountUp("counter1", 23590, 5000);
}, 500);


//tælle op og ned funktion, ved click på plus og minus//
const plus = document.querySelector(".plus");
const minus = document.querySelector(".minus");
const antal = document.querySelector(".antal");


plus.addEventListener("click", () => {
    const nyttal = parseInt(antal.value) + 1;

    //limit på antal bøger der kan købes er 100//
    if(nyttal <=100){
        antal.value = nyttal;
    }
});
minus.addEventListener("click", () => {
    const nyttal = parseInt(antal.value) - 1;

    //limit på antal bøger der kan købes er 0//
    if(nyttal>0){
        antal.value = nyttal;
    }
});
