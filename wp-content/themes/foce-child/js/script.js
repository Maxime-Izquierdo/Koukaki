// import SimpleParallax from "simple-parallax-js-js";

// window.addEventListener('load', function(event) {
//     var image = document.getElementById('background-video');
//     new simpleParallax(image); 
// });

document.addEventListener('DOMContentLoaded', function () {
   
    // Menu Burger
    const burger = document.querySelector('.menu-toggle');

    burger.addEventListener('click', () => {
        burger.classList.toggle('active');
    });


    // Swiper Characters
    const swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 3,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 0,
            modifier: 1,
            slideShadows: false,
        },
        loop: true,
    });

    // Fonction pour déclencher l'animation fadeInUp
    function triggerFadeInUp(entry) {
        entry.target.style.animation = 'none'; // Réinitialise l'animation
        setTimeout(() => {
            entry.target.style.animation = 'fadeInUp 1s ease-in-out forwards'; // Applique à nouveau l'animation
        }, 10); // Légère pause pour que la réinitialisation prenne effet
    }

    // Observateur avec IntersectionObserver
    const observerOptions = {
        threshold: 0.1 // L'animation se déclenche quand 10% de l'élément est visible
    };

    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                triggerFadeInUp(entry);
            }
        });
    }, observerOptions);

    // Sélection des éléments à animer avec IntersectionObserver
    const elementsToAnimate = document.querySelectorAll('.logoAnim, span, #characters, #place, #studio h2, #oscars, .site-footer');

    elementsToAnimate.forEach(element => {
        sectionObserver.observe(element);
    });

    // Fonction pour appliquer l'effet flottant
    function applyFloatEffect() {
        const floatElements = document.querySelectorAll('.logoAnim');
        floatElements.forEach((floatAnim) => {
            let positionY = 0;
            let positionX = -5; // Commence en bas à gauche
            let direction = 1; // Variable pour changer la direction
            const speed = 0.08; // Vitesse de déplacement
            const maxY = 5; // Distance verticale maximale pour le point haut au milieu
            const maxX = 5; // Distance horizontale maximale pour le déplacement latéral

            // Désactiver l'animation CSS après fadeInUp
            floatAnim.addEventListener('animationend', () => {
                floatAnim.style.animation = 'none'; // Désactive l'animation CSS
                console.log("Animation CSS terminée, début de l'effet de flottement");
            });

            // Fonction pour faire flotter l'image
            function float() {
                // Phase 1 : De bas à gauche vers haut au milieu
                if (direction === 1) {
                    positionY -= speed; // Monter
                    positionX += speed; // Aller vers le centre
                    if (positionY <= -maxY) {
                        direction = 2; // Une fois en haut au milieu, descendre vers bas à droite
                    }
                }
                // Phase 2 : De haut au milieu vers bas à droite
                else if (direction === 2) {
                    positionY += speed; // Descendre
                    positionX += speed; // Aller vers la droite
                    if (positionY >= 0 && positionX >= maxX) {
                        direction = 3; // Une fois en bas à droite, revenir en bas à gauche
                    }
                }
                // Phase 3 : De bas à droite vers bas à gauche
                else if (direction === 3) {
                    positionX -= speed; // Retour vers la gauche
                    if (positionX <= -maxX) {
                        direction = 1; // Retour à la phase 1
                    }
                }

                // Appliquer la translation sur les axes X et Y
                floatAnim.style.transform = `translate(${positionX}px, ${positionY}px)`;

                // Utiliser requestAnimationFrame pour une animation fluide
                requestAnimationFrame(float);
            }

            // Démarrer l'animation de flottement
            float();
        });
    }

    // Appliquer l'effet flottant après le chargement complet de la fenêtre
    window.addEventListener('load', () => {
        applyFloatEffect();

    });

    
        // Effet Parallaxe sur les Nuages
    const cloudSection = document.querySelector('#place');
    const littleCloud = document.querySelector('.little-cloud');
    const bigCloud = document.querySelector('.big-cloud');

    if (cloudSection) {
        // Fonction pour mettre à jour les positions des nuages
        const updateCloudPositions = () => {
            // Récupérer la position de la section par rapport à la fenêtre
            const sectionTop = cloudSection.getBoundingClientRect().top;
            const sectionHeight = cloudSection.offsetHeight;

            // Calculer la progression du défilement dans la section (0 = début, 1 = fin)
            const scrollProgress = Math.min(1, Math.max(0, 1 - (sectionTop / window.innerHeight)));

            const littleCloudOffset = scrollProgress * 300;
            const bigCloudOffset = scrollProgress * 300;

            if (littleCloud) {
                littleCloud.style.transform = `translateX(-${littleCloudOffset}px)`;
            }

            if (bigCloud) {
                bigCloud.style.transform = `translateX(-${bigCloudOffset}px)`;
            }
        };

        // Observer pour entrer/sortir de la section des nuages
        const cloudObserverOptions = {
            threshold: 0.1
        };

        const cloudObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Ajouter un gestionnaire de scroll lorsque la section est visible
                    window.addEventListener('scroll', updateCloudPositions);
                    updateCloudPositions(); // Mettre à jour immédiatement
                } else {
                    // Supprimer le gestionnaire de scroll quand la section n'est plus visible
                    window.removeEventListener('scroll', updateCloudPositions);

                    // Réinitialiser à 0 quand la section n'est plus visible
                    if (littleCloud) {
                        littleCloud.style.transform = `translateX(0px)`;
                    }
                    if (bigCloud) {
                        bigCloud.style.transform = `translateX(0px)`;
                    }
                }
            });
        }, cloudObserverOptions);

        cloudObserver.observe(cloudSection);
    }
});
