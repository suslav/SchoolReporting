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
<h2>Events</h2>
</div>
</div>   
  <div class="row">
    <div class="col-md-12">
    {% for event in page.items %}
        {% if loop.first %}
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
        {% endif %}
            <tr>
                <td>{{ event.EventID }}</td>
                <td>{{ event.Date }}</td> 
                 <td>{{ event.Particulars }}</td> 
                  <td>{{ event.Representative }}</td> 
                   <td>{{ event.Remarks }}</td> 
                    <td>{{ event.Status }}</td> 
            </tr>
        {% if loop.last %}
        </tbody>
       <tbody>
            <tr>
                <td colspan="6" align="right">
                    <div class="btn-group">
                        {{ link_to("Events/GetUserEvents", '<i class="icon-fast-backward"></i> First', "class": "btn") }}
                        {{ link_to("Events/GetUserEvents?page=" ~ page.before, '<i class="icon-step-backward"></i> Previous', "class": "btn") }}
                        {{ link_to("Events/GetUserEvents?page=" ~ page.next, '<i class="icon-step-forward"></i> Next', "class": "btn") }}
                        {{ link_to("Events/GetUserEvents?page=" ~ page.last, '<i class="icon-fast-forward"></i> Last', "class": "btn") }}
                        <span class="help-inline">{{ page.current }} of {{ page.total_pages }}</span>
                    </div>
                </td>
            </tr>
        </tbody>  
    </table>
    </div>
        {% endif %}
    {% else %}
        No Events are recorded
    {% endfor %}
    </div>
    </div>
</div>
