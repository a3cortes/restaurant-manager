<?php echo $this->element("common/header") ?>

<div class="row">
    <div class="twelve columns">
        <?php echo $this->element("common/nav") ?>
    </div>
</div>
<div class="row">
    <div class="twelve columns">
        <?php echo $this->fetch("content") ?>
    </div>
</div>
<div class="row">
    <div class="twelve columns">
        <?php echo $this->element("common/footer") ?>
    </div>
</div>

<?php echo $this->element("common/ganalytic") ?>

</body>
</html>


