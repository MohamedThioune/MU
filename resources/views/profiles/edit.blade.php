@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Profile
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($profile, ['route' => ['profiles.update', $profile->id], 'method' => 'patch']) !!}
                         <!-- Name Field -->
                         <div class="form-group col-sm-6">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>

                        
                        <!-- Sex Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('sex', 'Sex:') !!}
                            {!! Form::select('sex', [1 =>'Masculin', '0' => 'Feminin'], null, ['class' => 'form-control'] ) !!}
                        </div>

                        <!-- Age Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('age', 'Age:') !!}
                            {!! Form::number('age', null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::hidden('can_stream', 1) !!}
                        {!! Form::hidden('user_id', Auth::id()) !!}
                        @include('profiles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection