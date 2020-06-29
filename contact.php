<div class="formulario">
    <div class="title-form">
        <h2><strong>Formulário de Dados</strong></h2>
    </div>
    <form class="form" novalidade method="POST" action="index.php?pg=response.php">
        <div class="row">
            <!--linha 1 coluna 1 --> 
            <div class="col-md-6">
                <div class="mb-4">
                    <div class="col-md-11">
                        <label class="font-weight-bold" for="firstName">Nome</label>
                        <input type="text" name="name" class="form-control" id="name"/>
                        <div class="invalid-tooltip">
                            O nome precisa ser preenchido.
                        </div>
                    </div>
                </div>
                <div class="mb-4">    
                    <div class="col-md-11">
                        <label class="font-weight-bold" for="email">Email</label>
                        <input type="text" name="email" class="form-control form-control-sm" id="email"/>
                        <div class="invalid-tooltip">
                            O email precisa ser preenchido.
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="col-md-11">
                        <label class="font-weight-bold" for="phone">Telefone</label>
                        <input type="text" name="phone" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 00000-0000" id="phone"/>
                        <div class="invalid-tooltip">
                            O telefone precisa ser preenchido.
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="col-md-11">
                        <label class="font-weight-bold" for="issue">Assunto</label>
                        <input type="text" name="issue" class="form-control form-control-sm" id="issue"/>
                        <div class="invalid-tooltip">
                            O assunto precisa ser preenchido.
                        </div>
                    </div>
                </div>
            </div>       
            <!-- linha 1 coluna 2 -->
            <div class="col-md-6">  
                <div class="col-md-10">
                    <label class="font-weight-bold" for="message">Mensagem</label>
                    <textarea class="form-control" name="message" id="message" rows="12" id="message"></textarea>
                    <div class="invalid-tooltip">
                        A mensagem precisa ser preenchida.
                    </div>
                </div>
            </div> 
        </div>   
        <!-- linha 2 coluna 1 -->
        <div class="row">
            <div class="mb-5">
                <div class="text-description">
                        <p>Este formulário de email contém os campos para serem preenchidos com as informações
                        do usuário. Ao preencher e submeter seus dados você garante ter aceitado todos os termos 
                        descritos. Em caso de dúvidas você poderá ler nossos termos de uso <a href="index.php?pg=terms.php">aqui</a>.
                        </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-5">
                    <div class="text-center">
                        <button class="btn btn-primary ">Submeter</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>