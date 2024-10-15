function fun1(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload  = function(){
        document.getElementById("demo").innerHTML = this.responseText;
    }
    xhttp.open("GET","ajax.txt");
    xhttp.send();
}

function fun2(){
    const http2 = new XMLHttpRequest();
    http2.onload = function(){
        document.getElementById("demo2").innerHTML = this.responseText;
    }
    http2.open("GET","ajax.txt");
    http2.send();
}

function fun3(){
    const http3 = new XMLHttpRequest();
    http3.onload = function(){
        document.getElementById("demo3").innerHTML = this.responseText;
    }
    http3.open("GET","ajextest.html");
    http3.send();
}

function fun4(){
    const http4 = new XMLHttpRequest();
    http4.onload = function(){
        document.getElementById("demo4").innerHTML = this.responseText;
    }
    http4.open("GET", "ajextest.html"); 
    http4.send();
}

// function fun5(){
//     const xhttp5 = new XMLHttpRequest();
//     xhttp5.onload = function(){
//         document.getElementById("demo5").innerHTML = this.responseText;
//     }
//     xhttp5.open("GET","ajex.txt"+ Math.random());
//     xhttp5.send();
// }

// function fun5(){
//     const xhttp5 = new XMLHttpRequest();
//     xhttp5.onload = function(){
//         document.getElementById("demo5").innerHTML = this.responseText;
//     }
//     xhttp5.open("GET", "ajextest.html"+ Math.random()); // append a random query parameter
//     xhttp5.send();
// }


function fun5(){
    const xhttp5 = new XMLHttpRequest();
    xhttp5.onload = function(){
        document.getElementById("demo5").innerHTML = this.responseText;
    }
    xhttp5.open("GET", "ajextest.html"+ Math.random()); 
    xhttp5.send();
}

function fun6(){
    const xhttp6 = new XMLHttpRequest();
    xhttp6.onload = function(){
        document.getElementById("demo6").innerHTML = this.responseText;
    }
    xhttp6.open("GET","ajax.txt");
    xhttp6.setRequestHeader("Content-type","application/x-www-form-urlencoded")
    xhttp6.send("hfjsdh");
}

function fun7(){
    const xhttp7 = new XMLHttpRequest();
    xhttp7.open("GET","ajextest.html",false);
    xhttp7.send();
    document.getElementById("demo7").innerHTML= xhttp7.responseText;
}

const xhttp8 = new XMLHttpRequest();
xhttp8.onload = function(){
    document.getElementById("demo8").innerHTML= this.getAllResponseHeaders();
}
xhttp8.open("GET","ajax.txt");
xhttp8.send();


const xhttp9 = new XMLHttpRequest();
xhttp9.onload = function(){
    document.getElementById("demo8").innerHTML= this.getResponseHeader("Last-Modification");
}
xhttp9.open("GET","ajax.txt");
xhttp9.send();