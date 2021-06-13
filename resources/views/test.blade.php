<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <form action="{{ route('test.post') }}" method="POST">
        @csrf
        <div id ='dynamic-form'>

        </div>
       <button type="button" onclick="addForm()">
            add form
        </button>        
       <button type="button" onclick="showInput()">
            show form
        </button>        
        <button type="submit">
            submit
        </button>
    </form>

    </body>
    <script>
        let counter = 1;

        function showInput(){
            console.log(document.getElementsByName('hehe[]')[0].value)
        }

        function addForm(){
            let input = document.getElementById("dynamic-form").innerHTML
            input += `<input type="text" name="hehe[]" id="input-${counter}" value="">`
            document.getElementById('dynamic-form').innerHTML = input
            counter++;
        }

    //     
    </script>
    </html>