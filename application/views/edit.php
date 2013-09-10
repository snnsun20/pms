<form  action="<?php echo site_url('home/edit/'.$data->id); ?>"  name="addp"  onSubmit="return check();"   method="post" >
<table  width="300"  height="300" align="center" >
<tr><td></td><td>Add Info</td></tr>
<tr><td>Date assigned</td><td><input type="text"  name="da"  id="da"  value="<?php echo  $data->date_assign; ?>" /></td></tr>
<tr><td>Deadline Date</td><td><input type="text"  name="dd"  id="dd"   value="<?php echo  $data->date_deadline; ?>"  /></td></tr>
<tr><td>Project Name</td><td><input type="text"  name="pn"  id="pn"  value="<?php echo  $data->project_name; ?>" /></td></tr>
<tr><td>Description</td><td><input type="text"  name="desc"  id="desc"  value="<?php echo  $data->desc; ?>" /> </td></tr>
<tr><td>Status</td><td><select  name="sts"  >
<option value="new"  <?php if($data->status=="new"){?> selected <?php } ?> >New</option>
<option value="onprogress"  <?php if($data->status=="onprogress"){?> selected <?php } ?>>On-Progress</option>
<option value="pending"   <?php if($data->status=="pending"){?> selected <?php } ?>>Pending </option>
<option value="closed"   <?php if($data->status=="closed"){?> selected <?php } ?>>Closed</option>
</select></td></tr>
<tr><td>Comments</td><td><textarea name="comments"><?php echo  $data->comment; ?></textarea></td></tr>
<tr><td>Tags</td><td><input type="text"  name="tag"  id="tag" value="<?php echo  $data->tag; ?>" ></td></tr>
<tr><td>Keywords</td><td><input type="text"  name="keyword"  id="keyword"  value="<?php echo  $data->keyword; ?>"  ></td></tr>
<tr><td>Person name(assigned)</td><td><input type="text"  name="pna"  id="pna"  value="<?php echo  $data->person_name_assign; ?>" ></td></tr>
<tr><td>Person name(updated)</td><td><input type="text"  name="pnu"  id="pnu" value="<?php echo  $data->person_name_update; ?>" ></td></tr>
<tr><td>Comments</td><td><input type="text"  name="comments"  id="comments" value="<?php echo  $data->comments; ?>" ></td></tr>
<tr><td>Status</td><td><input type="text"  name="status"  id="status" value="<?php echo  $data->status; ?>" ></td></tr>
<tr><td></td><td><input type="submit"  name="do_edit_info"  id="do_edit_info"   value="Submit"/></td></tr>
</table>
</form>
<script>
function check(){

var err = true;
$("input,textarea,select").each(function(){
	 if($(this).val()=='') {
		$(this).css('border','1px solid red');
		err = false;	
	 }
});
return err;
}
 $(function() {
    $( "#da" ).datepicker({
      defaultDate: "0",
      changeMonth: true,
	  dateFormat : 'yy-mm-dd',
    });
    $( "#dd" ).datepicker({
      defaultDate: "0",
      changeMonth: true,
	  dateFormat : 'yy-mm-dd',
    });
  });
</script>
