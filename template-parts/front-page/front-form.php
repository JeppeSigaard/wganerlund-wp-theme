<section class="front-form">
    <div class="inner">
        <form action="<?php echo admin_url('admin-ajax.php'); ?>" method="post">
            <input type="hidden" name="action" value="front-form-submit">
            <?php wp_nonce_field('wp-form-submit','submit-form'); ?>
            <a class="front-form-expand" href="#">Skal vi kontakte dig?</a>
            <div class="hidden">
                <p>Udfyld formularen herunder. Så kontakter vi dig om serviceaftale, tilbud, sugning af vejbrønde, TV inspektion, skaktrens eller andet: </p>
            </div>
            <div class="hidden">
                <input type="text" name="navn">
                <label for="navn">Dit navn</label>
            </div>
            <div class="hidden">
                <input type="email" name="email">
                <label for="email">Din email</label>
            </div>
            <div class="hidden">
                <input type="text" name="telefon">
                <label for="telefon">Dit telefonnummer</label>
            </div>
            <div class="hidden">
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
            <div class="hidden">
                <textarea rows="4" name="kommentar"></textarea>
                <label for="kommentar">Tilføj kommentar</label>
            </div>
            <div class="hidden right">
                <a class="button blue submit">Send</a>
            </div>
        </form>
    </div>
</section>