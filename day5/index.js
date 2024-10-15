function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("demo1").innerHTML = this.responseText;
    }
    xhttp.open("GET", "index.txt");
    xhttp.send();
}


function fun2(){
    const xhttp2 = new XMLHttpRequest();
    xhttp2.onload = function(){
        document.getElementById("demo2").innerHTML = this.responseText;
    }
    xhttp2.open("GET","index.txt");
    xhttp2.send();
}


function fun3(){
    const xhttp3 = new XMLHttpRequest();
    xhttp3.onload = function(){
        document.getElementById("demo3").innerHTML = this.responseText;
    }
    xhttp3.open("GET","index.txt");
    xhttp3.send();
}

function fun4(){
    const xhttp4 = new xm
}