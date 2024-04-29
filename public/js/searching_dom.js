

// ================= class =================
//  class get
let ctitle = document.getElementsByClassName("card-title")[0];
ctitle.style.color = "red";


// ================= id =================
//  id get
let ctitleId = document.getElementById("firstcarttitle");
ctitleId.style.color = "yellow";


// ================= css =================
// css selector
// querySelectorAll all return
let ctitlestl = document.querySelectorAll(".card-title");
ctitlestl[0].style.color = "red";
ctitlestl[1].style.color = "blue";
ctitlestl[2].style.color = "orange";

// querySelector only first return
document.querySelector(".this").style.color = "red";


// ================= tag =================
// tag name get
let tag = document.querySelector(".card").getElementsByTagName('a');
console.log(tag);


// ==================================
// Element -> one element return
// Elements -> multiped element return
