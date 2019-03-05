@include('modals.add-new-site', [])

<div class="card">
    <div class="card-header">New Database</div>
    <div class="card-body">
        <form>
            <div class="form-group row">
                <label for="dbName" class="col-sm-2 ">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="dbName" name="dbName" alue="">
                </div>
            </div>
            <div class="form-group row">
                <label for="dbUser" class="col-sm-2 ">User (Optional)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="dbUser" name="dbUser" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="dbPass" class="col-sm-2 ">Password (Optional)</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="dbPass" name="dbPass" >
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addNewDatabaseModal">Add database</button>
                </div>
            </div>
        </form>
        
    </div>
</div>
<br>
<div class="card">
    <div class="card-header">Databases</div>
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>Name</th> 
                    <th></th>
                    <th></th>
                </tr>
            </thead> 
            <tbody>
                <tr>
                    <td>
                        easy-deploy
                    </td> 
                    <td><!----></td> 
                    <td class="table-fit">
                        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@section('scripts')
@parent


@endsection
