<div class="container-fluid">
<div class="row">
<div class="col-md-12">
&nbsp;
</div>
</div>
<div class="row">
<div class="col-md-12">
<?= $this->getContent() ?>
</div>
</div>
<div class="row">
<div class="col-md-12">
<h2>Events</h2>
</div>
</div>   
  <div class="row">
    <div class="col-md-12">
    <?php $v12575416101iterated = false; ?><?php $v12575416101iterator = $page->items; $v12575416101incr = 0; $v12575416101loop = new stdClass(); $v12575416101loop->self = &$v12575416101loop; $v12575416101loop->length = count($v12575416101iterator); $v12575416101loop->index = 1; $v12575416101loop->index0 = 1; $v12575416101loop->revindex = $v12575416101loop->length; $v12575416101loop->revindex0 = $v12575416101loop->length - 1; ?><?php foreach ($v12575416101iterator as $event) { ?><?php $v12575416101loop->first = ($v12575416101incr == 0); $v12575416101loop->index = $v12575416101incr + 1; $v12575416101loop->index0 = $v12575416101incr; $v12575416101loop->revindex = $v12575416101loop->length - $v12575416101incr; $v12575416101loop->revindex0 = $v12575416101loop->length - ($v12575416101incr + 1); $v12575416101loop->last = ($v12575416101incr == ($v12575416101loop->length - 1)); ?><?php $v12575416101iterated = true; ?>
        <?php if ($v12575416101loop->first) { ?>
        <div class="table-responsive">
    <table class="table table-bordered table-striped" align="center">
        <thead>
            <tr>
                <th>EventID</th>
                <th>Date</th>
                 <th>Particulars</th>
                  <th>Representative</th>
                   <th>Remarks</th>
                    <th>Status</th>                   
            </tr>
        </thead>
        <tbody>
        <?php } ?>
            <tr>
                <td><?= $event->EventID ?></td>
                <td><?= $event->Date ?></td> 
                 <td><?= $event->Particulars ?></td> 
                  <td><?= $event->Representative ?></td> 
                   <td><?= $event->Remarks ?></td> 
                    <td><?= $event->Status ?></td> 
            </tr>
        <?php if ($v12575416101loop->last) { ?>
        </tbody>
       <tbody>
            <tr>
                <td colspan="6" align="right">
                    <div class="btn-group">
                        <?= $this->tag->linkTo(['events/getuserevents', '<i class="icon-fast-backward"></i> First', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['events/getuserevents?page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['events/getuserevents?page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['events/getuserevents?page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn']) ?>
                        <span class="help-inline"><?= $page->current ?> of <?= $page->total_pages ?></span>
                    </div>
                </td>
            </tr>
        </tbody>  
    </table>
    </div>
        <?php } ?>
    <?php $v12575416101incr++; } if (!$v12575416101iterated) { ?>
        No Events are recorded
    <?php } ?>
    </div>
    </div>
</div>
