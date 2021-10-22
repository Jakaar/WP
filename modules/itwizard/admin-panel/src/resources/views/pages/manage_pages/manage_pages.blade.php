@extends('Admin::layouts.master')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
            </div>
            <div>
                {{__('Page Management')}}
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-bs-toggle="tooltip" title="" class="btn-shadow me-3 btn btn-info" id="reload_page" data-bs-original-title="Refresh">
                <i class="pe-7s-refresh-2"></i>
            </button>
        </div>
    </div>
</div>
<div class="main-card mb-3 card mt-4">
<div class="card-body">
    <table style="width: 100%;" id="BulletInBoard" class="table table-hover table-striped table-bordered">
        <thead>
        <tr>
            <th>{{__('NUMBER') }}</th>
            <th>{{__('Board Name')}}</th>
            <th>{{__('Board Type')}}</th>
            <th>{{__('Action')}}</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td>56</td>
            <td>Mongolia manpower outsorcing>Key skills</td>
            <td>http://192.168.0.147:8083/technology</td>
            <td><button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                    <i class="pe-7s-pen btn-icon-wrapper"></i>
                </button>
                <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                    <i class="pe-7s-trash btn-icon-wrapper"></i>
                </button></td>
        </tr>
        <tr>
            <td>57</td>
            <td>Mongolia Manpower Outsourcing > Manpower Outsourcing System</td>
            <td>http://192.168.0.147:8083/outsourcing_system</td>
            <td><button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                    <i class="pe-7s-pen btn-icon-wrapper"></i>
                </button>
                <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                    <i class="pe-7s-trash btn-icon-wrapper"></i>
                </button></td>
        </tr>
        <tr>
            <td>58</td>
            <td>Mongolia manpower outsourcing > Manpower composition and operation plan</td>
            <td>http://192.168.0.147:8083/operation_plan</td>
            <td><button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                    <i class="pe-7s-pen btn-icon-wrapper"></i>
                </button>
                <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                    <i class="pe-7s-trash btn-icon-wrapper"></i>
                </button></td>
        </tr>
        <tr>
            <td>60</td>
            <td>Mongolia Manpower Outsourcing > Business Introduction</td>
            <td>http://192.168.0.147:8083/introduction</td>
            <td><button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                    <i class="pe-7s-pen btn-icon-wrapper"></i>
                </button>
                <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                    <i class="pe-7s-trash btn-icon-wrapper"></i>
                </button></td>
        </tr>
        <tr>
            <td>65</td>
            <td>Mongolia Manpower Outsourcing > About Employees</td>
            <td>http://192.168.0.147:8083/staff</td>
            <td><button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                    <i class="pe-7s-pen btn-icon-wrapper"></i>
                </button>
                <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                    <i class="pe-7s-trash btn-icon-wrapper"></i>
                </button></td>
        </tr>
        <tr>
            <td>66</td>
            <td>About Us > About Us</td>
            <td>http://192.168.0.147:8083/about_us</td>
            <td><button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                    <i class="pe-7s-pen btn-icon-wrapper"></i>
                </button>
                <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                    <i class="pe-7s-trash btn-icon-wrapper"></i>
                </button></td>
        </tr>
        <tr>
            <td>67</td>
            <td>About us > Directions</td>
            <td>http://192.168.0.147:8083/location</td>
            <td><button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                    <i class="pe-7s-pen btn-icon-wrapper"></i>
                </button>
                <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                    <i class="pe-7s-trash btn-icon-wrapper"></i>
                </button></td>
        </tr>

        </tbody>
    </table>
</div>
</div>
@endsection
