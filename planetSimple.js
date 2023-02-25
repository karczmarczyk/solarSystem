function Planet (elementName) {

    this.element = $(elementName);
    this.posX = 100;
    this.posY = 100;
    this.posZ = 100;
    this.speed = 1;
    this.planetSize = 100;

    this.setPosition = function (x, y, z) {
        this.posX = x;
        this.posY = y;
        this.posZ = z;
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

    this.getElement = function () {
        return this.element;
    }

    this.move = function () {
        this.posX = this.posX + this.speed;
        // ++this.planetSize;
        this.updatePosition();
    }

    this.updatePosition = function () {
        this.getElement().css({
            'margin-left':this.posX+'px',
            'margin-top':this.posY+'px',
            'z-index':this.posZ+'px',
            'height':this.planetSize+'px',
            'width':this.planetSize+'px',
        });
    }

    return this;
}
