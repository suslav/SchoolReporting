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
    <?php $v22108181761iterated = false; ?><?php $v22108181761iterator = $page->items; $v22108181761incr = 0; $v22108181761loop = new stdClass(); $v22108181761loop->self = &$v22108181761loop; $v22108181761loop->length = count($v22108181761iterator); $v22108181761loop->index = 1; $v22108181761loop->index0 = 1; $v22108181761loop->revindex = $v22108181761loop->length; $v22108181761loop->revindex0 = $v22108181761loop->length - 1; ?><?php foreach ($v22108181761iterator as $account) { ?><?php $v22108181761loop->first = ($v22108181761incr == 0); $v22108181761loop->index = $v22108181761incr + 1; $v22108181761loop->index0 = $v22108181761incr; $v22108181761loop->revindex = $v22108181761loop->length - $v22108181761incr; $v22108181761loop->revindex0 = $v22108181761loop->length - ($v22108181761incr + 1); $v22108181761loop->last = ($v22108181761incr == ($v22108181761loop->length - 1)); ?><?php $v22108181761iterated = true; ?>
        <?php if ($v22108181761loop->first) { ?>
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
        <?php if ($v22108181761loop->last) { ?>
        </tbody>
       <tbody>
            <tr>
                <td colspan="7" align="right">
                    <div class="btn-group">
                        <?= $this->tag->linkTo(['Accounts/GetUserAccounts', '<i class="icon-fast-backward"></i> First', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['Accounts/GetUserAccounts?page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['Accounts/GetUserAccounts?page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['Accounts/GetUserAccounts?page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn']) ?>
                        <span class="help-inline"><?= $page->current ?> of <?= $page->total_pages ?></span>
                    </div>
                </td>
            </tr>
        </tbody>  
    </table>
    </div>
        <?php } ?>
    <?php $v22108181761incr++; } if (!$v22108181761iterated) { ?>
        No Accounts are recorded
    <?php } ?>

    </div>
    </div>

</div>
