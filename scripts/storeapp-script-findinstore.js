// This script runs from clicking the "Find In Store" button
function conStruction()  {
var listArray = [];
var inputtedText = document.getElementById('input').value;
var inputTextOne = inputtedText.replace(/ /g, "-");  // replace space with hyphen to call css selector
var inputText = inputTextOne.toLowerCase(); // makes all lowercase to match css selectors

const groceryItem = document.createElement('div');  // create popup div
const groceryName = document.createElement('div');  // create text in popup div
const downArrow = document.createElement('div');  // create down arrow in popup div
const addToListButton = document.createElement('button');  // create "Add to List" button
const closeButton = document.createElement('button');  // create "Close X" button

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

addToListButton.innerHTML = '<span class="hideyes">Yes, </span>Add to List';
addToListButton.id = 'addToList';
addToListButton.className = 'groceryitembutton groceryitembutton1';
addToListButton.setAttribute('onClick', "newListFromMap(), closeButton()");

closeButton.textContent = 'Close X';
closeButton.id= 'closeButton';
closeButton.href="#";
closeButton.className = 'groceryitembutton groceryitembutton2';
closeButton.setAttribute('onClick', "closeButton()");


groceryItem.appendChild(addToListButton);
groceryItem.appendChild(closeButton);


storecontainer.appendChild(groceryItem);
}
