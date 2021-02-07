@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sub Topic
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($subTopic, ['route' => ['subTopics.update', $subTopic->id], 'method' => 'patch']) !!}

                        @include('sub_topics.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection