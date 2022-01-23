@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Raport</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Grupa</th>
                                <th scope="col">Dzień</th>
                                <th scope="col">Kwota netto</th>
                                <th scope="col">Kwota brutto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $value)
                            <tr>
                                <td>{{ $value['productGroupName'] }}</th>
                                <td>{{ $value['date'] }}</td>
                                <td>{{ number_format($value['priceNetto'], 2, '.', ' ') }}</td>
                                <td>{{ number_format($value['priceGross'], 2, '.', ' ') }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="2">Suma</td>
                                <td>{{ number_format($orders->sum('priceNetto'), 2, '.', ' ') }}</td>
                                <td>{{ number_format($orders->sum('priceGross'), 2, '.', ' ') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
