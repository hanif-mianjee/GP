@extends('frontend.layouts.app')

@section('title', $parent->name)

@section('content')
    <div class="row">
        <div class="col-md-12">

            @if($products->count() <= 0)
                Products not available.
            @else

                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-3 col-sm-6">
                            {{--.product-image>(a[href="#"]>img*2)+.actions>(ul.add-to-links.clearfix>li*3>a[href="#"]>i.fa.fa-star)+.action-add-cart>a[href="#"]>i.fa.fa-shopping-cart --}}
                            @include('product::partials.product', ['product'=>$product, 'parent'=>$parent])
                        </div>
                    @endforeach
                </div>{{-- / .row --}}

            @endif

        </div>
    </div>{{-- / Layout .row--}}
@endsection


@push('pagemeta')

@if($parent->description)
    <meta name="description" content="{{$parent->description}}">
@endif
<link rel="canonical" href="{{$parent->route}}" />

@endpush

@push('styles')
@endpush

@push('scripts')

@endpush


