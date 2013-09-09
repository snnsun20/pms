<form  action="<?php echo site_url('home/add'); ?>"  name="addp"  onSubmit="return check();"   method="post" >
<table  width="300"  height="300" align="center" >
<tr><td></td><td>Add Info</td></tr>
<tr><td>Date assigned</td><td><input type="text"  name="da"  id="da" /></td></tr>
<tr><td>Deadline Date</td><td><input type="text"  name="dd"  id="dd"  /></td></tr>
<tr><td>Project Name</td><td><input type="text"  name="pn"  id="pn"  /></td></tr>
<tr><td>Description</td><td><input type="text"  name="desc"  id="desc"  /></td></tr>
<tr><td>Status</td><td><select  name="sts"  >
<option value="new">New</option>
<option value="onprogress">On-Progress</option>
<option value="pending">Pending </option>
<option value="closed">Closed</option>
</select></td></tr>
<tr><td>Comments</td><td><textarea name="comments"></textarea></td></tr>
<tr><td>Tags</td><td><input type="text"  name="tag"  id="tag"  ></td></tr>
<tr><td>Keywords</td><td><input type="text"  name="keyword"  id="keyword"  ></td></tr>
<tr><td>Person name(assigned)</td><td><input type="text"  name="pna"  id="pna"  ></td></tr>
<tr><td>Person name(updated)</td><td><input type="text"  name="pnu"  id="pnu"  ></td></tr>
<tr><td></td><td><input type="submit"  name="do_save_info"  id="do-add-info"   value="Submit"/></td></tr>
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