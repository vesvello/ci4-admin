<div class="mt-3 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-5 gap-3">
    <div class="xl:col-span-2">
        <label class="<?= esc(filter_label_class()) ?>"><?= lang('App.search') ?></label>
        <input type="text" name="search" value="<?= esc((string) request()->getGet('search')) ?>" placeholder="<?= lang('Users.search_placeholder') ?>"
            class="<?= esc(filter_input_class()) ?>" data-table-debounce="350">
    </div>
    <div>
        <label class="<?= esc(filter_label_class()) ?>"><?= lang('Users.status') ?></label>
        <select name="status" class="<?= esc(filter_input_class()) ?>">
            <option value=""><?= lang('Users.all_statuses') ?></option>
            <?php $status = (string) request()->getGet('status'); ?>
            <option value="active" <?= $status === 'active' ? 'selected' : '' ?>><?= lang('App.yes') ?></option>
            <option value="pending_approval" <?= $status === 'pending_approval' ? 'selected' : '' ?>><?= lang('Users.pending_approval') ?></option>
        </select>
    </div>
    <div>
        <label class="<?= esc(filter_label_class()) ?>"><?= lang('Users.role') ?></label>
        <select name="role" class="<?= esc(filter_input_class()) ?>">
            <option value=""><?= lang('Users.all_roles') ?></option>
            <?php $role = (string) request()->getGet('role'); ?>
            <option value="admin" <?= $role === 'admin' ? 'selected' : '' ?>><?= lang('Users.admin_role') ?></option>
            <option value="superadmin" <?= $role === 'superadmin' ? 'selected' : '' ?>><?= lang('Users.super_admin_role') ?></option>
            <option value="user" <?= $role === 'user' ? 'selected' : '' ?>><?= lang('Users.user_role') ?></option>
        </select>
    </div>
    <?= view('layouts/partials/filter_limit') ?>
</div>
