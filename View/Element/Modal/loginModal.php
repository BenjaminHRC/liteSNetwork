<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Inscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
        <div class="modal-body">
          <div class=row>
            <div class="col-6">
              <div class="mb-3 text-center">
                <input id="register_name" class="w-100" type="text" name="register_name" placeholder="Name">
              </div>
            </div>
            <div class="col-6">
              <div class="text-center">
                <input id="register_firstname" class="w-100" type="text" name="register_firstname" placeholder="Firstname">
              </div>
            </div>
          </div>
          <div class="mb-3 text-center">
            <input id="register_mail" class="w-100" type="text" name="register_mail" placeholder="Mail">
          </div>
          <div class="mb-3 text-center">
            <input id="register_username" class="w-100" type="text" name="register_username" placeholder="Username">
          </div>
          <div class=" mb-3 text-center">
            <input id="register_password" class="w-100" type="password" name="register_password" placeholder="Password">
          </div>
          <div class="mb-3 text-center">
            <input id="register_password2" class="w-100" type="password" name="register_password2" placeholder="Confirm password">
          </div>
        </div>
        <?= $error ?>
        <div class="modal-footer">
          <input id="register_btn_inscrire" type="submit" class="btn btn-success text-center" name="registerForm" value="S'inscrire">
        </div>
      </form>
    </div>
  </div>
</div>