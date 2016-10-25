(function (){
'use strict';

var numbers = document.getElementsByClassName('numbers');
var operatorBox = document.getElementById('operatorBox');
var firstBox = document.getElementById('firstBox');
var secondBox = document.getElementById('secondBox');
var decimal = document.getElementById('decimal');
var clear = document.getElementById('clear');
var backspace = document.getElementById('backspace');
var operator = document.getElementsByClassName('operator');
var answerBox = document.getElementById('answer');
var finalResult = document.getElementById('result');
var binary = document.getElementById('binary');
var hexadecimal = document.getElementById('hex');
var dec = document.getElementById('dec');

function deleteChar () {
	if (operatorBox.value == "") {
		firstBox.value = firstBox.value.substr(0, firstBox.value.length-1);
	} else if (secondBox.value == "") {
		operatorBox.value = "";
	} else if (operatorBox.value !== "") {
		secondBox.value = secondBox.value.substr(0, secondBox.value.length-1);
	}
}

backspace.addEventListener("click", deleteChar);

function clickNumber () {
	if (operatorBox.value == "") {
		firstBox.value += parseFloat(this.innerHTML)
	} else {
		secondBox.value += parseFloat(this.innerHTML)
	}
}
for (var i = 0; i < numbers.length; i++) {
	numbers[i].addEventListener('click', clickNumber);
}

function clickDecimal () {
	if (operatorBox.value == "" && firstBox.value.indexOf(".") == -1) {
		firstBox.value += ".";
	} else if (operatorBox.value != "" && secondBox.value.indexOf(".") == -1) {
		secondBox.value += ".";
	}
}

decimal.addEventListener('click', clickDecimal);


function clickOperator () {
	if (firstBox.value == "") {
		answerBox.value = "Please enter a value";
	} else {
	operatorBox.value = this.innerHTML
	}
}


for (var i = 0; i < operator.length; i++) {
	operator[i].addEventListener('click', clickOperator);
}

function clearEverything () {
	firstBox.value = "";
	secondBox.value = "";
	operatorBox.value = "";
	answerBox.value = "";
}
clear.addEventListener('click', clearEverything);

function displayResult () {
	if (secondBox.value == "" || firstBox.value == ".") {
		answerBox.value = "404: Didn't find 2 numbers.";
		firstBox.value = "";
		secondBox.value = "";
		operatorBox.value = "";
	} else if (operatorBox.value == "+") {
		answerBox.value = (parseFloat(firstBox.value)) + (parseFloat(secondBox.value));
		firstBox.value = "";
		secondBox.value = "";
		operatorBox.value = "";
	} else if (operatorBox.value == "-") {
		answerBox.value = (parseFloat(firstBox.value)) - (parseFloat(secondBox.value));
		firstBox.value = "";
		secondBox.value = "";
		operatorBox.value = "";
	} else if (operatorBox.value == "*") {
		answerBox.value = (parseFloat(firstBox.value)) * (parseFloat(secondBox.value));
		firstBox.value = "";
		secondBox.value = "";
		operatorBox.value = "";
	} else if (operatorBox.value == "/" && secondBox.value == 0) {
		answerBox.value = "Can't divide by 0";
		firstBox.value = "";
		secondBox.value = "";
		operatorBox.value = "";
	} else if (operatorBox.value == "/") {
		answerBox.value = (parseFloat(firstBox.value)) / (parseFloat(secondBox.value));
		firstBox.value = "";
		secondBox.value = "";
		operatorBox.value = "";
	} else if (operatorBox.value == "%") {
		answerBox.value = (parseFloat(secondBox.value)) * (parseFloat(firstBox.value)) / 100;
		firstBox.value = "";
		secondBox.value = "";
		operatorBox.value = "";
	} else if (operatorBox.value == "^") {
		answerBox.value = Math.pow((parseFloat(firstBox.value)), (parseFloat(secondBox.value)));
		firstBox.value = "";
		secondBox.value = "";
		operatorBox.value = "";
	}
	if (answerBox.value > Math.pow(2, 1023)) {
			answerBox.value = "Ain't got enough bits for that number"
	}
}
finalResult.addEventListener('click', displayResult);

var negative = document.getElementById('negative');
var sqroot = document.getElementById('sqroot');
var exponent = document.getElementById('exponent');

function negativeNumber () {
	if (operatorBox.value == "") {
		firstBox.value = firstBox.value * -1;
	} else if (operatorBox !== "") {
		secondBox.value = secondBox.value * -1;
	}
}
negative.addEventListener('click', negativeNumber);

function squareRoot () {
	
	if(firstBox.value == "") {
		firstBox.value = "";
      return answerBox.value = "Please enter a value";
    } 
    if(firstBox.value == 0) {
    	firstBox.value = "";
      return answerBox.value = "Square root is 0";
    }
    if(firstBox.value < 0) {
    	firstBox.value = "";
      return answerBox.value = "Square root is an imaginary number";
    } else {
		answerBox.value = Math.sqrt(parseFloat(firstBox.value));
		firstBox.value = "";
		operatorBox.value = "";
		secondBox.value = "";
		}
  }
sqroot.addEventListener('click', squareRoot);
function checkForAnswerBox () {
	return answerBox.value == "";
}
function convertToBinary () {
	if (checkForAnswerBox()) {
		answerBox.value = "You need a number in this box first"
	} else {
		answerBox.value = parseFloat(answerBox.value).toString(2);
	}
}
function convertToHex () {
	if (checkForAnswerBox()) {
		answerBox.value = "You need a number in this box first"
	} else {
		console.log(answerBox.value.toString(6));
		console.log(typeof answerBox.value)
		answerBox.value = parseFloat(answerBox.value).toString(16);
	}
}

// function convertToDecimal() {
// 	if (checkForAnswerBox()) {
// 		answerBox.value = "You need a number in this box first"
// 	} else {
// 		answerBox.value = parseFloat(answerBox.value).toString(10);
// 	}
// }

binary.addEventListener('click', convertToBinary);
hexadecimal.addEventListener('click', convertToHex);
// dec.addEventListener('click', convertToDecimal);

}) ();