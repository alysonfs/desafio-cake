<h2>Bem vindo ao desafio Cake-PHP</h2>
<div class="panel">
  <h3>Objetivo</h3>
  <p>
    O desafio consiste em criar um simples relacionamento entre entidades
    de relação simples entre clientes e pedidos, bem como seus CRUD`s;
  </p>
</div>
<div class="panel">
  <h3>Controles</h3>
  <ul>
    <li class="bullet success">
      <?php echo $this->Html->link(
        'Produtos',
        ['controller' => 'pedidos', 'action' => 'index']
      )
      ?>
    </li>
    <li class="bullet success">
      <?php echo $this->Html->link(
        'Clientes',
        ['controller' => 'clientes', 'action' => 'index']
      )
      ?>
    </li>
  </ul>
</div>