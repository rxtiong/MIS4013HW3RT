<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCustomerModal">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-plus" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
</svg>

</button>

<!-- Modal -->
<div class="modal fade" id="newCustomerModal" tabindex="-1" aria-labelledby="newCustomerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newCustomerModalLabel">New Customer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
            <div class="mb-3">
              <label for="cFName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="cFName" name='cFName'>
            </div>
            <div class="mb-3">
              <label for="cLName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="cLName" name="cLName">
            </div>
            <div class="mb-3">
              <label for="cdob" class="form-label">DOB</label>
              <input type="text" class="form-control" id="cdob" name="cdob">
            </div>
            <div class="mb-3">
              <label for="cEmail" class="form-label">Email</label>
              <input type="text" class="form-control" id="cEmail" name="cEmail">
            </div>
            <div class="mb-3">
              <label for="cPhone" class="form-label">Phone</label>
              <input type="text" class="form-control" id="cPhone" name="cPhone">
            </div>
            <div class="mb-3">
              <label for="cOrder" class="form-label">Order ID</label>
              <input type="text" class="form-control" id="cOrder" name="cOrder">
            </div>
            <input type="hidden" name="actionType" value="Add">
            <button type="submit" class="btn btn-primary">Save</button>
      </form>
      </div>      
    </div>
  </div>
</div>
