function arrMethod(){
    const fruits = ["Banana", "Orange", "Apple", "Mango"];
    const fruits2 = ["Banana", "Orange", "Apple", "Mango"];

    const number1 = [1,2,3,4,5,6];

    let len = fruits.length;
    console.log(len);

    let tostr = fruits.toString()
    console.log(tostr);
    
    let atM = fruits[2];
    console.log(atM);

    let join1 = fruits.join(number1);
    let join2 = fruits.join().number1;
    console.log(join1);
    console.log(join2);
    console.log(fruits.join(" * "));

    // let popm = join2.pop();
    // let popmm = pop(join2)
    // console.log(popm);
    // console.log(popmm);
    console.log(fruits.pop());
    console.log(fruits);

    let push1 = fruits.push("hello");
    console.log(push1);
    console.log(fruits);

    let shift1 = fruits.shift();
    console.log(shift1);
    console.log(fruits);

    let unshift1 = fruits.unshift("Hiiiiii");
    console.log(unshift1)
    console.log(fruits);

    fruits[fruits.length] = "Butterfly butterfly";
    console.log(fruits)

    let del1 = delete fruits[1];
    console.log(del1);
    console.log(fruits); 
    
    let concat1 = fruits2.concat(number1,fruits)
    console.log(concat1);

    let copywithin1 = fruits.copyWithin(2,0);
    console.log(copywithin1);
    console.log(fruits);

    let flat1 = fruits.flat();
    console.log(flat1);
    console.log(fruits);

    let flatmap1 = fruits.flatMap(x => [x,x*10]);
    console.log(flatmap1);
    console.log(fruits);

    let splice1 = fruits.splice(45,78,"Hahahaha","Hihihih");
    console.log(splice1);
    console.log(fruits);

    let spliced2 = fruits.toSpliced(0,1)
    console.log(spliced2)
    console.log(fruits);

    const fruits3 = ["Banana", "Orange", "Lemon", "Apple", "Mango"];
    let slice1 = fruits3.slice(2)
    console.log(fruits3);
    console.log(slice1);
    // console.log(fruits3.slice(-2));
    // console.log(fruits3.slice(2,3)); //['Lemon']

    const fruits4 = ["Banana", "Orange", "Lemon", "Apple", "Mango"];
    console.log(fruits.indexOf("Banana")+1);
    console.log(fruits.lastIndexOf("Apple")+1);
    console.log(fruits.includes("Apple"));
    console.log(fruits.includes("butterfuly"));
    
    // const find1 = fruits4.find(myfun);
    // const myfun = (value,index,array) =>{
    //     return value > 18;
    // }
    // console.log(find(myfun));
    
    let sort1 = fruits4.sort();
    console.log(sort1);
    // console.log(sort().number1);
    console.log(number1.sort());
    console.log(number1.reverse());
    console.log(fruits4.reverse()); 
    
    const number2 = [1,2,3,4,5,6];
    const fruits5 = ["Banana", "Orange", "Lemon", "Apple", "Mango"];
    console.log(fruits5);
    console.log(fruits5.toSorted());
    console.log(fruits5.toReversed());
    console.log(number2.toSorted());
    console.log(number2.toReversed());
}
// arrMethod();

function datefun(){
    const date1 = new Date();
    console.log(date1);
    
    const date2 = new Date("1 Nov 2024,18:50:55");
    console.log(date2);

    // const date3 = new Date(2024 ,11, 12,13,14)
    const date3 = new Date(2018, 11, 24, 10, 33, 30, 0);
    console.log("hollyday:",date3);

    const date4 = new Date(10000000000000);
    console.log(date4);

    const date5 = new Date(24*60*60*1000);
    console.log(date5);

    const date6 = new Date("2015-11");
    console.log(date6);

    const date7 = new Date("2015-12-18");
    console.log(date7);

    console.log(new Date("2024 Nov 25"));
    console.log(new Date("2015-03-25T12:00:00-06:30"));

    console.log(new Date().getFullYear());
    console.log(new Date().getUTCFullYear());
    console.log(new Date().getMonth());
    console.log(new Date().getDay());
    console.log(new Date().getUTCDay());
    console.log(new Date().getDate());
    console.log(new Date().getHours());
    console.log(new Date().getMinutes());
    console.log(new Date().getSeconds());
    console.log(new Date().getTime());
    console.log(new Date().getTimezoneOffset());

    const date8 = new Date();
    date8.setFullYear(2025);
    console.log(date8);
}
// datefun();


function stringmethod(){
    let str1 = "Hello Hiihi hahaha hehehe";
    let str2 = "     Hello Hiihi hahaha hehehe    " ;

    console.log(str1);
    console.log(str1.length);
    console.log(str1.charAt(0));
    console.log(str1.charCodeAt(0));
    console.log(str1.at(2));
    console.log(str1.slice(1,4));
    console.log(str1.toUpperCase());
    console.log(str1.toLowerCase());
    console.log(str1.concat(" | ","yewoufywnoi"));
    console.log(str1.concat(" | ",str2));
    console.log(str2.trimStart());
    console.log(str2.trimEnd());
    console.log(str2.trim());

    str3 = 4;
    str4 = str3.toString();
    console.log(str4.padStart(3,0));
    console.log(str4.padEnd(4,0));
    console.log(str1.repeat(2));
    console.log(str1.replace("Hello","Chalo"));
    console.log(str1.replaceAll("h","HU"));
    console.log(str1.split("|"))
    console.log(str1.split(","))
    console.log(str1.split(" "))


}
// stringmethod();
function numberFunction(){
    let num1 = 10;
    let num2 = 12.32;

    console.log(num1.toString());
    console.log(num1.toExponential());
    console.log(num2.toExponential);
    console.log(num2.toString());
    console.log(num2.toFixed(5));
    console.log(num2.toPrecision(5));
    console.log(num2.valueOf());
    console.log((255).valueOf());
    console.log((15+60).valueOf());
    let num3 = "30";
    console.log(Number(num3)+10);
    console.log(Number.isInteger(45.45));
    console.log(Number.isInteger(45));
    console.log(Number.isInteger("45"));
}
numberFunction();

