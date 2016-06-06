(function(){
    "use strict";

   
     var person = {
     	firstName: 'Ernesto',
     	lastName: 'Garza',

     	sayHello: function () {
     		console.log(this.firstName + " " + this.lastName);
     	}

     }
person.sayHello();

})();