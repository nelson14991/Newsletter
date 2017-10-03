<html>
	<head>
	<title>Datatables</title>
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
 
    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
 
    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>	
	</head>
	<body>
	<div class="container">
		<table id="subscribers" class="display nowrap" cellspacing="0" width="100%">
		<thead>
			<tr>
            <th>Subscriber Id</th>
			<th>Subscriber Name</th>
			<th>Subscriber Email</th>
			<th>Subscription Date</th>		
			</tr>
		</thead>
		</table>
		</div>
	</body>
</html>

<script>
$( document ).ready(function() {
$('#subscribers').dataTable({
                 "bProcessing": true,
                 "aaSorting": [[3, "desc"]],
                 "sAjaxSource": "SubscriberData.php",
				 "aoColumns": [
						{ mData: 'subscriber_id' } ,
                        { mData: 'subscriber_name' },
                        { mData: 'subscriber_email' },
                        { mData: 'subscribtion_date' }                        
                ]
        });   
});
</script>