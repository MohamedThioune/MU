@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Response Comment
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($responseComment, ['route' => ['responseComments.update', $responseComment->id], 'method' => 'patch']) !!}

                        @include('response_comments.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection