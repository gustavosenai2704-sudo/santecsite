document.addEventListener("DOMContentLoaded", function () {
    const cards = document.getElementById("cards");
    const dotsContainer = document.getElementById("dots");

    let index = 0;
    const total = cards.children.length;
    const cardWidth = 344;

    for (let i = 0; i < total; i++) {
        let dot = document.createElement("span");
        dot.addEventListener("click", () => moveTo(i));
        dotsContainer.appendChild(dot);
    }

    function updateDots() {
        const dots = dotsContainer.children;
        for (let d of dots) d.classList.remove("active");
        dots[index].classList.add("active");
    }

    function moveTo(i) {
        index = i;
        cards.style.transform = `translateX(-${index * cardWidth}px)`;
        updateDots();
    }

    function autoSlide() {
        index++;
        if (index >= total) index = 0;
        moveTo(index);
    }

    updateDots();
    setInterval(autoSlide, 3500);
});