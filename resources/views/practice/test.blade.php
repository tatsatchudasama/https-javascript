

<script>

    let age = prompt("Enter Age");

    age = Number.parseInt();

    const agecheck = (age) => {
        return age >= 18 ? true : false;
    }

    if (agecheck(age)) {
        alert('Ya');
    } else {
        alert("no");
    }


</script>