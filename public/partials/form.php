<div class="content">
    <form action="validForm.php" method="post">
        <div class="fieldGroup">
            <div class="field">
                <label for="name">Nome: </label>
                <input type="text" name="name" require>
            </div>
            <div class="field">
                <label for="nameSecond">Segundo nome: </label>
                <input type="text" name="nameSecond" require>
            </div>
        </div>

        <div class="fieldGroup">
            <div class="field">
                <label for="email">Email: </label>
                <input type="email" name="email" require>
            </div>
            <div class="field">
                <label for="cpf">CPF: </label>
                <input type="text" name="cpf" require>
            </div>
        </div>

        <div class="fieldGroup">
            <div class="field">
                <label for="state">Estado: </label>
                <select name="state">
                    <option value="0">Selecione o estado</option>
                </select>
            </div>
            <div class="field">
                <label for="city">Cidade: </label>
                <select name="city">
                    <option value="0">Selecione a cidade</option>
                </select>
            </div>
        </div>

        <button type="submit">Enviar</button>
    </form>
</div>