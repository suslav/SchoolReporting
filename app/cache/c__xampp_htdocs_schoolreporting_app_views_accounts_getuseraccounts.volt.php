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
<h2>Accounts</h2>
</div>
</div>  
<!-- grid-->

  <div class="row">
    <div class="col-md-12">
    <?php $v564032001iterated = false; ?><?php $v564032001iterator = $page->items; $v564032001incr = 0; $v564032001loop = new stdClass(); $v564032001loop->self = &$v564032001loop; $v564032001loop->length = count($v564032001iterator); $v564032001loop->index = 1; $v564032001loop->index0 = 1; $v564032001loop->revindex = $v564032001loop->length; $v564032001loop->revindex0 = $v564032001loop->length - 1; ?><?php foreach ($v564032001iterator as $account) { ?><?php $v564032001loop->first = ($v564032001incr == 0); $v564032001loop->index = $v564032001incr + 1; $v564032001loop->index0 = $v564032001incr; $v564032001loop->revindex = $v564032001loop->length - $v564032001incr; $v564032001loop->revindex0 = $v564032001loop->length - ($v564032001incr + 1); $v564032001loop->last = ($v564032001incr == ($v564032001loop->length - 1)); ?><?php $v564032001iterated = true; ?>
        <?php if ($v564032001loop->first) { ?>
        <div class="table-responsive">
    <table class="table table-bordered table-striped" align="center">
        <thead>
            <tr>
                <th>RowID</th>
                <th>Date</th>
                 <th>Billno</th>
                  <th>Particulars</th>
                   <th>Debit</th>
                    <th>Credit</th>
                     <th>Uptdate</th>                      
               
            </tr>
        </thead>
        <tbody>
        <?php } ?>
            <tr>
                <td><?= $account->RowID ?></td>
                <td><?= $account->Date ?></td> 
                 <td><?= $account->Billno ?></td> 
                  <td><?= $account->Particulars ?></td> 
                   <td><?= $account->Debit ?></td> 
                    <td><?= $account->Credit ?></td> 
                     <td><?= $account->Uptdate ?></td> 
                
            </tr>
        <?php if ($v564032001loop->last) { ?>
        </tbody>
       <tbody>
            <tr>
                <td colspan="7" align="right">
                    <div class="btn-group">
                        <?= $this->tag->linkTo(['accounts/getuseraccounts', '<i class="icon-fast-backward"></i> First', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['accounts/getuseraccounts?page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['accounts/getuseraccounts?page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['accounts/getuseraccounts?page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn']) ?>
                        <span class="help-inline"><?= $page->current ?> of <?= $page->total_pages ?></span>
                    </div>
                </td>
            </tr>
        </tbody>  
    </table>
    </div>
        <?php } ?>
    <?php $v564032001incr++; } if (!$v564032001iterated) { ?>
        No Accounts are recorded
    <?php } ?>

    </div>
    </div>

</div>
