function karatSuba(x: number, y: number): number {
    let xStr = x.toString();
    let yStr = y.toString();

    if (xStr.length === 1 && yStr.length === 1) {
        return x * y;
    }

    let n = Math.max(xStr.length, yStr.length);
    let hn = Math.ceil(n / 2);

    if(x < y){
        xStr = xStr.padStart(n, '0');
    }else{
        yStr = yStr.padStart(n, '0');
    }

    let a = xStr.slice(0, -hn);
    let b = xStr.slice(-hn);
    let c = yStr.slice(0, -hn);
    let d = yStr.slice(-hn);

    let ac = karatSuba(parseInt(a), parseInt(c));
    let bd = karatSuba(parseInt(b), parseInt(d));
    let adPbc = karatSuba((parseInt(a) + parseInt(b)), (parseInt(c) + parseInt(d))) - ac - bd;

    return ac * Math.pow(10, 2 * hn) + adPbc * Math.pow(10, hn) + bd;
}

