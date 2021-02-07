@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Read
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('reads.show_fields')
                    <a href="{{ route('reads.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
