<?php

##### cao.php #####

 require_once"fucoes.php";
 cabecalho("idade do cão");
 ?>

 <h2>Cálculo da idade do cão</h2>
 <form action="calculaidade.php" method="post"><br>
 <label>Escolha o tamanho do cão:</label>
 <select name="tamanho" class="form-control">
 <option value="pequeno">Pequeno</option>
 <option value="medio">Médio</option>
 <option value="grande">Grande</option>
 </select><br>

 <label>Nome:</label>
 <input name="name" type="text" size="10" maxlenght="20" class="form-control"><br>
 <label>Idade:</label>
 <input name="name" type="text" size="10" maxlenght="10" class="form-control"><br>
 <input type="submit" class="btn btn-primary" value="Calcular"><br>
 <input type="reset" class="btn btn-primary" value="Redefinir"><br>
 </form>

 <?php
 rodape();
 ?>


 


