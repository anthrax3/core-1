 * 
 * 
 * @package Library
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 * A wrapper class for accessing the file system
 * 
 * The class handles file operations, either directly via the PHP functions or
 * through an FTP connection. The latter is a workaround for insufficient file
 * permissions when the PHP process runs under a different user than the file
 * owner (referred to as "Safe Mode Hack").
 * 
 * Usage:
 * 
 *     $files = Files::getInstance();
 * 
 *     $files->mkdir('test');
 * 
 *     $files->fopen('test/one.txt', 'wb');
 *     $files->fputs('My test');
 *     $files->fclose();
 * 
 *     $files->rrdir('test');
 * 
 * @package   Library
 * @author    Leo Feyer <https://github.com/leofeyer>
 * @copyright Leo Feyer 2011-2012
	 * Object instance (Singleton)
	 * @var \Files
	 * Instantiate the object (Factory)
	 * 
	 * @return \Files The files object
				self::$objInstance = new \Files_Ftp();
			elseif ($GLOBALS['TL_CONFIG']['useSmhExtended'] && in_array('smhextended', \Config::getInstance()->getActiveModules()))
				self::$objInstance = new \Files_Php();
	 * 
	 * @param string $strDirectory The directory name
	 * 
	 * @return boolean True if the operation was successful
	 * 
	 * @param string $strDirectory The directory name
	 * 
	 * @return boolean True if the operation was successful
	 * 
	 * @param string  $strFolder       The directory name
	 * @param boolean $blnPreserveRoot If true, the root folder will not be removed
	 * 
	 * @param string $strFile The file name
	 * @param string $strMode The operation mode
	 * 
	 * @return resource The file handle
	 * 
	 * @param resource $resFile    The file handle
	 * @param string   $strContent The content to store in the file
	 * 
	 * @return boolean True if the operation was successful
	 * Close a file handle
	 * 
	 * @param resource $resFile The file handle
	 * 
	 * @return boolean True if the operation was successful
	 * 
	 * @param string $strOldName The old name
	 * @param string $strNewName The new name
	 * 
	 * @return boolean True if the operation was successful
	 * 
	 * @param string $strSource      The source file or folder
	 * @param string $strDestination The new file or folder path
	 * 
	 * @return boolean True if the operation was successful
	 * 
	 * @param string $strFile The file name
	 * 
	 * @return boolean True if the operation was successful
	 * Change the file mode
	 * 
	 * @param string $strFile The file name
	 * @param mixed  $varMode The new file mode
	 * 
	 * @return boolean True if the operation was successful
	 * 
	 * @param string $strFile The file name
	 * 
	 * @return boolean True if the file is writeable
	 * Move an uploaded file to a folder
	 * 
	 * @param string $strSource      The source file
	 * @param string $strDestination The new file path
	 * 
	 * @return boolean True if the operation was successful
	 * Validate a path (must not contain ../ fragments)
	 * 
				throw new \Exception('Invalid file or folder name ' . $strPath);