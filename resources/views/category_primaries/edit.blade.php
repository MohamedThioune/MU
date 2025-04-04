@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Category Primary
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($categoryPrimary, ['route' => ['categoryPrimaries.update', $categoryPrimary->id], 'method' => 'patch']) !!}

                        @include('category_primaries.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection