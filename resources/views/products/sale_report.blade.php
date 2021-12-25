<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">sale_quantity</th>
                <th scope="col">sale_price</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($sales as $key=>$sale)
                <tr>
                    <th scope="row">{{ $key+=1 }}</th>
                    <td>{{ $sale->product->name }}</td>
                    <td>{{ $sale->sale_quantity }}</td>
                    <td>{{ $sale->sale_price }}</td>
                  </tr>
                @endforeach
            </tbody>
          </table>
          <a href="{{ route('pdf') }}">PDF</a>
    </div>
</body>
</html>