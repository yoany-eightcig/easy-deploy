@include('modals.add-new-site', [])

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
                    <select name="projecttype" class="form-control" onchange="updateWebDirectory(this)">
                        @foreach ($webroot as $key => $value)
                            <option value="{{ $key }}">{{ ucfirst($key) }}</option>
                        @endforeach
                    </select>                                        
                </div>
            </div>
            <div class="form-group row">
                <label for="webdirectory" class="col-sm-2 col-form-label">Web Directory</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="webdirectory" placeholder="/" value="/public">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addNewSiteModal">Add Site</button>
                </div>
            </div>
        </form>
        
    </div>
</div>
<br>
<div class="card">
    <div class="card-header">Active Sites</div>
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    {{-- <th class="table-fit">&nbsp;</th>  --}}
                    <th>Domain</th> 
                    <th>App</th>
                </tr>
            </thead> 
            <tbody>
                <tr>
                    {{-- <td>Empty</td>  --}}
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="/servers/172828/sites/616642">
                                <strong>easy-deploy.eightcig.com</strong>
                            </a>
                        </div>
                    </td> 
                    <td>
                        <div class="d-flex align-items-center">
                            <i class="fab fa-github mr-1"></i> 
                            <span class="mr-2">yoany-eightcig/easy-deploy</span> 
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>                            
    </div>
</div>

@section('scripts')
@parent

<script type="text/javascript">
function updateWebDirectory (object) {
    console.log(object.value);
    switch (object.value) {
        @foreach ($webroot as $key => $value)
            case "{{ $key }}":
                $("#webdirectory").val('{{ $value }}');
            break;
        @endforeach
    }
}
</script>
@endsection
