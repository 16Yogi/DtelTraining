function fun1() {
    let http1 = new XMLHttpRequest();
    let url = 'https://jsonplaceholder.typicode.com/todos/1';
    http1.open("GET", url, true);
    http1.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            document.getElementById("demo1").innerHTML=this.responseText;
        }
    };
    http1.send();
}

fun1(); // Call the function correctly


function fun2(){
    $.ajax({
        url:'https://jsonplaceholder.typicode.com/todos/1',
        type:"GET",
        success:function(data){
            let x = JSON.stringify(data);
            // console.log(x);
            document.getElementById("demo2").innerHTML=x;
        },
        error: function(error){
            console.log(`Error ${error}`);
        }
    });
}
// fun2();

function fun3(){
    let url = 'https://jsonplaceholder.typicode.com/todos/1';

    // Making our request 
    fetch(url, { method: 'GET' })
    .then(Result => Result.json())
    .then(string => {

        // Printing our response 
        console.log(string);

        // Printing our field of our response
        console.log(`Title of our response :  ${string.title}`);
    })
    .catch(errorMsg => { console.log(errorMsg); }); 
}
fun3();

function fun4(){
    let url = 'https://jsonplaceholder.typicode.com/todos/1';
    fetch(url,{method:'GET'})
    .then(Result => Result.json())
    .then(string => {
        console.log(string);
        console.log(`Title of our response: ${string.title}`);
    })
    .catch(errorMsg => { console.log(errorMsg);});
}
fun4();


function fun(){
    $.ajax({
        url : 'https://jsonplaceholder.typicode.com/todos/1',
        tyoe : "GET",
        success : function(data){
            let x = JSON.stringify(data);
            console.log(x);
        },
        error:function(error){
            console.log(`Error ${error}`);
        }
    });
}
// fun();

function fun5(){
    let http = new XMLHttpRequest();
    let url = "https://jsonplaceholder.typicode.com/todos/1"
    http.open("GET",url,true);

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            console.log(this.responseText);
        }
    }
    http.send();
}
fun5();




function fun6(){
    let url = "https://jsonplaceholder.typicode.com/todos/1";
    fetch(url,{method:'GET'})
    .then(Result => Result.json())
    .then(string =>{
        console.log(string);
        console.log(`Title of our response : ${string.title}`);
    })
    .catch(errorMsg => {
        console.log(errorMsg);
    })
}
fun6();

function fun7(){
    $(document).ready(function(){
        $("#ani1").click(function(){
          $("#ani2").animate({left: '250px'});
        });
    });
}

function fun8(){
    $("#stop2").ready(function(){
        $("#flip2").click(function(){
            $("#panel2").slideDown(5000);
        });
        $("#stop2").click(function(){
            $("#panel2").stop();
        });
    });
}