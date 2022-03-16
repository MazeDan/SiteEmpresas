

  <div class="modal-dialog text-dark" role="document">
    <div class="modal-content rounded-5 shadow">
      <div class="modal-header p-2 pb-4 border-bottom-0">
      </div>
              <h1 class="fw-bold text-center">Cadastre-se</h1><br>

      <div class="modal-body p-5 pt-0">
          <center>

    <h2 class="display-6">Olá, seja bem vindo</h2>
    <hr>
    </center>
    <form action="cadastrar.php" method="post">
                  <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" name="nome" value="">
            <label for="floatingInput">Nome</label>
          </div>
            <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" name="email" value="">
            <label for="floatingInput">Email</label>
          </div>
            <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-4" id="senha" placeholder="Password" name="senha" value="">
            <label for="floatingPassword">Senha</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-4" id="confirmar_senha" placeholder="Password" name="confirmar_senha">
            <label for="floatingPassword">Confirme a Senha</label>
            <span id='message' class="text-center"></span>
          </div>
          <input type="hidden" name="id" value="">    
          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Cadastrar</button>
          <small class="text-muted">Seja bem vindo, Fico a sua espera!</small>
          <hr class="my-2">

        </form>
      </div>
    </div>
  </div>
</div