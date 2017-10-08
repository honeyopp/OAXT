<?php if (!defined('THINK_PATH')) exit();?><tr>
	<td>id号：<input type="text" value="<?php echo ($data[id]); ?>" class="text-center"></td>
	<td>工号：<input type="text" value="<?php echo ($data[number]); ?>" class="text-center"></td>
	<td>姓名：<input type="text" value="<?php echo ($data[name]); ?>" class="text-center"></td>
	
</tr>
<tr>	
	<td>性别：<input type="text" value="<?php echo ($data[sex]); ?>" class="text-center"></td>
	<td>职位：<input type="text" value="<?php echo ($data[positionid]); ?>" class="text-center"></td>
	<td>部门：<input type="text" value="<?php echo ($data[departmentid]); ?>" class="text-center"></td>
</tr>
<tr>
	<td>密码：<input type="text" value="<?php echo ($data[password]); ?>" class="text-center"></td>	
	<td>工资：<input type="text" value="<?php echo ($data[salary]); ?>" class="text-center"></td>
	<td>电话：<input type="text" value="<?php echo ($data[telphone]); ?>" class="text-center"></td>
</tr>
<tr>
	<td>入职时间：<input type="text" value="<?php echo ($data[enterdate]); ?>" class="text-center"></td>
</tr>