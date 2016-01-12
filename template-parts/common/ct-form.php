<form action="<?php echo admin_url('admin-ajax.php'); ?>" method="post">
    <input type="hidden" name="action" value="front-form-submit">
    <?php wp_nonce_field('wp-form-submit','submit-form'); ?>
    <div>
        <p>Udfyld formularen herunder. Så kontakter vi dig om serviceaftale, tilbud, sugning af vejbrønde, TV inspektion, skaktrens eller andet: </p>
    </div>
    <div>
        <input type="text" name="navn">
        <label for="navn">Dit navn</label>
    </div>
    <div>
        <input type="text" name="firma">
        <label for="firma">Evt. firma</label>
    </div>
    <div>
        <input type="email" name="email">
        <label for="email">Din e-mail</label>
    </div>
    <div>
        <input type="text" name="telefon">
        <label for="telefon">Dit telefonnummer</label>
    </div>
    <div>
        <select name="about">
            <option rel="hide"></option>
            <option>Serviceaftale</option>
            <option>Tilbud </option>
            <option>Fedtudskiller</option>
            <option>Sug af vejbrønde</option>
            <option>TV-inspektion</option>   
        </select>
        <label>Din henvendelse drejer sig om</label>
    </div>
    <div>
        <textarea rows="4" name="kommentar"></textarea>
        <label for="kommentar">Tilføj kommentar</label>
    </div>
    <div class="right">
        <a class="button blue submit">Send</a>
    </div>
</form>
    