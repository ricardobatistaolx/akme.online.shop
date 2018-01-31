<html>
<h2> Events in stream <?php echo $customerId ?></h2>

<?php foreach ($events as $event) { ?>
<pre>
Event type: <?php echo $event['name'] ?>
    Event payload: <?php echo json_encode($event['payload']) ?>
    Event meta data: <?php echo json_encode($event['metadata']) ?>
</pre>
<?php } ?>
</html>
