<?php

$data = [1,2,3];

$filter = new Filter($data);
$advancedFilteredData = new AdvancedFilterDecorator($filter)->applyAdvancedFilter();