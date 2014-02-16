<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegisterView
 *
 * @author Mejia
 */
?>
<form id="form1" name="form1" method="post" action="../Controlador/RegisterController.php">
    <h2 align="center">Create a new user </h2>
    <table width="244" border="0" align="center">
        <tr>
            <td width="74">User Name</td>
            <td width="160"><label for="userName"></label>
                <input type="text" name="userName" id="userName" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><label for="password"></label>
                <input type="password" name="password" id="password" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" id="submit" value="Create" /></td>
        </tr>
    </table>
</form>


        <?php
    


