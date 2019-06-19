
@extends('layouts.common')

@section('title', '商品添加')

@section('content')
    <form action="{{url('save')}}" method="post" enctype="multipart/form-data">
        <table  align="center">
        @csrf
            <tr>
                <td>商品名称</td>
                <td><input type="text" name="goods_name"></td>
            </tr>
            <tr>
                <td>商品价格</td>
                <td>
                    <input type="text" name="goods_price">
                </td>
            </tr>
        
            <tr>
                <td>商品图片</td>
                <td>
                    <input type="file" name="goods_pic" />
                    <!-- <button type="submit">上传</button> -->
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="提交"></td>
        </table>
    </form>
@endsection


