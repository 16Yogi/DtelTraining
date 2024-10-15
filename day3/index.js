
// forinloopfun();
function forinloop() {
    const person = { fname: "Mohan", lname: "Pandey", age: 25 };
    for (let i in person) {
        console.log(i, person[i]);
    }
    const numbers = [45, 4, 9, 16, 25];
    for (let j in numbers) {
        console.log(numbers[j]);
    }
}
// forinloop();

// foreach
function foreachloop() {
    const numbers = [45, 4, 9, 16, 25];
    numbers.forEach(foreachfun);

    function foreachfun(value) {
        console.log(value);
    }

    const cars = ["BMW", "Volvo", "Saab", "Ford"];
    cars.forEach(myfun);
    function myfun(val) {
        console.log(val);
    }
}
// foreachloop()


// forofloop
function forofloop() {
    const cars = ["BMW", "Volvo", "Mini"];
    const cars2 = ["BMW2", "Volvo2", "Mini2"];

    for (let i of cars) {
        for (let j of cars2) {
            console.log(i, j);
            // console.log(i+j);
        }

    }
}
// forofloop();


// while loop
function whileloop() {
    let i = 1;
    while (i <= 10) {
        console.log(i);
        i++;
    }
    let j = 1;

    // while(i<=10){
    //     while(j<=12){
    //         // console.log(i*j);
    //         // console.log("HEllo");
    //         // i++;
    //         // j++;
    //     }
    // }

    const cars = ["BMW", "Volvo", "Mini"];
    let k = 0;
    while (k <= cars.length) {
        console.log(cars[k]);
        k++;
    }
}
// whileloop();

function dowhilelloop() {
    let i = 1;
    do {
        console.log(i);
        i++;
    } while (i <= 5);

    const cars = ["BMW", "Volvo", "Mini"];
    len = cars.length;
    let k = 0;
    do {
        console.log(cars[k]);
        k++;
    } while (k <= len);
}
// dowhilelloop();

// map
function mapfun() {
    const person1 = new Map([
        ["Mohan", "Pandey"],
        ["Rohan", "Pandey"],
        ["Sohan", "Pandey"]
    ]);
    const data1 = person1.get("Mohan");
    console.log(data1);
    console.log(person1.keys());
    console.log(person1.values());;
    for (const value of person1.keys()) {
        console.log(value);
    }

    const fruites1 = new Map([
        ["Apple", 12],
        ["Banana", 15],
        ["Cherry", 18]
    ])
    const fruit = fruites1.get("Apple");
    console.log(fruit);
}
// mapfun();
function mapfun() {
    let var1 = (a, b) => a * b;
    console.log(var1(10, 20));

    let var2 = function () {
        return "Hello I am arrow function"
    }
    console.log(var2());

    let var3 = (a,b) =>{
        console.log(a+b);
        console.log(a-b);
        console.log(a*b);
    }
    console.log(var3(10,20));
}
// mapfun();
// function onchange(){
//     let i = document.getElementById("ch");
//     i.value = i.value.toUpperCase();
// }
function myFunction() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
  }

function upfun(){
    var a = document.getElementById("lname");
    a.value = a.value.toUpperCase();
}
function mouseove(){
    document.getElementById("mouseov").innerHTML="Hello Mouse over"
}