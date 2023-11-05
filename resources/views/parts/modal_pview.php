
<div class="modal fade" id="exampleModalpview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content bg-warning">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container mt-5">
          <?php
     if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
      }
     ?>
     <?php if($products): ?>
          <?php foreach($products as $key => $product): ?>
     
    <form method="post" action="<?= site_url('/products/show') ?>">
    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $product['name']; ?>">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" class="form-control" value="<?php echo $product['price']; ?>">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea type="text" value="<?php echo $product['price']; ?>" name="description" class="form-control"><?php echo $product['description']; ?></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </div>
    </form><?php endforeach; ?>
         <?php endif; ?>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-dark">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
