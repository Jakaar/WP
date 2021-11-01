@extends('Admin::layouts.master')
@section('content')
    <div class="app-main__inner p-0">
        <div class="app-inner-layout">
            <div class="app-inner-layout__header bg-heavy-rain">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="pe-7s-mail icon-gradient bg-mixed-hopes"></i>
                            </div>
                            <div>
                                {{__('Send a mail')}}
                                <div class="page-title-subheading"></div>
                            </div>
                        </div>
                        <div class="page-title-actions">
                            <button type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                                class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                                <i class="pe-7s-refresh-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-inner-layout__wrapper">
                <div class="app-inner-layout__content card">
                    <div>
                        <div class="app-inner-layout__top-pane">
                            <div class="pane-left">
                                <div class="mobile-app-menu-btn">
                                    <button type="button" class="hamburger hamburger--elastic">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                    </button>
                                </div>
                                <h4 class="mb-0">Inbox</h4>

                            </div>
                            <div class="pane-right">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <div class="">
                                            <i class="fa fa-search fa-w-16 "></i>
                                        </div>
                                    </div>
                                    <input placeholder="Search..." type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="bg-white">
                            <div class="table-responsive">
                                <table class="text-nowrap table-lg mb-0 table table-hover">
                                    <tbody>
                                        <tr>
                                            <td class="text-center" style="width: 78px;">
                                                <div class="">
                                                    <input type="checkbox" id="eCheckbox1" class="form-check-input">
                                                    <label class="form-check-label" for="eCheckbox1">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td class="text-start ps-1">
                                                <i class="fa fa-star"></i>
                                            </td>
                                            <td>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left me-3">
                                                            <img width="42" class="rounded-circle"
                                                                src="assets/images/avatars/1.jpg" alt="">
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Alina Mcloughlin</div>
                                                            <div class="widget-subheading">Last seen online 15 minutes ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-start">Nullam dictum felis eu pede mollis pretium.</td>
                                            <td>
                                                <i class="fa fa-tags fa-w-20 opacity-4"></i>
                                            </td>
                                            <td class="text-end">
                                                <i class="fa fa-calendar-alt opacity-4 me-2"></i>
                                                7 Dec
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="app-inner-layout__sidebar card">
                    <ul class="nav flex-column">
                        <li class="pt-4 ps-3 pe-3 pb-3 nav-item">
                            <div class="d-grid">
                                <button class="btn-pill btn-shadow btn btn-primary">Write New Email</button>
                            </div>
                        </li>
                        <li class="nav-item-header nav-item">My Account</li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon pe-7s-chat"></i>
                                <span>Inbox</span>
                                <div class="ms-auto badge rounded-pill bg-info">8</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon pe-7s-wallet"></i>
                                <span>Sent Items</span>
                            </a>
                        </li>
                       
                        <li class="nav-item-divider nav-item"></li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon pe-7s-box2"></i>
                                <span>Trash</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
