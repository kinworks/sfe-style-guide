<?php 
  //APPROACH 1
  
  // Get the current branch from Git

  /*  $stringfromfile = file('.git/HEAD', FILE_USE_INCLUDE_PATH);

    $firstLine = $stringfromfile[0]; //get the string from the array

    $explodedstring = explode("/", $firstLine, 3); //seperate out by the "/" in the string

    $branchname = $explodedstring[2]; //get the one that is always the branch name */

  
 // APPROACH 2
 /* $tags = `git describe --tags`;
  
  $parts = explode("-",$tags); 
  //break the string up around the "/" character in $mystring 
  
  $tagname = $parts['0']; 
  //grab the first part */
  

  // APPROACH 3
  /*
  $tags = `git tag`;
  
  $parts = preg_split('/\s+/', $tags); 
  //break the string up around the "/" character in $mystring 
  
  $latestfirst = array_reverse($parts);
  
  $tagname = $latestfirst['1']; 
  //grab the first part 
  */
  
  
  // APPROACH 4 - for local VMs too!
  
  //list the tags found in .git
  $tags = scandir('../../.git/refs/tags', 1);
  
  // skip . and .. items listed first in our directory!
  $byetags = array_pop($tags);
  $byetags = array_pop($tags);
  
  $latest = 0;
  $tagname = '';
  
  foreach($tags as $tag) {
    $modtime = filemtime('../../.git/refs/tags/'.$tag);
    if ($modtime > $latest) {$tagname = $tag; $latest = $modtime;}
  }
  
  //$latestfirst = array_reverse($tags);
  
  //$tagname = $tags['0']; 
  //grab the first part 

?>
