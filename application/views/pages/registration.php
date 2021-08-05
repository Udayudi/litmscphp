<?php echo form_open('users/register'); ?>
<div class="container">
      <div class="pt-4 pb-4">
        <div class="">
          <div class="row">
            <div class="col-sm-6">
              <div class="row g-3">
                <h1 class="h3 mb-3 fw-normal pt-4">Create New Account</h1>
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Username</label>
                    <input type="email" class="form-control" id="inputEmail4" />
                  </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label"
                    >Password</label
                  >
                  <input
                    type="password"
                    class="form-control"
                    id="inputPassword4"
                  />
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" id="inputPassword4" />
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">FirstName</label>
                  <input type="email" class="form-control" id="inputEmail4" />
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Lastname</label>
                  <input type="email" class="form-control" id="inputEmail4" />
                </div>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label">Age / DOB</label>
                    <input type="date" class="form-control" id="inputCity" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label">Gender</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>Male</option>
                      <option>Female</option>
                      <option>Others</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="inputCity" />
                  </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputAddress"
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
                    id="inputAddress2"
                    placeholder="Apartment, studio, or floor"
                  />
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" id="inputCity" />
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">State</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="inputZip" />
                </div>
                <div class="col-12"></div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">
                    Create Account
                  </button>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
            <div class="col-sm-4"></div>
          </div>
        </div>
      </div>
    </div>