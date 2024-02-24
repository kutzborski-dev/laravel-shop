export const hasParent = (target, elem) => {
    const parent = elem.parentElement;
    if(typeof elem === "string") elem = document.querySelector(elem);
    if(!parent) return false;
    
    if(typeof target === "string") target = document.querySelector(target);

    if(parent === target) {
        return true;
    }

    return hasParent(target, parent);
}