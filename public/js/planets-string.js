(function(){
    "use strict";

    var planetsString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";
    var planetsArray;

    planetsArray = planetsString.split('|');

    console.log(planetsArray);

    planetsString = planetsArray.join("<br>");
    document.write(planetsString);
    console.log(planetsString);
    // TODO: Create a string with <br> tags between each planet. console.log() your results.
    //       Why might this be useful?
    var newPlanetString = planetsArray.join('</li><li>');
    document.write('<ul><li>' + newPlanetString + '</ul></li>');
    console.log('<ul><li>' + newPlanetString + '</ul></li>');
    // Bonus: Create a second string that would display your planets in an undordered list.
    //        You will need an opening AND closing <ul> tags around the entire string, and <li> tags around each planet.
    //        console.log() your results.
})();