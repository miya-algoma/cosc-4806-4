<?php require_once 'app/views/templates/header.php'; ?>

<style>
  body {
    font-family: 'Segoe UI', 'Helvetica Neue', sans-serif;
  }
</style>

<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>
                <p class="lead"><?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p><a href="/reminders/create">Create a new reminder</a></p>
            <p><a href="/logout">Click here to logout</a></p>
        </div>
    </div>
</div>

<?php require_once 'app/views/templates/footer.php'; ?>
