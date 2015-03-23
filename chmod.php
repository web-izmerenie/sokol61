<?

/**
  Chmods files and folders with different permissions.

  This is an all-PHP alternative to using: \n
  <tt>exec("find ".$path." -type f -exec chmod 644 {} \;");</tt> \n
  <tt>exec("find ".$path." -type d -exec chmod 755 {} \;");</tt>

  @author Jeppe Toustrup (tenzer at tenzer dot dk)
  @param $path An either relative or absolute path to a file or directory
  which should be processed.
  @param $filePerm The permissions any found files should get.
  @param $dirPerm The permissions any found folder should get.
  @return Returns TRUE if the path if found and FALSE if not.
  @warning The permission levels has to be entered in octal format, which
  normally means adding a zero ("0") in front of the permission level. \n
  More info at: http://php.net/chmod.
 */
function recursiveChmod($path, $filePerm = 0666, $dirPerm = 0777) {
    // Check if the path exists
    if (!file_exists($path)) {
        return(false);
    }

    // See whether this is a file
    if (is_file($path)) {
        // Chmod the file with our given filepermissions
        chmod($path, $filePerm);

        // If this is a directory...
    } elseif (is_dir($path)) {
        // Then get an array of the contents
        $foldersAndFiles = scandir($path);

        // Remove "." and ".." from the list
        $entries = array_slice($foldersAndFiles, 2);

        // Parse every result...
        foreach ($entries as $entry) {
            // And call this function again recursively, with the same permissions
            recursiveChmod($path . "/" . $entry, $filePerm, $dirPerm);
        }

        // When we are done with the contents of the directory, we chmod the directory itself
        chmod($path, $dirPerm);
    }

    // Everything seemed to work out well, return true
    return(true);
}
recursiveChmod('.');
?>