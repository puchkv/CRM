// ============================================================================
//    Author: Kenneth Perkins
//    Date:   Aug 28, 2020
//    Taken From: http://programmingnotes.org/
//    File:  Utils.js
//    Description: Javascript that handles general utility functions    
// ============================================================================
/**
* NAMESPACE: Utils
* USE: Handles general utility functions.
*/
var Utils = Utils || {};
(function(namespace) {
    'use strict';   
 
    // Property to hold public variables and functions
    let exposed = namespace;
    
    /**
    * FUNCTION: isBefore
    * USE: Determines if 'elementX' comes before 'elementY' in the DOM tree.
    * @param elementX: The first Javascript element to compare.
    * @param elementY: The second Javascript element to compare.
    * @param container: Optional. The container to limit the search.    
    * @return: True if 'elementX' comes before 'elementY', false otherwise.
    */    
    exposed.isBefore = (elementX, elementY, container = null) => {
        container = container || (elementX.parentNode === elementY.parentNode ? elementX.parentNode : null) || document;        
        let items = container.querySelectorAll('*');
        let result = false;
        for (const item of items) {
            if (item === elementX) {
                result = true;
                break;
            } else if (item === elementY) {
                result = false;
                break;
            }            
        }
        return result;
    }
    
    /**
    * FUNCTION: isAfter
    * USE: Determines if 'elementX' comes after 'elementY' in the DOM tree.
    * @param elementX: The first Javascript element to compare.
    * @param elementY: The second Javascript element to compare.
    * @param container: Optional. The container to limit the search.    
    * @return: True if 'elementX' comes after 'elementY', false otherwise.
    */      
    exposed.isAfter = (elementX, elementY, container = null) => {
        return !exposed.isBefore(elementX, elementY, container);
    }    
 
    (function (factory) {
        if (typeof define === 'function' && define.amd) {
            define([], factory);
        } else if (typeof exports === 'object') {
            module.exports = factory();
        }
    }(function() { return namespace; })); 
}(Utils)); // http://programmingnotes.org/