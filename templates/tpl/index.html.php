<?php $view->extend('base.html.php'); ?>

<?php $view['slots']->set('title', 'Hello TplController!'); ?>

<?php $view['slots']->start('content'); ?>
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class="example-wrapper">
    <h1>Hello !</h1>

    Objects:<br />
    <ul>
    <?php foreach($objects as $object): ?>
        <li>
            <?php echo $object; ?> - <?php echo $object->getEmail(); ?>
            <ul>
            <?php foreach($object->getTags() as $tag): ?>
                <li><?php echo $tag; ?>
            <?php endforeach; ?>
            </ul>
        </li>
    <?php endforeach; ?>
    </ul>
</div>
<?php $view['slots']->stop(); ?>
