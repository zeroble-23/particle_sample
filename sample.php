<!DOCTYPE html>
<html>
<head>
  <script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
  <script src="//cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>
<body>
    <div id="textdiv">
      Snowflake
    </div>
    <div id="snowfall"></div>
    <script>particlesJS("snowfall",
    {
      "particles": {
        "number": {
          "value": 100
        },
        "shape": {
          "type": "circle"
        },
        "size": {
          "value": 10,
          "random": true
        },
        "line_linked": {
          "enable": false
        },
        "move": {
          "enable": true,
          "speed": 2,
          "direction": "bottom",
          "straight": false
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": false
          }
        },
        "modes": {
          "push": {
            "particles_nb": 10
          }
        }
      }
    }
    );</script>
</body>
</html>
