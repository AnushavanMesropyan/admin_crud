@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        <div  id="add">
            <a href="{{route('about.create')}}" class="btn btn-danger margin10">Add a job</a>
        </div>
        <div class="card">

            <div class="container-fluid">

               <div class="table-responsive">
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p>Do you want to delete this Job?</p>
                                </div>
                                <div class="modal-footer">
                                    <button id="_yes" type="button" class="yes_Button btn btn-default  " data-yes="yes" data-dismiss="modal">
                                        Yes
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div><table class="table ">
                        <tbody><tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Img</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($abouts as $about)
                            <tr id="job-{{$about->id}}">
                                <td>{{$about->title}}</td>
                                <td><p class="o-hidden">{{$about->description}}</p></td>
                                <td><img src="{{ Storage::url($about->img_about) }}" width="50"></td>
                                <td><a class="btn btn-warning" href="{{route('about.edit', $about->id)}}">Edit</a></td>
                                <td>
                                        {{ Form::open(['route' => ['about.destroy', $about->id], 'method' => 'DELETE', 'class'=>'form-horizontal', 'files'=>true]) }}
                                        <button  class="btn btn-danger deletejob" type="submit" >
                                            Delete
                                        </button>
                                        {{ Form::close() }}
                                </td>
                            </tr>
                       @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
