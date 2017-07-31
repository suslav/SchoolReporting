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
<h2>Accounts</h2>
</div>
</div>  
<!-- grid-->

  <div class="row">
    <div class="col-md-12">
    {% for account in page.items %}
        {% if loop.first %}
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
               {# <th>Semesters</th>#}
            </tr>
        </thead>
        <tbody>
        {% endif %}
            <tr>
                <td>{{ account.RowID }}</td>
                <td>{{ account.Date }}</td> 
                 <td>{{ account.Billno }}</td> 
                  <td>{{ account.Particulars }}</td> 
                   <td>{{ account.Debit }}</td> 
                    <td>{{ account.Credit }}</td> 
                     <td>{{ account.Uptdate }}</td> 
                {#<td width="15%">{{ link_to("BatchSemesters/GetPublicSemesters/" ~ account.CourseID, '<i class="glyphicon"></i> Semesters', "class": "btn btn-default") }}</td>#}
            </tr>
        {% if loop.last %}
        </tbody>
       <tbody>
            <tr>
                <td colspan="7" align="right">
                    <div class="btn-group">
                        {{ link_to("Accounts/GetUserAccounts", '<i class="icon-fast-backward"></i> First', "class": "btn") }}
                        {{ link_to("Accounts/GetUserAccounts?page=" ~ page.before, '<i class="icon-step-backward"></i> Previous', "class": "btn") }}
                        {{ link_to("Accounts/GetUserAccounts?page=" ~ page.next, '<i class="icon-step-forward"></i> Next', "class": "btn") }}
                        {{ link_to("Accounts/GetUserAccounts?page=" ~ page.last, '<i class="icon-fast-forward"></i> Last', "class": "btn") }}
                        <span class="help-inline">{{ page.current }} of {{ page.total_pages }}</span>
                    </div>
                </td>
            </tr>
        </tbody>  
    </table>
    </div>
        {% endif %}
    {% else %}
        No Accounts are recorded
    {% endfor %}

    </div>
    </div>

</div>
