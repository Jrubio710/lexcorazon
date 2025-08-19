import './bootstrap';

document.addEventListener("DOMContentLoaded", () => {
    const intro = document.getElementById("intro-text");
    const services = document.getElementById("services-block");

    if (intro && services) {
        setTimeout(() => {
            // Animación de desvanecimiento
            intro.classList.add("opacity-0", "transition", "duration-1000");

            setTimeout(() => {
                // Ocultar el LEX CORAZÓN
                intro.style.display = "none";
                services.classList.remove("hidden");

                // Forzar que los bloques aparezcan animados
                const [coaching, mentoria] = services.querySelectorAll("div");

                if (coaching) {
                    coaching.classList.remove("opacity-0", "-translate-x-40");
                    coaching.classList.add("animate-slide-in-left");
                }

                if (mentoria) {
                    mentoria.classList.remove("opacity-0", "translate-x-40");
                    mentoria.classList.add("animate-slide-in-right");
                }
            }, 1000); // Tiempo tras fade-out
        }, 2500); // Tiempo de espera inicial
    }
});
