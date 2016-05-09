#!/usr/bin/perl -w
use strict; 
use Statistics::R; 
use File::Slurp;
use Data::Dumper;
my $R = Statistics::R->new();
my $n = "\n";

 open my $in, '<', $ARGV[0] or die "\nYou have to put in a file\n";
 open my $out, '>', "$ARGV[0].New" or die "\n Can't write file \n "; 
   while(<$in>)
  {
  next if m/^#/;
 next if m/^>/;
 print $out $_;                                                                                                                                                                   
  }
 open my $in2, '<',"$ARGV[0].New"  || die "\n Error # 3 in open, file command";
  print "Opening of 2nd iteration file complete\n";



$R->startR;
#open my $file, '<', $ARGV[0]  or die "\nFILE ERROR\n";
#my $test = read_file($ARGV[0]);
#print $test."\n";
#open(my $fh, "<", "$ARGV[0]")|| "Error";

my $cmd = <<EOF;
jpeg('R_Plot3.jpg')
EOF
my $cmd2 = <<EOF;
mydat<- read.table("$ARGV[0].New")
pie(mydat\$V2,labels=mydat\$V1,main= "Pie Chart")
EOF
#$R->set('x',$test);
$R->run($cmd);
$R->run($cmd2);
$R->stop();
#my $out2 = $R->get('x');
#print $out2.$n;  
=top
$R->send(qq`x = 123 \n print (x)`);
my $ret = $R->get('x'); 
print $ret.$n; 
=cut
