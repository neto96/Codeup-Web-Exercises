'use strict';


//average calculations


var student = {
    awesomeGrade: 80,
    sName: null,
    subjects: [],
    calculateAverage: function () {
        var average = 0;
        this.subjects.forEach(function (subject) {
            average += subject.grade;
        });
        return average / this.subjects.length;
    },
    addSubject: function (name, grade) {
        var subject = {
            name: name,
            grade: grade
        };
        this.subjects.push(subject);
    },
    isAwesome: function () {
        return this.calculateAverage() > this.awesomeGrade;
    }
};

var saveButton = document.getElementById('save-name');
var addButton = document.getElementById('add-grade');
var averageButton = document.getElementById('calculate-average');

function addStudentName() {
        var studentName = document.getElementById('name');
        student.name = studentName.value;
        addButton.removeAttribute('disabled');
        averageButton.removeAttribute('disabled');
        document.getElementById('student-name').innerText = student.name;
    };


var getAverage = document.getElementById('student-average');

function insertGrade() {
    var subjectName = document.getElementById('subject');
    var subjectGrade = document.getElementById('grade');

    student.addSubject(subjectName.value, parseInt(subjectGrade.value));

    var tableBody = document.getElementById('grades');
    tableBody.innerHTML = '<tr><td>' + subjectName.value + '</td><td>' + subjectGrade.value + '</td></tr>' + tableBody.innerHTML;

    subjectName.value = '';
    subjectGrade.value = '';
}

saveButton.addEventListener('click', addStudentName, false);
addButton.addEventListener('click', insertGrade, false);
averageButton.addEventListener('click', student.calculateAverage, false);



