class Planet {

    elementName;
    element;
    posX = 100;
    posY = 100;
    posZ = 100;
    speed = 1; // km/s
    calcSpeed = 1;
    speedX = 0.001;
    planetSize = 100;
    planetSizeAfterResize = 100;
    sizePercent = 1;
    t = Math.random(); //0;
    orbit;
    distanceFromSun = 0;

    satelites = [];

    constructor(elementName) {
        this.elementName = elementName;
        this.element = $(elementName);
        console.log(this.elementName);

        this.core = $('<div class="planet_core" id="'+elementName+'-planet"></div>');
        this.element.append(this.core);

        return this;
    }

    setPosition (x, y) {
        this.posX = x;
        this.posY = y;
        return this;
    }

    setDistanceFromSun (d) {
        this.distanceFromSun = d;
        return this;
    } 

    setSpeed (s) {
        this.speed = s;
        this.calcSpeed = s;
        return this;
    }

    setSize (s) {
        this.planetSize = s;
        return this;
    }

    setSizePercent (p) {
        this.sizePercent = p;
    }

    setOrbit (o) {
        this.orbit = o;
        return this;
    }

    getElement () {
        return this.element;
    }

    move () {
        this.posX = this.posX + this.calcSpeed;
        // ++this.planetSize;
        this.updatePosition();
    }

    orbiting () {
        this.t = this.t + (this.calcSpeed * this.speedX);
        let p = this.orbit.calcPosition(this.t, this.sizePercent);
        this.posX = p.x;
        this.posY = p.y;

        // console.log(this.elementName)
        // console.log(p)

        let sunPosition = this.orbit.getSolarCentre().z;
        if (this.orbit.getIsFrontOfSun()) {
            this.posZ = sunPosition + this.distanceFromSun;
        } else {
            this.posZ = sunPosition - this.distanceFromSun;
        }

        this.resize(this.orbit.sinValue);
        this.respeed(this.orbit.sinValue);

        this.updatePosition();
        this.updateSatelitesPosition();
    }

    resize (sinValue) {
        let x = 1;
        x = 1 + (sinValue/2);
        this.planetSizeAfterResize = this.planetSize * x * this.sizePercent;
    }

    respeed (sinValue) {
        let p = Math.abs(sinValue);
        if (p<0.9) {
            p = 0.9;
        }
        this.calcSpeed = this.speed * p;
    }

    updatePosition () {
        this.getElement().css({
            'margin-left':this.posX+'px',
            'margin-top':this.posY+'px',
            'z-index':this.posZ,
            'height':this.planetSizeAfterResize+'px',
            'width':this.planetSizeAfterResize+'px',
        });
    }

    getOrbit() {
        return this.orbit;
    }

    addSatelite(satelite) {
        this.satelites.push(satelite);
    }

    updateSatelitesPosition() {
        var that = this;
        let p = {
            x: 20,
            y: 20,
            z:this.posZ,
        };
        this.satelites.forEach(satelite => {
            satelite.getOrbit().setCentre(p);
            satelite.setSizePercent(that.planetSizeAfterResize/that.planetSize);
            satelite.orbiting();
        });
    }
}
