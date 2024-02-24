import { hasParent } from "./utils";
import { mobileWidth } from "./config";

const navMenuItems = document.querySelectorAll('.category-menu-item-label a');
const header = document.querySelector('#page-header');

function initNavHandler() {
    if(window.innerWidth > mobileWidth) {
        navMenuItems.forEach(item => {
            const target = item.getAttribute('data-target');
            const targetMenu = document.querySelectorAll(`.category-menu-item-submenu[data-menu="${target}"]`)[0];
            
            item.addEventListener('mouseenter', function(){
                showMenu(targetMenu);
        
                header.addEventListener('mouseleave', function(e){
                    if(!hasParent(this, targetMenu)) {
                        hideMenu(targetMenu);
                    }
                });
        
                targetMenu.addEventListener('mouseleave', function(e){
                    hideMenu(this);
                });
            });
        });
    }
}

initNavHandler();

const showMenu = (menu) => {
    menu.classList.remove('hidden');
}

const hideMenu = (menu) => {
    menu.classList.add('hidden');
}

window.addEventListener('resize', function(){
    // Re-init on resize to make sure we disable this functionality for mobile to avoid weirdness
    initNavHandler();
});