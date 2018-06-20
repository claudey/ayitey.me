// pick a random number from 245 to 255
var colorRand = Math.floor(Math.random() * 10) + 245;
// send those numbers into an shuufled array such that each number gets a placement
var colArray = [colorRand, 245, 255];
colArray.sort(function() {
    return 0.5 - Math.random();
});
// return those numbers to a DOM element which sets page bg
document.body.style.background = "rgb(" + colArray[0] + ", " + colArray[1] + ", " + colArray[2] + ")";