<!-- Modal -->
<div class="modal fade" id="addNewSiteModal" tabindex="-1" role="dialog" aria-labelledby="addNewSiteModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="addNewSiteModalLabel">Install Repository</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
	      	<div class="modal-body">
	      		<form>
	      		<div class="form-group row">
	      			<span class="col-sm-3">Provider</span>
	      		    <div class="col-sm-9">
	      		    	<div class="radio">
	      		    		<label for="provider1">
	      		    			<input class="mr-2" type="radio" value="1" name="provider" id="provider1" checked>Github
							</label>
                        </div>
	      		    	<div class="radio">
	      		    		<label for="provider2">
	      		    			<input class="mr-2" type="radio" value="2" name="provider" id="provider2">Bitbucket
							</label>
                        </div>
	      		    </div>
	      		</div>
	      		<div class="form-group row">
	      		    <label for="repository" class="col-sm-3">Repository</label>
	      		    <div class="col-sm-9">
	      		        <input type="text" class="form-control" id="repository" name="repository" placeholder="user/repository">
	      		    </div>
	      		</div>
	      		<div class="form-group row">
	      		    <label for="branch" class="col-sm-3">Branch</label>
	      		    <div class="col-sm-9">
	      		        <input type="text" class="form-control" id="branch" name="branch" placeholder="master">
	      		    </div>
	      		</div>
	      		<div class="form-group row">
	      		    <label class="col-sm-3">Installation Options</label>
	      		    <div class="col-sm-9">
      		    		<label for="options">
      		    			<input class="mr-2" type="checkbox" value="1" name="Options" id="options" checked="true">Install Composer Dependencies
						</label>
	      		    </div>
	      		</div>
	      		</form>
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-success">Install Repository</button>
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
	      	</div>
    	</div>
  	</div>
</div>