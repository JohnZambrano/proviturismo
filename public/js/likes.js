

document.addEventListener('click', (e) => {
    const likeBtn = e.target.closest('.like-button');
    if (!likeBtn) return;

    const card = likeBtn.closest('.card');
    const counter = likeBtn.querySelector('.like-count');
    const cardId = card.dataset.id;

    let currentLikes = parseInt(counter.textContent);
    currentLikes++;
    counter.textContent = currentLikes;

    likeBtn.style.transform = 'scale(1.1)';
    setTimeout(() => likeBtn.style.transform = 'scale(1)', 200);
});