  #!/usr/bin/perl
  #
  # The traditional first program.

  # Strict and warnings are recommended.
  use strict;
  use warnings;

  # Print a message.
  print "Hello, World!\n";
  my $file = "temp.txt";
  unless(open FILE, '>'.$file){
    die"\nUnable to create $file\n";
  }
  
  print FILE "Hello how ya doin?\n";
  print FILE "doing well, how bout you?\n";
  
close FILE;