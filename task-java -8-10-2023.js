//# TASKJAVA
Q1
//event loop: An event loop is a fundamental concept in asynchronous programming and is commonly used in the context of JavaScript, particularly in web browsers and Node.js. It is responsible for managing the execution of code, handling events, and ensuring non-blocking operations.
___________________
Q2
//let myArray = [2, 3, 4];
//let elementToAdd = 1;
//myArray = [elementToAdd, ...myArray];
console.log(myArray); // Output: [1, 2, 3, 4]
____________________
let myArray = [1, 2, 3];
let elementToAdd = 4;
myArray = [...myArray, elementToAdd];
console.log(myArray); // Output: [1, 2, 3, 4]
________________________
//1-THE OUTPUT: 3
//2-THE OUTPUT: 
//3-THE OUTPUT :[baz]
//4-THE OUTPUT: 
//5-THE OUTPUT: true
[ [ 'carName', 'Bmw' ], [ 'carPrice', 1000000 ] ]

____________________________________________
//question 3:
1-
function sumObjectValues(obj) {
  let sum = 0;
  for (let key in obj) {
    if (typeof obj[key] === 'number') {
      sum += obj[key];
    }
  }
  return sum;
}

// Example usage:
let myObject = {
  field1: 10,
  field2: 'Hello',
  field3: 20,
  field4: 'World',
  field5: 30
};

let result = sumObjectValues(myObject);
console.log(result); // Output: 60 (10 + 20 + 30)
___________________________________________
2-
function asyncBlock1() {
  setTimeout(function() {
    console.log("Async Block 1 executed");
    asyncBlock2();
  }, 1000); // 1-second delay
}

function asyncBlock2() {
  setTimeout(function() {
    console.log("Async Block 2 executed");
    asyncBlock3();
  }, 2000); // 2-second delay
}

function asyncBlock3() {
  setTimeout(function() {
    console.log("Async Block 3 executed");
  }, 3000); // 3-second delay
}

// Start the sequence
asyncBlock1();
____________________________
3-
function asyncBlock1() {
  setTimeout(function() {
    console.log("Async Block 1 executed");
    asyncBlock2();
  }, 1000); // 1-second delay
}

function asyncBlock2() {
  setTimeout(function() {
    console.log("Async Block 2 executed");
    asyncBlock3();
  }, 2000); // 2-second delay
}

function asyncBlock3() {
  setTimeout(function() {
    console.log("Async Block 3 executed");
  }, 3000); // 3-second delay
}

// Start the sequence
asyncBlock1();
__________________________
4-
//const date1 = new Date('2023-10-01');
//const date2 = new Date('2023-10-10');

//const differenceInMilliseconds = Math.abs(date2 - date1);
console.log('Difference in Milliseconds:', differenceInMilliseconds);




