'use strict';

var subjectName;
var enterGrades;
var gradesArray = [];
var sumGrades = 0;
var finalAverage = 0;


var student = {
	name: prompt('What is your name?')
}

function gradesEntered() {
				subjectName = prompt('What is the subject?');
				enterGrades = prompt('Enter your Grade for ' + subjectName);
				gradesArray.push(Number(enterGrades));
		}

do {
	gradesEntered();
	var moreGrades = confirm('Do you want to add more grades?');
}	while (moreGrades == true);

function gradesAverage(){
	gradesArray.forEach(function (element) {
		sumGrades = sumGrades + element;
	});
	finalAverage = sumGrades/gradesArray.length;
}
gradesAverage();

if (finalAverage >=80) {
	alert('Good job ' + student.name);
} else {
	alert('Bad job ' + student.name);
}

console.log(gradesArray);
console.log(sumGrades);
console.log(finalAverage);