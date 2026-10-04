document.addEventListener('DOMContentLoaded', () => {
    // Gallery Thumbnails Switcher
    const primaryImg = document.querySelector('.car-gallery .primary-image img');
    const thumbnails = document.querySelectorAll('.car-gallery .thumbnails img');

    if (primaryImg && thumbnails.length) {
        thumbnails.forEach(thumb => {
            thumb.addEventListener('click', () => {
                primaryImg.src = thumb.src;
                thumbnails.forEach(t => t.classList.remove('active'));
                thumb.classList.add('active');
            });
        });
    }

    // Watchlist Heart Toggle
    document.querySelectorAll('.btn-heart').forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const svgs = button.querySelectorAll('svg');
            if (svgs.length === 2) {
                svgs[0].classList.toggle('hidden');
                svgs[1].classList.toggle('hidden');
            }
        });
    });
});
