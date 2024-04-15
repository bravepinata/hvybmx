<h2>Step 3: Databases</h2>

<p>
    &emsp;Two databases have been created.
</p>

<ul>

<?  foreach ($dbs as $db) : ?>

    <li><?= $db['name'] ?></li>

<?  endforeach; ?>

</ul>

<hr/>
