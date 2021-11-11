@extends('Admin::layouts.master')
@section('content')
    <meta name="google-signin-client_id" content="961990443618-2pdno6f1b7ti1sbo20jtf3sg6ckttqea.apps.googleusercontent.com">
    <meta name="google-signin-scope" content="https://www.googleapis.com/auth/analytics.readonly">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-tempting-azure"></i>
                </div>
                <div>
                    {{ __('Google Analytic') }}
                    {{-- <div class="page-title-subheading">{{ __('User edit & delete') }}</div> --}}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="{{ __('Refresh') }}" data-bs-placement="bottom"
                    class="btn-shadow me-3 btn btn-info refresh-page">
                    <i class="pe-7s-refresh-2"></i>
                </button>

            </div>
        </div>
    </div>

    <div class="card card-btm-border border-primary">
        <div class="card-body">
            <!-- The Sign-in button. This will run `queryReports()` on success. -->
            <p class="g-signin2" data-onsuccess="queryReports"></p>

            <!-- The API response will be printed here. -->
        </div>
    </div>

@endsection
@section('script')
    <script>
        // Replace with your view ID.
        var VIEW_ID = '191890574';

        // Query the API and print the results to the page.
        function queryReports() {
            gapi.client.request({
                path: '/v4/reports:batchGet',
                root: 'https://analyticsreporting.googleapis.com/',
                method: 'POST',
                body: {
                    reportRequests: [{
                        viewId: VIEW_ID,
                        dateRanges: [{
                            startDate: '7daysAgo',
                            endDate: 'today'
                        }],
                        metrics: [{
                            expression: 'ga:sessions'
                        }]
                    }]
                }
            }).then(displayResults, console.error.bind(console));
        }

        function displayResults(response) {
            var formattedJson = JSON.stringify(response.result, null, 2);
            document.getElementById('query-output').value = formattedJson;
        }
    </script>

    <!-- Load the JavaScript API client and Sign-in library. -->
    <script src="https://apis.google.com/js/client:platform.js"></script>

@endsection
