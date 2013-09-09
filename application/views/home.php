<div id="menu">
 <div id="sub-menu"><a  href="<?php echo site_url('home/add'); ?>"  style="color:black;text-decoration:none;">Add</a></div>
</div>
<div style="height:330px;">
<table align="center"   width="900">
<tr  style="background-color:#999999"><td>Porject name</td><td>Date assign</td><td>Date Deadline</td><td>Status</td><td>Comment</td><td>Action</td></tr>
<?php if($data) { foreach($data as $dt) {  ?>
<tr><td><?php echo $dt->project_name; ?></td><td><?php echo $dt->date_assign; ?></td><td><?php echo $dt->date_deadline; ?></td><td><?php echo $dt->status; ?></td><td><?php echo $dt->comment; ?></td><td><a href="<?php echo site_url('home/edit/'.$dt->id); ?>" >edit</a>&nbsp;&nbsp;<a href="<?php echo site_url('home/view/'.$dt->id); ?>" >view detail</a></td></tr>
<?php  } }?>
</table>
</div>