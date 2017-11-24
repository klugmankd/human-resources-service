<?
foreach ($results as $result) {
    ?><div class="result-item">
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
?>