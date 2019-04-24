<div id="surveyElement">
</div>
<form style="display: none" action="<?php echo site_url("questions/complete")?>" method="POST" id="form">
    <input type="text" id="surveyResult" name="surveyResult" />
</form>
<script> var result = <?php echo $result ? $result : "'';"; ?> </script>
<script src="<?php echo base_url("assets/js/survey/survey.js"); ?>"></script>