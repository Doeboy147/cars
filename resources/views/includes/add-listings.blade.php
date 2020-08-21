<div class="modal fade" id="addListing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white">Add New Listing</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/add-listing" class="async" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-2">
                            <label class="form-check-label"> Image</label>
                        </div>
                        <div class="col-md-8">
                            <input type="file" required name="imageFile" placeholder="Choose image" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2">
                            <label> Maker</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="maker" placeholder="e.g Audi" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2">
                            <label> Model</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="model" placeholder="e.g R8" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2">
                            <label> Year</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="year" placeholder="2007" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2">
                            <label> Price</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="price" placeholder="3000 000" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="user_id" value="{{ $user->uuid }}">
                    <button type="reset" class="btn btn-dark float-left">Reset</button>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
