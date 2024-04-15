<h2>Step 4: DB Connections</h2>

<p>
    &emsp;Create <?= sizeof($dbs) ?> connections to the local databases. Note that each database connects to a
    different port, 3306 and 3307.
</p>

<?  foreach ($dbs as $db) : ?>

    <h3><?= $db['name'] ?> Connection Info</h3>

    <ul>
        <li>Display Name: loc_<?= $db['name'] ?></li>
        <li>Database Name: <?= $db['db'] ?></li>
        <li>Host: <?= $db['host'] ?></li>
        <li>Port: <?= $db['port'] ?></li>
        <li>User: <?= $db['user'] ?></li>
        <li>Password: <?= $db['password'] ?></li>
    </ul>

<?  endforeach; ?>

<hr/>
