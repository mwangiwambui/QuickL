@extends('layout.main')

@section('title','Items')
@section('content')
    <!-- products listing -->
    <!-- Latest Items -->
    <div class="row justify-content-center">
        @forelse($items as $item)

            <div class="small-3 medium-3 large-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="{{route('cart.edit',$item->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{url('images',$item->image)}}"/>
                        </a>
                    </div>
                    <a href="{{route('item')}}">
                        <h3>
                            {{$item->name}}
                        </h3>
                    </a>
                    <h5>
                        ${{$item->price}}
                    </h5>
                    <p>
                        {{$item->description}}
                    </p>
                </div>

            </div>

        @empty
            <h3>No items</h3>
        @endforelse
        <compare></compare>
    </div>
@endsection