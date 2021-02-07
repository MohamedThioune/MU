@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Main Topic
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mainTopic, ['route' => ['mainTopics.update', $mainTopic->id], 'method' => 'patch']) !!}

                        @include('main_topics.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection