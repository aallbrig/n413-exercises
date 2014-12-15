var CanvasExercise = function(canvasId, entityCollection){
  var _this = this;
  console.log('1');
  this.entityCollection = entityCollection || [];
  console.log('2');
  this.updateMotion = function(){
    console.log('update motion called');
    _this.ct.clearRect(0, 0, _this.canvas.width(), _this.canvas.height());
    console.log('canvas cleared');
    _this.entityCollection.map(function(entity){
      console.log('entity')
      console.log(entity);
      entity.x = parseFloat(entity.x);
      entity.y = parseFloat(entity.y);
      console.log(typeof entity.x);
      console.log(typeof entity.y);
      if(entity.x > _this.canvas.width()){
        entity.x  = _this.canvas.width();
        entity.dx = -entity.dx;
      }
      if (entity.x < 0){
        entity.x  = 0;
        entity.dx = -entity.dx;
      }
      if(entity.y > _this.canvas.height()){
        entity.y  = _this.canvas.height()
        entity.dy = -entity.dy;
      }
      if(entity.y < 0){
        entity.y  = 0;
        entity.dy = -entity.dy;
      }
      entity.x+=entity.dx;
      entity.y+=entity.dy;
      _this.ct.beginPath();
      _this.ct.arc(entity.x,entity.y,entity.radius,0,2*Math.PI);
      _this.ct.stroke();
    });
    console.log('end of map');
  }
  this.serverSync = function(){
    console.log('server sync called');
    $.post('/exercises/7', {"canvasEntities":_this.entityCollection}, "json");
  }
  console.log('starting!');
  this.canvas = $(canvasId);
  console.log('3');
  this.ct = this.canvas[0].getContext('2d');
  console.log(this.ct);
  console.log(this.ct.clearRect);
  console.log('width: ', this.canvas.width(), ' height: ', this.canvas.height());
  console.log('4');
  setInterval(_this.updateMotion, 33);
  console.log('5');
  setInterval(_this.serverSync, 5000);
  console.log('6');
}