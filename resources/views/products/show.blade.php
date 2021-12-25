<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>products</title>
</head>
<body>
    <div class="container-fluid">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">buy price</th>
                <th scope="col">sell price</th>
                <th scope="col">quantity</th>
                <th scope="col">Action</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $key=>$product)
                <tr>
                    <th scope="row">{{ $key+=1 }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->buy_price }}</td>
                    <td>{{ $product->sell_price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        <a href="{{ route('product_sell',$product->id) }}">Sell</a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
          <a href="{{ route('sale_report') }}}">Sale Report</a>
      </div>
    
</body>
</html>