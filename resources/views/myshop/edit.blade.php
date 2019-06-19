
@extends('layouts.common')

@section('title', '商品添加')

@section('content')
<form action="{{url('update')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="{{$res->id}}">
    <table  align="center">
    @csrf
        <tr>
            <td>商品名称</td>
            <td><input type="text" name="goods_name" value="{{$res->goods_name}}"></td>
        </tr>
        <tr>
            <td>商品价格</td>
            <td>
                <input type="text" name="goods_price" value="{{$res->goods_price}}">
            </td>
        </tr>
       
        <tr>
            <td>商品图片</td>
            <td>
                <input type="file" name="goods_pic" />
                <img src="{{$res->goods_pic}}" alt="" width="100" height="50">
                <!-- <button type="submit">上传</button> -->
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="修改"></td>
        </tr>
    </table>
</form>
@endsection