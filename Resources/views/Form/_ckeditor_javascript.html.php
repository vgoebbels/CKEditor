<?php if ($autoload) : ?>
    <script type="text/javascript">
        var CKEDITOR_BASEPATH = "<?php echo $view['hillrange_ckeditor']->renderBasePath($base_path); ?>";
    </script>
    <script type="text/javascript" src="<?php echo $view['hillrange_ckeditor']->renderJsPath($js_path); ?>"></script>
    <?php if ($jquery) : ?>
        <script type="text/javascript" src="<?php echo $view['hillrange_ckeditor']->renderJsPath($jquery_path); ?>"></script>
    <?php endif; ?>
<?php endif; ?>
<script type="text/javascript">
    <?php if ($jquery) : ?>
        $(function () {
    <?php endif; ?>

    <?php if ($require_js) : ?>
        require(['ckeditor'], function() {
    <?php endif; ?>

    <?php echo $view['hillrange_ckeditor']->renderDestroy($id); ?>

    <?php foreach ($plugins as $pluginName => $plugin): ?>
        <?php echo $view['hillrange_ckeditor']->renderPlugin($pluginName, $plugin); ?>
    <?php endforeach; ?>

    <?php foreach ($styles as $styleName => $style): ?>
        <?php echo $view['hillrange_ckeditor']->renderStylesSet($styleName, $style); ?>
    <?php endforeach; ?>

    <?php foreach ($templates as $templateName => $template): ?>
        <?php echo $view['hillrange_ckeditor']->renderTemplate($templateName, $template); ?>
    <?php endforeach; ?>

    <?php $view['slots']->output('ckeditor_widget_extra', '') ?>

    <?php echo $view['hillrange_ckeditor']->renderWidget(
        $id,
        $config,
        [
            'auto_inline'  => $auto_inline,
            'inline'       => $inline,
            'input_sync'   => $input_sync,
            'filebrowsers' => $filebrowsers,
        ]
    ); ?>

    <?php if ($require_js) : ?>
        });
    <?php endif; ?>

    <?php if ($jquery) : ?>
        });
    <?php endif; ?>
</script>
