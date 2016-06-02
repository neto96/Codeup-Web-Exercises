'use strict';


//grade exercise

var gradeA = 70;
var gradeB = 80;
var gradeC = 95;
var gradeAverage = (gradeA + gradeB + gradeC) / 3

if (gradeAverage > 80) {
	console.log("You're awesome")
} else {
	console.log("You need to practice more")
}


//discount exercise

var ryan = 250;
var cameron = 180;
var george = 320;
var discount

if (ryan > 200) {
	discount = ryan - (ryan * .35)
}
console.log("Ryan " + ryan + " " + discount)

if (cameron > 200) {
	discount = cameron - (cameron * .35)
} else {
	discount = cameron;
}
console.log("Cameron " + cameron + " "  + discount)

if (george > 200) {
	discount = george - (george * .35)
} 
console.log("George " + george + " " + discount)


//coin exercise

var flipACoin = Math.floor(Math.random() * 2);
var decision
decision = (flipACoin) ? console.log("Buy a house") : console.log("Buy a car");