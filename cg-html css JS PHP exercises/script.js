//* exc1 *//
console.log("1 2 3 4 5 6 7 8 9 10");

//* exc2 *//
for (var i = 1; i <= 100; i = i + 2) {
  console.log(i);
}

//* exc3-4 *//
for (var i = 1; i <= 10; i++) {
  for (var j = 1; j <= 10; j++) {
    console.log(i + " * " + j + " = " + i * j);
  }
}

//* exc5 *//
var sum = 0;

for (var i = 1; i <= 10; i++) {
  sum = sum + i;
}

console.log(sum);

//* exc6 *//
var factorial = 1;

for (var i = 1; i <= 10; i++) {
  factorial = factorial * i;
}
console.log(factorial);

//* exc7 *//
var sum = 0;
for (var i = 11; i < 30; i = i + 2) {
  sum = sum + i;
}
console.log(sum);

//* exc8 *//
var convertCtoF = function (x) {
  return x * 1.8 + 32;
};
console.log(convertCtoF(20));

//* exc9 *//
let array = [2, 3, -1, 5, 7, 9, 10, 15, 95];
var arraySize = array.length;
var sum = 0;
for (var i = 0; i < array.length; i++) {
  sum = sum + array[i];
}
console.log(sum);
