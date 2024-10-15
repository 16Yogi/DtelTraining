// console.log('Hi Yogi');

// // let or var or const str

// var data='5';
// if(data == '5'){
//     var data='10';
// }
// console.log(data); 




function variablejs() {
    // variable in js
    // automatically define variable
    num1 = 12;
    num1 = 20; //
    num1 = 100;
    Num1 = 30;
    {
        num1 = 1000;
    }
    console.log(num1 + 10);
    str1 = "hello";
    str2 = "js";
    str3 = "30" + num1;
    console.log("auto variable");
    console.log(str1 + " " + str2);
    console.log(str3);
    console.log(num1);
    console.log(Num1);
    // console.log(num33) //error -> Hoisting
    // num33 = 150;

    // var keyword
    console.log("-------------------------");
    var vnum1 = 10;
    var vnum1 = 20;

    vnum1 = 100;
    var Vnum1 = 30;
    var vstr1 = "hello";
    var vstr2 = "20";
    {
        var vnum1 = 70000;
    }
    console.log("var variable");
    console.log(vnum1 + 20);
    console.log(vstr1 + " " + "hello");
    console.log(vstr2 + 10);
    console.log(vnum1);
    console.log(Vnum1);
    console.log(vnum33); //undefined  -> Hoisting
    // var vnum33 = 150;

    // const keyword
    console.log("-------------------------");
    const cnum1 = 10;
    // cnum1 = 30 //error
    // const cnum1 = 20; //error
    const cstr1 = "hello";
    {
        const num1 = 1000;
        console.log(num1);
    }
    console.log("const variable");
    console.log(cnum1);
    // console.log(cnum1++); //error
    console.log(cnum1 + 50);
    console.log(cstr1);
    console.log(cstr1 + 50 + cnum1);
    // console.log(cnum33); //error -> Hoisting
    // const cnum33 = 150;

    // let keyword
    console.log("-------------------------");
    let lnum1 = 10;
    // let lnum1 = 20; //error
    {
        let lnum1 = 50000;
        let lnum22 = 4000;
        console.log(lnum1);
    }
    lnum1 = 100;
    let lstr1 = "hello";
    let lstr2 = "20";
    let lstr3 = "20";
    console.log("let variable");
    console.log(lnum1);
    console.log(lnum1++);
    console.log(lnum1++);
    console.log(lnum1++);
    console.log(lstr2 + 50);
    console.log(lstr2 + lstr3);
    // console.log(lnum22); //error
    // console.log(num333) //error -> Hoisting
    // let num333 = 150;

    // auto - block-s -  hoisting-e - reassign-s -   redeclare-s
    // var - block-s -  hoisting-undefined - reassign-s -   redeclare-s
    // const - block-e -  hoisting-e - reassign-e -   redeclare-e - value fixt
    // let - block-e -  hoisting-e - reassign-e -   redeclare-e - value incress & decress

    // console.log("-------------------------");
}
// variablejs();

function datatype() {
    let a = 12;
    let b = 10.2;
    let c = "hello js";
    let d = true;
    let e = 123e5;
    let f = 123e-5;
    let g = BigInt(
        "1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111"
    );
    let h = undefined;
    let i = "";

    console.log(a);
    console.log(typeof a);

    console.log(b);
    console.log(typeof b);

    console.log(c);
    console.log(typeof c);

    console.log(d);
    console.log(typeof d);

    console.log(e);
    console.log(typeof e);

    console.log(f);
    console.log(typeof f);

    console.log(g);
    console.log(typeof g);

    console.log(h);
    console.log(typeof h);

    console.log(i);
    console.log(typeof i);
}
// datatype();

// function
function function1() {
    console.log("This is function");
}
// function1();

function function2(var1, var2) {
    console.log(var1 + var2);
    console.log(var1 - var2);
}
// function2(10,29);
// function2(20,23);

function function3() {
    return "hello This is return fuction";
}
// console.log(function3());
//
// var fun3 = function3();
// console.log(fun3);

function function4(a, b) {
    return a + b;
}
// console.log(function4(10,20));
// var fun4 = function4(10,50);
// console.log(fun4);

function function5(a) {
    // console.log(a-32);
    // console.log(5/9);
    a1 = a - 32;
    a2 = 5 / 9;
    a3 = a1 * a2;
    console.log(a3);

    return (5 / 9) * (a - 32);
}
// const fun5 = function5(100);
// console.log(fun5);

