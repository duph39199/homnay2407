@extends('layoutAdmin')
@section('title')
   Danh Sach San Pham
@endsection
@section('content')
<table class="table">
    <thead>
        <a class="btn btn-light" href="{{route('product.create')}}">Them San Pham</a>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">quantity</th>
        <th scope="col">Image</th>
        <th scope="col">Category</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($listPro as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->quantity}}</td>
            <td>
                @if (!isset($item->image))
                    khong co hinh anh
                @else
                    {{$item->image}}
                @endif
            </td>
                    {{-- <td>{{$item->loadAllCategory->name}}</td>
                    <td>{{$item->catename}}</td> --}}
            <td>{{$listCate[$item->category_id]}}</td>
            <td>{{$item->status}}</td>
          </tr>
        @endforeach

    </tbody>
  </table>
  {{$listPro->links()}}
@endsection
