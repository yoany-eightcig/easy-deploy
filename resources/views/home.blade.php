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
                    <div class="card">
                        <div class="card-header">New Site</div>
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label for="rootdomain" class="col-sm-2 col-form-label">Root Domain</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="rootdomain" placeholder="domain.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="aliases" class="col-sm-2 col-form-label">Aliases</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="aliases" placeholder="second-domain.com, third-domain.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="projecttype" class="col-sm-2 col-form-label">Project Type</label>
                                    <div class="col-sm-10">
                                        <select name="projecttype" class="form-control">
                                            <option value="laravel" selected="selected">Laravel</option> 
                                            <option value="php" >General PHP</option> 
                                            <option value="html">Static HTML</option> 
                                            <option value="symfony">Symfony</option> 
                                        </select>                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="webdirectory" class="col-sm-2 col-form-label">Web Directory</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="webdirectory" placeholder="/">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-success">Add Site</button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">Active Sites</div>
                        <div>
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="table-fit">&nbsp;</th> 
                                        <th>Domain</th> 
                                        <th>App</th>
                                    </tr>
                                </thead> 
                                <tbody>
                                    <tr>
                                        <td><!-- Empty --></td> 
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="/servers/172828/sites/616642">
                                                    <strong>auth.gothacked.com</strong>
                                                </a>
                                            </div>
                                        </td> 
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="fab fa-github mr-1"></i> 
                                                <span class="mr-2">gothacked/auth.gothacked</span> 
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>                            
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="v-pills-database" role="tabpanel" aria-labelledby="v-pills-database-tab">
                    <div class="card">
                        <div class="card-header">New Database</div>
                        <div class="card-body">
                            
                        </div>
                    </div>
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
    <p class="text-center mt-5">
        Copyright © 2019 Eightcig
    </p>

</div>
@endsection
