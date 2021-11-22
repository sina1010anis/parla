@extends('admin.index')

@section('admin')
    <div class="col-12 mt-3 bg-white p-4 rounded-3 shadow text-center table-view-product">
        <h5 class="color-b-700 text-end">نمایش کل فاکتور ها</h5>
        <div class="line"></div>
        <div class="bd-example">
            <table class="table table-striped" dir="rtl">
                <thead>
                <tr>
                    <th>ایدی</th>
                    <th>وضعیت ارسال</th>
                    <th>وضعیت پرداخت</th>
                    <th>جمع فاکتور</th>
                    <th>کد تراکنش</th>
                </tr>
                </thead>
                <tbody>
                @foreach($factor_all as $factor)
                    <tr>
                        <td>{{$factor->id}}</td>
                        <td>
                            @switch($factor->status_buy)
                                @case(0)
                                    <p style="color: red" class=" f-12 color-b-600">نامعلوم</p>
                                @break
                                @case(100)
                                    <p style="color: #5d5dff" class=" f-12 color-b-600">درحال پردازش</p>
                                @break
                                @case(200)
                                    <p style="color: #0033ff" class=" f-12 color-b-600">درحال اماده سازی</p>
                                @break
                                @case(300)
                                    <p style="color: #ffea02" class=" f-12 color-b-600">تحویل پست</p>
                                @break
                                @case(400)
                                    <p style="color: green" class=" f-12 color-b-600">تحویل شده</p>
                                @break
                            @endswitch
                        </td>
                        <td>
                            @switch($factor->status_buy)
                                @case(0)
                                    <p style="color: red" class=" f-12 color-b-600">پرداخت نشده</p>
                                @break
                                @case(200)
                                    <p style="color: green" class=" f-12 color-b-600">پرداخت شده</p>
                                @break
                            @endswitch
                        </td>
                        <td>{{$factor->title_price}}</td>
                        <td>{{$factor->transaction_code}}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
