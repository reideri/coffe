<?php $numero_paginas = numero_paginas($dates_config['pages'], $conexion); ?>
<section class="paginacion">
	<ul class="pagination">
		<?php if (pagina_actual() === 1): ?>
			<li class="disabled"><a>&laquo;</a></li>
		<?php else: ?>
			<li><a href="users.php?p=<?php echo pagina_actual() - 1 ?>">&laquo;</a></li>
		<?php endif; ?>

		<?php for($i = 1; $i <= $numero_paginas; $i++): ?>
			<?php if (pagina_actual() === $i): ?>
				<li class="active">
					<a><?php echo $i; ?></a>
				</li>
			<?php else: ?>
				<li><a href="users.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
			<?php endif; ?>

		<?php endfor; ?>

		<?php if(pagina_actual() == $numero_paginas): ?>
			<li class="disabled"><a>&raquo;</a></li>
		<?php else: ?>
			<li><a href="users.php?p=<?php echo pagina_actual() + 1; ?>">&raquo;</a></li>
		<?php endif; ?>
	</ul>
</section>
