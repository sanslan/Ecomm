@extends('layouts.admin.admin')

@section('content')
    <div class="content">
        <div  class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('admin.categories.create') }}" type="submit" class="btn btn-info pull-right">New category</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title ">List categories</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th> ID</th>
                                        <th> Name </th>
                                        <th>Slug</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Category1</td>
                                        <td>category1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Category2</td>
                                        <td>category2</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
