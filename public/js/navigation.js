
// first Element Child bg color function
const ChangeBody = ()=> {
    document.body.firstElementChild.style.background = "red";
}

let b = document.body

console.log('first child : ', b.firstChild);
console.log('first Element : ', b.firstElementChild);


//  id get
let getColor = document.getElementById("getColor");
// click events
getColor.addEventListener("click", function(){
    ChangeBody();
});