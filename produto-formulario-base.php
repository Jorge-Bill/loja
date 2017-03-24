   <tr>
                <td>
                    <label>Nome: </label>
                </td>
                <td>
                    <input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Preço: </label>
                </td>
                <td>
                    <input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Descrição: </label>
                </td>
                <td>
                    <textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea>
                </td>
            </tr>
            <tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="usado" <?=$usado?> value="true"> Usado </td>
            </tr>
                <td>
                    <label>Categoria: </label>
                </td>
                <td>
                    <select class="form-control" name="categoria_id">
                    <?php foreach($categorias as $categoria) :
                        $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                        $selecao = $essaEhACategoria ? "selected='selected'" : "";
                    ?>
                        <option value="<?=$categoria['id']?>" <?=$selecao?> >
                                      <?=$categoria['nome']?>
                        </option>
                      <?php endforeach ?>
                    </select>
                </td>
            </tr>
           