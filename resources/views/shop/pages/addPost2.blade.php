<!-- End Page Header -->

<div class="row">
    @include('shop/_partials/errors')
    <form method="post" action="{{url('store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="col-lg-9 col-md-12">
            <!-- Add New Post Form -->

            <div class="card card-small mb-3">
                <div class="card-body">
                    <form class="add-new-post">
                        <input name="title" class="form-control form-control-lg mb-3" type="text"
                               placeholder="Your Post Title">

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">About product</label>
                            <textarea name="content" class="form-control" id="exampleFormControlTextarea1"
                                      rows="3"></textarea>
                        </div>
                        <div class="form-group custom-file">
                            <input type="file" class="custom-file-input text-black" name="img" id="path">
                            <label class="custom-file-label text-black" for="listingImage">Pasirinkite faila</label>
                        </div>
                    </form>
                </div>
                <li class="list-group-item d-flex px-3">
                    <div class="text-success">
                        <i class="far fa-money-bill-alt "> Price</i>
                        <input type="number" min="1" step="any">
                    </div>

                    <div>
                        <i class="fas fa-calculator">Quantity</i>
                        <input type="number" min="1" step="any">
                    </div>
                </li>
            </div>
            <!-- / Add New Post Form -->
        </div>
        <div class="col-lg-3 col-md-12">

            <!-- Post Overview -->
            <div class='card card-small mb-3'>
                <div class="card-header border-bottom">
                    <h6 class="m-0">Categories</h6>
                </div>
                <div class='card-body p-0'>
                    <div class="form-group">
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item px-3 pb-2 form-select">
                                <div class="custom-control custom-checkbox mb-1">
                                    <input name="category" type="checkbox" class="custom-control-input" id="category1"
                                           value="Uncategorized">
                                    <label class="custom-control-label" for="category1">Uncategorized</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-1">
                                    <input name="category" type="checkbox" value="Extreme" class="custom-control-input"
                                           id="category2">
                                    <label class="custom-control-label" for="category2">Extreme</label>
                                </div>
                                <div name="category" class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" value="Casual" class="custom-control-input"
                                           id="category3">
                                    <label class="custom-control-label" for="category3">Casual</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-1">
                                    <input name="category" type="checkbox" value="Sport" class="custom-control-input"
                                           id="category4">
                                    <label class="custom-control-label" for="category4">Sport</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-1">
                                    <input name="category" type="checkbox" value="Chill" class="custom-control-input"
                                           id="category5">
                                    <label class="custom-control-label" for="category5">Chill</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <li class="list-group-item d-flex px-3 pb-2">
                        <button type="submit" class="btn btn-sm btn-accent justify-content-center">
                            <i class="material-icons">file_copy</i> Publish
                        </button>
                    </li>
                </div>
            </div>
    </form>
    <!-- / Post Overview -->
</div>
</div>

