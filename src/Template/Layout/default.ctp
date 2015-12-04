<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Escuela Juan Soñador';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    
    <?= $this->Html->meta(
    'favicon.ico',
    '/favicon.png',
    ['type' => 'icon']
        ); ?>

    <?= $this->Html->css([  'cake',
                            '../startbootstrap/bower_components/bootstrap/dist/css/bootstrap.css',
                            '../startbootstrap/bower_components/metisMenu/dist/metisMenu.min.css',
                            //'../startbootstrap/dist/css/timeline.css',
                            '../startbootstrap/dist/css/sb-admin-2.css',
                            //'../startbootstrap/bower_components/morrisjs/morris.css',
                            '../startbootstrap/bower_components/font-awesome/css/font-awesome.min.css',
                            'mis_estilos']) ?>

</head>

<body class="home">

   
        <?= $this->Flash->render() ?>        
        <?= $this->element('menu'); ?>
       
            <!-- Cargamos la barra lateral sólo si estamos logueados -->    
                
        <div class="page-content-wrapper">         

            <?php if (isset($auth)): ?>
            
                <?php if (isset($page) && $page=='home'): ?>
                    <?= $this->element('bienvenida'); ?>
                <?php endif; ?>
               
                    <div id="page-wrapper">
                    
                    <?= $this->fetch('content') ?>
                     
                    </div>
            
            <?php else: ?>
            
                <?= $this->fetch('content') ?>
            <?php endif ?>   
                
             <!-- /. if barra lateral -->   
     </div>

        
    
  <?php //echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'); ?>
    
    <script src="/startbootstrap/bower_components/jquery/dist/jquery.min.js"></script>
     
   <!-- Bootstrap Core JavaScript -->
    <script src="/startbootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

            <!-- Metis Menu Plugin JavaScript -->
    <script src="/startbootstrap/bower_components/metisMenu/dist/metisMenu.min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="/startbootstrap/dist/js/sb-admin-2.js"></script>      
    <script src="mi_js.js"></script>           
    
</body>
</html>
