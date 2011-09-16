RDF2RDFa-izer
=============

About
-----

RDF2RDFa-izer is currently a deadly simple web frontend of the [RDFa Serializer plugin](http://n2.talis.com/svn/playground/kwijibo/PHP/arc/plugins/trunk/ARC2_RDFaSerializerPlugin.php) (written by [Keith Alexander](http://keithalexander.co.uk/)) for [ARC](https://github.com/semsol/arc2), a Semantic Web Framework written in PHP. Its currently functionality is only to take a RDF/XML document as input and serialize it as (X)HTML+RDFa snippet that can be inserted into a (X)HTML+RDFa document.

Installation
------------

To setup this frontend on your own machine you have to fulfil the requirements of the latest ARC version. Since ARC is written in PHP, you need at least PHP 5.
RDF2RDFa-izer does currently not make use of the storage interface of ARC; i.e., at the moment you do not require at least MySQL 4.04 as database backend.<br/>
However, further versions of RDF2RDFa-izer may extend the functionality of the existing RDFa Serializer plugin, so that a the storage interface of ARC will be
used. To setup the RDFa Serializer plugin in your ARC installation, you have to create a "plugins" folder at the root of your deployment and put the plugin[1]
into that folder. You may also have to adapt the path to your ARC installation in the header of 'rdfaparser.php'. A manual of ARC can be found at the [ARC wiki](https://github.com/semsol/arc2/wiki).
Further extensions of the existing RDFa Serializer plugin for ARC are imaginable. Some ideas are:
* title/label (/comment/description) extraction of the RDF terms for a better readability
* templates that are applied when the instance data is typed with a specific universal e.g., foaf:PersonalProfileDocument

Feel free to contribute to this project.


(c) Bo Ferri, [SMI](http://smiy.org/), 2011
