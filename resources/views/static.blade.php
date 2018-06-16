@extends('layouts.master')

@section('title')
    Static@Pages
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="row">
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-12">
                @include('statics.posts.form')
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <h3>This is title</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aspernatur id nam saepe suscipit. Consequatur ex expedita ipsum laudantium nostrum!</p>
    </div>
</div>
@endsection


@section('script')
    <script type="text/javascript">

    </script>
@stop