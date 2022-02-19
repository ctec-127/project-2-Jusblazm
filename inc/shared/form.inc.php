<?php // Filename: form.inc.php 
?>

<!-- Note the use of sticky fields below -->
<!-- Note the use of the PHP Ternary operator
Scroll down the page
http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary
-->

<?php
// Button label logic
if (basename($_SERVER['PHP_SELF']) == 'create-record.php') {
    $button_label = "Save New Record";
} else if (basename($_SERVER['PHP_SELF']) == 'update-record.php') {
    $button_label = "Save Updated Record";
} else if (basename($_SERVER['PHP_SELF']) == 'advanced-search.php') {
    $button_label = "Search...";
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <label class="col-form-label" for="first">First Name</label>
    <input class="form-control" type="text" id="first" name="first" value="<?= isset($first) ? $first : null ?>">
    <br>
    <label class="col-form-label" for="last">Last Name</label>
    <input class="form-control" type="text" id="last" name="last" value="<?= isset($last) ? $last : null ?>">
    <br>
    <label class="col-form-label" for="id">Student ID </label>
    <input class="form-control" type="number" id="id" name="student_id" value="<?= isset($student_id) ? $student_id : null ?>">
    <br>
    <label class="col-form-label" for="email">Email</label>
    <input class="form-control" type="email" id="email" name="email" value="<?= isset($email) ? $email : null ?>">
    <br>
    <label class="col-form-label" for="phone">Phone</label>
    <input class="form-control" type="text" id="phone" name="phone" value="<?= isset($phone) ? $phone : null ?>">
    <br>
    <!-- sticky dropdown list -->
    <label class="col-form-label" for="degree">Degree</label>
    <select class="form-control" id="degree" name="degree">
        <option value="" <?php if (isset($degree) && ($degree == "")) echo 'selected'; ?>>No Degree</option>
        <option value="CBAS" <?php if (isset($degree) && ($degree == "CBAS")) echo 'selected'; ?>>CBAS - Bachelor of Applied Science in Cybersecurity</option>
        <option value="AAS" <?php if (isset($degree) && ($degree == "AAS")) echo 'selected'; ?>>AAS - Associate in Applied Sciences</option>
        <option value="AAT" <?php if (isset($degree) && ($degree == "AAT")) echo 'selected'; ?>>AAT - Associate in Applied Technology</option>
        <option value="AST" <?php if (isset($degree) && ($degree == "AST")) echo 'selected'; ?>>AST - Associate of Science Transfer</option>
        <option value="AFA" <?php if (isset($degree) && ($degree == "AFA")) echo 'selected'; ?>>AFA - Associate of Fine Arts</option>
    </select>
    <br>
    <label class="col-form-label" for="gpa">GPA</label>
    <input class="form-control" type="number" step="0.01" min="0" max="4" id="gpa" name="gpa" value="<?= isset($gpa) ? $gpa : null ?>">
    <br>
    <!-- sticky radio button -->
    <label class="col-form-label" for="faid">Financial Aid</label>
    <br>
    <input type="radio" id="faidyes" name="faid" value="1" <?php if (isset($faid) && ($faid == "1")) echo 'checked'; ?>>
    <label for="faidyes">Yes</label>
    <br>
    <input type="radio" id="faidno" name="faid" value="0" <?php if (isset($faid) && ($faid == "0")) echo 'checked'; ?>>
    <label for="faidno">No</label>
    <br>
    <br>
    <!-- change cancel to be a button like submit -->
    <a class="btn btn-primary" href="display-records.php">Cancel</a>&nbsp;&nbsp;
    <button class="btn btn-primary" type="submit"><?= $button_label ?></button>
</form>