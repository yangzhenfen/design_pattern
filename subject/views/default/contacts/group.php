<div class="contactgrouping">
	<div class="row">
		<label> Grouping: </label>
		<?php $group_label = isset($view['group'])&&is_object($view['group'])?$view['group']->label:''; ?>
		<input name="type[<?php echo $view['counter'];?>][label]" value="<?php echo $group_label;?>" />
	</div>
</div>
<div>
	<?php
		if (isset($view['group']) && $view['group'] instanceof contactgroup) {
			$methods = new contactmethodscollection($view['group']);
			$methods->getwithdata();
			foreach ($methods as $method) {
				echo view::show('contacts/method', array('method'=>$method,'counter'=>$view['counter']));
			}
		}
		echo view::show('contacts/method',array('method'=>null,'counter'=>$view['counter']));
	?>
</div>

<?php
	if (isset($view['type']) && $view['type'] == 'edit') {
		echo ' <a href="#" class="deletecontactgrouping">Delete this group</a> ';
	} else {
		echo ' <a href="#" class="addcontactgrouping">Add Another Grouping</a>';
	}
?>