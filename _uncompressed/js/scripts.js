
function init(){
  console.log("init");

    $("#the-stream").click(function(){
        if ( $("#pip").hasClass("minimized") ) {
            $("#pip").removeClass("minimized");
        } else {
            $("#pip").addClass("minimized");
        }
  });
}


$(document).ready(function(){
  init();
});
