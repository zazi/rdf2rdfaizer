<?php
/*
homepage: http://smiy.org/
license:  http://creativecommons.org/licenses/by/3.0/

author:   Bob Ferris
version:  2011-02-06
*/

include_once("arc2/ARC2.php");

/* extract the RDF document URI */
$rdfdocuri = $_POST['rdfdocuri'];

/* custom namespace prefixes */
$ns = array(
  'foaf' => 'http://xmlns.com/foaf/0.1/',
  'dc' => 'http://purl.org/dc/elements/1.1/',
  'dcterms' => 'http://purl.org/dc/terms/'
);
$conf = array('ns' => $ns);

/* initiate RDFa serializer */
$rdfaserializer = ARC2::getComponent('ARC2_RDFaSerializerPlugin', $conf);

/* initate RDF parser and parse RDF data */
$parser = ARC2::getRDFParser($conf);
$parser->parse($rdfdocuri);
$triples = $parser->getTriples();

/* serialize triples as RDFa */
$rdfadoc = $rdfaserializer->getSerializedTriples($triples);

/* print RDFa serialization data */
echo $rdfadoc;

?>