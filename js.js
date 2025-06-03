// Typewriter effekt på citater
//starter funktionen efter DOMContent er loaded
document.addEventListener("DOMContentLoaded", function() {
    // i er indikator for hvilket bogstav vi er nået til
    let i = 0;
    // txt er det tekststykke vi gerne vil have frem på skærmen
    let txt = 'Hvis jeg får tildelt Julehjælp, så kan jeg holde en klassisk jul ' +
        'hvor der måske er flæskesteg og lidt ekstra lækre ting. Måske noget chokolade.' ;
    // speed er tidsmellemrummet imellem karakterene, altså hastigheden på effekten
    let speed = 50;
    //den funktion der viser et bogstav af gangen
    function typeWriter() {
        // hvis vi ikke er færdige med teksten, altså hvis i er mindre end antallet af karaktere i txt
        // så tilføjer den det næste bogstav fra txt i div'en med id'et typewriter
        // efter det går i en op, og function bliver "kaldt" igen efter speed (tiden) er gået
        if (i < txt.length) {
            document.getElementById("typewriter").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }

    // Opret Intersection Observer
    // Vi ville gerne have at effekten først startede efter at brugeren var scrollet ned til teksten, så vi sådan set overskriver den Event Listner der starter funktionen efter DOMContent er loaded
    // opretter en ny const som observere om vores tidligere element er synligt på brugerens skærm
    const observer = new IntersectionObserver((entries) => {
        // når elementet laver sin "entre" starter denne funktion
        entries.forEach(entry => {
            // og hvis den er "intersecting" starter typeWriter funktionen
            // Stop observer, så den ikke kører flere gange
            if (entry.isIntersecting) {
                typeWriter();
                observer.unobserve(entry.target);
            }
        });
    });

    // finder elementet med id'et typewriter og observere det
    const typewriterElement = document.getElementById("typewriter");
    observer.observe(typewriterElement);
});
// det samme bare et element med id'et typewriter2
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
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                typeWriter2();
                observer.unobserve(entry.target);
            }
        });
    });

    const typewriterElement = document.getElementById("typewriter2");
    observer.observe(typewriterElement);
});

//counter for money donated//
//funktion der tæller op, med et "target", altså et bestemt tal den tæller til, og en "duration", altså en tid det skal tage
function animateCountUp(elementId, target, duration) {
    // getElementById, finder elementet i hele document, og finder et starttidspunkt
    const element = document.getElementById(elementId);
    const startTime = performance.now();

    //kaldes igen og igen, som en update
    function update(currentTime) {
        // hvor lang tid animationen har varet altså den nuværende tid trukket fra starttiden
        const elapsed = currentTime - startTime;
        // progress er det opdaterede tal, som vises på skærmen
        // stopper når progress når 1, da forskellen på elapsed og duration er det samme
        const progress = Math.min(elapsed / duration, 1);
        const currentValue = Math.floor(progress * target);
        // bruger en textContent til at erstatte noget i teskten, her bruger vi to LocaleString, for at formatet er korrekt, som vi bruger i danmark(1.000.000)
        element.textContent = currentValue.toLocaleString('da-DK');

        // denne kører altså hvis progress er mindre end 1
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


//tælle op og ned funktion, ved click på plus og minus
// laver variabler for hver knap og input og finder dem i document
const plus = document.querySelector(".plus");
const minus = document.querySelector(".minus");
const antal = document.querySelector(".antal");

//plus funktionen der "lytter" på et klik, som laver et nyttal der opdatere valuen i elementet på klassen antal
// den siger også at nyttal skal være mindre end eller lig med 100, som er maks antal bøger man kan købe
plus.addEventListener("click", () => {
    const nyttal = parseInt(antal.value) + 1;

    if(nyttal <=100){
        antal.value = nyttal;
    }
});
// gør det samme som plus funktionen trækker dog bare en fra, og siger at nyttal skal være højere end 0
minus.addEventListener("click", () => {
    const nyttal = parseInt(antal.value) - 1;

    if(nyttal>0){
        antal.value = nyttal;
    }
});

//deep-link til interne tabs//
// denne siger hvis der en hash i url'en, i det her tilfælde refereres til det id det bestemt tab content har
// så skal den vise den tab med det hash
const hash = window.location.hash;

if (hash) {
    const triggerEl = document.querySelector(`a[href="${hash}"]`);
    if (triggerEl) {
        const tab = new bootstrap.Tab(triggerEl);
        tab.show();
    }
}

// Opdater hash i URL når der skiftes tab
// querySelectorAll vælger alle med den data-bs-toggle, så denne funktion sker hver gang
const tabLinks = document.querySelectorAll('a[data-bs-toggle="tab"]');
//for hver at de her variabler tabLinks, er der en eventlistner som lytter til den bs.tab er shown
// og replaceState ændrer så url'en, så hvis man f.eks. sender linket at den ikke leder tilbage til "moder"siden, altså siden uden det her hash.
// dette gør at man kan sende url'en, så modtageren stadig kan åbne en anden tab end den med klassen shown.
tabLinks.forEach(link => {
    link.addEventListener('shown.bs.tab', function (event) {
        history.replaceState(null, null, event.target.getAttribute('href'));
    });
});
