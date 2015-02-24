<?= validation_errors(); ?>

<?= form_open('index.php/admin','class="form-signin"');?>
<?= heading('Please sign in', 2, 'class="form-signin-heading"');?>
<?= form_label('Email address', 'inputEmail', ['class' => 'sr-only']);?>
<?= form_input(['type' => 'email', 'id' =>'inputEmail', 'class' => 'form-control', 'placeholder' => 'Email address', 'required' => '', 'autofucus' => '']);?>
<?= form_label('Password', 'inputPassword', ['class' => 'sr-only']);?>
<?= form_input(['type' => 'password', 'id' =>'inputPassword', 'class' => 'form-control', 'placeholder' => 'Email address', 'required' => '']);?>
<div class="checkbox">
  <label>
    <?= form_checkbox('', 'remember-me');?>Remember me
  </label>    
</div>
<?= form_button(['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit', 'content' => 'Sign in']);?>  
<?= form_close();?>