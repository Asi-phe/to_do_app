
//A variable for an item done
$(document).ready(function(){
    var itemDone = 0;
    $("li").each(function(c){
        $(this).click(function(){
        checked = c;
         
         //a condition 
         //If the user clicheks on a item list the must be a strike through and be able to uncheck.
         if(itemDone == 0){
            $(this).css("text-decoration", "line-through");
            itemDone = 1;
            sessionStorage.setItem(checked, itemDone);
            console.log(itemDone);
           }else{
               $(this).css("text-decoration", "none");
               itemDone = 0;
               sessionStorage.setItem(checked, itemDone);
               console.log(itemDone);
            }
        });
    });
    //
    $("li").each(function(c){
        if(sessionStorage.getItem(c) == 0){
            $(this).css("text-decoration", "line-through");
        }
     });
 });