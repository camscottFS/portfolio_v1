<div class="container">
  <div class="page-header">
    <h1>Latest <span>Messages</span></h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php foreach ($messages as $message){
        echo '<div class="well">';
        echo '<div class="message">';
          echo '<h3>Contact Information</h3>';
          echo '<strong>' . $message['name'] . '</strong>';
          echo '<br>';
          echo '<strong>' . $message['email'] . '</strong>';
          echo '<p>Sent at: ' . $message['created_at'] . '</p>';
          echo '<div class="db-message">';
            echo '<h3>Message</h3>';
            echo '<p>' . $message['message'] . '</p>';
          echo '</div>';
        echo '</div>';
        echo '</div>';
        }
      ?>
    </div>
  </div>
</div>
