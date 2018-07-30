<?php
include 'CD.class.php';
include 'CDSearchByBandIterator.class.php';

$queryItem = 'Never Again';

$cds = new CDSearchByBandIterator($queryItem);

print '<h1>Found the Following CDs</h1>';
print '<table border="1"><tr><th>Band</th><th>Title</th><th>Num Tracks</th></tr>';
foreach ($cds->_CDs as $k => $cd) {
	print '<tr><td>'.$cd->band.'</td><td>'.$cd->title.'</td><td>'.count($cd->trackList).'</td></tr>';
}
print '</table>';
?>