var input = document.getElementById("input-mainlist");    
input.addEventListener("keyup", function(event) {
    if (event.keyCode === 13)   {
        document.getElementById("button").click();
    }
});