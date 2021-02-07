@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Read
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($read, ['route' => ['reads.update', $read->id], 'method' => 'patch']) !!}

                        @include('reads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection