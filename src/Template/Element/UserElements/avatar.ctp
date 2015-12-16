<?php $avatar=$user['foto'];?>
<?php if($avatar!=''):?>
     <img class="img-circle avatar" src="/img/user_fotos/<?= $avatar; ?>" width="100%"></img>
<?php else: ?>
     <i class="fa fa-user fa-5x"></i>
<?php endif;?>