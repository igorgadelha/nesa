/* Author: Young K. Park (youngkeunpark@gmail.com / github: ozexpert) */
/* This explains good usage of JS closure */

var fontResizer = (function(){
    var defaultSize = 100; // in %, private variable
    var target;

    function setSize(){
        target.style.fontSize = defaultSize+'%';
    }

    return {
        increase: function(){
            defaultSize++;
            setSize();
        },
        decrease: function(){
            defaultSize--;
            setSize();
        },
        value: function(){
            return defaultSize;
        },
        setTarget: function(elem){
            target = document.getElementById(elem);
        },
        getTarget: function(){
            return target;
        }
    };
})();