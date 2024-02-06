<html></html>
<!-- File: Templates/Articles/view.php -->
<h1><?= h($article->NomePiloto) ?></h1>
<h1><?= h($article->Equipa) ?></h1>
<p><?= h($article->body) ?></p>
<p><small>Criado: <?= $article->created->format(DATE_RFC850) ?></small></p>
</html>