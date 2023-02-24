  <!-- Blank Start -->
  <div class=" vh-100 border bg-light justify-content-center">
      <div class="container" style="margin-top: 150px;">
          <div class="text text-center">
              <h1>Activity Data</h1>

          </div>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Add New Activity
          </button>
          <table class="table table-dark mt-5 text-center">
              <thead>
                  <tr>
                      <th scope="col">No</th>
                      <th scope="col">Name of activity</th>
                      <th scope="col">Person responsible</th>
                      <th scope="col">Activity Date</th>
                      <th scope="col">Start Time</th>
                      <th scope="col">Time's Up</th>
                      <th scope="col">Location</th>
                  </tr>
              </thead>
              <tbody>

              </tbody>
          </table>
      </div>
  </div>
  <!-- Blank End -->


  <!-- start Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Add new activity</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="mb-3">
                      <label for="nameOfActivity" class="form-label">Name of activity</label>
                      <input type="input" class="form-control" name="nameOfActivity" id="nameOfActivity" placeholder="Input Activity">
                  </div>
                  <div class="mb-3">
                      <label for="personResponsible" class="form-label">Person responsible</label>
                      <input type="input" class="form-control" name="personResponsible" id="personResponsible" placeholder="Input Activity">
                  </div>
                  <div class="mb-3">
                      <label for="activityDate" class="form-label">Activity Date</label>
                      <input type="date" class="form-control" name="activityDate" id="activityDate">
                  </div>
                  <div class="mb-3">
                      <label for="startTime" class="form-label">Start Time</label>
                      <input type="time" class="form-control" name="startTime" id="startTime">
                  </div>
                  <div class="mb-3">
                      <label for="timesUp" class="form-label">Time's Up</label>
                      <input type="time" class="form-control" name="timesUp" id="timesUp">
                  </div>
                  <div class="mb-3">
                      <label for="location" class="form-label">Location
                      </label>
                      <input type="input" class="form-control" name="location" id="location" placeholder="Input Location">
                  </div>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
              </div>
          </div>
      </div>
  </div>
  <!-- end Modal -->