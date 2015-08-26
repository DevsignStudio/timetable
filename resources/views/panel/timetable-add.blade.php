@extends('master')

@section('title', 'Dashboard Panel')

@section("content")
<br><br>
<div class="container">
    <div class="row center">
        <form class="col s6 offset-s3" action="/panel/timetable-add" method="post">
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
            <div class="row">
                <div class="input-field col s12">
                    <select name="year">
                        <option value="" disabled selected>Select year</option>
                        @@foreach ($years as $year)
                            <option value="{{Crypt::encrypt($year)}}">{{$year}}</option>
                        @endforeach
                    </select>
                    <label>Timetable Year</label>
                </div>

                <div class="input-field col s12">
                    <select name="semester">
                        <option value="" disabled selected>Select semester</option>
                        <option value="{{Crypt::encrypt(1)}}">Semester 1</option>
                        <option value="{{Crypt::encrypt(2)}}">Semester 2</option>
                    </select>
                    <label>Timetable Semester</label>
                </div>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit"  class="btn waves-effect waves- red darken-2">Add Timetable</button>
        </form>
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
