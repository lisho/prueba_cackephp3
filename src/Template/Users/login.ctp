<!-- BOOTSTRAP NAVBAR - BARRA DE NAVEGACIÓN-->

<br><br><br><br>
<header>
    
    <div class="header-image">
        <br>

        <?php /*$this->Html->image('http://cakephp.org/img/cake-logo.png')*/ ?> 
        <?= $this->Html->image('slogoblanco.svg', ["width"=>""]) ?>
        
        <h1>Escuela Juan Soñador</h1>
        <h3>Bienvenido </h3>
        
        <?php 
            if ($auth) {
             echo ucwords($auth['username']).', ya estás logueado';
            }
        ?>
    
    </div>

</header>       