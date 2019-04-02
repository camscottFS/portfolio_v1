<div class="container">
  <div class="page-header">
    <h1><span>Contact</span> me!</h1>
  </div>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <?php echo $this->session->flashdata('success_msg'); ?>
      <?php echo $this->session->flashdata('error_msg'); ?>
      <?php echo validation_errors(); ?>
      <?php echo form_open('contact/send'); ?>
        <div class="form-group">
          <label for="name" class="sr-only">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="email" class="sr-only">Email</label>
          <input type="text" class="form-control" name="email" placeholder="E-mail Address">
        </div>
        <div class="form-group" style="margin-top: 5px;">
          <label for="message" class="sr-only">Message</label>
          <textarea class="form-control no-resize" name="message" placeholder="Message"></textarea>
        </div>
        <div class="form-group" style="margin-top: 5px;">
          <button type="submit" class="btn btn-up hire-me btn-block">Send Message</button>
        </div>
      </form>
    </div>
  </div>
  <div class="page-header">
    <h1>Stay in <span>touch</span> with me!</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="stay-in-touch">
        <i class="fa fa-skype hover" data-toggle="tooltip" title="camscott407" aria-hidden="true"></i>
        <i class="fa fa-slack hover" data-toggle="tooltip" title="@camscottfs" aria-hidden="true" style="margin-left: 40px;"></i>
        <i class="fa fa-envelope hover" data-toggle="tooltip" title="cameron@camscott.me" aria-hidden="true" style="margin-left: 40px;"></i>
      </div>
      <p class="text-center" style="margin-top: 40px;">I try to respond to every message within twenty-four hours. I look forward to speaking with you!</p>
    </div>
  </div>
</div>
