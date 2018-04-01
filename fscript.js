function  eval()
{
  var a = document.getElementById("i1").value;
  var b = document.getElementById("i2").value;
  if(a!="" && b!="")
  {

 var count = a.length + b.length;
   for(var i=0;i<a.length;i++)
   {
     for(var j=0;j<b.length;j++)
     {
      if(a.charAt(i)==b.charAt(j))
      {
           count=count-2;
           b = b.slice(0,j) + b.slice(j+1,b.length);
           break;
      }
     }
   }

   var s = "flames";
   var p=0;
   var i=1;
  count--;

while(s.length!=1)
{
     p=p + count;
    p=(p)%(s.length);

    if(s.length ==p)
    {
      s=s.slice(0,p-1);
    }
    else {
         s = s.slice(0,p) + s.slice(p+1,s.length);
    }



     if(p<0)
     {
       p=s.length-1;
     }
     i++;
   }
      if(s=="f")
   {
     document.getElementById("demo").innerHTML="Friend";
   }
else   if(s=="l")
   {
     document.getElementById("demo").innerHTML="Lover";
   }
else   if(s=="a")
   {
     document.getElementById("demo").innerHTML="Affection";
   }
  else if(s=="m")
   {
     document.getElementById("demo").innerHTML="Marriage";
   }
else   if(s=="e")
   {
     document.getElementById("demo").innerHTML="Enemy";
   }
else  if(s=="s")
  {
    document.getElementById("demo").innerHTML="Sister";
  }
}
else
{
   document.getElementById("demo").innerHTML="Write Properly!";
}

}
