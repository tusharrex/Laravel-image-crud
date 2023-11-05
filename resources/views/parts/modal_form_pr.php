<div class="modal fade" id="exampleModalPr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-warning">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container mt-5">
    <form method="post" action="<?= site_url('/products/store') ?>">
    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea type="text" name="description" class="form-control" id="summernote"><?php echo $product['description']; ?></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </div>
    </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark">Save changes</button>
      </div>
    </div>
  </div>
</div>
