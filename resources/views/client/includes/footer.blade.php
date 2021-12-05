@inject('t','App\Helper\Helper')
<footer class="footer">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="column">
                        <h4 class="mt-3">Company</h4>
                        <ul>
                            @foreach ($data['langs'] as $key => $lang)
                                <div class="tab-pane fade @if ($key === 0) active show @endif"
                                    id="c_tab-animated1-{{ $lang->id }}">
                                    <li>
                                        {{ __('Company Name') }} : {{ json_decode($site_info->company_name, true)[session()->get('locale')] }}
                                    </li>
                                    <li>
                                        {{ __('Site Name') }} : {{ json_decode($site_info->site_name, true)[session()->get('locale')] }}
                                    </li>
                                    <li class="nav-item">
                                        {{ __('Company Registration Number') }} : {{ $site_info->company_register_number }}
                                    </li>
                                    <li>
                                        {{-- {{ dd($lang->country_code) }} --}}
                                        {{ __('Address') }} : {!! json_decode($site_info->address, true)[session()->get('locale')] !!}
                                    </li>
                                </div>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="column">
                        <h4 class="mt-3">Customer</h4>
                        <ul>
                            @foreach ($data['langs'] as $key => $lang)
                                <div class="tab-pane fade @if ($key === 0) active show @endif"
                                    id="c_tab-animated1-{{ $lang->id }}">
                                    <li class="nav-item">
                                        {{ __('Phone Number') }} : {{ $site_info->phone_number }}
                                    </li>
                                    <li>
                                        <i class="ni ni-watch-time"></i>
                                        AM 09:30 - PM 18:30
                                    </li>
                                    <li class="nav-item">
                                        {{ __('Fax Number') }} : {{ $site_info->fax }}
                                    </li>
                                    <li class="nav-item">
                                        {{ __('E-mail') }} : {{ $site_info->email }}
                                    </li>
                                </div>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-1 col-6">

                </div>
                <div class="col-md-3 col-6">
                    <div class="column">
                        <h4 class="mt-3">Social Feed</h4>
                        <div class="tab-content">
                            <ul>
                                @foreach ($data['langs'] as $key => $lang)
                                    <div class="tab-pane fade @if ($key === 0) active show @endif"
                                        id="c_tab-animated1-{{ $lang->id }}">
                                        <li class="nav-item">
                                            {!! json_decode($site_info->terms_of_condition_name_url, true)[session()->get('locale')]  ?? '' !!}
                                        </li>
                                        <li>
                                            {!! json_decode($site_info->privacy_name_url, true)[session()->get('locale')]  ?? '' !!}
                                        </li>
                                        <li class="nav-item">
                                            {{ __('Copyright') }} :   {!! json_decode($site_info->site_copyright, true)[session()->get('locale')] ?? ''  !!}
                                        </li>
                                    </div>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
