@extends('Admin::layouts.master')
@section('title') {{__('Form Mail Manage')}} @endsection

@section('content')
<div class="app-main__inner p-0">
        <div class="app-inner-layout">
            
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                            <i class="pe-7s-global icon-gradient bg-strong-bliss"></i>
                            </div>
                            
                            <div>
                                {{__('Available log')}}
                                <div class="page-title-subheading"></div>
                            </div>
                        </div>
                        <div class="page-title-actions">
                  
                            <button id="reload_page" type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom" class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                                <i class="pe-7s-refresh-2"></i>
                            </button>
                           
                           
                        </div>
                    </div>
                </div>
           
            
                <div class="col-lg-12">
                    <div class="main-card mb-3 card" style="height: 450px;">
                        
                        <div class="card-header">
                            <!-- <i class="header-icon lnr-laptop-phone icon-gradient bg-plum-plate"></i> -->
                            {{__('Login Attempts')}}
                            <!-- <div class="btn-actions-pane-right actions-icon-btn">
                                <button class="btn-icon btn-icon-only btn btn-link">
                                    <i class="pe-7s-leaf btn-icon-wrapper"></i>
                                </button>
                                <button class="btn-icon btn-icon-only btn btn-link">
                                    <i class="pe-7s-cloud-download btn-icon-wrapper"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" aria-haspopup="true" aria-expanded="false"
                                        class="btn-icon btn-icon-only btn btn-link">
                                        <i class="pe-7s-menu btn-icon-wrapper"></i>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                        class="dropdown-menu-right dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <i class="dropdown-icon lnr-inbox"></i>
                                            <span>Menus</span>
                                        </button>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <i class="dropdown-icon lnr-file-empty"></i>
                                            <span>Settings</span>
                                        </button>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <i class="dropdown-icon lnr-book"></i>
                                            <span>Actions</span>
                                        </button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <div class="p-3 text-end">
                                            <button class="me-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                            <button class="me-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <div class="card-body">
                            <!-- <h5 class="card-title">Medium Scrollable Area</h5> -->
                            <div class="scroll-area-sm">
                                <div class="scrollbar-container ps--active-y">
                                    <pre>{{$files}}</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
        </div>
    </div>

@endsection

@section('script')
    <script>
        $('#reload_page').click(function() {
            location.reload(true);
        });
     </script>
@endsection