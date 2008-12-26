<?php

/**
(c) Copyright 2008 Hewlett-Packard Development Company, L.P.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/

// Generated by the Gagawa PHP TagBuilder Fri Dec 26 11:11:50 PST 2008

class Form extends FertileNode {

	public function __construct($action){
		parent::__construct("form");
		$this->setAction( $action );
	}

	public function setAction( $value ){ $this->setAttribute( "action", $value ); return $this; }
	public function getAction(){ return $this->getAttribute( "action" ); }
	public function removeAction(){ return $this->removeAttribute( "action" ); }

	public function setAccept( $value ){ $this->setAttribute( "accept", $value ); return $this; }
	public function getAccept(){ return $this->getAttribute( "accept" ); }
	public function removeAccept(){ return $this->removeAttribute( "accept" ); }

	public function setAcceptCharset( $value ){ $this->setAttribute( "accept-charset", $value ); return $this; }
	public function getAcceptCharset(){ return $this->getAttribute( "accept-charset" ); }
	public function removeAcceptCharset(){ return $this->removeAttribute( "accept-charset" ); }

	public function setEnctype( $value ){ $this->setAttribute( "enctype", $value ); return $this; }
	public function getEnctype(){ return $this->getAttribute( "enctype" ); }
	public function removeEnctype(){ return $this->removeAttribute( "enctype" ); }

	public function setMethod( $value ){ $this->setAttribute( "method", $value ); return $this; }
	public function getMethod(){ return $this->getAttribute( "method" ); }
	public function removeMethod(){ return $this->removeAttribute( "method" ); }

	public function setName( $value ){ $this->setAttribute( "name", $value ); return $this; }
	public function getName(){ return $this->getAttribute( "name" ); }
	public function removeName(){ return $this->removeAttribute( "name" ); }

	public function setTarget( $value ){ $this->setAttribute( "target", $value ); return $this; }
	public function getTarget(){ return $this->getAttribute( "target" ); }
	public function removeTarget(){ return $this->removeAttribute( "target" ); }

	public function setId( $value ){ $this->setAttribute( "id", $value ); return $this; }
	public function getId(){ return $this->getAttribute( "id" ); }
	public function removeId(){ return $this->removeAttribute( "id" ); }

	public function setCSSClass( $value ){ $this->setAttribute( "class", $value ); return $this; }
	public function getCSSClass(){ return $this->getAttribute( "class" ); }
	public function removeCSSClass(){ return $this->removeAttribute( "class" ); }

	public function setTitle( $value ){ $this->setAttribute( "title", $value ); return $this; }
	public function getTitle(){ return $this->getAttribute( "title" ); }
	public function removeTitle(){ return $this->removeAttribute( "title" ); }

	public function setStyle( $value ){ $this->setAttribute( "style", $value ); return $this; }
	public function getStyle(){ return $this->getAttribute( "style" ); }
	public function removeStyle(){ return $this->removeAttribute( "style" ); }

	public function setDir( $value ){ $this->setAttribute( "dir", $value ); return $this; }
	public function getDir(){ return $this->getAttribute( "dir" ); }
	public function removeDir(){ return $this->removeAttribute( "dir" ); }

	public function setLang( $value ){ $this->setAttribute( "lang", $value ); return $this; }
	public function getLang(){ return $this->getAttribute( "lang" ); }
	public function removeLang(){ return $this->removeAttribute( "lang" ); }

	public function setXMLLang( $value ){ $this->setAttribute( "xml:lang", $value ); return $this; }
	public function getXMLLang(){ return $this->getAttribute( "xml:lang" ); }
	public function removeXMLLang(){ return $this->removeAttribute( "xml:lang" ); }

}

?>
