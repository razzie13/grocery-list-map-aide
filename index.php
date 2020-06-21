<!DOCTYPE html>
<html>
<!--nessumsar-->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/storeapp-main.css">
    <link rel="stylesheet" type="text/css" href="css/storeapp-root.css">
    <link rel="stylesheet" type="text/css" href="css/storeapp-responsive-portrait.css">
    <link rel="stylesheet" type="text/css" href="css/storeapp-responsive-landscape.css">
    <link rel="stylesheet" type="text/css" href="css/showqr.css">
    <link rel="stylesheet" type="text/css" href="css/storeapp-storelayout-responsive-landscape.css"><!--AISLE NUMBER PSEUDO ELEMENTS-->
    <link rel="stylesheet" type="text/css" href="css/storeapp-storelayout-standard-landscape.css"><!--AISLE NUMBER PSEUDO ELEMENTS-->
    <link rel="stylesheet" type="text/css" href="css/storeapp-storelayout-root.css"><!--PRIMARY STORE MAP LAYOUT-->
    <link rel="stylesheet" type="text/css" href="css/storeapp-departments.css">
    <link rel="stylesheet" type="text/css" href="css/storeapp-shoppinglistcss.css">
    <link rel="stylesheet" type="text/css" href="css/storeapp-searchpopups.css">
    <link rel="stylesheet" type="text/css" href="css/storeapp-searchpopups-responsive.css">
    <link rel="stylesheet" type="text/css" href="css/storeapp-fooditems.css"><!--FOOD ITEM DATABASE-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>

