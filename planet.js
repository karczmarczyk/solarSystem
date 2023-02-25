function Planet (elementName) {

    this.element = $(elementName);
    this.posX = 100;
    this.posY = 100;
    this.posZ = 100;
    this.speed = 1; // km/s
    this.speedX = 0.001;
    this.planetSize = 100;
    this.planetSizeAfterResize = 100;
    this.t = Math.random(); //0;
    this.orbit;
    this.distanceFromSun = 0;

    this.setPosition = function (x, y) {
        this.posX = x;
        this.posY = y;
        return this;
    }

    this.setDistanceFromSun = function (d) {
        this.distanceFromSun = d;
        return this;
    } 

    this.setSpeed = function (s) {
        this.speed = s;
        return this;
    }

    this.setSize = function(s) {
        this.planetSize = s;
        return this;
    }

    this.setOrbit = function(o) {
        this.orbit = o;
        return this;
    }

    this.getElement = function () {
        return this.element;
    }

    this.move = function () {
        this.posX = this.posX + this.speed;
        // ++this.planetSize;
        this.updatePosition();
    }

    this.orbiting = function () {
        this.t = this.t + (this.speed * this.speedX);
        let p = this.orbit.calcPosition(this.t);
        this.posX = p.x;
        this.posY = p.y;

        let sunPosition = this.orbit.getSolarCentre().z;
        if (this.orbit.getIsFrontOfSun()) {
            this.posZ = sunPosition + this.distanceFromSun;
        } else {
            this.posZ = sunPosition - this.distanceFromSun;
        }

        this.resize(this.orbit.sinValue);

        this.updatePosition();
    }

    this.resize = function(sinValue) {
        let x = 1;
        if (sinValue > 0) {
            x = 1.1 + sinValue;
        } else {
            x = 1.1 - ((-1) * sinValue);
        }
        this.planetSizeAfterResize = this.planetSize * x;
    }

    this.updatePosition = function () {
        this.getElement().css({
            'margin-left':this.posX+'px',
            'margin-top':this.posY+'px',
            'z-index':this.posZ,
            'height':this.planetSizeAfterResize+'px',
            'width':this.planetSizeAfterResize+'px',
        });
    }

    return this;
}
