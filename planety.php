<html>
<head>
  <title>SOLAR SYSTEM</title>
  <link href="style.css" rel="stylesheet">
  <script src="planetSimple.js"></script>
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

        let mercury = new Planet('#mercury')
            .setPosition(100,200,100).setSpeed(1.4).setSize(60);

        let venus = new Planet('#venus')
            .setPosition(150,250,101).setSpeed(1.2).setSize(100);

        let earth = new Planet('#earth')
            .setPosition(200,300,102).setSpeed(1).setSize(100);

        let mars = new Planet('#mars')
            .setPosition(250,350,103).setSpeed(0.8).setSize(70);

        let jupiter = new Planet('#jupiter')
            .setPosition(300,400,104).setSpeed(0.6).setSize(250);

        let saturn = new Planet('#saturn')
            .setPosition(350,450,105).setSpeed(0.4).setSize(400);

        let uranus = new Planet('#uranus')
            .setPosition(550,650,106).setSpeed(0.2).setSize(150);

        let neptun = new Planet('#neptun')
            .setPosition(650,750,107).setSpeed(0.05).setSize(150);    
        
        setInterval(function(){
            earth.move();
            mercury.move();
            venus.move();
            mars.move();
            jupiter.move();
            saturn.move();
            uranus.move();
            neptun.move();
        }, 100);

        // var d = 10;
        // var h = 100;
        // var z = 100;
        // var moonOrb = 0;
        // var moonDirection = 0.25;
        // var moonZ = 100;
        // var moonX = 50;
        // setInterval(function(){
        //     ++d;
        //     // ++h;
        //     $('#earth').css({'margin-left':d+'px', 'height':h+'px', 'width':h+'px', "z-index":z});

        //     moonOrb = moonOrb + (moonDirection);
        //     moonX = moonX + (moonDirection);
        //     if (moonOrb>100) {
        //         moonDirection = -0.5;
        //         moonZ=99;
        //     }
        //     if (moonOrb<-50) {
        //         moonDirection = 0.25;
        //         moonZ=100;
        //     }
        //     $('#moon').css({'margin-left':moonOrb+'px', "z-index":moonZ});

        // }, 50);

        
    </script>

</body>

</html>