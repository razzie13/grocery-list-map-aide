// This script runs from clicking the "Find" button on each item in the shopping list
function conStructionMainList(clicked)  {
var listArray = [];
var inputtedText = clicked; // value of inputtedText (the button id)
var inputTextOne = inputtedText.replace(/ /g, "-");  // replace space with hyphen to call css selector
var inputText = inputTextOne.toLowerCase(); // makes all lowercase to match css selectors

const groceryItem = document.createElement('div');  // create popup div
const groceryName = document.createElement('div');  // create text in popup div
const downArrow = document.createElement('div');  // create down arrow in popup div
const addToListButton = document.createElement('button');  // create "Add to List" button
const closeButton = document.createElement('button');  // create "No, Thanks" button

groceryName.id = 'groceryname ';// + inputText;
groceryName.textContent = inputText.replace("-", " "); // puts spaces between words where hyphen was added
groceryName.className = 'groceryitemtext';

groceryItem.id = 'groceryitem';// + inputText;
groceryItem.className = 'groceryitem '+ inputText;
groceryItem.appendChild(groceryName);

downArrow.id = 'downArrow ' + inputText;
downArrow.className = 'downarrow';
downArrow.innerHTML = '<i class="fas fa-arrow-alt-circle-down fa-3x"></i>';
groceryItem.appendChild(downArrow);

addToListButton.textContent = 'Add';
addToListButton.id = 'addToList';
addToListButton.className = 'groceryitembutton groceryitembutton1 visibilityhidden';
addToListButton.setAttribute('onClick', listArray.push(inputText));

closeButton.textContent = 'Close X';
closeButton.id= 'closeButton';
closeButton.href="#";
closeButton.className = 'groceryitembutton groceryitembutton2';
closeButton.setAttribute('onClick', "closeButton()");


groceryItem.appendChild(addToListButton);
groceryItem.appendChild(closeButton);


storecontainer.appendChild(groceryItem);
}
