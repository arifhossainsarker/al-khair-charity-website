@extends('back.layouts.master')
@section('title', 'Edit Permission')
@section('head')
    <style>
        input.form-control {
            margin-bottom: 15px;
        }
    </style>
@endsection
@section('master')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Permission</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Permission</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row project-wrapper">
            <div class="col-xxl-12">
                <!-- Create form start -->
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Edit Permission</h3>
                        </div>
                        <form action="{{ route('back.permission.update', $permission->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="from-group">
                                <select name="role_id" id="" class="form-select">
                                    <option value="">Select user</option>
                                    @foreach (\App\Models\Role::get() as $role)
                                        <option value="{{ $role->id }}" @if ($role->id==$permission->role_id)
                                            selected
                                        @endif>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                <br>
                            </div>
                          <table class="table table-bordered">
                            <tr>
                              <th>Permissions</th>
                              <th>Add</th>
                              <th>Edit</th>
                              <th>view</th>
                              <th>Delete</th>
                              <th>List</th>
                            </tr>

                            <tr>
                                <td>News</td>
                                <td>
                                    <input type="checkbox" name="permission[news][add]" value="1" @isset($permission['permission']['news']['add'])
                                        checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[news][edit]" value="1" @isset($permission['permission']['news']['edit'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[news][view]" value="1" @isset($permission['permission']['news']['view'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[news][delete]" value="1" @isset($permission['permission']['news']['delete'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[news][list]" value="1" @isset($permission['permission']['news']['list'])
                                    checked
                                    @endisset>
                                </td>
                            </tr>
                            <tr>
                                <td>Events</td>
                                <td>
                                    <input type="checkbox" name="permission[events][add]" value="1" @isset($permission['permission']['events']['add'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[events][edit]" value="1" @isset($permission['permission']['events']['edit'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[events][view]" value="1" @isset($permission['permission']['events']['view'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[events][delete]" value="1" @isset($permission['permission']['events']['delete'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[events][list]" value="1" @isset($permission['permission']['events']['list'])
                                    checked
                                    @endisset>
                                </td>
                            </tr>
                            <tr>
                                <td>Research</td>
                                <td>
                                    <input type="checkbox" name="permission[research][add]" value="1" @isset($permission['permission']['research']['add'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[research][edit]" value="1" @isset($permission['permission']['research']['edit'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[research][view]" value="1" @isset($permission['permission']['research']['view'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[research][delete]" value="1" @isset($permission['permission']['research']['delete'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[research][list]" value="1" @isset($permission['permission']['research']['list'])
                                    checked
                                    @endisset>
                                </td>
                            </tr>
                            <tr>
                                <td>People</td>
                                <td>
                                    <input type="checkbox" name="permission[people][add]" value="1" @isset($permission['permission']['people']['add'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[people][edit]" value="1" @isset($permission['permission']['people']['edit'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[people][view]" value="1" @isset($permission['permission']['people']['view'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[people][delete]" value="1" @isset($permission['permission']['people']['delete'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[people][list]" value="1" @isset($permission['permission']['people']['list'])
                                    checked
                                    @endisset>
                                </td>
                            </tr>
                            <tr>
                                <td>Alumni</td>
                                <td>
                                    <input type="checkbox" name="permission[alumni][add]" value="1" @isset($permission['permission']['alumni']['add'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[alumni][edit]" value="1" @isset($permission['permission']['alumni']['edit'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[alumni][view]" value="1" @isset($permission['permission']['alumni']['view'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[alumni][delete]" value="1" @isset($permission['permission']['alumni']['delete'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[alumni][list]" value="1" @isset($permission['permission']['alumni']['list'])
                                    checked
                                    @endisset>
                                </td>
                            </tr>
                            <tr>
                                <td>Notice Board</td>
                                <td>
                                    <input type="checkbox" name="permission[notice-board][add]" value="1" @isset($permission['permission']['notice-board']['add'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[notice-board][edit]" value="1" @isset($permission['permission']['notice-board']['edit'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[notice-board][view]" value="1" @isset($permission['permission']['notice-board']['view'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[notice-board][delete]" value="1" @isset($permission['permission']['notice-board']['delete'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[notice-board][list]" value="1" @isset($permission['permission']['notice-board']['list'])
                                    checked
                                    @endisset>
                                </td>
                            </tr>
                            <tr>
                                <td>Galleries</td>
                                <td>
                                    <input type="checkbox" name="permission[galleries][add]" value="1" @isset($permission['permission']['galleries']['add'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[galleries][edit]" value="1" @isset($permission['permission']['galleries']['edit'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[galleries][view]" value="1" @isset($permission['permission']['galleries']['view'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[galleries][delete]" value="1" @isset($permission['permission']['galleries']['delete'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[galleries][list]" value="1" @isset($permission['permission']['galleries']['list'])
                                    checked
                                    @endisset>
                                </td>
                            </tr>
                            <tr>
                                <td>Pages</td>
                                <td>
                                    <input type="checkbox" name="permission[pages][add]" value="1" @isset($permission['permission']['pages']['add'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[pages][edit]" value="1" @isset($permission['permission']['pages']['edit'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[pages][view]" value="1" @isset($permission['permission']['pages']['view'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[pages][delete]" value="1" @isset($permission['permission']['pages']['delete'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[pages][list]" value="1" @isset($permission['permission']['pages']['list'])
                                    checked
                                    @endisset>
                                </td>
                            </tr>
                            <tr>
                                <td>Menus</td>
                                <td>
                                    <input type="checkbox" name="permission[menus][add]" value="1" @isset($permission['permission']['menus']['add'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[menus][edit]" value="1" @isset($permission['permission']['menus']['edit'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[menus][view]" value="1" @isset($permission['permission']['menus']['view'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[menus][delete]" value="1" @isset($permission['permission']['menus']['delete'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[menus][list]" value="1" value="1" @isset($permission['permission']['menus']['list'])
                                    checked
                                    @endisset>
                                </td>
                            </tr>
                            <tr>
                                <td>Settings</td>
                                <td>
                                    <input type="checkbox" name="permission[settings][add]" value="1" @isset($permission['permission']['settings']['add'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[settings][edit]" value="1" @isset($permission['permission']['settings']['edit'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[settings][view]" value="1" @isset($permission['permission']['settings']['view'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[settings][delete]" value="1" @isset($permission['permission']['settings']['delete'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[settings][list]" value="1" @isset($permission['permission']['settings']['list'])
                                    checked
                                    @endisset>
                                </td>
                            </tr>
                            <tr>
                                <td>Contact From Request</td>
                                <td>
                                    <input type="checkbox" name="permission[request-contact][add]" value="1" @isset($permission['permission']['request-contact']['add'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[request-contact][edit]" value="1" @isset($permission['permission']['request-contact']['edit'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[request-contact][view]" value="1" @isset($permission['permission']['request-contact']['view'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[request-contact][delete]" value="1" @isset($permission['permission']['request-contact']['delete'])
                                    checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[request-contact][list]" value="1" @isset($permission['permission']['request-contact']['list'])
                                    checked
                                    @endisset>
                                </td>
                            </tr>

                              <tr>
                                <td>Role</td>
                                <td>
                                    <input type="checkbox" name="permission[role][add]" value="1" @isset($permission['permission']['role']['add'])
                                        checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[role][edit]" value="1" @isset($permission['permission']['role']['edit'])
                                        checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[role][view]" value="1" @isset($permission['permission']['role']['view'])
                                        checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[role][delete]" value="1" @isset($permission['permission']['role']['delete'])
                                        checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[role][list]" value="1" @isset($permission['permission']['role']['list'])
                                        checked
                                    @endisset>
                                </td>
                              </tr>

                              <tr>
                                <td>Permissions</td>
                                <td>
                                    <input type="checkbox" name="permission[permissions][add]" value="1" @isset($permission['permission']['permissions']['add'])
                                        checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[permissions][edit]" value="1" @isset($permission['permission']['permissions']['edit'])
                                        checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[permissions][view]" value="1" @isset($permission['permission']['permissions']['view'])
                                        checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[permissions][delete]" value="1" @isset($permission['permission']['permissions']['delete'])
                                        checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[permissions][list]" value="1" @isset($permission['permission']['permissions']['list'])
                                        checked
                                    @endisset>
                                </td>
                              </tr>

                              <tr>
                                <td>Admin</td>
                                <td>
                                    <input type="checkbox" name="permission[admins][add]" value="1" @isset($permission['permission']['admins']['add'])
                                        checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[admins][edit]" value="1" @isset($permission['permission']['admins']['edit'])
                                        checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[admins][view]" value="1" @isset($permission['permission']['admins']['view'])
                                        checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[admins][delete]" value="1" @isset($permission['permission']['admins']['delete'])
                                        checked
                                    @endisset>
                                </td>
                                <td>
                                    <input type="checkbox" name="permission[admins][list]" value="1" @isset($permission['permission']['admins']['list'])
                                        checked
                                    @endisset>
                                </td>
                              </tr>

                          </table>
                          <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
                        </div>

                        </form>
                    </div>
                </div>
                <!-- Create form end -->

            </div>
        </div>

    </div>
</div>
@endsection
