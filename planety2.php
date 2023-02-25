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

        <div class="planet" id="venus"></div>

        <div class="planet" id="earth">
            <div class="planet" id="moon"></div>
        </div>

        <div class="planet" id="mars"></div>

        <div class="planet" id="jupiter"></div>

        <div class="planet" id="saturn"></div>

        <div class="planet" id="uranus"></div>

        <div class="planet" id="neptun"></div>

    </div>

    <script>

        var solarSystemCentre = {x:830, y:312-25, z: 1000};

        let mercuryOrbit = new Orbit(200,25).setCentre(solarSystemCentre);
        let mercury = new Planet('#mercury')
            .setOrbit(mercuryOrbit)
            .setDistanceFromSun(100).setSpeed(0.1).setSize(30);

        let venusOrbit = new Orbit(300,50).setCentre(solarSystemCentre);
        let venus = new Planet('#venus')
            .setOrbit(venusOrbit)
            .setDistanceFromSun(200).setSpeed(0.1).setSize(50);

        let earthOrbit = new Orbit(400,75).setCentre(solarSystemCentre);
        let earth = new Planet('#earth')
            .setOrbit(earthOrbit)
            .setDistanceFromSun(300).setSpeed(0.1).setSize(50);

        let marsOrbit = new Orbit(500,100).setCentre(solarSystemCentre);
        let mars = new Planet('#mars')
            .setOrbit(marsOrbit)
            .setDistanceFromSun(400).setSpeed(0.1).setSize(40);

        let jupiterOrbit = new Orbit(700,150).setCentre(solarSystemCentre);
        let jupiter = new Planet('#jupiter')
            .setOrbit(jupiterOrbit)
            .setDistanceFromSun(500).setSpeed(0.1).setSize(80);

        let saturnOrbit = new Orbit(900,200).setCentre(solarSystemCentre);
        let saturn = new Planet('#saturn')
            .setOrbit(saturnOrbit)
            .setDistanceFromSun(600).setSpeed(0.1).setSize(150);

        let uranusOrbit = new Orbit(1100,300).setCentre(solarSystemCentre);
        let uranus = new Planet('#uranus')
            .setOrbit(uranusOrbit)
            .setDistanceFromSun(700).setSpeed(0.1).setSize(50);

        let neptunOrbit = new Orbit(1300,350).setCentre(solarSystemCentre);
        let neptun = new Planet('#neptun')
            .setOrbit(neptunOrbit)
            .setDistanceFromSun(700).setSpeed(0.1).setSize(50);
            
        setInterval(function(){
            mercury.orbiting();
            venus.orbiting();
            earth.orbiting();
            mars.orbiting();
            jupiter.orbiting();
            saturn.orbiting();
            uranus.orbiting();
            neptun.orbiting();
        }, 100);
        
        // pozycja myszy
        $(document).bind('mousemove',function(e){ 
            console.log("e.pageX: " + e.pageX + ", e.pageY: " + e.pageY); 
        }); 

    </script>

</body>

</html>