@extends('Admin::layouts.master')
@section('content')
<div class="main-card mb-3 card">
    <div class="card-body">
        <table style="width: 100%;"  class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>Number</th>
                <th>Title</th>
                <th>Page address</th>
                <th>Page title</th>
                <th>Whether or not to use</th>
                <th>Registration date</th>
                <th>Edit/Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Home Solution</td>
                <td>/main</td>
                <td>Home Page</td>
                <td>use</td>
                <td>2018-11-21 PM 06:28</td>
                <td><button class="mb-2 me-2 btn-icon btn btn-success">
                        <i class="pe-7s-pen btn-icon-wrapper"></i>Edit
                    </button>
                    <button class="mb-2 me-2 btn-icon btn btn-danger">
                        <i class="pe-7s-trash btn-icon-wrapper"></i>Delete
                    </button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Login Page</td>
                <td>/login</td>
                <td>Login Page</td>
                <td>use</td>
                <td>2018-11-21 PM 06:28</td>
                <td><button class="mb-2 me-2 btn-icon btn btn-success">
                        <i class="pe-7s-pen btn-icon-wrapper"></i>Edit
                    </button>
                    <button class="mb-2 me-2 btn-icon btn btn-danger">
                        <i class="pe-7s-trash btn-icon-wrapper"></i>Delete
                    </button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Board Management</td>
                <td>/pages/boaard/board.html</td>
                <td>homepage</td>
                <td>use</td>
                <td>2018-11-21 PM 06:28</td>
                <td><button class="mb-2 me-2 btn-icon btn btn-success">
                        <i class="pe-7s-pen btn-icon-wrapper"></i>Edit
                    </button>
                    <button class="mb-2 me-2 btn-icon btn btn-danger">
                        <i class="pe-7s-trash btn-icon-wrapper"></i>Delete
                    </button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Consult</td>
                <td>/pages/consulting.html</td>
                <td>Consulting Page</td>
                <td>use</td>
                <td>2018-11-21 PM 06:28</td>
                <td><button class="mb-2 me-2 btn-icon btn btn-success">
                        <i class="pe-7s-pen btn-icon-wrapper"></i>Edit
                    </button>
                    <button class="mb-2 me-2 btn-icon btn btn-danger">
                        <i class="pe-7s-trash btn-icon-wrapper"></i>Delete
                    </button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>test,test,test</td>
                <td>/mgr/front</td>
                <td>1</td>
                <td>use/28</td>
                <td>2018-11-21 PM 06:28</td>
                <td><button class="mb-2 me-2 btn-icon btn btn-success">
                        <i class="pe-7s-pen btn-icon-wrapper"></i>Edit
                    </button>
                    <button class="mb-2 me-2 btn-icon btn btn-danger">
                        <i class="pe-7s-trash btn-icon-wrapper"></i>Delete
                    </button></td>
            </tr>

            </tfoot>
        </table>
    </div>
</div>
@endsection
