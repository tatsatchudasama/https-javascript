


<script>

    let key = prompt("Plies enter your key");
    let value = prompt("Plies enter your value");

    // set item on local stored
    localStorage.setItem(key, value)

    // show local stored key and value
    console.log(`This value is : ${key} set as ${localStorage.getItem(key)}`)

    if(key == 'red' || key == 'yellow'){
        // remove local stored item
        localStorage.removeItem(key)
    }

    if(key == 0){
        // clear local stored all item
        localStorage.clear()
    }

    // localStorage data items length get
    let a = localStorage.length
    console.log(a);

</script>
