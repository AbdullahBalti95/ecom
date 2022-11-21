<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shop</title>
    <style>
    .productsku {
        display: flex;
        justify-content: space-between;
        width: 350px;
        text-transform: capitalize;
    }
    .productsku .colour-name{
        background-color: rebeccapurple;
        color: #fff;
        padding: 10px 15px;
        border-radius: 25px;
    }
    .productsku .size{
        background-color: rgb(51, 59, 153);
        color: #fff;
        padding: 10px 15px;
        border-radius: 25px;
    }
    </style>
</head>
<body>
    {{-- {{$products}} --}}
    {{-- <?php dd($products) ?> --}}
    @foreach($products as $product)        
        <h1>{{ $product->name }}</h1>
        <h2>{{ $product->category->name }}</h2>
        <h3>{{ $product->description }}</h3>
        <img src="{{ $product->path }}" alt="" width="300">
        {{-- <p>{{ $product->productsku }}</p>         --}}
        <p>{{ $product->price }}</p>
        {{-- <p>{{ $product->stock }}</p> --}}                
    <div class="productsku">    
        @foreach($product->productsku as $productsku)
        <p class="colour-name">{{ $productsku->color->name }}</p>
        <p class="size">{{ $productsku->size->size }}</p>        
        {{-- <p class="size">{{ $productsku->product_image->path }}</p>         --}}
        @endforeach
    </div>
    <div class="productsku-gallery">    
        @foreach($product->productsku as $productsku)
        <img src="{{ $productsku->product_image->path }}" alt="" width="160">        
        @endforeach
    </div>
    <button>Add To Cart</button>
    @endforeach


</body>
</html>