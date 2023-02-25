function Orbit (a,b) {
    
    // półosie
    this.a = a;
    this.b = b;

    this.t = 0;

    // warość początkowa na elipsie
    this.x0 = 0;
    this.y0 = 0;

    this.isFrontOfSun = true;

    this.setCentre = function(p) {
        this.x0 = p.x;
        this.y0 = p.y;
        return this;
    }

    this.getIsFrontOfSun = function () {
        return this.isFrontOfSun;
    }

    this.calcPosition = function (t) {
        // wyznaczam pozycję
        let x = this.x0 + this.a * Math.cos(t);
        let y = this.y0 + this.b * Math.sin(t);

        if (y<=this.y0) {
            this.isFrontOfSun = false;
        } else {
            this.isFrontOfSun = true;
        }

        return {x:x, y:y};
    }

    return this;
}