'use strict';

var student = {
    awesomeGrade: 80,
    name: null,
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

var saveButton = $('#save-name');
var addAndContinueButton = $('#add-grade');
var addAndAverageButton = $('#calculate-average');

function saveName() {
    var studentName = $('#name');
    student.name = studentName.val();
    addAndContinueButton.removeAttr('disabled');
    addAndAverageButton.removeAttr('disabled');
    $('#student-name').text(student.name);
}

function saveSubAndGrade() {
    var subjectName = $('#subject');
    var subjectGrade = $('#grade');

    student.addSubject(subjectName.val(), parseInt(subjectGrade.val()));

    var tableBody = $('#grades');
    tableBody.html('<tr><td>' + subjectName.val() + '</td><td>' + subjectGrade.val() + '</td></tr>' + tableBody.html());

    subjectName.val('');
    subjectGrade.val('');
}

function doAverage() {
    saveSubAndGrade();
    var average = student.calculateAverage();
    $('#student-average').text(average);

    if (student.isAwesome()) {
        $('#student-awesome').removeAttr('class');
        $('#student-practice').attr('class', 'hidden');
    } else {
        $('#student-practice').removeAttr('class');
        $('#student-awesome').attr('class', 'hidden');
    }

    addAndContinueButton.attr('disabled', true);
    addAndAverageButton.attr('disabled', true);
}

saveButton.on('click', saveName);
addAndContinueButton.on('click', saveSubAndGrade);
addAndAverageButton.on('click', doAverage);



