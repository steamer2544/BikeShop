@extends("layouts.master")
@section('title') BikeShop | อุปกรณ์จักรยาน, อะไหล่, ชุดแข่ง และอุปกรณ์ตกแต่ง @endsection
@section('content')


<div class="container" ng-app="app" ng-controller="ctrl">
    <h1>@{ helloMessage }</h1>
    <input type="text" class="form-control" ng-model="helloMessage">

    <table class="table table-bordered">
        <thead>
        <tr>
        <th>รหัส</th>
        <th>ชื่อสินค้า </th>
        <th>ราคาขาย</th>
        </tr>
        </thead>
        <tr ng-repeat="p in products">
        <td>@{p.code}</td>
        <td>@{p.name}</td>
        <td>@{p.price}</td>
        </tr>
        </table>
</div>

<script type="text/javascript">
    var app = angular.module('app', []).config(function ($interpolateProvider) {
    $interpolateProvider.startSymbol('@{').endSymbol('}');
    });
    app.controller('ctrl', function ($scope) {
    $scope.helloMessage = 'ยินดีต้อนรับสู่ AngularJS';
    });

    app.controller ('ctrl', function ($scope) {
    $scope.products = [
    {'code': 'P001', 'name': 'ชุดแข่ง สีดํา Size L', 'price': 1500.00},
    {'code': 'P002', 'name': 'หมวกกันน็อกรุ่น SM-220', 'price': 1400.00},
    {'code': 'P003', 'name': 'มิเตอร์วัดความเร็ว', 'price': 1450.00},
    ];
    });
</script>

@endsection