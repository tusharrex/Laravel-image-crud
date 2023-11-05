<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-warning">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('tms.store') }}" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea id="summernote" type="text" name="description" class="form-control"></textarea>
  </div>

<div class="mb-3">
    <label for="image" class="form-label">Media*</label>
    <input type="file" class="form-control" name="image">
  </div>
  
  <div class="mb-3">
        <button type="submit" class="btn btn-dark btn-block">Submit</button>
      </div>
  
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark">Save changes</button>
      </div>
    </div>
  </div>
</div>