function objectFun() {
    const fruits = {
        name: "Apple",
        color: "red",
        type: "fruits",
    };
    console.log(fruits.name);
    console.log(fruits.color);
    console.log(fruits.type);

    console.log("---------------------------");

    const person = {};
    person.fullname = "Ram lal";
    person.address = "raipur";
    person.age = 150;
    console.log(person.fullname);
    console.log(person.address);
    console.log(person.age);

    console.log("---------------------------");

    const tour = new Object();
    tour.country = "India";
    tour.loc1 = "Kedar Nath";
    tour.loc2 = "Tungnath";
    tour.loc3 = "Rishikesh";
    tour.loc4 = "Simla";
    tour.loc5 = "Manali";
    tour.loc6 = "Kashmir";
    tour.loc7 = "spiti";
    tour.loc8 = "Mussoorie";
    tour.loc9 = "Nainital";

    console.log(
        tour.loc1 +
        " " +
        tour.loc9 +
        " " +
        tour.loc2 +
        " " +
        tour.loc3 +
        " " +
        tour.loc4 +
        " " +
        tour.loc5 +
        " " +
        tour.loc6 +
        " " +
        tour.loc7 +
        " " +
        tour.loc8 +
        " "
    );
    console.log(tour["loc1"]);

    console.log("---------------------------");

    // const country = {
    //     con1 : "IND",
    //     con2 : "Pak",
    //     con3 : "China",
    //     con4 : "USA",
    //     con5 : "UK",
    //     con6 : "Australia",
    //     world : function(){
    //         return this.con1 + " " + this.con2 + " " + this.con3 + " " + this.con4 + " " + this.con5 + " " + this.con6;
    //     }
    // };
    // console.log(country.world);

    const person1 = {
        firstName: "John",
        lastName: "Doe11",
        id: 5566,
        fullName: function () {
            return this.firstName + " " + this.lastName;
        },
    };

    document.getElementById("demo").innerHTML = person1.fullName();
    console.log(person.fullName);


    console.log("-----------------------------------------------")
    const mut1 = {
        person: "Ram Singh",
        age: 20,
        add: "raipur"
    };
    console.log(mut1.age);
    const mut2 = mut1;
    mut2.age = 150;
    console.log(mut1.age);
    console.log(mut2.age);

    const mut3 = new Object();
    mut3.name = "Hari Lal";
    mut3.add = "Raipur";
    mut3.age = 78;

    mut4 = mut3;
    mut4.name = "Lala Singh"
    console.log(mut4.name);
    console.log(mut3.name);

    // 
    console.log("---------------------------")
    const obj4 = new Object();
    obj4.con1 = "IND";
    obj4.con2 = "USA";
    obj4.con3 = "UK";
    obj4.con4 = "China";
    obj4.con5 = "Japan";

    console.log(obj4);
    console.log(obj4.con1);
    delete obj4.con5;
    console.log(obj4);

    // nested

    console.log("---------------------------------------")
    const obj5 = {
        con1: "India",
        state: {
            st1: "MP",
            st2: "CG",
            st3: "UP",
            st4: "UK",
            st5: "AP",
            st6: "KL",
            st7: "JK"
        }
    };
    console.log(obj5.con1);
    console.log(obj5.state.st7);
    console.log(obj5["state"]["st5"]);

    // object method 

    console.log("-----------------------------------------");
    const obj6 = {
        con1: "IND",
        state: function () {
            return "I am from" + " " + this.con1;
        }
    }
    document.getElementById("demo2").innerHTML = obj6.state();

    const obj7 = {
        name: "ramlal",
        age: 20,
        add: "JK"
    }

    obj7.fullname = function () {
        return "Full Name:" + this.name + " " + "Age" + " " + this.age + " " + "Address" + this.add;
    }
    document.getElementById("demo3").innerHTML = obj7.fullname();


    // by loop

    const obj8 = {
        name: "Raju",
        lname: "Rastogi",
        age: 78,
        add: "KL",
        mob: 123456789
    };
    let text = "";
    for (let x in obj8) {
        text += obj8[x] + " ";
    };
    document.getElementById("demo4").innerHTML = text;

    const obj9 = {
        1: 1,
        2: 2,
        3: 3,
        4: 4
    };
    let bl = "";
    for (let i in obj9) {
        bl += obj9[i] + " ";
    };
    // document.getElementById("demo4").innerHTML = bl;

    // object value
    const obj10 = {
        1: 1,
        2: 2,
        3: 3,
        4: 4
    };
    const arr1 = Object.values(obj10);
    console.log(arr1);

    const obj11 = {
        1: 11,
        2: 22,
        3: 33,
        4: 44
    };
    const arr2 = Object.values(obj11);
    console.log(arr2);

    function obj12(f1, f2, f3, f4) {
        this.ff1 = f1;
        this.ff2 = f2;
        this.ff3 = f3;
        this.ff4 = f4;
    }
    let valObj12 = new obj12(11, 22, 33, 44);
    console.log(valObj12);

}

//   objectFun();

