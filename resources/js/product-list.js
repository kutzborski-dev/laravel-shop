import { hasParent } from './utils';

const sortButtons = document.querySelectorAll('a.sort-btn');

sortButtons.forEach(btn => {
    btn.href = btn.href + '#product-list'
});


const searchBarToggle = document.querySelector('#search-bar-toggle');
const searchBar = document.querySelector('#search-bar');

searchBarToggle.addEventListener('click', function(){
    searchBar.classList.toggle('hidden');
});

document.body.addEventListener('click', function(e) {
    if(!searchBar.className.includes('hidden') && e.target != searchBar && !hasParent(searchBar, e.target) && e.target != searchBarToggle && !hasParent(searchBarToggle, e.target)) {
        searchBar.classList.add('hidden');
    }
});