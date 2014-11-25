var CanvasExercise = function(canvasId, entityCollection){
  var that = this;

  this.entityCollection = entityCollection || [];
  console.log(this.entityCollection.length);
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
  this.serverSync = function(){
    $.post('/exercises/7', {"canvasEntities":that.entityCollection}, "json");
    // $.post('/exercises/7', that.entityCollection, "json");
   //  $.ajax({
   //    type: "POST",
   //    contentType: "application/json",
   //    url: '/exercises/7',
   //    data: {"canvasEntities":that.entityCollection},
   //    dataType: "json"
   // });
    // $.ajax({
    //     url: '/exercises/7',
    //     type: 'POST',
    //     dataType: 'json',
    //     data: {"canvasEntities":that.entityCollection},
    //     contentType: 'application/json; charset=utf-8',
    //     success: function(result) {
    //         // alert(result.Result);
    //     }
    // });
  }
  $(function(){
    that.canvas = $(canvasId);
    that.ct = that.canvas[0].getContext('2d');
    setInterval(that.updateMotion, 33);
    setInterval(that.serverSync, 5000);
  });
}