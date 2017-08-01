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
    <?php $v27892765221iterated = false; ?><?php $v27892765221iterator = $page->items; $v27892765221incr = 0; $v27892765221loop = new stdClass(); $v27892765221loop->self = &$v27892765221loop; $v27892765221loop->length = count($v27892765221iterator); $v27892765221loop->index = 1; $v27892765221loop->index0 = 1; $v27892765221loop->revindex = $v27892765221loop->length; $v27892765221loop->revindex0 = $v27892765221loop->length - 1; ?><?php foreach ($v27892765221iterator as $event) { ?><?php $v27892765221loop->first = ($v27892765221incr == 0); $v27892765221loop->index = $v27892765221incr + 1; $v27892765221loop->index0 = $v27892765221incr; $v27892765221loop->revindex = $v27892765221loop->length - $v27892765221incr; $v27892765221loop->revindex0 = $v27892765221loop->length - ($v27892765221incr + 1); $v27892765221loop->last = ($v27892765221incr == ($v27892765221loop->length - 1)); ?><?php $v27892765221iterated = true; ?>
        <?php if ($v27892765221loop->first) { ?>
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
        <?php if ($v27892765221loop->last) { ?>
        </tbody>
       <tbody>
            <tr>
                <td colspan="6" align="right">
                    <div class="btn-group">
                        <?= $this->tag->linkTo(['Events/GetUserEvents', '<i class="icon-fast-backward"></i> First', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['Events/GetUserEvents?page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['Events/GetUserEvents?page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['Events/GetUserEvents?page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn']) ?>
                        <span class="help-inline"><?= $page->current ?> of <?= $page->total_pages ?></span>
                    </div>
                </td>
            </tr>
        </tbody>  
    </table>
    </div>
        <?php } ?>
    <?php $v27892765221incr++; } if (!$v27892765221iterated) { ?>
        No Events are recorded
    <?php } ?>
    </div>
    </div>
</div>
