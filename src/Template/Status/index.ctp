<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Status[]|\Cake\Collection\CollectionInterface $status
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li>
            <a  href="<?= $this->Url->build(['action' => 'add']) ?>" class="btn">
                Incluir
            </a>
        </li>
        <hr>
        <li>
            <a  href="<?= $this->Url->build(['controller' => 'Livros', 'action' => 'index']) ?>" class="btn">
                Livros
            </a>
        </li>
        <li>
            <a  href="<?= $this->Url->build(['controller' => 'Livrocat', 'action' => 'index']) ?>" class="btn">
                Categorias
            </a>
        </li>
        <li><a  href="<?= $this->Url->build(['controller' => 'Livroserie', 'action' => 'index']) ?>" class="btn">
                Séries
            </a>
        </li>
        <li><a  href="<?= $this->Url->build(['controller' => 'Livroeditoras', 'action' => 'index']) ?>" class="btn">
                Editoras
            </a>
        </li>
        <li><a  href="<?= $this->Url->build(['controller' => 'Livroautor', 'action' => 'index']) ?>" class="btn">
                Autores
            </a>
        </li>
        <hr></ul>
</nav>
<div class="status index large-9 medium-8 columns content">
    <h3><?= __('Status') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" width="50"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" width="50"><?= $this->Paginator->sort('Icone') ?></th>
                <th scope="col" width="150"><?= $this->Paginator->sort('Nomenclatura') ?></th>
                <th scope="col" width="450"><?= $this->Paginator->sort('Descrição') ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($status as $status): ?>
            <tr>
                <td><?= $this->Number->format($status->id) ?></td>
                <td height="60">
                    <?php
                    echo $this->Html->image("status/".$status->icone, [
                        "align" => "center"
                    ]);
                    ?>
                </td>
                <td><?= h($status->nomenclatura) ?></td>
                <td><?= h($status->descricao) ?></td>
                <td class="actions">
				<i class='material-icons md-24 align-middle'>
                    <a title="Editar" href="<?= $this->Url->build(
                        [
                            'action' => 'edit', $status->id
                        ]
                    ) ?>" class="btn">
                        edit
                    </a>
				</i>
				
				
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) num total de {{count}}')]) ?></p>
    </div>
</div>
