<?php
require('../config/autoload.php');
$dao = new DataAccess();
//session_start();

// Dummy session for testing
$_SESSION['email'] = "sample@gmail.com";
$_SESSION['selected_pid']= $_GET['id']; 
// Fetch items
$q = "SELECT * FROM additional WHERE status = 1";
$info = $dao->query($q);
if (!$info) {
    die("Error fetching data.");
}

include("nav1.php");
?>

<div class="container mt-5">
    <h3 class="text-center mb-4"><u>Additionals</u></h3>

    <form method="post" action="process_selection.php?id=<?= $_GET['id'] ?>">
        <div class="row">
            <?php foreach ($info as $item): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm p-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="additionals[]" value="<?= $item['aid'] ?>" id="add_<?= $item['aid'] ?>">
                            <label class="form-check-label" for="add_<?= $item['aid'] ?>">
                                <h5 class="card-title mb-1"><?= $item["aname"] ?></h5>
                            </label>
                        </div>
                        <div class="text-muted small">Price: ₹<?= $item['aprice'] ?? 'N/A' ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-3">
           <button type="submit" name="action" value="continue" class="btn btn-success">Continue</button>
    <button type="submit" name="action" value="skip" class="btn btn-warning">Skip</button>
        </div>
    </form>
</div>

<?php include("footer1.php"); ?>
