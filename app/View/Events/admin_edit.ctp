<?php
$this->Html->addCrumb('Events', '/admin/Events');
$this->Html->addCrumb('Edit event', '#');
?>
<h5>Edit reservation event</h5>
<?php echo $this->Form
        ->create('', array('class' => "custom", 'type' => 'file'))
?>
<div class="row">
    <?php
    echo $this->Form
            ->hidden("id", array("value" => $data['Event']['id']))
    ?>
    <div class="six columns">
        <?php
        echo $this->Form
                ->input("name", array("label" => false, "value" => $data['Event']['name']))
        ?>
    </div>
    <div class="six columns">
        <?php
        echo $this->Form
                ->input("path", array("type" => "file", "label" => false,
                    "placeholder" => "Event name"))
        ?>
    </div>

</div>

<div class="row">
    <div class="twelve columns">
        <?php
        echo $this->Form
                ->input("details", array("label" => false, "value" => $data['Event']['details']))
        ?>
    </div>

</div>

<div class="row">
    <div class="two columns">
        <?php
        echo $this->Form
                ->input("event_date", array("type" => "text", "label" => "Event Date",
                    "value" => date("d-m-Y", strtotime($data['Event']['event_date']))))
        ?>


    </div>

    <div class="three columns">


        <div class="row">
            <div class="six columns">
                <?php
                echo $this->Form
                        ->input("Event.booking_time_hour", array("selected" => date('H', strtotime($data['Event']['event_date'])), "options" => $hours, "type" => "select", "label" => "Hour"))
                ?>
            </div>

            <div class="six columns">
                <?php
                echo $this->Form
                        ->input("Event.booking_time_min", array("type" => "select", "label" => "Min", "options" => $mins, "selected" => date('i', strtotime($data['Event']['event_date']))))
                ?>
            </div>
        </div>
    </div>
    <div class="one columns">
    </div>
    <div class="three columns">
        <?php
        echo $this->Form
                ->input("booking", array("label" => "Available for booking", "type" => "select",
                    "options" => array(1 => "Yes", 0 => "No"),
                    "selected" => $data['Event']['booking']))
        ?>
    </div>

    <div class="three columns">
        <?php
        echo $this->Form
                ->input("published", array("label" => "Published", "type" => "select",
                    "options" => array(1 => "Publshed",
                        0 => "Unpublished"),
                    "selected" => $data['Event']['published']))
        ?>
    </div>



</div>
<div class="row">
    <div class="twelve columns">
        <?php
        echo $this->Form
                ->submit("Update event", array("class" => "button success small radius"))
        ?>
    </div>
</div>
<?php echo $this->Form->end() ?>
<?php echo $this->element('common/dialog') ?>
<script>
    $(function()
    {

        $( '#EventEventDate').datepicker({
            numberOfMonths: 2,
            dateFormat: 'dd-mm-yy',
            showOn: 'both',
            buttonImageOnly: true,
        });
    });

    function customRange(a)
    {
        var b = new Date();
        var c = new Date(b.getFullYear(), b.getMonth(), b.getDate());
        if (a.id == 'ReservationEventEnd') {
            if ($('#ReservationEventStart').datepicker('getDate') != null) {
                c = $('#ReservationEventEnd').datepicker('getDate');
            }
        }
        return {
            minDate: c
        }
    }
</script>