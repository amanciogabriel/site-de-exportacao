// scripts.js

document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.querySelector('.banner-carousel');
    const images = carousel.querySelectorAll('img');
    let currentImageIndex = 0;

    function showImage(index) {
        images.forEach((image, i) => {
            if (i === index) {
                image.style.display = 'block';
            } else {
                image.style.display = 'none';
            }
        });
    }

    function nextImage() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        showImage(currentImageIndex);
    }

    // Mostra a primeira imagem
    showImage(currentImageIndex);

    // Alterna para a próxima imagem a cada 3 segundos
    setInterval(nextImage, 2500);
});
