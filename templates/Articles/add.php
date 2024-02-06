<!-- File: Templates/Articles/add.php -->
<h1>Adicionar piloto</h1>
<?php
echo $this->Form->create($article);
echo $this->Form->input('NomePiloto');
echo $this->Form->input('Equipa');
echo $this->Form->input('body', ['rows' => '3']);
echo $this->Form->button(__('Salvar Piloto'));
echo $this->Form->end();
?>