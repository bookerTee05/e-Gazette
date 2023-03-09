<?php
if (isset($_SESSION['message'])):
?>

<div class="alert">
    <strong>Hey!</strong> <?php  $_SESSION['message'];?>
    <button type="button">close</button>
</div>

<?php
    unset($_SESSION['message']);
    endif;

?>