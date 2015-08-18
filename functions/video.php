<?php
# This is the modal code for section 
?>

    <div id="video"  class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content Course-->
        <div class="modal-content">
         
          <div class="modal-header">
          
	            <button type="button" class="close" data-dismiss="modal">&times;</button>
	            <h4 class="modal-title">New Video</h4>
          
          </div>
        
          <div class="modal-body">
        
            <form name="video" onsubmit="return _video()">
              
	                <div class="form-group">
	                
	                    <label for="title">Section Name</label>
	                    <input type="text" class="form-control" id="section" name="v_section" required>
	                
	                </div>
					<div class="form-group">
	                
	                    <label for="title">Video Title</label>
	                    <input type="text" class="form-control" id="section" name="v_name" required>
	                
	                </div>
					<div class="form-group">
	                
	                    <label for="title">Video Details</label>
	                    <input type="text" class="form-control"  name="v_detail" required>
	                
	                </div>                
	                <div class="form-group">        
	                 
	                  <div class="col-sm-offset-2 ">
	                    <button  class="btn btn-default">Submit</button>
	                  </div>
	                
	                </div>

            </form>
          
          </div>  
        
        </div>

      </div>
   
    </div>

