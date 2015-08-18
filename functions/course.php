
    <div id="course"  class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content Course-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">New Course</h4>
          </div>
          <div class="modal-body">
            <form name="course" onsubmit="return courses()">
                <div class="form-group">
                    <label for="title">Course Name</label>
                    <input type="text" class="form-control" id="c_name" name="c_name" required>
                </div>
                <div class="form-group">
                      <label for="sel1">Select Category </label>
                      <select class="form-control" id="sel1" name="c_category" required>
                        <option>Computer</option>
                        <option>Networking</option>
                        <option>Web</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="level">Select Level </label>
                      <select class="form-control" id="sel1" name="c_level" required>
                        <option>Beginner</option>
                        <option>Intermidiate</option>
                        <option>Advanced</option>
                      </select>
                  </div>
                <div class="form-group" >
                    <label for="title">Price</label>
                    <span>Rs</span>
                    <input type="text" class="form-control" placeholder="Amount" name="price" width="20%" required/>
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

    