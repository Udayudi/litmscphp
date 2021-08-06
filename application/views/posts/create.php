<div class="container">
  <div class="pt-4 pb-4">
    <div class="">
      <div class="row">
        <div class="col-sm-6">

        <?php echo validation_errors(); ?>

            <?php echo form_open_multipart('posts/create'); ?>
              <div class="row g-3">
                <h1 class="h3 mb-3 fw-normal pt-4">New Complaint</h1>
                  <div class="col-md-12">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" />
                  </div>
                  <div class="col-md-12">
                    <label  class="form-label">Discription</label>
                   <textarea name="body" id="editor1"  class="form-control" cols="30" rows="10">

                   </textarea>
                  </div>
                <div class="col-md-6">
                  <label  class="form-label"
                    >Image Upload</label
                  >
                  <input
                    type="file"
                    class="form-control"
                    name="userfile"
                  />
                </div>              
                <div class="col-12">
                  <label  class="form-label">Address</label>
                  <input
                    type="text"
                    class="form-control"
                    name="address1"
                    placeholder="1234 Main St"
                  />
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label"
                    >Address 2</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="address2"
                    placeholder="Apartment, studio, or floor"
                  />
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" name="city" />
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">State</label>
                  <select name="state" class="form-select">
                    <option selected>Choose...</option>
                    <option>Karnataka</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip</label>
                  <input type="text" class="form-control" name="zipcode" />
                </div>
                <div class="col-12"></div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">
                    Send Complaint
                  </button>
                </div>
              </form>
            </div>
          </div>
            <div class="col-sm-4">
             
            </div>
          </div>
      </div>
    </div>
</div>