<h1><small>Editar Cliente</small>  <?= h($cliente->nome) ?> </h1>
<?php
echo $this->Form->Create($cliente);
echo $this->Form->control('id', ['type' => 'hidden', 'value' => $cliente->nome]);
echo $this->Form->control('nome', ['value' => $cliente->nome]);
echo $this->Form->control('email', ['value' => $cliente->email]);
echo $this->Form->button(__('Editar Cliente'));
echo $this->Form->end();
?>