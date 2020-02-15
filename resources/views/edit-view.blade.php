@extends('layouts.app')

@section('content')
  <div class="main_container">
    <div class="admin_main">
            <h1>Admin panel</h1><br>
            @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{$message}}</strong>
            </div>
            @endif
            <div class="admin_sidebar">
            <a href="{{url('admin')}}">EDIT/DELETE PRODUCT</a><br>
            <a href="{{url('admin/create')}}">NEW PRODUCT </a><br>
            <b>EDIT VIEW</b>
          </div>
            <div class="main_content">
              <table id="views" class="col-md-11 table table-hover table-condensed">
              <thead>
              <tr>
                  <th style="width:40%">Name</th>
                  <th style="width:60%"></th>
              </tr>
              </thead>
              <tbody>
                  @foreach($views as $view)
                      <tr>
                                  <td data-th="Name">
                                    <div class="col-sm-9">
                                          <h4 class="nomargin">{{ $view['name'] }}</h4>
                                      </div>
                                  </td>

                          <td class="actions" data-th="">
                              <a href="{{url('admin/edit-view')}}/{{$view['id']}}" class="btn btn-outline-primary edit-view">Edit</a>
                          </td>
                      </tr>
                  @endforeach

              </tbody>
            </table>
            </div>
</div>
</div>
@endsection
