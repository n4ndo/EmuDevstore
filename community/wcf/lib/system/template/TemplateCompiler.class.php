<?php
// wcf imports
if (!defined('NO_IMPORTS')) {
	require_once(WCF_DIR.'lib/system/io/File.class.php');
	require_once(WCF_DIR.'lib/system/template/TemplateScriptingCompiler.class.php');
}

/**
 * TemplateCompiler compiles template source in valid php code.
 * 
 * @author 	Marcel Werk
 * @copyright	2001-2009 WoltLab GmbH
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	com.woltlab.wcf
 * @subpackage	system.template
 * @category 	Community Framework
 */
class TemplateCompiler extends TemplateScriptingCompiler {
	/**
	 * Compiles the source of a template.
	 * 
	 * @param	string		$templateName
	 * @param	string		$sourceContent
	 * @param	string		$compiledFilename
	 */
	public function compile($templateName, $sourceContent, $compiledFilename) {
		// build fileheader
		$compiledHeader = "<?php\n/**\n* WoltLab Community Framework\n* Template: ".$templateName."\n* Compiled at: ".gmdate('r')."\n* \n* DO NOT EDIT THIS FILE\n*/\n\$this->v['tpl']['template'] = '".addcslashes($templateName, "'\\")."';\n?>\n";
		
		// include Plugins
		$compiledContent = $this->compileString($templateName, $sourceContent);
		
		// write compiled to file
		$file = new File($compiledFilename);
		$file->write($compiledHeader.$compiledContent);
		$file->close();
	}
	
	/**
	 * Returns the name of the current template.
	 * 
	 * @return 	string
	 */
	public function getCurrentTemplate() {
		return $this->getCurrentIdentifier();
	}
}
?>