<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?= form_open('index.php/login/validate', ['class' => 'form-signin']);?>
        <h2 class="form-signin-heading">Please sign in</h2>
        <?= form_error('username', '<div class="error">', '</div>'); ?>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="username" id="inputEmail" name="username" class="form-control" placeholder="Username"  autofocus>
        <?= form_error('password', '<div class="error">', '</div>'); ?>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" >
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
<?= form_close();?>