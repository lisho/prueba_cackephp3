<header>
    
    <div class="header-image">
        <br>
        <?php /*$this->Html->image('http://cakephp.org/img/cake-logo.png')*/ ?> 
        <?= $this->Html->image('slogoblanco.svg', ["width"=>""]) ?>
        
        <h1>Escuela Juan Soñador</h1>
        
        <?php if ($auth): ?>
            
            <div class='text-right'><legend><small>
            <?= '<i class="fa fa-thumbs-up "></i>  '.ucwords($auth['username']).' se ha conectado correctamente al sistema...'; ?>
            </legend></small></div>
        <?php endif ?>
        
    </div>
</header>