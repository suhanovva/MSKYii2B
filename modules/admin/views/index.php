<div class="admin-default-index container">
	$this->title = 'Админка';
	$this->params['breadcrumbs'][] = $this->title;
	
    <h1><?= $this->title ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>
