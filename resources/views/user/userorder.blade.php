@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>รหัสใบเสร็จ</th>
                            <th>ราคาสินค้าทั้งหมด</th>
                            <th>ที่อยู่ในการจัดส่ง</th>
                            <th>สถานะการจัดส่ง</th>
                            <th>More</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $item)
                        <tr class="text-center">
                            <td>{{$item->billcode}}</td>
                            <td>{{$item->order_total}}</td>
                            <td>{{$item->address->address}}</td>
                            <td>{{$item->order_status}}</td>
                            <td><a href="orderdetail/{{$item->id}}"><i class="fas fa-search"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection