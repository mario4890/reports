@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Zakres dat</div>

                <div class="card-body">
                    <form action="{{ route('report') }}">
                        <label>
                            <span>Data od:</span>
                            <input type="date" class="form-control" name="date_start">
                        </label>
                        <label>
                            <span>Data do:</span>
                            <input type="date" class="form-control" name="date_to">
                        </label>
                        <input type="submit" value="Pokaż">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
