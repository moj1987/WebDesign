var arr = [1,2,3,4];
var arr2 = [1,"hello", true];

// ECMA script, ES5 ES6
// JS engine: V8 - Chrome, spiderMonkey - FF, Chakra - IE/edge

// JS Syntax:
// Case Sensitive
// Comment are like C
// Functions: 1.function declaration 2.function expression 3. arrow function

// Data type: Number/NaN , String, Boolean, Object:Array, function, Date, null
// === strict equal

// var a = 3
// var b = 2
// var c = a*b
// console.log("The anser is: " + c)
// console.log(`The anser is: ${c} ${c} ${c} `)

// console.log("The anser is: " + c++)
// console.log("The anser is: " + c)
// console.log("The anser is: " + ++c)
// console.log("The anser is: " + c)


// Expression: Anything that evaluated to a value. In var a = 10/2 , 10/2 is an expression.

var f = function() { 
    // a function expression in an anonymouse funciton which DOES NOT have a name.
    return 10/2
}
console.log(f)

var e = f
// now e is a function too
//  to call a function: f()

// Control structures: 1. sequentioal, 2. conditonal, 3. looping, 4. transfer

// var: Global
// let: Local

// UDF vs PDF
// UDF: 1. Declaration 2. Expression 3. Arrow function
// 

function foo() { return a+b   }

var f = function foo(a,b) { return a+b  }

var f = (a,b)=>{ return a+b }

var s1 = "My name is Moj";
// function addPeriod(s)
// {
//         if(s.end){
//             return s+'.';
//         }
//         return "Shame!!";
// }

// console.log(addPeriod(s1))
// console.log(addPeriod())

// s1.charAt
// s1.length-1
// s1.indexOf("name")


// function addPeriod(inputString)
// {
//         return inputString.endsWith('.') ? inputString: '${ss}.';

// }
// addPeriod("hello")
// addPeriod("hello.")

// arr.push
// arr.pop
// arr.unshift

function myArray()
{
    var arr1=[1,12,30,4,41];

    for (var i; i<arr1.length; i++)
    {
        console.log(i,arr1[i])
    }
}
myArray();

// var arrString = [one, three, fifteen];
// for (var word of words){}

// arrString.forEach(function(words)){ console.log(word)});

// var upperCaseWords = words.map(function(word)){
//     return word.toUpperCase()
// }
