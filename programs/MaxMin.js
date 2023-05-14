// Find 2nd min value and 2nd max value from an given array;

const ary = [9, 5, 7, 15, 2, 13, 4]
const loopCount = ary.length - 1;
let min2nd = 0;
let max2nd = 0;
for(let i=0; i<2; i++){
    for(let j=i; j<loopCount; j++){
        min2nd = Math.min(ary[j], ary[j+1])
        max2nd = Math.max(ary[j], ary[j+1])
    }
}

console.log("min:"+min2nd,'max:'+max2nd)