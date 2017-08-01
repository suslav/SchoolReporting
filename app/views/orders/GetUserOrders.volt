<div class="container-fluid">
<div class="row">
<div class="col-md-12">
&nbsp;
</div>
</div>
<div class="row">
<div class="col-md-12">
{{ content() }}
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
    {% for order in page.items %}
        {% if loop.first %}
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
        {% endif %}
            <tr>
                <td>{{ order.OrderID }}</td>
                <td>{{ order.ProductName }}</td> 
                 <td>{{ order.OrderedQnty }}</td> 
                  <td>{{ order.DeliveredQnty }}</td> 
                   <td>{{ order.BalanceQuantity }}</td>                     
            </tr>
        {% if loop.last %}
        </tbody>
       <tbody>
            <tr>
                <td colspan="7" align="right">
                    <div class="btn-group">
                        {{ link_to("Orders/GetUserOrders", '<i class="icon-fast-backward"></i> First', "class": "btn") }}
                        {{ link_to("Orders/GetUserOrders?page=" ~ page.before, '<i class="icon-step-backward"></i> Previous', "class": "btn") }}
                        {{ link_to("Orders/GetUserOrders?page=" ~ page.next, '<i class="icon-step-forward"></i> Next', "class": "btn") }}
                        {{ link_to("Orders/GetUserOrders?page=" ~ page.last, '<i class="icon-fast-forward"></i> Last', "class": "btn") }}
                        <span class="help-inline">{{ page.current }} of {{ page.total_pages }}</span>
                    </div>
                </td>
            </tr>
        </tbody>  
    </table>
    </div>
        {% endif %}
    {% else %}
        No Orders are recorded
    {% endfor %}

    </div>
    </div>

</div>