// this keyword
function thisfun() {
    console.log(this);  // window

    // "use strict"
    // let a = this;
    // console.log(this); //window

    // function myfun(){
    //     return this;
    // }  //window

    // "use strict"
    // function myfun(){
    // return this;
    // }  //undefined

    // document.getElementById("demo").innerHTML="<button onclick='this.style.display='none''>Click</button>";
    const obj1 = {
        name1: "Riya",
        name2: "Nihal",
        name3: "Mohan",
        name4: "mehek",
        clg: function () {
            return "From DU" + this.name1 + " " + this.name2 + " " + this.name3 + " " + this.name4;
        }
    }
    document.getElementById("demo2").innerHTML = obj1.clg();

    const obj2 = {
        name1: "fsd",
        clg: function () {
            return this;
        }
    }
    document.getElementById("demo").innerHTML = obj2.clg();
}
// thisfun()
// console.log(thisfun()());

// -------------------call
// The JavaScript call() Method
// The call() method is a predefined JavaScript method.
// It can be used to invoke (call) a method with an owner object as an argument (parameter).

function callfun() {
    const call1 = {
        fullname: function () {
            return "Fullname" + " " + this.fname + " " + this.lname;
        }
    };
    const call2 = {
        fname: "Riya",
        lname: "Singh"
    };
    const call3 = {
        fname: "Samsheer",
        lname: "Singh"
    };
    const a = call1.fullname.call(call2);
    const b = call1.fullname.call(call3);
    console.log(a);
    console.log(b);


    const call4 = {
        fullname2: function (fname2, lname2) {
            return "Fullname:" + this.fname2 + " | " + fname2 + "| " + this.lname2 + " | " + lname2;
        }
    };
    const call5 = {
        fname2: "Riya2",
        lname2: "Singh2"
    }

    const c = call4.fullname2.call(call5, "Ram", "Lal");
    console.log(c);




}
// callfun();


// -----------------apply
// With the apply() method, you can write a method that can be used on different objects.
// The JavaScript apply() Method


function applyfun() {
    const apl1 = {
        fullname: function () {
            return "Fullname:" + " " + this.fname + " " + this.lname;
        }
    }

    const apl2 = {
        fname: "Mohan",
        lname: "Pandey"
    }

    const apl3 = {
        fname: "Pinki",
        lname: "Pandey"
    }
    const a = apl1.fullname.apply(apl2);
    const b = apl1.fullname.apply(apl3);
    console.log(a);
    console.log(b);


    const apl4 = {
        fullname2: function (fname2, lname2) {
            return "fullname" + " " + this.fname2 + " " + this.lname2 + " | " + fname2 + " " + lname2;
        }
    };
    const apl5 = {
        fname2: "Mohan",
        lname2: "Pandey"
    };
    const d = apl4.fullname2.apply(apl5, ["Rinki", "Pandey"]);
    console.log(d);
    console.log(Math.max.apply(3, [1, 2, 3, 4, 6, 76, 32]));
}
// applyfun();

// -----------------bind
// Function Borrowing
// With the bind() method, an object can borrow a method from another object.
// The example below creates 2 objects (person and member).
// The member object borrows the fullname method from the person object:
function bindfun() {
    const bind1 = {
        fname1: "Mohan",
        lname1: "Ranga",
        fullname: function () {
            return "Fullname:" + this.fname + " " + this.lname + " | " + bind1.fname1 + " " + bind1.lname1;
        }
    }

    const bind2 = {
        fname: "Pinki",
        lname: "Pandey"
    }
    const a = bind1.fullname.bind(bind2);
    console.log(a);
    console.log(a());


    const bind3 = {
        fullname2: function (fname2, lname2) {
            return "fullname" + " " + this.fname2 + " " + this.lname2 + " | " + fname2 + " " + lname2;
        }
    }
    const bind4 = {
        fname2: "Mohan",
        lname2: "Pandey"
    }
    const b = bind3.fullname2.bind(bind4, "Shikha", "bali");
    console.log(b());
}

// bindfun();

// console.log("------------------------------------------------------")
function forloopfun() {
    for (let i = 0; i <= 10; i++) {
        console.log(i);
    }
    let arr_1 = [3, 5, 22, 5, 7, 2, 45, 75, 89, 21, 2];
    let arrLen = arr_1.length;
    console.log(arr_1);
    console.log(typeof (arr_1));

    for (let i = 0; i <= arr_1.length; i++) {
        // console.log(arr_1[i]);
        // console.log("---------------------");
        // console.log(arr_1[1]+arr_1[i]);
    }
    for (let i = 0; i <= arr_1; i++) {
        console.log(arr_1[i]);
    }
    // console.log(arr)
    const cars = ["BMW", "Volvo", "Saab", "Ford"];
    len = cars.length
    for (let j = 0; j <= cars.length; j++) {
        console.log(cars[j]);
    }

}
