"use strict";

(function() {
	var myNameIs = 'Ernesto';
	function sayHello(daName) {
	console.log("Hello from " + daName);
	}
	sayHello(myNameIs);
})();


//

(function() {
	var random = Math.floor((Math.random()*100)+1);
	function isOdd(number) {
	 random % 2 == 0 ? console.log(number + " is not odd") : console.log(number + " is odd");
	}
isOdd(random);
})();
