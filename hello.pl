  #!/usr/bin/perl
  #
  # The traditional first program.

  # Strict and warnings are recommended.
  use strict;
  use warnings;

  # Print a message.
  print "Hello, World!\n";
  $numFile = rand();
  my $file = $numFile . ".txt";
  unless(open FILE, '>'.$file){
    die"\nUnable to create $file\n";
  }
  
close FILE;