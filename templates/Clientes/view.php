<h1><?= h($cliente->nome) ?></h1>
<p><?= h($cliente->email) ?></p>
<p><small>Criado: <?= $cliente->created->format(DATE_RFC850) ?></small></p>
<p>
  <?= $this->Html->link('Editar', ['action' =>'edit', $cliente->id], ['class' => 'button']) ?>  
</p>