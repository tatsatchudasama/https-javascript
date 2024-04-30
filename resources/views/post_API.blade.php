<script>

    let option = {
            method : "post",
            headers : {
                "content-type" : "application/json"
            },
            body: JSON.stringify({
                title: 'test',
                body: 'data',
                userId: 18,
            }),
    }

    fetch('https://jsonplaceholder.typicode.com/posts', option)
        .then((response) => response.json())
        .then((json) => console.log(json));

</script>
