import { hasParent } from "./utils";
import { mobileWidth } from "./config";

const navMenuItems = document.querySelectorAll('.category-menu-item-label a');
const header = document.querySelector('#page-header');

initNavHandler();

function initNavHandler() {
    if(window.innerWidth > mobileWidth) {
        navMenuItems.forEach(item => {
            const target = item.getAttribute('data-target');
            const targetMenu = document.querySelectorAll(`.category-menu-item-submenu[data-menu="${target}"]`)[0];
            
            item.addEventListener('mouseenter', function(){
                targetMenu.classList.remove('hidden');
        
                header.addEventListener('mouseleave', function(e){
                    if(!hasParent(this, targetMenu)) {
                        targetMenu.classList.add('hidden');
                    }
                });
        
                targetMenu.addEventListener('mouseleave', function(e){
                    this.classList.add('hidden');
                });
            });
        });
    }
}

window.addEventListener('resize', function(){
    initNavHandler();
});