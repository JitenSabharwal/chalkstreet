<?php
# This is the modal code for section 
?>

    <div id="section"  class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content Course-->
        <div class="modal-content">
         
          <div class="modal-header">
          
	            <button type="button" class="close" data-dismiss="modal">&times;</button>
	            <h4 class="modal-title">New Section</h4>
          
          </div>
        
          <div class="modal-body">
        
            <form name="section" onsubmit="return _section()">
                	<div class="form-group">
	                
	                    <label for="title">Course Name</label>
	                    <input  type="text" class="form-control" id="course" name="s_course" required>
		            
	                </div>
					

	                <div class="form-group">
	                
	                    <label for="title">Section Name</label>
	                    <input type="text" class="form-control"  name="s_name" required>
	                
	                </div>
					<div class="form-group">
	                
	                    <label for="title">Section Details</label>
	                    <input type="text" class="form-control"  name="s_detail" required>
	                
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

