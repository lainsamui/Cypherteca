<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Status $status
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
        <hr> </ul>
</nav>
<div class="status form large-9 medium-8 columns content">
    <?= $this->Form->create($status) ?>
    <fieldset>
        <legend><?= __('Novo Status') ?></legend>
        <?php
            echo $this->Form->control('nomenclatura',[
            'class' => 'form-control form-control-lg',
							'type' 	=> 'text',
							'style' => 'margin-top: 5px; margin-botton: 15px; width: 230px',
							'label' => [
            'text' 	=> 'Nomenclatura',
            'class' => 'control-label input-label'
            ]
            ]);
            echo $this->Form->control('descricao',[
                'class' => 'form-control form-control-lg',
                'type' 	=> 'text',
                'style' => 'margin-top: 5px; margin-botton: 15px; width: 230px',
                'label' => [
                    'text' 	=> 'Descrição',
                    'class' => 'control-label input-label'
                ]
            ]);
          //  echo $this->Form->control('usuarios._ids', ['options' => $usuarios]);
        ?>
    </fieldset>
    <div class="text-right"><i class='material-icons md-24 align-middle'>
            <?= $this->Form->button(__('Salvar'),
                [
                    'style' => 'margin-right: 550px',
                    'class' => 'btn',
                    'title' => 'Salvar'
                ]
            ); ?>
            <?= $this->Form->end() ?></i>
    </div>
</div>
