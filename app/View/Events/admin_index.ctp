<?php
$this->Html->addCrumb('Events', '#');
?>

<div class="row">
    <div class="twelve columns">
        <a href="/admin/Events/add" class="button radius success small">Add a new event</a>
    </div>
</div>
<br>
<div class="row">
    <div class="twelve columns">


        <h5>Current events</h5>
        <table class="twelve">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Reservations</th>
                    <th>Published</th>
                    <th>&nbsp;</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($events as $re)
                { ?>
                    <tr>
                        <td>	<a href="/admin/Events/edit/<?php echo $re['Event']['id'] ?>"><?php echo $re['Event']['name'] ?> </a></td>
                        <td><?php echo $re['Event']['reservation_count'] ?></td>
                        <td>				<?php if ($re['Event']['published'])
                    { ?>
                                <span class="confirmed general foundicon-checkmark"></span>
                            <?php } else
                            { ?>
                                <span class="unconfirmed general foundicon-error"></span>
                    <?php } ?></td>
                        <td><a href="#" data="<?php echo $re['Event']['id'] ?>" class="button alert small radius eventDelete">Delete</a></td>
                    </tr>
<?php } ?>
            </tbody>
        </table>

    </div>
</div>




