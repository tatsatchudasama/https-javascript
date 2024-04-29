


// let a = document.getElementsByTagName('div')[0]
// a.innerHTML = a.innerHTML + '<h1>welcome !</h1>';
// console.log(a);


let a = document.getElementsByTagName('div')[0]

// createElement create a element
let div = document.createElement('div');
div.innerHTML = "<h1>This function !</h1>";
// append html
a.appendChild(div);
// prepend is top position start
a.prepend(div);


 
