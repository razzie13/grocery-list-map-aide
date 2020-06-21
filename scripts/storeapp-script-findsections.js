function selectStoreSection()  {
    var selection = document.getElementById('sectionmenu').value;
    console.log(selection);
    var element = document.getElementById(selection);
                element.classList.toggle(selection);
}


function bulkFoods() {
            var element = document.getElementById("aisle1a");
            element.classList.toggle("section-bulkfoods");
          }
        
function southAsian() {
            var element = document.getElementById("aisle6b");
            element.classList.toggle("section-southasian");
            }

function cereal() {
                var element = document.getElementById("aisle2a");
                element.classList.toggle("section-cereal");
            }

function berries() {
                var element = document.getElementById("citruswall");
                element.classList.toggle("section-berries");
            }
        
function bakery() {
                var bakerytable1 = document.getElementById("bakerytable1");
                var bakerytable2 = document.getElementById("bakerytable2");
                var bakerytable3 = document.getElementById("fourblocktwofive");
                var bakerytable4 = document.getElementById("fourblockthreefive");
                bakerytable1.classList.toggle("section-bakery");
                bakerytable2.classList.toggle("section-bakery");
                bakerytable3.classList.toggle("section-bakery");
                bakerytable4.classList.toggle("section-bakery");

                    }
  
function petFood() 
            {
                var element = document.getElementById("aisle7b");
                element.classList.toggle("section-petfood");
                }
            
        
function dealZone() {
                        var element1 = document.getElementById("fourblockonefour");
                        var element2 = document.getElementById("fourblocktwofour");
                        var element3 = document.getElementById("fourblockthreefour");
                        var element4 = document.getElementById("fourblockfourfour");
                        var element5 = document.getElementById("fourblockfivefour");
                        element1.classList.toggle("section-dealzone");
                        element2.classList.toggle("section-dealzone");
                        element3.classList.toggle("section-dealzone");
                        element4.classList.toggle("section-dealzone");
                        element5.classList.toggle("section-dealzone");
                  }

function bakingNeeds() {
                        var element = document.getElementById("aisle4b");
                        element.classList.toggle("section-bakingneeds");
                    }

function produce() {
                        var element2 = document.getElementById("producetablelong");                      
                        var element1 = document.getElementById("producetableshort1");
                        var element3 = document.getElementById("producetableshort2");
                        element1.classList.toggle("section-produce");
                        element2.classList.toggle("section-produce");
                        element3.classList.toggle("section-produce");
                }
                /*

function testFunction(x) {
  if (x.name === 'baggedsalads') {
    console.log(x.name);
  } else if (x.name === "berries") {
    console.log(x.name);
  } else if (x.name === "boxedseafood") {
    console.log(x.name);
  }
} */