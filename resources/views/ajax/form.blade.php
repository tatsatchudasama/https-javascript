<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="p-5">

        <form id="my-form">
            @csrf

            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="name" name="name" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>

        </form>

        <div id="output"></div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#my-form").submit(function(events){
                // preventDefault form submit stop
                event.preventDefault();

                var form = $("#my-form")[0];
                var data = new FormData(form);

                // button disable create
                $("#btnSubmit").prop("disabled", true);

                $.ajax({
                    type : "post",
                    url: "{{ route('stored_student') }}",
                    data : data,
                    processData:false,
                    contentType:false,
                    success:function(data){
                        $("#output").text(JSON.stringify(data.res));
                        // button enable create
                        $("#btnSubmit").prop("disabled", false);

                        $("input[type='text']").val('');
                        $("input[type='email']").val('');

                    },
                    error:function(e){
                        $("#output").text(e.responseText);
                        // button enable create
                        $("#btnSubmit").prop("disabled", false);

                        $("input[type='text']").val('');
                        $("input[type='email']").val('');
                    }
                });
            });
        });
    </script>

</body>
</html>