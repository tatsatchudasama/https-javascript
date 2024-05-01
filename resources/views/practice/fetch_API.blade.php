




<script>

    let p = fetch("https://goweather.herokuapp.com/weather/Ny")

    p.then((response) => {
        // return response;
        console.log(response.status);
        console.log(response.ok);
        return response.json()
    }).then((value2) => {
        // return value2.json;
        console.log(value2);
    });

</script>



 