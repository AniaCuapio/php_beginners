<?php

$query = require 'bootstrap.php';

require 'Task.php';

$tasks = $query->selectAll('todos', 'Task');

//la vista carga cuando los datos ya están disponibles

require 'index.view.php';