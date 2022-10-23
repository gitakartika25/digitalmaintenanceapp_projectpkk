<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-jn_QXOuWTdYCj_Jj"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
  </head>
 
  <body>

    <button id="pay-button">Pay!</button>
 
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Desctiption</th>
      <th scope="col">Price</th>
      <th scope="col">Stock</th>
      <th scope="col">Spesification</th>
      <th scope="col">Packaging</th>
      <th scope="col">Material</th>
      <th scope="col">Image</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$item->product_name}}</td>
      <td>{{$item->description}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->stock}}</td>
      <td>{{$item->spesification}}</td>
      <td>{{$item->packaging}}</td>
      <td>{{$item->material}}</td>
      <td>{{$item->image}}</td>
      <td>{{$item->category_id}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    <script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('');
        // customer will be redirected after completing payment pop-up
      });
    </script>
  </body>
</html>