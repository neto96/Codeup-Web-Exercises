"use strict";

var myNameIs = 'Ernesto';
function sayHello(name) {
	console.log("Hello from " + name);
}
sayHello(myNameIs);

//

var random = Math.floor((Math.random()*100)+1);

function isOdd(number) {
	 random % 2 == 0 ? console.log(number + " is not odd") : console.log(number + " is odd");
}
isOdd(random);
