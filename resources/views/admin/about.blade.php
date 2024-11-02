@extends('admin.layout.app')
@section('about')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title2">About</h5>

            <!-- Vertical Form -->
            <form>
                <div class="col-12">
                    <label for="inputPassword" class="col-sm-2 col-form-label">About Description</label>
                    <div class="col-12">
                        <textarea class="form-control" style="height: 100px" name="about_description"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <label for="inputPassword" class="col-sm-2 col-form-label">History</label>
                    <div class="col-12">
                        <textarea class="form-control" style="height: 100px" name="history"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Highligth</label>
                    <div class="col-12">
                        <textarea class="form-control" style="height: 100px" name="highligth"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Vision</label>
                    <div class="col-12">
                        <textarea class="form-control" style="height: 100px" name="vision"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Mision</label>
                    <div class="col-12">
                        <textarea class="form-control" style="height: 100px" name=" mision"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Founder Photo</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="formFile" name="founder_img">
                    </div>
                </div>
                <div class="col-12">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Founder Desc</label>
                    <div class="col-12">
                        <textarea class="form-control" style="height: 100px" name="founder_desc"></textarea>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-success">Save Data</button>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#editAboutModal">Edit Data</button>
                </div>
            </form><!-- Vertical Form -->
            <!-- Edit About Modal -->
            <div class="modal fade" id="editAboutModal" tabindex="-1" aria-labelledby="editAboutModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-header">
                                <h5 class="modal-title" id="editAboutModalLabel">Edit About Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="aboutDescription" class="form-label">About Description</label>
                                    <textarea class="form-control" style="height: 100px" name="about_description"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="history" class="form-label">History</label>
                                    <textarea class="form-control" style="height: 100px" name="history"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="highlight" class="form-label">Highlight</label>
                                    <textarea class="form-control" style="height: 100px" name="highlight"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="vision" class="form-label">Vision</label>
                                    <textarea class="form-control" style="height: 100px" name="vision"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="mision" class="form-label">Mission</label>
                                    <textarea class="form-control" style="height: 100px" name="mision"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="founderImg" class="form-label">Founder Photo</label>
                                    <input class="form-control" type="file" id="founderImg" name="founder_img">
                                </div>
                                <div class="mb-3">
                                    <label for="founderDesc" class="form-label">Founder Description</label>
                                    <textarea class="form-control" style="height: 100px" name="founder_desc"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End of Modal -->

        </div>
    </div>
@endsection
