function determineRandomItem() {
    var date = new Date();
    var d = date.getDate(); // day of month
    var mon = date.getMonth(); // January = 0, December = 11
    var wd = date.getDay(); // Sunday = 0, Saturday = 6 
      if (wd == 5) {
        randomItem = randomFridayItem;
        document.getElementById("addSuggestedItem").innerHTML = ("Its Friday! Add " + randomItem + " to your list?");
    } else if (mon == 11) {
        randomItem = randomChristmasItem;
        document.getElementById("addSuggestedItem").innerHTML = ("Christmas is coming! Add " + randomItem + " to your list?");
    } else if (mon == 0)  {
        randomItem = randomWinterItem;
        document.getElementById("addSuggestedItem").innerHTML = ("It's chilly out! Add " + randomItem + " to your list?");
    } else if (mon == 6)  {
        randomItem = randomSummerItem;
        document.getElementById("addSuggestedItem").innerHTML = ("Its a hot one! Add " + randomItem + " to your list?");
    } else  {
        randomItem = randomHealthyItem;
        document.getElementById("addSuggestedItem").innerHTML = ("Eat Healthier! Add " + randomItem + " to your list?");
    }
    
}
determineRandomItem(randomItem);