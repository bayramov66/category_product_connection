<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/front/css/index.css')}}">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <aside class="sidebar">
<ul>
    @foreach($categories as $category)
    <li><a href="{{route('home', $category->slug)}}">{{$category->title}}</a></li>
@endforeach
 
</ul>
    </aside>
    <div class="products">
        @foreach($products as $product)
        <div class="product">
            <div class="h3">{{$product->title}}</div>
            <p>Price: {{$product->price}} azn</p>
            
        </div>
       @endforeach
        
    </div>
</div>
</body>
</html>