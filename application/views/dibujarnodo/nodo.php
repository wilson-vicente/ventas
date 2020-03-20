<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8"/>
  <script type="application/javascript">
   function draw() {
      var canvas = document.getElementById('canvas');
      if (canvas.getContext) {
        var ctx = canvas.getContext('2d');

        for (var i = 0; i < 1; i++) {
          for (var j = 1; j < 2; j++) {
            ctx.beginPath();
            var x = 40 + j * 50; // x coordinate
            var y = 40 + i * 50; // y coordinate
            var radius = 20; // Arc radius
            var startAngle = 0; // Starting point on circle
            var endAngle = Math.PI + (Math.PI * j) / 2; // End point on circle
            var anticlockwise = i % 2 !== 0; // clockwise or anticlockwise

            ctx.arc(x, y, radius, startAngle, endAngle);

            if (i > 1) {
              ctx.fill();
            } else {
              ctx.stroke();
            }
          }
        }
      }
    }

     function draw1() {
      var canvas = document.getElementById('canvas1');
      if (canvas.getContext) {
        var ctx = canvas.getContext('2d');

        for (var i = 0; i < 3; i++) {
          for (var j = 2; j < 3; j++) {
            ctx.beginPath();
            var x = 50 + j * 60; // x coordinate
            var y = 50 + i * 60; // y coordinate
            var radius = 20; // Arc radius
            var startAngle = 0; // Starting point on circle
            var endAngle = Math.PI + (Math.PI * j) / 2; // End point on circle
            var anticlockwise = i % 2 !== 0; // clockwise or anticlockwise

            ctx.arc(x, y, radius, startAngle, endAngle);

            if (i > 1) {
              ctx.fill();
            } else {
              ctx.stroke();
            }
          }
        }
      }
    }
  </script>

 </head>
   <body onload="draw();">
    <canvas id="canvas" width="150" height="150"></canvas>
  </body>

  <body onload="draw1();">
    <canvas id="canvas1" width="200" height="200"></canvas>
  </body>
</html>