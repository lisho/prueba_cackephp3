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
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

//$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

$cakeDescription = 'CakePHP: the rapid development php framework';
?>



<header>
    <div class="header-image">
        <br>
        <?php /*$this->Html->image('http://cakephp.org/img/cake-logo.png')*/ ?> 
        <?= $this->Html->image('slogoblanco.svg', ["width"=>""]) ?>
        
        <h1>Escuela Juan Soñador</h1>
        <h3>Bienvenido </h3>
        
        <?php 
        
        if ($auth) {
            echo $auth['username'];
        }
        
        ?>
        
    </div>
</header>
    
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>   

</div>   
            <?php Debugger::checkSecurityKeys(); ?>

<div class="row">
    <div class="columns large-12">
            
         <div class="col-lg-6">
             
             <?= $this->element('alertas'); ?>
             
         </div>
            
            
        <div class="col-lg-6">
            <h3 class="">More about Cake</h3>
            <p>
                CakePHP is a rapid development framework for PHP which uses commonly known design patterns like Front Controller and MVC.
            </p>
            <p>
                Our primary goal is to provide a structured framework that enables PHP users at all levels to rapidly develop robust web applications, without any loss to flexibility.
            </p>
            <ul>
                <li><a href="http://cakefoundation.org/">Cake Software Foundation</a>
                <ul><li>Promoting development related to CakePHP</li></ul></li>
                <li><a href="http://www.cakephp.org">CakePHP</a>
                <ul><li>The Rapid Development Framework</li></ul></li>
                <li><a href="http://book.cakephp.org/3.0/en/">CakePHP Documentation</a>
                <ul><li>Your Rapid Development Cookbook</li></ul></li>
                <li><a href="http://api.cakephp.org/3.0/">CakePHP API</a>
                <ul><li>Quick Reference</li></ul></li>
                <li><a href="http://bakery.cakephp.org">The Bakery</a>
                <ul><li>Everything CakePHP</li></ul></li>
                <li><a href="http://plugins.cakephp.org">CakePHP plugins repo</a>
                <ul><li>A comprehensive list of all CakePHP plugins created by the community</li></ul></li>
                <li><a href="https://groups.google.com/group/cake-php">CakePHP Google Group</a>
                <ul><li>Community mailing list</li></ul></li>
                <li><a href="irc://irc.freenode.net/cakephp">irc.freenode.net #cakephp</a>
                <ul><li>Live chat about CakePHP</li></ul></li>
                <li><a href="https://github.com/cakephp/">CakePHP Code</a>
                <ul><li>For the Development of CakePHP Git repository, Downloads</li></ul></li>
                <li><a href="https://github.com/cakephp/cakephp/issues">CakePHP Issues</a>
                <ul><li>CakePHP issues and pull requests</li></ul></li>
                <li><a href="http://training.cakephp.org/">CakePHP Training</a>
                <ul><li>Learn to use the CakePHP framework</li></ul></li>
                <li><a href="http://certification.cakephp.org/">CakePHP Certification</a>
                <ul><li>Become a certified CakePHP developer</li></ul></li>
            </ul>
        </div>
    </div>
</div>

    <footer>
    </footer>


