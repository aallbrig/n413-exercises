var CanvasExercise = function(canvasId, entityCollection){
  var _this = this;
  this.entityCollection = entityCollection || [];
  this.updateMotion = function(){
    _this.ct.clearRect(0, 0, _this.canvas.width(), _this.canvas.height());
    _this.entityCollection.map(function(entity){
      entity.x = parseFloat(entity.x);
      entity.y = parseFloat(entity.y);
      if(entity.x > _this.canvas.width()){
        entity.x  = _this.canvas.width() - 5;
        entity.dx = -entity.dx;
      }
      if (entity.x < 0){
        entity.x  = 5;
        entity.dx = -entity.dx;
      }
      if(entity.y > _this.canvas.height()){
        entity.y  = _this.canvas.height() - 5;
        entity.dy = -entity.dy;
      }
      if(entity.y < 0){
        entity.y  = 5;
        entity.dy = -entity.dy;
      }
      entity.x += entity.dx;
      entity.y += entity.dy;
      _this.ct.beginPath();
      _this.ct.arc(entity.x,entity.y,entity.radius,0,2*Math.PI);
      _this.ct.stroke();
    });
  }
  this.serverSync = function(){
    $.post('/exercises/7', {"canvasEntities":_this.entityCollection}, "json");
  }
  console.log('starting!');
  this.canvas = $(canvasId);
  this.ct = this.canvas[0].getContext('2d');
  setInterval(_this.updateMotion, 33);
  setInterval(_this.serverSync, 5000);
}