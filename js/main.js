



$(document).ready(function(){
    //creating a variable called itemDone and initializing it to zero.
  let itemDone = 0;
  $("li").click(function(){
      //if the variable is selected,let the line decoration strike through
      if(itemDone == 0){
          $(this).css("text-decoration","line-through");
          itemDone = 1;
          consule.log(itemDone);
      }else{
          //if the variable is selected,let the line decoration not strike through
      $(this).css("text-decoration","none");
      itemDone = 0;
      consule.log(itemDone);
      }
  });
});