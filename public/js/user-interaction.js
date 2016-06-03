"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.
do {
	var response = prompt('What is your name?');
	response = response.trim();
	} while (response == '' || response == null)

// TODO: Show an alert message that welcomes the user based on their input.

alert("Welcome "+ response);

// var pizza;

// function pizzaAnswer(option){
// 	pizza = pizza.trim();
// 	switch (option) { 
// 		case "yes":
// 		alert('Thanks for being normal.');
// 		break;
// 		case "no":
// 		alert('What is wrong with you???');
// 		break;
// 		default:
// 		alert('Please answer "yes or no" (case sensitive)');
// 	}
// }
	
// do {
// 	pizza = prompt('Do you like pizza?');
// 	pizzaAnswer(pizza);
// 	} while (pizza === '' || pizza === null || pizza !== "yes" && pizza !== "no")

// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.

var confirmed = confirm("Do you like pizza?");

if (confirmed) {
	alert('Thanks for being normal.');
} else {
	alert("What's wrong with you?");
}