<ul style="list-style: none">
    <li><label><input type="checkbox" id="select_all"/> Selecct All</label></li>
  	<li><label><input class="checkbox" type="checkbox" name="check[]"> This is Item 1</label></li>
    <li><label><input class="checkbox" type="checkbox" name="check[]"> This is Item 2</label></li>
    <li><label><input class="checkbox" type="checkbox" name="check[]"> This is Item 3</label></li>
    <li><label><input class="checkbox" type="checkbox" name="check[]"> This is Item 4</label></li>
    <li><label><input class="checkbox" type="checkbox" name="check[]"> This is Item 5</label></li>
    <li><label><input class="checkbox" type="checkbox" name="check[]"> This is Item 6</label></li>
</ul>
<script src="bootstrap/js/jquery-1.10.2.min.js"></script>
<script language='javascript'>
  $("#select_all").change(function(){  //"select all" change 
    var status = this.checked; // "select all" checked status
    $('.checkbox').each(function(){ //iterate all listed checkbox items
        this.checked = status; //change ".checkbox" checked status
    });
});

$('.checkbox').change(function(){ //".checkbox" change 
    //uncheck "select all", if one of the listed checkbox item is unchecked
    if(this.checked == false){ //if this item is unchecked
        $("#select_all")[0].checked = false; //change "select all" checked status to false
    }
    //check "select all" if all checkbox items are checked
    if ($('.checkbox:checked').length == $('.checkbox').length ){ 
        $("#select_all")[0].checked = true; //change "select all" checked status to true
    }
});
</script>
  