<?php include "layout/header.php"; ?>
<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($connection, $sql);

$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<h2>Past Feedbacks</h2>
<?php if (empty($feedback)) : ?>
<h3 class="lead mt3">There is no feedback!</h3>
<?php endif; ?>

<?php foreach ($feedback as $item) : ?>
<div class="card my-3 w-100">
    <div class="card-body text-center">
        <?php echo $item['body']; ?>
        <div class="text-secondary mt-2">
            By <?php echo $item['name']; ?> on
            <?php echo $item['date']; ?>
        </div>
    </div>
</div>

<?php endforeach; ?>

<?php include "layout/footer.php"; ?>