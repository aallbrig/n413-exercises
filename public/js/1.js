$(function(){
  var menu      = $('#menu')
      container = $('#container');
  menu.on('click',function(){
    container.toggleClass('hidden');
  });
});