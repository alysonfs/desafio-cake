
<h1>Clientes</h1>
<?= $this->Html->link('Adicionar novo cliente', ['action' => 'add'], ['class' => 'button']) ?>
<table>
  <tr>
    <th>Nome</th>
    <th>Email</th>
    <th>Criado em</th>
    <th>Opções</th>
  </tr>

  <!-- Here is where we iterate through our $articles query object, printing out article info -->

  <?php foreach ($clientes as $cliente) : ?>
    <tr>
      <td>
        <?= $this->Html->link($cliente->nome, ['action' => 'view', $cliente->id]) ?>
      </td>
      <td>
        <?= $this->Html->link($cliente->email, ['action' => 'view', $cliente->id]) ?>
      </td>
      <td>
        <?= $cliente->created->format(DATE_RFC850) ?>
      </td>
      <td>      
        <?= $this->Form->postLink('Excluir', ['action' => 'delete', $cliente->id], ['class' => 'button', 'confirm' => 'tem certeza?']) ?>
        <?= $this->Html->link('Pedidos', ['action' => 'view', $cliente->id], ['class' => 'button']) ?>
      </td>
    </tr>
  <?php endforeach; ?>
</table>