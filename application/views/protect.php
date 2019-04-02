<div class="container">
  <div class="page-header">
    <h1>View Latest <span>Messages</span></h1>
  </div>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <?php echo form_open('contact/view'); ?>
      <div class="form-group">
        <label for="password" class="sr-only">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <div class="form-group" style="margin-top: 5px;">
        <button type="submit" class="btn btn-primary btn-block">View Messages</button>
      </div>
      </form>
    </div>
  </div>
</div>
