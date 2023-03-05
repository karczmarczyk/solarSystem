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

        <div class="star" title="The Sun" id="sun"></div>    
        
        <div class="planet" title="Mercury" id="mercury"></div>

        <div class="planet" titile="Venus" id="venus"></div>

        <div class="planet" title="Earth" id="earth">
            <!-- <div class="planet" id="moon"></div> -->
        </div>

        <div class="planet" title="Mars" id="mars"></div>

        <div class="planet drwalf_planet" title="Ceres" id="ceres"></div>

        <div class="planet" title="Jupiter" id="jupiter"></div>

        <div class="planet" title="Saturn" id="saturn"></div>

        <div class="planet" title="Uranus" id="uranus"></div>

        <div class="planet" title="Neptun" id="neptun"></div>

        <div class="planet drwalf_planet" title="Makemake" id="makemake"></div>
        <div class="planet drwalf_planet" title="Haumea" id="haumea"></div>
        <div class="planet drwalf_planet" title="Pluto" id="pluto"></div>
        <div class="planet drwalf_planet" title="Eris" id="eris"></div>

    </div>

    <script>

        var solarSystemCentre = {x:830, y:312-25, z: 1000};

        let mercuryOrbit = new Orbit(200,25).setCentre(solarSystemCentre);
        let mercury = new Planet('#mercury')
            .setOrbit(mercuryOrbit)
            .setDistanceFromSun(100).setSpeed(47.4).setSize(30);

        let venusOrbit = new Orbit(300,50).setCentre(solarSystemCentre);
        let venus = new Planet('#venus')
            .setOrbit(venusOrbit)
            .setDistanceFromSun(200).setSpeed(35).setSize(50);

        let earthOrbit = new Orbit(400,75).setCentre(solarSystemCentre);
        let earth = new Planet('#earth')
            .setOrbit(earthOrbit)
            .setDistanceFromSun(300).setSpeed(29.8).setSize(50);

        let marsOrbit = new Orbit(500,100).setCentre(solarSystemCentre);
        let mars = new Planet('#mars')
            .setOrbit(marsOrbit)
            .setDistanceFromSun(400).setSpeed(24.1).setSize(40);

        let ceresOrbit = new Orbit(600,125).setCentre(solarSystemCentre);
        let ceres = new Planet('#ceres')
            .setOrbit(ceresOrbit)
            .setDistanceFromSun(400).setSpeed(17.1).setSize(10);

        let jupiterOrbit = new Orbit(700,150).setCentre(solarSystemCentre);
        let jupiter = new Planet('#jupiter')
            .setOrbit(jupiterOrbit)
            .setDistanceFromSun(500).setSpeed(13.1).setSize(80);

        let saturnOrbit = new Orbit(900,200).setCentre(solarSystemCentre);
        let saturn = new Planet('#saturn')
            .setOrbit(saturnOrbit)
            .setDistanceFromSun(600).setSpeed(9.7).setSize(150);

        let uranusOrbit = new Orbit(1100,300).setCentre(solarSystemCentre);
        let uranus = new Planet('#uranus')
            .setOrbit(uranusOrbit)
            .setDistanceFromSun(700).setSpeed(6.8).setSize(50);

        let neptunOrbit = new Orbit(1300,350).setCentre(solarSystemCentre);
        let neptun = new Planet('#neptun')
            .setOrbit(neptunOrbit)
            .setDistanceFromSun(700).setSpeed(5.4).setSize(50);

        let makemakeOrbit = new Orbit(1600,500).setCentre(solarSystemCentre);
        let makemake = new Planet('#makemake')
            .setOrbit(makemakeOrbit)
            .setDistanceFromSun(700).setSpeed(4).setSize(10);

        let haumeaOrbit = new Orbit(1600,500).setCentre(solarSystemCentre);
        let haumea = new Planet('#haumea')
            .setOrbit(haumeaOrbit)
            .setDistanceFromSun(700).setSpeed(4.1).setSize(10);

        let plutoOrbit = new Orbit(1600,500).setCentre(solarSystemCentre);
        let pluto = new Planet('#pluto')
            .setOrbit(plutoOrbit)
            .setDistanceFromSun(700).setSpeed(3.9).setSize(10);

        let erisOrbit = new Orbit(1600,500).setCentre(solarSystemCentre);
        let eris = new Planet('#eris')
            .setOrbit(erisOrbit)
            .setDistanceFromSun(700).setSpeed(4.2).setSize(10);
            
        setInterval(function(){
            mercury.orbiting();
            venus.orbiting();
            earth.orbiting();
            mars.orbiting();
            ceres.orbiting();
            jupiter.orbiting();
            saturn.orbiting();
            uranus.orbiting();
            neptun.orbiting();
            makemake.orbiting();
            haumea.orbiting();
            pluto.orbiting();
            eris.orbiting();
        }, 100);
        
        // pozycja myszy
        // $(document).bind('mousemove',function(e){ 
        //     console.log("e.pageX: " + e.pageX + ", e.pageY: " + e.pageY); 
        // }); 

    </script>

</body>

</html>