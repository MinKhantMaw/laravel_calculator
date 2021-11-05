<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
               <div class="card shadow mt-3">
                   <div class="card-header">Calculator</div>
                   <div class="card-body">
                    <form action="{{ route ('Calculator#calculate')}}" method="post">
                        @csrf
                        <div class="fomr-group mt-2">
                            <label for="">Number One</label>
                            <input type="number" name="num1" class="form-control" placeholder="Enter Number">
                        </div>
                        <div class="fomr-group mt-2">
                            <label for="">Number Two</label>
                            <input type="number" name="num2" class="form-control" placeholder="Enter Number">
                        </div>
                        <div class="form-group mt-2">
                            <label for="">Operators</label>
                            <select name="operator"  class="form-control" placeholder="">
                                <option value="empty">Select Operator</option>
                                <option value="add">+</option>
                                <option value="minus">-</option>
                                <option value="multi">*</option>
                                <option value="division">/</option>
                            </select>
                        </div>
                        <div class="fomr-group mt-2">
                           <button type="submit"  class="btn btn-secondary" name="calculate" value="Calculate">Calculate</button>
                        </div>
                    </form>
                    <div class="mt-3">
                       @if (Session::has('result'))
                            <h1 class="text-success">{{Session::get('result')}}</h1>
                       @endif
                    </div>
                   </div>
               </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
