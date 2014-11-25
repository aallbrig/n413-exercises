var CanvasExercise = function(canvasId, entityCollection){
  var that = this;

  this.entityCollection = entityCollection || [];
  this.updateMotion = function(){
    that.ct.clearRect(0, 0, that.canvas.width(), that.canvas.height());
    that.entityCollection.map(function(entity){
      if(entity.x > that.canvas.width() || entity.x < 0){
        entity.dx = -entity.dx;
      }
      if(entity.y > that.canvas.height() || entity.y < 0){
        entity.dy = -entity.dy;
      }
      entity.x+=entity.dx, entity.y+=entity.dy;
      that.ct.beginPath();
      that.ct.arc(entity.x,entity.y,entity.radius,0,2*Math.PI);
      that.ct.stroke();
    });
  }
  this.beforeUnload = function(){
    $.post('/exercises/5', that.entityCollection);
  }
  $(function(){
    that.canvas = $(canvasId);
    that.ct = that.canvas[0].getContext('2d');
    console.log(that.ct);
    setInterval(that.updateMotion, 33);
    window.onbeforeunload = that.beforeUnload;
  });
}