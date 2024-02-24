import { hasParent } from "./utils";
import { mobileWidth } from "./config";

const mobileMenu = document.querySelector('#mobile-menu');
const mobileMenuBgOverlay = document.querySelector('#mobile-menu-bg-overlay');
const mobileMenuTrigger = document.querySelector('#mobile-menu-trigger');
const mobileMenuClose = document.querySelector('#mobile-menu-close');

const mobileNavCategories = document.querySelectorAll('.category-menu-item-label--mobile button');

initMobileNavHandler();

function initMobileNavHandler() {
    mobileMenuTrigger.addEventListener('click', function(){
        show(mobileMenu);
        show(mobileMenuBgOverlay);
    });

    mobileMenuClose.addEventListener('click', function(){
        hide(mobileMenu);
        hide(mobileMenuBgOverlay);
    });

    if(window.innerWidth <= mobileWidth) {
        mobileNavCategories.forEach(item => {
            const target = item.getAttribute('data-target');
            const targetMenu = document.querySelectorAll(`.category-menu-item-submenu--mobile[data-panel="${target}"]`)[0];
            console.log(targetMenu);
            const backBtn = document.querySelector(`#${target}-back-btn`);

            item.addEventListener('click', function(){
                show(targetMenu);
            });
            
            backBtn.addEventListener('click', function(e){
                hide(targetMenu);
            });
        });
    } else {
        // Hide mobile nav and reset it to default state
        // To avoid weird behaviour when resizing between desktop and mobile
        const targetMenus = document.querySelectorAll('.category-menu-item-submenu--mobile');
        targetMenus.forEach(hide);

        hide(mobileMenu);
        hide(mobileMenuBgOverlay);
    }
}

window.addEventListener('resize', function(){
    initMobileNavHandler();
});

const show = (menu) => {
    menu.classList.remove('hidden');
}

const hide = (menu) => {
    menu.classList.add('hidden');
}