<?php
	class templatr {

		//Public variables
		public $params, $basePath, $currentTemplate, $currentURI; 

		public $templateFormat;

		/*
		* The constructor for the class, does some stuff that needs to be outputted
		*/

		function __construct($templateDirectory, $templateFormat=".php", $basePath=""){

			$this->basePath = $basePath;
			//Set up the template directory
			$this->templateDirectory = $templateDirectory;
			
			$this->templateFormat = $templateFormat;

			//Get us some pretty URL's
			$this->templatrPrettyUrls();
		}	

		/*
		* Function: This renders the page, will automagically add in the header/footer templates if they are set.
		*/

		function render($template = "default"){
			//Include the header file
			if(file_exists($this->templateDirectory.'header'.$this->templateFormat)){
				include($this->templateDirectory.'header'.$this->templateFormat);
			}
			//Include the template folder page required
			if($template == "default"){
				include($this->templateDirectory.$this->currentTemplate.$this->templateFormat); 
			} else {
				include($this->templateDirectory.'/'.$template.$this->templateFormat);
			}
			
			//Include the footer file
			if(file_exists($this->templateDirectory.'footer'.$this->templateFormat)){
				include($this->templateDirectory.'footer'.$this->templateFormat);
			}
		}

		/*
		* Function escapes dirty strings
		*/

		function escape($string){
			return htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
		}

		/*
		* This function parses the pretty URL's
		* TODO Add in functionality for post variables
		*/

		function templatrPrettyUrls(){
			//Grab the current URI removing the unwanted URI
			$request  = str_replace("$this->basePath", "", $_SERVER['REQUEST_URI']);
			//Remove any GET strings
			$request = strtok($request, '?');

			//TODO document this
			$this->currentURI = $request;
			$this->params     = explode("/", $request);  
			$this->currentTemplate = $request;
		}

		/*
		* This function returns the current URI of the page
		*/

		function getURI(){
			return $this->currentURI;
		}

		/*
		* This function sets the format of the templates your are using
		* Can use '.tpl', '.php'
		*/
		function setTemplateFormat($format){
			$this->templateFormat = $format;
		}

	}

?>