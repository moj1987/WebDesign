// 1.
var label = "conestogacollege"
var tld = "ca"
var domainName =`${label}.${tld}`
console.log(domainName)

// 2. 
var isConestoga = 'conestogaacollege.ca' === domainName
console.log(isConestoga)

// 3.
var isNotConestoga =! isConestoga
console.log(isNotConestoga)

// 4.
var byte1 = 17
var byte2 = 5
var byte3 = 64
var byte4 = 4
console.log(byte1,byte2,byte3,byte4)

// 5.
console.log(byte1.toString())
console.log(byte1.toString(2))
console.log(byte1.toString(16))

// 6. 
var statusCode = 418  // 418 - "I'm a teapot"

// 7.
if(statusCode>= 400 && statusCode<= 499){
    console.log("Client Error")
}
