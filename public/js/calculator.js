(function (){
'use strict'

var numbers = document.getElementsByClassName('numbers');
var operatorBox = document.getElementById('operatorBox');
var firstBox = document.getElementById('firstBox');
var secondBox = document.getElementById('secondBox');
var clear = document.getElementById('clear');
var operator = document.getElementsByClassName('operator');
var answerBox = document.getElementById('answer');
var finalResult = document.getElementById('result');

function clickNumber () {
	if (operatorBox.value == "") {
		firstBox.value += this.innerHTML
	} else {
		secondBox.value += this.innerHTML
	}
};
for (var i = 0; i < numbers.length; i++) {
	numbers[i].addEventListener('click', clickNumber);
};

function clickOperator () {
	if (firstBox.value == "") {
		answerBox.value = "Please enter a value";
	} else {
	operatorBox.value = this.innerHTML
	}
};
for (var i = 0; i < operator.length; i++) {
	operator[i].addEventListener('click', clickOperator);
};

function clearEverything () {
	firstBox.value = "";
	secondBox.value = "";
	operatorBox.value = "";
	answerBox.value = "";
};
clear.addEventListener('click', clearEverything);

function displayResult () {
	// answerBox.toFixed(8);
	
	if (operatorBox.value == "+") {
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
};
finalResult.addEventListener('click', displayResult);

var negative = document.getElementById('negative');
var sqroot = document.getElementById('sqroot');
var exponent = document.getElementById('exponent');

function negativeNumber () {
	if (secondBox.value == "") {
		firstBox.value = "-"+firstBox.value;
	} else if (firstBox != "") {
		secondBox.value = "-"+secondBox.value;
	}
};
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
  };
sqroot.addEventListener('click', squareRoot);




}) ();