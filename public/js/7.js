var CanvasExercise = function(canvasId, entityCollection){
  var _this = this;

  this.entityCollection = entityCollection || [];
  this.updateMotion = function(){
    console.log('update motion called');
    _this.ct.clearRect(0, 0, _this.canvas.width(), _this.canvas.height());
    _this.entityCollection.map(function(entity){
      if(entity.x > _this.canvas.width() || entity.x < 0){
        entity.dx = -entity.dx;
      }
      if(entity.y > _this.canvas.height() || entity.y < 0){
        entity.dy = -entity.dy;
      }
      entity.x+=entity.dx, entity.y+=entity.dy;
      _this.ct.beginPath();
      _this.ct.arc(entity.x,entity.y,entity.radius,0,2*Math.PI);
      _this.ct.stroke();
    });
  }
  this.serverSync = function(){
    console.log('server sync called');
    $.post('/exercises/7', {"canvasEntities":_this.entityCollection}, "json");
  }
  $(function(){
    _this.canvas = $(canvasId);
    _this.ct = _this.canvas[0].getContext('2d');
    setInterval(_this.updateMotion, 33);
    setInterval(_this.serverSync, 5000);
  });
}