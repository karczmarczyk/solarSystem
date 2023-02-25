<html>
<head>
  <title>SOLAR SYSTEM</title>
  <link href="style.css" rel="stylesheet">
  <script src="planet.js"></script>
  <script src="orbit.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</head>

<body>
  
    <div class="universe">

        <div class="planet" id="sun"></div>

        
        
        <div class="planet" id="mercury"></div>


    </div>

    <script>

        var solarSystemCentre = {x:945, y:410-25};

        let mercuryOrbit = new Orbit(300,25).setCentre(solarSystemCentre);
        let mercury = new Planet('#mercury')
            .setOrbit(mercuryOrbit)
            .setPosition(100,200).setDistanceFromSun(100).setSpeed(0.1).setSize(60);

        
        setInterval(function(){
            mercury.orbiting();
        }, 100);
        
        // pozycja myszy
        $(document).bind('mousemove',function(e){ 
            console.log("e.pageX: " + e.pageX + ", e.pageY: " + e.pageY); 
        }); 

    </script>

</body>

</html>