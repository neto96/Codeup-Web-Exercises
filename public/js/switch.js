'use strict';


//discount exercise

var luckyNumber = Math.floor(Math.random()* 6);
var discount0 = 0;
var discount1 = .1;
var	discount2 = .25;
var discount3 = .35;
var discount4 = .50;
var discount5 = 1;
var discountedAmount;
var paid = 60;


switch (luckyNumber) {
	case 0:
		discountedAmount = (paid - (paid * discount0))	
		break;
	case 1:
		discountedAmount = (paid - (paid * discount1))
		break;
	case 2:
		discountedAmount = (paid - (paid * discount2))
		break;
	case 3:
		discountedAmount = (paid - (paid * discount3))
		break;
	case 4:
		discountedAmount = (paid - (paid * discount4))
		break;
	case 5:
		discountedAmount = (paid - (paid * discount5))
		break;
	default:
		paid
	break;
}
console.log(discountedAmount);


//month exercise

var monthNumber = Math.floor(Math.random()* 12) + 1;
var monthName;

switch (monthNumber){
	case 1:
		monthName = "January"
		break;
	case 2:
		monthName = "February"
		break;
	case 3:
		monthName = "March"
		break;
	case 4:
		monthName = "April"
		break;
	case 5:
		monthName = "May"
		break;
	case 6:
		monthName = "June"
		break;
	case 7:
		monthName = "July"
		break;
	case 8:
		monthName = "August"
		break;
	case 9:
		monthName = "September"
		break;
	case 10:
		monthName = "October"
		break;
	case 11:
		monthName = "November"
		break;
	case 12:
		monthName = "December"
		break;
	default:
		monthName = "That's not a real month...yet."
	break;
}
console.log(monthName)
