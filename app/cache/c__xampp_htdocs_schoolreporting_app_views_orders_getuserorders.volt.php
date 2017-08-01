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
    <?php $v39965600301iterated = false; ?><?php $v39965600301iterator = $page->items; $v39965600301incr = 0; $v39965600301loop = new stdClass(); $v39965600301loop->self = &$v39965600301loop; $v39965600301loop->length = count($v39965600301iterator); $v39965600301loop->index = 1; $v39965600301loop->index0 = 1; $v39965600301loop->revindex = $v39965600301loop->length; $v39965600301loop->revindex0 = $v39965600301loop->length - 1; ?><?php foreach ($v39965600301iterator as $order) { ?><?php $v39965600301loop->first = ($v39965600301incr == 0); $v39965600301loop->index = $v39965600301incr + 1; $v39965600301loop->index0 = $v39965600301incr; $v39965600301loop->revindex = $v39965600301loop->length - $v39965600301incr; $v39965600301loop->revindex0 = $v39965600301loop->length - ($v39965600301incr + 1); $v39965600301loop->last = ($v39965600301incr == ($v39965600301loop->length - 1)); ?><?php $v39965600301iterated = true; ?>
        <?php if ($v39965600301loop->first) { ?>
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
        <?php if ($v39965600301loop->last) { ?>
        </tbody>
       <tbody>
            <tr>
                <td colspan="7" align="right">
                    <div class="btn-group">
                        <?= $this->tag->linkTo(['Orders/GetUserOrders', '<i class="icon-fast-backward"></i> First', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['Orders/GetUserOrders?page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['Orders/GetUserOrders?page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn']) ?>
                        <?= $this->tag->linkTo(['Orders/GetUserOrders?page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn']) ?>
                        <span class="help-inline"><?= $page->current ?> of <?= $page->total_pages ?></span>
                    </div>
                </td>
            </tr>
        </tbody>  
    </table>
    </div>
        <?php } ?>
    <?php $v39965600301incr++; } if (!$v39965600301iterated) { ?>
        No Orders are recorded
    <?php } ?>

    </div>
    </div>

</div>
