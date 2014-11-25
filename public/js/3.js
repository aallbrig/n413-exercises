function getUrlVars(){
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
$(function(){
  var menu         = $('#menu'),
      menuContainer= $('#menuContainer'),
      subMenu      = $('#subMenu'),
      subContainer = $('#subContainer'),
      queryObj     = getUrlVars();
  $('#' + queryObj['id']).addClass('active');
  menu.on('click',function(){
    menuContainer.toggleClass('hidden');
  });
  subMenu.on('click',function(){
    subContainer.toggleClass('hidden');
  });
});