<div class="mt-3 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-3">
    <div>
        <label class="<?= esc(filter_label_class()) ?>">Period</label>
        <select name="period" class="<?= esc(filter_input_class()) ?>">
            <option value="1h" <?= ($filters['period'] ?? '24h') === '1h' ? 'selected' : '' ?>>1h</option>
            <option value="24h" <?= ($filters['period'] ?? '24h') === '24h' ? 'selected' : '' ?>>24h</option>
            <option value="7d" <?= ($filters['period'] ?? '') === '7d' ? 'selected' : '' ?>>7d</option>
            <option value="30d" <?= ($filters['period'] ?? '') === '30d' ? 'selected' : '' ?>>30d</option>
        </select>
    </div>
</div>