<!-- main container for page -->

    <div id="main" class="main">

        <!-- brand and location header -->
        <!--<div class="storeheader"><img src="images/logo-freshco.png"></img></div>-->
        <div id="showqr" class="showqr">
            <span class="view-on-mobile">View on Mobile</span>
            <span class="close-x">X</span><br>
            <img src="images/frame-storeproject.png" alt="mobile qr code">
            <i class="fas fa-mobile-alt"></i>
        </div>
        <div class="storeID">Kitchener West</div>
        <div class="storepaymentoptions"><i class="fab fa-cc-visa fa-3x"></i> <i class="fab fa-cc-mastercard fa-3x"></i></div>
        <div class="shoppinglisttitle">Shopping List</div>

        <!-- whole store container -->
        <div id="storecontainer" class="storecontainer">

            <!-- aisles --- numbered from right to left -- aisle 8 is on left hand side of page -->

            <!-- shelf 1 - right -->
            <div id="aisle1a" class="aislea aisle1a"></div>

            <!-- shelf 1 - left side -->
            <div id="aisle1b" class="aisleb aisle1b"></div>

            <!-- shelf 2 - right side -->
            <div id="aisle2a" class="aislea aisle2a"></div>

            <!-- shelf 2 - left side -->
            <div id="aisle2b" class="aisleb aisle2b"></div>

            <!-- shelf 3 - right side -->
            <div id="aisle3a" class="aislea aisle3a"></div>

            <!-- shelf 3 - left side -->
            <div id="aisle3b" class="aisleb aisle3b"></div>

            <!-- shelf 4 - right side -->
            <div id="aisle4a" class="aislea aisle4a"></div>

            <!-- shelf 4 - left side -->
            <div id="aisle4b" class="aisleb aisle4b"></div>

            <!-- shelf 1 - right -->
            <div id="aisle5a" class="aislea aisle5a"></div>

            <!-- shelf 1 - right -->
            <div id="aisle5b" class="aisleb aisle5b"></div>

            <!-- shelf 1 - right -->
            <div id="aisle6a" class="aislea aisle6a"></div>

            <!-- shelf 1 - right -->
            <div id="aisle6b" class="aisleb aisle6b"></div>

            <!-- shelf 1 - right -->
            <div id="aisle7a" class="aislea aisle7a"></div>

            <!-- shelf 1 - right -->
            <div id="aisle7b" class="aisleb aisle7b"></div>

            <!-- shelf 1 - right -->
            <div id="aisle8a" class="aislea aisle8a"></div>

            <!-- shelf 1 - right -->
            <div id="aisle8b" class="aisleb aisle8b"></div>

            <!-- grocery bunkers -->
            <div id="bunker1"   class="bunker bunker1"></div>
            <div id="bunker2"   class="bunker bunker2"></div>
            <!--<div id="bunker3" class="bunker bunker3"></div>-- removed in renovation -->
            <div id="bunker4"   class="bunker bunker4"></div>
            <div id="bunker5"   class="bunker bunker5"></div>
            <div id="bunker6"   class="bunker bunker6"></div>

            <!-- meat bunkers -->
            <div id="meatbunker1" class="meatbunker meatbunker1"></div>
            <div id="meatbunker2" class="meatbunker meatbunker2"></div>  

            <!-- bakery tables -->
            <div id="bakerytable1"  class="bakerytable bakerytable1"></div>
            <div id="bakerytable2"  class="bakerytable bakerytable2"></div>
            <div id="bread"         class="bread"></div>

            <!-- produce tables -->
            <div id="producetablelong"      class="producetablelong"></div>
            <div id="producetableshort1"    class="producetableshort producetableshort1"></div>
            <div id="producetableshort2"    class="producetableshort producetableshort2"></div>

            <!-- produce edges -->
            <div id="citruswall"    class="citruswall"></div>

            <!-- four-blocks -->
            <div id="fourblockoneone"       class="fourblock fourblockrowone fourblockcolumnone"></div>
            <div id="fourblocktwoone"       class="fourblock fourblockrowtwo fourblockcolumnone"></div>
            <div id="fourblockthreeone"     class="fourblock fourblockrowthree fourblockcolumnone"></div>
            <div id="fourblockfourone"      class="fourblock fourblockrowfour fourblockcolumnone"></div>
            <div id="fourblockfiveone"      class="fourblock fourblockrowfive fourblockcolumnone"></div>
            <div id="fourblockonetwo"       class="fourblock fourblockrowone fourblockcolumntwo"></div>
            <div id="fourblocktwotwo"       class="fourblock fourblockrowtwo fourblockcolumntwo"></div>
            <div id="fourblockthreetwo"     class="fourblock fourblockrowthree fourblockcolumntwo"></div>
            <div id="fourblockfourtwo"      class="fourblock fourblockrowfour fourblockcolumntwo"></div>
            <div id="fourblockfivetwo"      class="fourblock fourblockrowfive fourblockcolumntwo"></div>
            <div id="fourblockfourthree"    class="fourblock fourblockrowfour fourblockcolumnthree"></div>
            <div id="fourblockonefour"      class="fourblock fourblockrowone fourblockcolumnfour"></div>
            <div id="fourblocktwofour"      class="fourblock fourblockrowtwo fourblockcolumnfour"></div>
            <div id="fourblockthreefour"    class="fourblock fourblockrowthree fourblockcolumnfour"></div>
            <div id="fourblockfourfour"     class="fourblock fourblockrowfour fourblockcolumnfour"></div>
            <div id="fourblockfivefour"     class="fourblock fourblockrowfive fourblockcolumnfour"></div>
            <div id="fourblockonefive"      class="fourblock fourblockrowone fourblockcolumnfive"></div>
            <div id="fourblocktwofive"      class="fourblock fourblockrowtwo fourblockcolumnfive"></div>
            <div id="fourblockthreefive"    class="fourblock fourblockrowthree fourblockcolumnfive"></div>

        </div>

        <!--start of main map shopping list input field-->
        <div id="shoppinglistinput" class="shoppinglistinput">
            <div id="shoppinglistinputform" class="shoppinglistinputform">Search Our Selection!<br>
                <form>
                    <input type="text" id="input" onfocus="this.value=''"/>
                    <button class="button button-addtolist" onclick="newListFromMap(); document.getElementById('input').value = ' '; return false;">Add To List</button>
                    <button class="button button-findinstore" onclick="console.log('inputted text: ' + input.value), conStruction(); return false;">Locate</button>
                </form>
            </div>
        </div>
        <!--end of main map shopping list input field-->


        <!-- end whole store container -->
            
        
        <!-- shopping list container -->
        <div id="shoppinglist" class="shoppinglist">
            <div class="mainlistsection"><!------- START SHOPPING LIST SCRIPT ------->

                <!--Data Entry - Text Input------------------------------------------------->
                
                <input id="input-mainlist" class="input-mainlist" value="Add Item" onfocus="this.value=''"/><br><br>
                <button id="button" class="addtomainlistbutton" onclick="newList(), lastAdded(), document.getElementById('input-mainlist').value = ' '">Click to Add</button>
                
                <!--Data Entry - Suggested Input------------------------------------------------->
                
                <div id="addSuggestedItem" class="addSuggestedItem"></div>
                <div id="buttons"><button id="suggestbutton" class="suggestbutton" onclick="addSeasonalFoods(), hideButtonsDiv(), hideAddSuggestedItem()">Yes, Please!</button>
                <button id="nothanks" class="nothanks" onclick="hideButtonsDiv(), hideAddSuggestedItem()">No Thanks</button></div>
                
                <!--Data Entry - Last Added Item------------------------------------------------->
                
                <div id="lastAddedItem" class="lastAddedItem"></div>
                <br>
                <div id="list" name="list"></div>
                
                </div>
                
                <!--Create and alphabetize the list, create list suggestions, and add suggested items to list-------------------------------------------------->
                
                <script>    
                    //--------------------------------------------------------------------------------------------------------
                    //works fully - try to condense with addSeasonalFoods
                    function newList() {
                        // user inputted data from main list input field
                        var newGroceryItemInput = document.getElementById("input-mainlist").value;
                        
                        // removes spaces from in front of array items -- do NOT remove 
                        var newGroceryItem = newGroceryItemInput.trim();
                        
                        // converts spaces to dashes to enable CSS selectors
                        var listArrayReplace = newGroceryItem.replace(" ","-");
                       
                        // pushes refined data to array
                        listArray.push(listArrayReplace);

                        
                        // converts produce codes to words -- still in production
                        //listArray.replace("4237", "banana");
                         
                        listArray.sort()

                        console.log(listArray);

                    var i;
                    var j = "";
                    var k = listArray.length;
                    
                        for (i = 0; i < k; i++)  {
                            
                            j += "<span id=" + [i] + ">" + listArray[i].replace("-"," ") + "<button id=" + listArray[i] + " class='findinstorebutton' onclick='conStructionMainList(this.id)'>" + "FIND" + "</button>" + "<button id=" + [i] + " class='xbutton' onclick='removeListArrayElement(this.id)'>" + "X" + "</button>" + "</span>" + "<br>";
                            document.getElementById("list").innerHTML = j;
                            }
                    }

                    //--------------------------------------------------------------------------------------------------------
                    //works fully - try to condense with addSeasonalFoods
                    function newListFromMap() {
                        // user inputted data from main list input field
                        var newGroceryItemInput = document.getElementById("input").value;
                        
                        // removes spaces from in front of array items -- do NOT remove 
                        var newGroceryItem = newGroceryItemInput.trim();
                        
                        // converts spaces to dashes to enable CSS selectors
                        var listArrayReplace = newGroceryItem.replace(" ","-");
                       
                        // pushes refined data to array
                        listArray.push(listArrayReplace);

                        
                        // converts produce codes to words -- still in production
                        //listArray.replace("4237", "banana");
                        listArray.sort()
                        console.log(listArray);
                        
                    var i;
                    var j = "";
                    var k = listArray.length;
                        for (i = 0; i < k; i++)  {
                            j += "<span id=" + [i] + ">" + listArray[i].replace("-"," ") + "<button id=" + listArray[i] + " class='findinstorebutton' onclick='conStructionMainList(this.id)'>" + "FIND" + "</button>" + "<button id=" + [i] + " class='xbutton' onclick='removeListArrayElement(this.id)'>" + "X" + "</button>" + "</span>" + "<br>";
                            document.getElementById("list").innerHTML = j;
                            }
                    }
                                   
                    //--------------------------------------------------------------------------------------------------------
                    //works fully - add seasonal foods from seasonal array to newList array - try to condense with newList
                    function addSeasonalFoods() {
                            
                            
                            // converts spaces to dashes to enable CSS selectors
                            var randomItemReplace = randomItem.replace(" ","-");

                            listArray.push(randomItemReplace);

                            listArray.sort()
                            console.log(listArray);
                            
                        var i;
                        var j = "";
                        var k = listArray.length;
                        for (i = 0; i < k; i++)  {
                            j += "<span id=" + [i] + ">" + listArray[i].replace("-"," ") + "<button id=" + listArray[i] + " class='findinstorebutton' onclick='conStructionMainList(this.id)'>" + "FIND" + "</button>" + "<button id=" + [i] + " class='xbutton' onclick='removeListArrayElement(this.id)'>" + "X" + "</button>" + "</span>" + "<br>";
                            document.getElementById("list").innerHTML = j;
                            }
                    }
                    
                    //--------------------------------------------------------------------------------------------------------
                    //works fully - Remove listArray Items 
                    function removeListArrayElement(clicked)  {
                        listArray.splice(clicked , 1);                       
                        console.log(listArray);
                        var i;
                        var j = "";
                        var k = listArray.length;
                        for (i = 0; i < k; i++)  
                        j += "<span id=" + [i] + ">" + listArray[i].replace("-"," ") + "<button id=" + listArray[i] + " class='findinstorebutton' onclick='conStructionMainList(this.id)'>" + "FIND" + "</button>" + "<button id=" + [i] + " class='xbutton' onclick='removeListArrayElement(this.id)'>" + "X" + "</button>" + "</span>" + "<br>";
                
                        document.getElementById("list").innerHTML = j
                    }
                
                    //--------------------------------------------------------------------------------------------------------
                    //works fully - try to condense with hideButtonsDiv
                    function hideAddSuggestedItem()  {
                        var x = document.getElementById("addSuggestedItem");
                        if (x.style.display === "none") {
                            x.style.display = "block";
                        } else {
                            x.style.display = "none";
                        }
                    }
                </script>   


        </div><!------- END SHOPPING LIST SCRIPT CONTAINER ------->


            <!-- start of explore our categories-->
            <div id="exploreourcategories" class="exploreourcategories">
                <div id="exploreourcategoriesinner" class="exploreourcategoriesheadertext">Our Sections At A Glance:<br>
                    <form>
                        <button href="#" class="button button-bulkfoods" onclick="bulkFoods(); return false;">Bulk Foods</button>
                        <button href="#" class="button button-berries" onclick="berries(); return false;">Berries</button>
                        <button href="#" class="button button-bakery" onclick="bakery(); return false;">Bakery</button>
                        <button href="#" class="button button-bakingneeds" onclick="bakingNeeds(); return false;">Baking Needs</button>
                        <button href="#" class="button button-cereal" onclick="cereal(); return false;">Cereal</button>
                        <button href="#" class="button button-dealzone" onclick="dealZone(); return false;">Deal Zone</button>
                        <button href="#" class="button button-produce" onclick="produce(); return false;">Produce</button>
                        <button href="#" class="button button-southasian" onclick="southAsian(); return false;">South Asian</button>
                    </form>
                </div>
            </div> 
            <!-- end of explore our categories-->

    </div> <!--end of "main"-->


