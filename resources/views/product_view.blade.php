<!DOCTYPE html>
<html>
<body>

<div>
    @if(!empty($cart))
        @foreach($cart as $item)
            <div>
                <span>{{ $item['name'] }}</span>
                <span>{{ $item['price'] }}</span>
                <!-- Display other item details as needed -->
            </div>
        @endforeach
    @else
        <p>No items in the cart</p>
    @endif
</div>


    </body>
</html>



