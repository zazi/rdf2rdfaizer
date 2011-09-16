RDF2RDFa-izer
=============

About
-----

RDF2RDFa-izer is currently a deadly simple web frontend of the [RDFa Serializer plugin](http://n2.talis.com/svn/playground/kwijibo/PHP/arc/plugins/trunk/ARC2_RDFaSerializerPlugin.php) (written by [Keith Alexander](http://keithalexander.co.uk/)) for [ARC](https://github.com/semsol/arc2), a Semantic Web Framework written in [PHP](http://www.php.net/). Its currently functionality is only to take a [RDF/XML](http://www.w3.org/TR/rdf-syntax-grammar/) document as input and serialize it as [(X)HTML+RDFa](http://www.w3.org/TR/rdfa-syntax/) snippet that can be inserted into a [(X)HTML+RDFa](http://www.w3.org/TR/rdfa-syntax/) document.

Installation
------------

To setup this frontend on your own machine you have to fulfil the requirements of the latest [ARC](https://github.com/semsol/arc2) version. Since [ARC](https://github.com/semsol/arc2) is written in [PHP](http://www.php.net/), you need at least [PHP 5](http://www.php.net/releases/).
RDF2RDFa-izer does currently not make use of the storage interface of [ARC](https://github.com/semsol/arc2); i.e., at the moment you do not require at least [MySQL](http://www.mysql.com/) 4.04 as database backend.<br/>
However, further versions of RDF2RDFa-izer may extend the functionality of the existing [RDFa Serializer plugin](http://n2.talis.com/svn/playground/kwijibo/PHP/arc/plugins/trunk/ARC2_RDFaSerializerPlugin.php), so that a the storage interface of [ARC](https://github.com/semsol/arc2) will be
used. To setup the [RDFa Serializer plugin](http://n2.talis.com/svn/playground/kwijibo/PHP/arc/plugins/trunk/ARC2_RDFaSerializerPlugin.php) in your [ARC](https://github.com/semsol/arc2) installation, you have to create a "plugins" folder at the root of your deployment and put the [plugin](http://n2.talis.com/svn/playground/kwijibo/PHP/arc/plugins/trunk/ARC2_RDFaSerializerPlugin.php)
into that folder. You may also have to adapt the path to your [ARC](https://github.com/semsol/arc2) installation in the header of '[rdfaparser.php](https://github.com/zazi/rdf2rdfaizer/blob/master/rdfaparser.php)'. A manual of [ARC](https://github.com/semsol/arc2) can be found at the [ARC wiki](https://github.com/semsol/arc2/wiki).
Further extensions of the existing [RDFa Serializer plugin](http://n2.talis.com/svn/playground/kwijibo/PHP/arc/plugins/trunk/ARC2_RDFaSerializerPlugin.php) for [ARC](https://github.com/semsol/arc2) are imaginable. Some ideas are:

* title/label (/comment/description) extraction of the [RDF](http://www.w3.org/TR/rdf-primer/) terms for a better readability
* templates that are applied when the instance data is typed with a specific universal e.g., [foaf:PersonalProfileDocument](http://xmlns.com/foaf/spec/#term_PersonalProfileDocument)

Feel free to contribute to this project.


(c) Bo Ferri, [SMI](http://smiy.org/), 2011
