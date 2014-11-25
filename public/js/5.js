$(function(){
  var currentCount = 60,
      counterDisplay = $('#counterDisplay');
  setInterval(function(){
    counterDisplay.text(--currentCount+" seconds until page reload!");
  }, 1000);  // update every second
  setTimeout(function(){
    location.reload();
  }, 60000); // update after one minute (60 * 1000)
});