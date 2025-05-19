
document.addEventListener("DOMContentLoaded", function() {
    var i = 0;
    var txt = 'Hvis jeg får tildelt Julehjælp, så kan jeg holde en klassisk jul ' +
        'for mig og mine børn, en jul som jeg virkelig gerne vil give dem. En jul, hvor der måske er ' +
        'flæskesteg og lidt ekstra lækre ting, som hører sig til. Måske noget chokolade.';
    var speed = 50;

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
    var i = 0;
    var txt = 'Jeres hjælp til vores lille familie, mine tre sønner og mig, betyder, ' +
        'at vi kan få en julemiddag med alt det, der hører til, et lille juletræ, ' +
        'og der er en pakke under træet til hver af mine skønne drenge. ' +
        'Jeres julehjælp er det, der gør det muligt at holde jul for mine drenge.'
    var speed = 50;
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