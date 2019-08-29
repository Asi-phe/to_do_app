



// $(document).ready(function(){
//     //creating a variable called item and initializing it to zero.
//   let item = 0;
//   $("li").click(function(){
//       //if the variable is selected,let the line decoration strike through
//       if(item == 0){
//           $(this).css("text-decoration","line-through");
//           item = 1;
//           consule.log(item);
//       }else{
//           //if the variable is selected,let the line decoration not strike through
//       $(this).css("text-decoration","none");
//       item = 0;
//       consule.log(item);
//       }
//   });
// });


// jquery start here
$(document).ready(function(){
   var item = 0;
   $("li").each(function(c){
       $(this).click(function(){
       checked = c;
        //check the status of li before setting text-decoration
        if(item == 0){
           $(this).css("text-decoration", "line-through");
           item = 1;
           sessionStorage.setItem(checked, item);
           consule.log(item);
          }else{
              $(this).css("text-decoration", "none");
              item = 0;
              sessionStorage.setItem(checked, item);
              consule.log(item);
           }
       });
   });
$("li").each(function(c){
   if(sessionStorage.getItem(c)==1){
       $(this).css("text-decoration", "line-through");
   }
});
});