<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of listarImagenes
 *
 * @author Mejia
 */
class listarImagenes {
    //put your code here
    public function mostarImagenes($archivo) {
      
        ?>

       
  <tr>
      <td><img src="<?php echo($archivo->getRuta());?>" width="292" height="250" /></td>
  </tr>    
    



<?php
         }
     }
    

