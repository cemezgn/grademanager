<?php

$DBUSER="cem_dbuser";
$DBPASSWD="123456";
$DATABASE="cem_gau";

$filename = "backup-" . date("d-m-Y") . ".sql.gz";
$mime = "application/x-gzip";

header( "Content-Type: " . $mime );
header( 'Content-Disposition: attachment; filename="' . $filename . '"' );

$cmd = "mysqldump -u $DBUSER --password=$DBPASSWD $DATABASE | gzip --best";

passthru( $cmd );

exit(0);
?>