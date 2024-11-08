<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Looping Carousel with Expanding Card Effect</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f9f9f9;
        }

        .carousel-container {
            position: relative;
            width: 80%;
            max-width: 900px;
            overflow: hidden;
        }

        .carousel {
            display: flex;
            transition: transform 0.5s ease;
        }

        .category-card {
            position: relative;
            width: 300px;
            height: 400px;
            overflow: hidden;
            flex-shrink: 0;
            margin: 0 10px;
            cursor: pointer;
            transition: transform 0.3s ease, margin 0.3s ease, box-shadow 0.3s ease;
        }

        /* Enhanced hover effect */
        .category-card:hover {
            z-index: 2;
            transform: scale(1.2);
            /* Make it bigger */
            margin: 0 30px;
            /* Increase the margin for more space */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .category-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .category-label {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 10px 20px;
            font-size: 1rem;
            text-transform: uppercase;
            text-align: center;
            pointer-events: none;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .category-card:hover .category-label {
            transform: translateX(-50%) scale(1.1);
            background-color: rgba(0, 0, 0, 0.9);
        }

        .carousel-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 1.5rem;
            z-index: 1;
        }

        .carousel-button.left {
            left: 10px;
        }

        .carousel-button.right {
            right: 0px;
        }
    </style>
</head>

<body>

    <div class="carousel-container">
        <div class="carousel" id="carousel">
            <!-- Slides -->
            <div class="category-card">
                <img src="assets/img/tes1.jpg" alt="Beddings">
                <div class="category-label">Beddings</div>
            </div>
            <div class="category-card">
                <img src="assets/img/tes11.jpg" alt="Bed Linen">
                <div class="category-label">Bed Linen</div>
            </div>
            <div class="category-card">
                <img src="assets/img/tes1.jpg" alt="Bed Set">
                <div class="category-label">Bed Set</div>
            </div>
        </div>

        <!-- Navigation buttons -->
        <button class="carousel-button left" onclick="moveCarousel(-1)">&#10094;</button>
        <button class="carousel-button right" onclick="moveCarousel(1)">&#10095;</button>
    </div>

    <script>
        const carousel = document.getElementById("carousel");
        const cards = Array.from(document.querySelectorAll(".category-card"));
        const cardWidth = 320; // 300px + 10px margin on each side
        let currentIndex = cards.length;

        // Duplicate the slides for infinite scrolling effect
        cards.forEach(card => {
            const clone = card.cloneNode(true);
            carousel.appendChild(clone);
        });
        cards.forEach(card => {
            const clone = card.cloneNode(true);
            carousel.insertBefore(clone, carousel.firstChild);
        });

        // Set the initial transform position to start in the middle
        carousel.style.transform = `translateX(${-cardWidth * currentIndex}px)`;

        function moveCarousel(direction) {
            currentIndex += direction;
            carousel.style.transition = "transform 0.5s ease";
            carousel.style.transform = `translateX(${-cardWidth * currentIndex}px)`;

            // Loop back to the start or end once we reach the cloned slides
            carousel.addEventListener("transitionend", () => {
                if (currentIndex >= cards.length * 2) {
                    currentIndex = cards.length;
                    carousel.style.transition = "none";
                    carousel.style.transform = `translateX(${-cardWidth * currentIndex}px)`;
                }
                if (currentIndex <= 0) {
                    currentIndex = cards.length;
                    carousel.style.transition = "none";
                    carousel.style.transform = `translateX(${-cardWidth * currentIndex}px)`;
                }
            }, {
                once: true
            });
        }
    </script>

</body>

</html>
