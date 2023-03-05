class Orbit {
    
    // półosie
    a = 0;
    b = 0;

    t = 0;

    // warość początkowa na elipsie
    x0 = 0;
    y0 = 0;
    z0 = 0;

    isFrontOfSun = true;

    sinValue;

    constructor (a,b) {
        this.a = a;
        this.b = b;
        return this;
    }

    setCentre (p) {
        this.x0 = p.x;
        this.y0 = p.y;
        this.z0 = p.z;
        return this;
    }

    getIsFrontOfSun () {
        return this.isFrontOfSun;
    }

    getSolarCentre () {
        return {x:this.x0, y:this.y0, z:this.z0};
    }

    calcPosition (t) {
        // wyznaczam pozycję
        let x = this.x0 + this.a * Math.cos(t);
        let y = this.y0 + this.b * Math.sin(t);

        this.sinValue = Math.sin(t);

        if (y<=this.y0) {
            this.isFrontOfSun = false;
        } else {
            this.isFrontOfSun = true;
        }

        return {x:x, y:y};
    }
}