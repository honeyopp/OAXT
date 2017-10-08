<?php if (!defined('THINK_PATH')) exit();?><tr id="<?php echo ($data[id]); ?>">
	<td class="text-center"><?php echo ($data[number]); ?></td>
	<td class="text-center"><?php echo ($data[name]); ?></td>
	<td class="text-center"><?php echo ($data[password]); ?></td>
	<td class="text-center"><?php echo ($data[sex]); ?></td>
	<td class="text-center"><?php echo ($data[positionid]); ?> </td>
	<td class="text-center"><?php echo ($data[departmentid]); ?></td>
	<td class="text-center"><?php echo ($data[salary]); ?></td>
	<td class="text-center"><?php echo ($data[telphone]); ?></td>
	<td class="text-center"><?php echo ($data[enterdate]); ?></td>
	<td class="text-center"><a href="javaacript:;" class="ua" data-toggle="modal" data-target="#myModal" onclick="update(<?php echo ($data[id]); ?>)"><span class="glyphicon glyphicon-pencil"></span>修改</a><a href="" class="da"><span class="glyphicon glyphicon-trash"></span>删除</a></td>
</tr>