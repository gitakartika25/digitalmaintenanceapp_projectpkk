
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Product</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	
	<table class='table table-bordered'>
		<thead>
			<tr>
                <th>No</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stok</th>
                <th>Specification</th>
                <th>Packaging</th>
                <th>Material</th>
                
			</tr>
		</thead>
		<tbody>
			
            @foreach($product as $p)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$p->product_name}}</td>
            <td>{{$p->category->category}}</td>
            <td>{{$p->price}}</td>
            <td>{{$p->stock}}</td>
            <td>{{$p->specification}}</td>
            <td>{{$p->packaging}}</td>
            <td>{{$p->material}}</td>
            <td> <img src="{{ asset('storage/' . $p->image) }}" alt="" style="width: 150px"></td>
        </tr>
        @endforeach
		</tbody>
	</table>
 
</body>
</html>
