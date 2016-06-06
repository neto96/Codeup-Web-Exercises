(function() {
    "use strict";
   
    var circle = {
        radius: 3,
    
        getArea: function () {
            return Math.PI * Math.pow(this.radius, 2); 
        },

        logInfo: function (doRounding) {
            var area = this.getArea();
            if (doRounding) {
                area = Math.round(area);
            }
    
            console.log("Area of a circle with radius: " + this.radius + ", is: " + area);
        }
    };

    console.log("Raw circle information");
    circle.logInfo(false);
    console.log("Circle information rounded to the nearest whole number");
    circle.logInfo(true);

    console.log("=======================================================");

    circle.radius = 5;

    console.log("Raw circle information");
    circle.logInfo(false);
    console.log("Circle information rounded to the nearest whole number");
    circle.logInfo(true);
})();