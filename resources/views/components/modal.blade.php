<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="userModalLabel">User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
      {{-- <button type="button" class="btn-close btn-close-white" data-dismiss="modal">
        X</button> --}}
      </div>
      <div class="modal-body">
        <form id="userForm" method="POST">
          @csrf
          <input type="hidden" id="userMethod" name="_method" value="POST">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          {{-- <div class="form-group" id="passwordField">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div> --}}
          <div class="form-group" id="passwordField">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description">
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status">
          </div>
          <button type="submit" class="btn btn-primary" id="submitButton">Create</button>
        </form>
      </div>
    </div>
  </div>
</div>
