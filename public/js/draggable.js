
//  EVENTS FOR DRAGABLE ITEMS :::::
//  onDragStart  
//  onDragOver
//  onDrop

//  OTHERS:
//  onDragEnter
//  onDragExit
//  onDragLeave


const KNOWN_OPTIONS = [
    'draggableSelector', 
    'dragging', 'dropping',
    'animation'
];



class Draggable {

    constructor ([...containers], options = {}) {

        this.containers = [...containers];

        this.options = this.getOptions(options);

        this.init();
    }


    getItems(container) {
        return container.querySelectorAll(this.options.draggableSelector);
    }

    getOptions(options) {

        let knownOptions = {};

        Object.entries(options).forEach(([key, value]) => {
            if(KNOWN_OPTIONS.some(value => value === key)) {
                if(key === 'draggableSelector') {
                    knownOptions['draggableClassName'] = value.split('.')[1];
                } 

                knownOptions[key] = value;
            } else {
                throw new Error(`\n
                There is unknown option with name "${key}"
                Check documentation for more...\n\n`);
            }
        });

        return knownOptions;
    }


    // EXPERIMENTAL
    //  getDragOverElement(container, mouseY) {

    //     const draggingClassName = 
    //         (this.options.dragging === undefined) ? 
    //         '.dragging' : this.options.dragging;
        
    //     const staticItems = container.querySelectorAll(`
    //         ${this.options.draggableSelector}:not(${draggingClassName})`);

    //     if(staticItems.length <= 0) {
    //         return null;
    //     } else {
    //         return Array.from(staticItems).reduce((closest, child) => {
    //             const box = child.getBoundingClientRect();
    //             const offset = ((mouseY - box.top) - box.height);
                
    //             if(offset < 0 && offset > closest.offset) {
    //                 return { offset: offset, element: child }
    //             } else {
    //                 return closest;
    //             }
    //         });
    //     }
    // }  


    isBefore(elementX, elementY, container) {
        const items = container.querySelectorAll(this.options.draggableSelector);
        let result = false;

        for(const item of items) {

            if(item === elementX) {
                result = true;
                break;
            } else if (item === elementY) {
                result = false;
                break;
            }
        }

        return result;
    }

    getOverItem(container, currentItem) {

        if(currentItem === null) {
            return null;
        }

        if(currentItem.parentNode != null) {
            if(currentItem.parentNode === container) {                
                return currentItem;
            } else {
                return this.getOverItem(container, currentItem.parentNode);
            }
        }

        return undefined;
    }

    getContainerLastChild(container) {
        if(container != null && container != undefined) {
            const items = this.getItems(container);
            return items[items.length - 1];
        }
        return null;
    }

    init() {

        this.containers.forEach(container => {

            // onDragOver event handler
             container.ondragover = e => {
                let draggableItem = document.querySelector(this.options.dragging || '.dragging');

                const dragOverItem = this.getOverItem(container, e.target);
                //const dragOverItem = this.getDragOverElement(container, e.clientY);

                if(dragOverItem != null && dragOverItem != undefined) {

                    if(this.isBefore(draggableItem, dragOverItem, container)) {
                        container.insertBefore(dragOverItem, draggableItem);
                    } else {
                        container.insertBefore(draggableItem, dragOverItem);
                    }
                } else {
                    if(draggableItem.parentNode != container) {

                        if(draggableItem.parentNode.className === container.className){
                            container.appendChild(draggableItem);
                        }
                    } else {
                        const lastItem = this.getContainerLastChild(container);
                        if(lastItem != null) {
                            container.insertBefore(lastItem, draggableItem);
                        }
                    }
                }
                
            }

            container.ondrop = e => {
               // e.preventDefault();
                
            }

            container.ondragenter = e => {
                e.preventDefault();
            }


            this.getItems(container).forEach(item => {

                item.classList.add(this.options.animation || 'transition'); // this!

                item.ondragstart = e => {
                    e.target.classList.add(this.options.dragging || 'dragging');
                    e.dataTransfer.effectAllowed = 'move';
                    e.dataTransfer.dropEffect = 'move';
                }

                item.ondragend = e => { 
                    e.target.classList.remove(this.options.dragging || 'dragging');
                }

            });
        });
    }
}








