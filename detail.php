<?php include 'header_detail.php';?>
<div class="detail">
  <table class = "table table-responsive table-bordered alert-warning">
			<thead>
				<tr>
					<th>Name</th>
					<th>email</th>
					<th>Phone</th>
          <th>Comments</th>
        </tr>
			</thead>
			<tbody>
				<tr ng-repeat = "member in members">
      
        <td>{{member.name}}</td>
					<td>{{member.email}}</td>
          <td>{{member.phone}}</td>
					<td>{{member.comments}}</td>

        <!-- <td><center><button type = "button" ng-click = "updateBtn(member.mem_id, member.firstname, member.lastname)"
          class = "btn btn-warning"><span class = "glyphicon glyphicon-edit"></span></button> <button type = "button"
          ng-click = "deleteData(member.mem_id);"
          class = "btn btn-danger"><span class = "glyphicon glyphicon-remove"></span></button></center></td> -->
				</tr>
			</tbody>
		</table>
</div>
<?php include 'footer.php';?>
