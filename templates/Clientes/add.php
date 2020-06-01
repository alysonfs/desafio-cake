<h1>Cadastrar Cliente</h1>
<?php
echo $this->Form->create($cliente);
echo $this->Form->control('nome');
echo $this->Form->control('email');
echo $this->Form->button(__('Cadastrar Cliente'));
echo $this->Form->end();
?>