<select name="establishedYear[]">
    <?php
    for($i=date('Y');$i>=1950;$i--){
        ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php
    }
    ?>
</select>
