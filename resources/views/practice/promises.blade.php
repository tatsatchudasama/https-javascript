

<script>

// Promise is to type defend resolve and reject
let promises = new Promise(function(resolve, reject){
    resolve(56);
});

console.log("hello");

setTimeout(function(){
    console.log("setTimeout function");
}, 2000);

console.log("welcome" + "jon");

console.log(promises);


</script>