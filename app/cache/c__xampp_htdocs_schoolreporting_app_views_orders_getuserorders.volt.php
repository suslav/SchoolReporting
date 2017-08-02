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
<h2>Orders</h2>
</div>
</div>  
<!-- grid-->

  <div class="row">
    <div class="col-md-12">
    <?php $v24648251181iterated = false; ?><?php $v24648251181iterator = $page->items; $v24648251181incr = 0; $v24648251181loop = new stdClass(); $v24648251181loop->self = &$v24648251181loop; $v24648251181loop->length = count($v24648251181iterator); $v24648251181loop->index = 1; $v24648251181loop->index0 = 1; $v24648251181loop->revindex = $v24648251181loop->length; $v24648251181loop->revindex0 = $v24648251181loop->length - 1; ?><?php foreach ($v24648251181iterator as $order) { ?><?php $v24648251181loop->first = ($v24648251181incr == 0); $v24648251181loop->index = $v24648251181incr + 1; $v24648251181loop->index0 = $v24648251181incr; $v24648251181loop->revindex = $v24648251181loop->length - $v24648251181incr; $v24648251181loop->revindex0 = $v24648251181loop->length - ($v24648251181incr + 1); $v24648251181loop->last = ($v24648251181incr == ($v24648251181loop->length - 1)); ?><?php $v24648251181iterated = true; ?>
        <?php if ($v24648251181loop->first) { ?>
        <div class="table-responsive">
    <table class="table table-bordered table-striped" align="center">
        <thead>
            <tr>
                <th>OrderID</th>
                <th>ProductName</th>
                 <th>OrderedQnty</th>
                  <th>DeliveredQnty</th>
                   <th>BalanceQuantity</th>                                        
            </tr>
        </thead>
        <tbody>
        <?php } ?>
            <tr>
                <td><?= $order->OrderID ?></td>
                <td><?= $order->ProductName ?></td> 
                 <td><?= $order->OrderedQnty ?></td> 
                  <td><?= $order->DeliveredQnty ?></td> 
                   <td><?= $order->BalanceQuantity ?></td>                     
            </tr>
        <?php if ($v24648251181loop->last) { ?>
        </tbody>
       <tbody>
            <tr>
                <td colspan="7" align="right">
                    <div class="btn-group">
                        <?= $this->tag->linkTo(['orders/getuserorders', '<i class="icon-fast-backward"></i> First', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['orders/getuserorders?page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['orders/getuserorders?page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['orders/getuserorders?page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn']) ?>
                        <span class="help-inline"><?= $page->current ?> of <?= $page->total_pages ?></span>
                    </div>
                </td>
            </tr>
        </tbody>  
    </table>
    </div>
        <?php } ?>
    <?php $v24648251181incr++; } if (!$v24648251181iterated) { ?>
        No Orders are recorded
    <?php } ?>

    </div>
    </div>

</div>
