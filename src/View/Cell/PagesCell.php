<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Pages cell
 */
class PagesCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        
       
    }
    
    public function ultimosAvisos()
    {
        
        $this->loadModel('Avisos');
        $avisos = $this->Avisos->find('all', [
            'limit' => 10,
            'order' => 'Avisos.created DESC'
        ]);
       
        $this->loadModel('ImportanciaAvisos');
        $importancia_avisos = $this->Avisos->find('all');
       
        $this->set('avisos', $avisos);

    }

}
