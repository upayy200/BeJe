<script>
    const ctaBanner = document.getElementById("cta-banner");
    const showAt = 100; // Jarak scroll sebelum CTA muncul (dalam px)

    window.addEventListener("scroll", () => {
        ctaBanner.classList.toggle("show", window.scrollY > showAt);
    });

    // Quick Review Button functionality
    document.addEventListener("DOMContentLoaded", () => {
        const productItems = document.querySelectorAll('.product-item');
        const quickReviewPopup = document.getElementById('quickReviewPopup');
        const overlay = document.getElementById('overlay');
        const closePopup = quickReviewPopup?.querySelector('.close-popup');
        const popupImage = quickReviewPopup?.querySelector('.popup-image');
        const popupName = quickReviewPopup?.querySelector('.popup-name');
        const popupPrice = quickReviewPopup?.querySelector('.popup-price');
        const popupDescription = quickReviewPopup?.querySelector('.popup-description');

        console.log('QuickReviewPopup:', quickReviewPopup);
        console.log('Overlay:', overlay);

        productItems.forEach(item => {
            const button = item.querySelector('.quick-review-button');
            const name = item.getAttribute('data-name');
            const price = item.getAttribute('data-price');
            const description = item.getAttribute('data-description');
            const imageSrc = item.querySelector('img').src;

            console.log('Product Item:', item);
            console.log('Quick Review Button:', button);

            if (button) {
                item.addEventListener('mouseenter', () => {
                    button.style.display = 'block';
                });

                item.addEventListener('mouseleave', () => {
                    button.style.display = 'none';
                });

                button.addEventListener('click', () => {
                    if (quickReviewPopup && overlay) {
                        popupImage.src = imageSrc;
                        popupName.textContent = name;
                        popupPrice.textContent = price;
                        popupDescription.textContent = description;
                        quickReviewPopup.style.display = 'block';
                        overlay.style.display = 'block';
                    }
                });
            } else {
                console.warn('Button not found for product:', item);
            }
        });

        if (closePopup) {
            closePopup.addEventListener('click', () => {
                quickReviewPopup.style.display = 'none';
                overlay.style.display = 'none';
            });
        }

        window.addEventListener('click', (event) => {
            if (event.target === quickReviewPopup || event.target === overlay) {
                quickReviewPopup.style.display = 'none';
                overlay.style.display = 'none';
            }
    });
});
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>