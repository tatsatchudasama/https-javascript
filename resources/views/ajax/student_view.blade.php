<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <table id="student-table" class="table table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){

            $.ajax({
                type: "get",
                url: "{{ route('get_student') }}",
                success:function(data){
                    console.log(data.students);

                    if(data.students.length > 0){

                        for(let i = 0; i < data.students.length; i++){
                            $("#student-table").append(`<tr>
                                <td>`+ (i+1) +`</td>
                                <td>`+ (data.students[i]['name']) +`</td>
                                <td>`+ (data.students[i]['email']) +`</td>
                            </tr>`);
                        }

                    } else {
                        $("#student-table").append("<tr><td colspan='2'>Data Not Found</td></tr>");
                    }

                },
                error:function(err){
                    console.log(err.responseText);
                },
            });
        });
    </script>

</body>

</html>