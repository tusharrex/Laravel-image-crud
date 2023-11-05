
<div class="modal fade" id="exampleModalview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="timeline">
              <!-- timeline time label -->
              
              <div class="time-label">
                <span class="bg-orange"><?php echo $timeline['created_at']; ?></span>
              </div>
              
              <!-- timeline item -->
              <div>
                <i class="fas fa-user bg-orange"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i><?php echo $timeline['created_at']; ?></span>
                  <h3 class="timeline-header"><a href="#">Support Team</a> Updated Status</h3>

                  <div class="timeline-body">
                    <?php //echo $key+1; ?><img class="rounded-circle" class="w-100" height="100px" width="100px" src="<?php echo site_url('uploads/'.$timeline['p_image']);?>" alt="Photo"/>
                    <h3><?php echo $timeline['title']; ?></h3><br/>
                    <p class="leader"><?php echo $timeline['description']; ?><?//=  substr(strip_tags($timeline['descr']), 0, 1000).'.';?></p>
                  </div>
                  <div class="timeline-footer">
                  

                  </div>
                </div>
              </div>
                </div>
                
            <?php endforeach; ?>
         <?php endif; ?>
        
      </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