<!--end of "maincontainer"-->


<!--qr code js files-->
<script src="scripts/storeapp-script-showqrcode.js"></script>

<!--store map js files-->
<script src="scripts/storeapp-script-findsections.js"></script>
<script src="scripts/storeapp-script-findinstore.js"></script>
<script src="scripts/storeapp-script-findinstorefromlist.js"></script>
<script src="scripts/storeapp-script-findinstore-disappear.js"></script>

<!--shopping list js files-->
<script src="scripts/storeapp-script-shoppinglist-globalvariables.js"></script>
<script src="scripts/storeapp-script-shoppinglist-clicktoenter.js"></script>
<script src="scripts/storeapp-script-shoppinglist-determinerandomitem.js"></script>
<script src="scripts/storeapp-script-shoppinglist-hidebuttons.js"></script>
<script src="scripts/storeapp-script-shoppinglist-lastitemaddedtolist.js"></script>

<!--  testing
<script>

function selectStoreSection()  {
    var selection = document.getElementById('sectionmenu').value;
    console.log(selection);
    var element = document.getElementById(selection);
                element.classList.toggle(selection);
}

</script>
 /testing -->


    <div id="disclaimer"></div>
    <!--<div id="loweringfoodprices">We have updated our privacy commitment and are now collecting cookies to provide you with ads tailored to your interest across the internet. For more information about cookies and how to disable cookies, visit our privacy commitment. Learn more</div>-->
</div>

</body>
</html>