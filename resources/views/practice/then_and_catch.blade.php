


<Script>

   let p1 = new Promise((resolve, reject) =>{
        console.log("promise is padding");

        setTimeout(() =>{
            console.log("Promise full resolve");

            resolve(true);
            // reject(new Error('I am an error'));
            
        }, 5000);
   });


   let p2 = new Promise((resolve, reject) =>{
        console.log("promise is padding");

        setTimeout(() =>{
            console.log("Promise full rejected");

            // resolve(true);
            reject(new Error('I am an error'));
            
        }, 5000);
   });

//    console.log(p1, p2);

   // then is particular work but working
   p1.catch((value) => {
      console.log(value);
   });

   p2.then((value) => {
      console.log(value);
   }, (error) =>{
      console.log(value);
   });


</Script>