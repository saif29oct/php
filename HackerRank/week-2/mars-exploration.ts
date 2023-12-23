function marsExploration(s: string): number {
    let strAry = s.match(/.{1,3}/g);
    let count = 0;
    if (strAry) {
        strAry.forEach((str) => {
            if(str[0] !== 'S') count++;
            if(str[1] !== 'O') count++;
            if(str[2] !== 'S') count++;
        });
    }
    return count;
}
