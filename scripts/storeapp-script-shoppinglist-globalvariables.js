//--------------------------------------------------------------------------------------------------------
//declared arrays 
var listArray = [];
var listArrayClose = [];
                
//--------------------------------------------------------------------------------------------------------
//variable food arrays
var summerFoods = ["popsicles", "ice cream", "lemonade", "iced tea", "watermelon", "gelato"];
var winterFoods = ["canned soup", "hot chocolate mix"];
var christmasFoods = ["boxed stuffing", "cranberries", "canned gravy", "whipped cream", "wine", "candy canes", "paper plates"];
var fridayFoods = ["beer", "wine"];
var healthyFoods = ["broccoli", "cauliflower", "apples", "oranges", "pears", "romaine hearts", "celery"];
                
//--------------------------------------------------------------------------------------------------------
//randomize variable food arrays
var randomSummerItem = summerFoods[Math.floor(Math.random()*summerFoods.length)];
var randomWinterItem = winterFoods[Math.floor(Math.random()*winterFoods.length)];
var randomChristmasItem = christmasFoods[Math.floor(Math.random()*christmasFoods.length)];
var randomFridayItem = fridayFoods[Math.floor(Math.random()*fridayFoods.length)];
var randomHealthyItem = healthyFoods[Math.floor(Math.random()*healthyFoods.length)];

//--------------------------------------------------------------------------------------------------------
//other global variables
var randomItem; // used in determineRandomItem and addSeasonalFoods
var xbutton = "<button id='xbutton' class='xbutton' onclick='removeListArrayElement()'>X</button>"; // close (X) button on list items  