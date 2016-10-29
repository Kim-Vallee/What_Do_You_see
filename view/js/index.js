
// shim layer with setTimeout fallback
window.requestAnimFrame = (function(){
  return  window.requestAnimationFrame       ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame    ||
          function( callback ){
            window.setTimeout(callback, 1000 / 60);
          };
})();

function $id(id){
  return document.getElementById(id)
}

function printTime(){
  var time = new Date();
  var elem = $id("currentTime");
  elem.innerHTML = time.getHours() + ":" + time.getMinutes() + ":" + time.getSeconds()
  window.requestAnimFrame(printTime);
}

printTime();