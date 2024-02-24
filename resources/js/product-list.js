const sortButtons = document.querySelectorAll('a.sort-btn');

sortButtons.forEach(btn => {
    btn.href = btn.href + '#product-list'
});