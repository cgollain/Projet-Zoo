<?php
        @include("header.php");
?>
    <center>
    <h1>Recherche Animal</h1>

    <section class="activities">
    <ul>
	<li>
    <form method="POST" ACTION="recherche_traitement.php">
    <table border=1 width="20%">
        <tr>
            <td colspan="2"> Identifiant :<INPUT TYPE="text" NAME="Num" VALUE=""> </td>
        </tr>
    
        <tr>
            <td> <input type="reset" value="Annuler"></td>
            <td> <input type="submit" value="Valider"></td>
        </tr>
    </table>
    
    </form>
</section>
