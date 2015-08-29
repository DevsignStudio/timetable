@extends('master')

@section('title', 'subject')

@section("content")
<br><br>
<div class="container">

   

    <div class="row center">

         @if (session()->has("scs"))
            <div class="card-panel green">
                <span class="white-text">{{session("scs")}}</span>
            </div>
            
            <div class="card-content white-text">
                <p>Empty</p>
                <a href="/panel/timetable-view/{{$subject->timetable_id}}" class="waves-effect waves-light btn">Back</a>
            </div>

        

        @if (session()->has("err"))
            <div class="card-panel pink">
                <span class="white-text">{{session("err")}}</span>
            </div>
            @endif

            @if (session()->has("scs"))
            <div class="card-panel green">
                <span class="white-text">{{session("scs")}}</span>
            </div>
            @endif



        @else
        <div class="card panel-green">
                
                        <h5 style="text-align:center" class="red-text">subject code :</h5>{{$subject->subjectcode}} 
                        <h5 style="text-align:center" class="red-text">subject name : </h5>{{$subject->subjectname}} 
                        <h5 style="text-align:center" class="red-text">lecturer's name : </h5>{{$subject->lectname}}
                    
                
        </div>
        <div class='col s12'>
            <a href="" class="waves-effect waves-light btn">Edit</a>

            <a href="{{ route('subject.delete',$subject->id) }}" class="waves-effect waves-light btn">delete</a>
        </div>
        @endif
    </div>
    <br><br>
</div>

@endsection

@section('js')
    @parent
    <script charset="utf-8">
    $(document).ready(function() {
        $('select').material_select();
    });
    </script>
@endsection
