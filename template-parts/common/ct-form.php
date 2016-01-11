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
        <input type="email" name="email">
        <label for="email">Din email</label>
    </div>
    <div>
        <input type="text" name="telefon">
        <label for="telefon">Dit telefonnummer</label>
    </div>
    <div>
        <textarea rows="4" name="kommentar"></textarea>
        <label for="kommentar">Tilføj kommentar</label>
    </div>
    <div class="right">
        <a class="button blue submit">Send</a>
    </div>
</form>
    