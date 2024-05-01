


<script>

    console.log(document.cookie);

    document.cookie = "name=test"

    let key = prompt('Enter key');
    let value = prompt('Enter value');

    // encodeURIComponent is data encode create
    document.cookie = `${encodeURIComponent(key)}=${encodeURIComponent(value)}`;
    console.log(document.cookie);

    // decodeURIComponent is data decode create
    // decodeURIComponent()

</script>