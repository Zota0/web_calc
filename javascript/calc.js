var output = document.getElementById("output-self")
var times = 0

function add(...$numbers) {
    for (times = 0; times < numbers.length; times++) {
        var sum
        sum += $numbers[times]
    }
    return sum
}

function sub(...$numbers) {
    for (times = 0; times < numbers.length; times++) {
        var sum 
        sum -= $numbers[times]
    }
    return sum
}

console.log(sub(109, 12, 124))
console.log(sub.sum)