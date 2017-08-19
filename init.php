<?php 

	new Modules( require __CORE__ . ModuleConfig );
	new RBconnect( require __ROOT__ . Config );
	new Url( require __ROOT__ . Config );
	new Router( require __ROUTES__ . Routing , require __ROOT__ . Config );