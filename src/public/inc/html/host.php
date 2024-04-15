<h2>Step 2: Test Entry</h2>

<p>
    &emsp;Test the host entries by clicking the links below.
    This will verify the server paths are correct.
</p>

<ul class="no-bullets">

<?  foreach ($hosts as $idx => $host) : ?>
        <li><a href="http://<?= $host['alias'] ?>/"><?= $host['name']?></a></li>
<?  endforeach; ?>

</ul>

<hr/>
