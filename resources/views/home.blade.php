@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h4>Server Details</h4>

    </div>
    <div class="row">
        <div class="col-sm-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active " id="v-pills-sites-tab" data-toggle="pill" href="#v-pills-sites" role="tab" aria-controls="v-pills-sites" aria-selected="true">
                    <i class="fas fa-server pr-1"></i> Sites
                </a>

                <a class="nav-link" id="v-pills-database-tab" data-toggle="pill" href="#v-pills-database" role="tab" aria-controls="v-pills-database" aria-selected="false">
                    <i class="fas fa-database pr-1"></i> Database
                </a>

                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    <i class="fas fa-wrench pr-1"></i> Settings
                </a>

                <a class="nav-link" id="v-pills-logs-tab" data-toggle="pill" href="#v-pills-logs" role="tab" aria-controls="v-pills-logs" aria-selected="false">
                    <i class="fas fa-receipt pr-1"></i> Logs
                </a>

            </div>
        </div>
        <div class="col-md-10">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-sites" role="tabpanel" aria-labelledby="v-pills-sites-tab">
                    @include('sessions.sites', ['webroot' => $webroot])
                </div>
                <div class="tab-pane fade" id="v-pills-database" role="tabpanel" aria-labelledby="v-pills-database-tab">
                    @include('sessions.database', ['webroot' => $webroot])
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <div class="card">
                        <div class="card-header">Settings</div>
                        <div class="card-body">
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-logs" role="tabpanel" aria-labelledby="v-pills-logs-tab">
                    <div class="card">
                        <div class="card-header">Logs</div>
                        <div class="card-body">
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
