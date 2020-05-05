<script>
	function delbook(id)
	{
		if(confirm("You want to delete this Book ?"))
		{
		window.location.href='delete_book.php?id='+id;
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Book Details</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_books" class="btn btn-primary">Add New Books</a></td>
	</tr>
	<tr style="height:40">
	<!--	<th>Sr No</th>__>
		<!-- <th>Image</th> -->
		<th>Book ID</th>
		<th>Book Name</th>
		<th>Genre</th>
		<th>Author</th>
		<th>Price</th>
		<th>Details</th>
		<!--<th>Update</th> -->
		<th>Delete</th>
	</tr>
<?php
$i=1;
$sql=mysqli_query($con,"select * from book");
while($res=mysqli_fetch_assoc($sql))
{
?>
<tr>
		<td><?php echo $res['Book_id'];?></td>
	<!--	<td><img src="<?php echo $path;?>" width="50" height="50"/></td> -->

    <td><?php echo $res['name']; ?></td>
		<td><?php echo $res['genre']; ?></td>
		<td><?php echo $res['author']; ?></td>
		<td><?php echo $res['price']; ?></td>
		<td><?php echo $res['description']; ?></td>

	<!--	<td><a href="dashboard.php?option=update_book&id=<?php echo $id; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td> -->


		<td><a href="#" onclick="delbook('<?php echo $res['Book_id']; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>
<?php
}
?>

</table>
