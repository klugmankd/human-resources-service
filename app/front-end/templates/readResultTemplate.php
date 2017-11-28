<?
foreach ($results as $result) {
    ?><div class="result-item">
        <input type="button" class="del" data-id="<?= $result['id'] ?>" value="Видалити">
        <div class="result-field">
            <div class="result-value"><?= $result['first_name'] ?></div>
        </div>
        <div class="result-field">
            <div class="result-value"><?= $result['last_name'] ?></div>
        </div>
        <div class="result-field">
            <div class="result-value"><?= $result['birthday'] ?></div>
        </div>
        <div class="result-field">
            <div class="result-value"><?= $result['employment_date'] ?></div>
        </div>
    </div><?
}
?><div class="message"></div>